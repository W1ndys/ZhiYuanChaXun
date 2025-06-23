import json
import os
from typing import Dict, List, Optional, Any


class ScoreRankMatcher:
    def __init__(self, yifenyiduan_dir: str, qfnu_data_dir: str):
        """
        初始化分数位次匹配器

        Args:
            yifenyiduan_dir: 一分一段数据目录路径
            qfnu_data_dir: 曲师大录取数据目录路径
        """
        self.yifenyiduan_dir = yifenyiduan_dir
        self.qfnu_data_dir = qfnu_data_dir
        self.yifenyiduan_cache = {}  # 缓存一分一段数据

    def load_yifenyiduan_data(self, province: str) -> Optional[Dict]:
        """
        加载指定省份的一分一段数据

        Args:
            province: 省份名称

        Returns:
            一分一段数据字典，如果文件不存在返回None
        """
        if province in self.yifenyiduan_cache:
            return self.yifenyiduan_cache[province]

        file_path = os.path.join(self.yifenyiduan_dir, f"{province}.json")
        if not os.path.exists(file_path):
            print(f"警告: 找不到省份 {province} 的一分一段数据文件")
            return None

        try:
            with open(file_path, "r", encoding="utf-8") as f:
                data = json.load(f)
                self.yifenyiduan_cache[province] = data
                return data
        except Exception as e:
            print(f"错误: 读取 {province} 一分一段数据失败: {e}")
            return None

    def find_rank_by_score(
        self, province: str, year: str, category: str, score: int
    ) -> Optional[str]:
        """
        根据分数查找对应的位次

        Args:
            province: 省份
            year: 年份
            category: 科类
            score: 分数

        Returns:
            位次字符串，如果找不到返回None
        """
        yifenyiduan_data = self.load_yifenyiduan_data(province)
        if not yifenyiduan_data:
            return None

        # 查找匹配的年份和科类数据
        target_data = None
        for item in yifenyiduan_data:
            if item.get("year") == year and item.get("category") == category:
                target_data = item
                break

        if not target_data:
            print(f"警告: 在 {province} 找不到 {year}年 {category} 科类的数据")
            return None

        # 在segments中查找分数对应的位次
        segments = target_data.get("segments", [])
        for segment in segments:
            min_score = segment.get("min", 0)
            max_score = segment.get("max", 999)

            if min_score <= score <= max_score:
                info_list = segment.get("info", [])
                for info in info_list:
                    if int(info.get("maxScore", "0")) == score:
                        return info.get("minOrder", "")

        return None

    def add_rank_to_record(self, record: Dict, province: str, year: str) -> Dict:
        """
        为单条录取记录添加位次信息

        Args:
            record: 录取记录字典
            province: 省份
            year: 年份

        Returns:
            添加了位次信息的记录
        """
        # 获取科类信息，需要处理科类名称的映射
        category = record.get("科类", "")

        # 为各个分数字段添加位次
        score_fields = ["最低分", "平均分", "最高分"]
        for field in score_fields:
            if field in record and record[field] is not None:
                try:
                    score = int(record[field])
                    rank = self.find_rank_by_score(province, year, category, score)
                    if rank:
                        record[f"{field}位次"] = rank
                except (ValueError, TypeError):
                    record[f"{field}位次"] = "分数格式错误"

        return record

    def process_province_data(self, province: str) -> bool:
        """
        处理指定省份的录取数据，添加位次信息

        Args:
            province: 省份名称

        Returns:
            处理是否成功
        """
        input_file = os.path.join(self.qfnu_data_dir, f"{province}.json")
        if not os.path.exists(input_file):
            print(f"警告: 找不到 {province} 的录取数据文件")
            return False

        try:
            # 读取录取数据
            with open(input_file, "r", encoding="utf-8") as f:
                data = json.load(f)

            year = data.get("年份", "2024")
            data_list = data.get("数据", [])

            processed_count = 0
            # 处理每个数据块
            for data_block in data_list:
                # 检查查询条件中的招生类型
                query_condition = data_block.get("查询条件", {})
                enrollment_type = query_condition.get("招生类型", "")

                # 只处理普通类的数据
                if enrollment_type != "普通类":
                    continue

                processed_count += 1
                print(f"  正在处理普通类数据块...")

                # 处理省份录取信息
                province_info = data_block.get("省份录取信息", [])
                for record in province_info:
                    if record.get("招生类型") == "普通类":
                        self.add_rank_to_record(record, province, year)

                # 处理专业录取信息
                major_info = data_block.get("专业录取信息", [])
                for record in major_info:
                    if record.get("招生类型") == "普通类":
                        self.add_rank_to_record(record, province, year)

            # 保存更新后的数据
            with open(input_file, "w", encoding="utf-8") as f:
                json.dump(data, f, ensure_ascii=False, indent=2)

            if processed_count > 0:
                print(
                    f"成功处理 {province} 的数据 (处理了 {processed_count} 个普通类数据块)"
                )
                return True
            else:
                print(f"警告: {province} 没有找到普通类数据")
                return False

        except Exception as e:
            print(f"错误: 处理 {province} 数据时发生错误: {e}")
            return False

    def process_all_provinces(self):
        """
        处理所有省份的录取数据
        """
        # 获取所有录取数据文件
        if not os.path.exists(self.qfnu_data_dir):
            print(f"错误: 录取数据目录不存在: {self.qfnu_data_dir}")
            return

        files = [f for f in os.listdir(self.qfnu_data_dir) if f.endswith(".json")]
        provinces = [f.replace(".json", "") for f in files]

        print(f"找到 {len(provinces)} 个省份的录取数据")

        success_count = 0
        for province in provinces:
            print(f"正在处理: {province}")
            if self.process_province_data(province):
                success_count += 1

        print(f"\n处理完成! 成功处理 {success_count}/{len(provinces)} 个省份")


def main():
    """
    主函数
    """
    # 定义目录路径
    base_dir = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
    yifenyiduan_dir = os.path.join(base_dir, "QFNU_data", "一分一段数据")
    qfnu_data_dir = os.path.join(
        base_dir, "QFNU_data", "曲师大招生办2024年分省专业录取数据"
    )

    print("=== 曲师大录取数据位次匹配工具 ===")
    print(f"一分一段数据目录: {yifenyiduan_dir}")
    print(f"录取数据目录: {qfnu_data_dir}")

    # 检查目录是否存在
    if not os.path.exists(yifenyiduan_dir):
        print(f"错误: 一分一段数据目录不存在: {yifenyiduan_dir}")
        return

    if not os.path.exists(qfnu_data_dir):
        print(f"错误: 录取数据目录不存在: {qfnu_data_dir}")
        return

    # 创建匹配器并开始处理
    matcher = ScoreRankMatcher(yifenyiduan_dir, qfnu_data_dir)
    matcher.process_all_provinces()


if __name__ == "__main__":
    main()
