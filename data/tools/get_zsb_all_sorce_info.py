import json
import os
import time
from data.tools.get_lnfs import QfnuAdmissionsClient


class BatchDataCollector:
    """
    批量获取曲阜师范大学2024年各省份专业录取数据的收集器
    """

    def __init__(
        self,
        provinces_json_path: str,
        output_dir: str = os.path.join(
            os.path.dirname(__file__), "output", "2024年分省专业数据"
        ),
    ):
        self.provinces_json_path = provinces_json_path
        self.output_dir = output_dir
        self.client = None

        # 确保输出目录存在
        os.makedirs(self.output_dir, exist_ok=True)

        # 加载省份数据
        self.provinces_data = self._load_provinces_data()

    def _load_provinces_data(self):
        """加载省份列表JSON文件"""
        try:
            with open(self.provinces_json_path, "r", encoding="utf-8") as f:
                data = json.load(f)
            return data.get("data", {}).get("ssmc_nf_zslx_sex_campus_klmc_Map", {})
        except Exception as e:
            print(f"加载省份数据失败: {e}")
            return {}

    def _get_2024_province_data(self):
        """提取2024年的省份数据"""
        result = {}

        for province, records in self.provinces_data.items():
            # 筛选2024年的数据
            records_2024 = [r for r in records if r.get("nf") == "2024"]
            if records_2024:
                result[province] = records_2024

        return result

    def collect_all_provinces(self):
        """收集所有省份的2024年数据"""
        provinces_2024 = self._get_2024_province_data()

        print(f"找到{len(provinces_2024)}个省份有2024年数据")

        # 初始化客户端
        try:
            self.client = QfnuAdmissionsClient()
        except Exception as e:
            print(f"初始化客户端失败: {e}")
            return

        success_count = 0
        failed_provinces = []

        for province, records in provinces_2024.items():
            print(f"\n正在处理省份: {province}")
            try:
                province_data = self._collect_province_data(province, records)
                if province_data:
                    self._save_province_data(province, province_data)
                    success_count += 1
                    print(f"✅ {province} 数据收集完成")
                else:
                    failed_provinces.append(province)
                    print(f"❌ {province} 数据收集失败")

            except Exception as e:
                print(f"❌ 处理{province}时发生错误: {e}")
                failed_provinces.append(province)

        print(f"\n数据收集完成!")
        print(f"成功: {success_count}个省份")
        print(f"失败: {len(failed_provinces)}个省份")
        if failed_provinces:
            print(f"失败的省份: {', '.join(failed_provinces)}")

    def _collect_province_data(self, province: str, records: list):
        """收集单个省份的所有2024年数据"""
        province_all_data = {"省份": province, "年份": "2024", "数据": []}

        for record in records:
            klmc = record.get("klmc", "")
            zslx = record.get("zslx", "")

            print(f"  正在获取: {province} - {klmc} - {zslx}")

            try:
                # 重新初始化客户端确保会话有效
                if not self.client:
                    self.client = QfnuAdmissionsClient()

                data = self.client.get_admission_data(
                    province=province,
                    year="2024",
                    subject_category=klmc,
                    admission_type=zslx,
                )

                if data:
                    # 添加查询条件信息
                    data["查询条件"] = {
                        "省份": province,
                        "年份": "2024",
                        "科类": klmc,
                        "招生类型": zslx,
                    }
                    province_all_data["数据"].append(data)
                    print(f"    ✅ 成功获取数据")
                else:
                    print(f"    ❌ 未获取到数据")

                # 添加请求间隔
                time.sleep(1)

            except Exception as e:
                print(f"    ❌ 获取数据时发生错误: {e}")
                # 重新初始化客户端
                try:
                    self.client = QfnuAdmissionsClient()
                except:
                    pass

        return province_all_data if province_all_data["数据"] else None

    def _save_province_data(self, province: str, data: dict):
        """保存省份数据到文件"""
        filename = f"{province}_2024年专业录取数据.json"
        filepath = os.path.join(self.output_dir, filename)

        try:
            with open(filepath, "w", encoding="utf-8") as f:
                json.dump(data, f, ensure_ascii=False, indent=2)
            print(f"    💾 数据已保存到: {filepath}")
        except Exception as e:
            print(f"    ❌ 保存数据失败: {e}")

    def collect_specific_provinces(self, target_provinces: list):
        """收集指定省份的数据"""
        provinces_2024 = self._get_2024_province_data()

        # 筛选目标省份
        filtered_provinces = {
            p: records for p, records in provinces_2024.items() if p in target_provinces
        }

        if not filtered_provinces:
            print("未找到指定省份的2024年数据")
            return

        print(f"找到{len(filtered_provinces)}个目标省份有2024年数据")

        # 初始化客户端
        try:
            self.client = QfnuAdmissionsClient()
        except Exception as e:
            print(f"初始化客户端失败: {e}")
            return

        for province, records in filtered_provinces.items():
            print(f"\n正在处理省份: {province}")
            try:
                province_data = self._collect_province_data(province, records)
                if province_data:
                    self._save_province_data(province, province_data)
                    print(f"✅ {province} 数据收集完成")
                else:
                    print(f"❌ {province} 数据收集失败")

                time.sleep(2)

            except Exception as e:
                print(f"❌ 处理{province}时发生错误: {e}")


if __name__ == "__main__":
    # 使用示例
    collector = BatchDataCollector(
        os.path.join(os.path.dirname(__file__), "..", "QFNU_data", "省份列表.json")
    )

    # 选择运行模式
    print("请选择运行模式:")
    print("1. 收集所有省份数据")
    print("2. 收集指定省份数据")

    choice = input("请输入选择 (1/2): ").strip()

    if choice == "1":
        collector.collect_all_provinces()
    elif choice == "2":
        provinces_input = input(
            "请输入省份名称，用逗号分隔 (如: 山东,河北,湖北): "
        ).strip()
        target_provinces = [p.strip() for p in provinces_input.split(",") if p.strip()]
        if target_provinces:
            collector.collect_specific_provinces(target_provinces)
        else:
            print("未输入有效的省份名称")
    else:
        print("无效选择")
