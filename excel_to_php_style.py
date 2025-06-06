import pandas as pd
import os
from datetime import datetime


def process_excel():
    # 读取Excel文件，假设文件名为data.xlsx，表格为Sheet1
    try:
        df = pd.read_excel("山西分数线+一分一段表.xlsx", sheet_name="Sheet1")
    except Exception as e:
        print(f"读取Excel失败: {e}")
        return

    # 创建输出目录
    output_dir = "output"
    os.makedirs(output_dir, exist_ok=True)

    # 创建输出文件名，使用当前时间
    current_time = datetime.now().strftime("%Y%m%d_%H%M%S")
    output_file = os.path.join(output_dir, f"php_array_{current_time}.txt")

    # 将数据按省市、科类和专业组织
    hierarchy = {}

    # 用于存储科类别的最高和最低位次
    category_stats = {}

    # 遍历数据框
    for idx, row in df.iterrows():
        province = str(row["省市"])
        category = str(row["科类"])
        major = str(row["专业"]).replace("'", "\\'")

        # 提取数据，处理异常情况
        try:
            num = int(row["计划数"]) if not pd.isnull(row["计划数"]) else 0
        except Exception:
            num = 0
        try:
            max_score = float(row["最高分"]) if not pd.isnull(row["最高分"]) else 0
        except Exception:
            max_score = 0
        try:
            min_score = float(row["最低分"]) if not pd.isnull(row["最低分"]) else 0
        except Exception:
            min_score = 0
        try:
            avg_score = float(row["平均分"]) if not pd.isnull(row["平均分"]) else 0
        except Exception:
            avg_score = 0
        try:
            max_rank = int(row["最高分位次"]) if not pd.isnull(row["最高分位次"]) else 0
        except Exception:
            max_rank = 0
        try:
            min_rank = int(row["最低分位次"]) if not pd.isnull(row["最低分位次"]) else 0
        except Exception:
            min_rank = 0

        # 添加到层次结构
        if province not in hierarchy:
            hierarchy[province] = {}

        if category not in hierarchy[province]:
            hierarchy[province][category] = {}

        hierarchy[province][category][major] = {
            "Num": num,
            "MaxScore": int(max_score),
            "MinScore": int(min_score),
            "AvgScore": "%.2f" % avg_score,
            "MaxRank": max_rank,
            "MinRank": min_rank,
        }

        # 更新科类统计
        key = f"{province}_{category}"
        if key not in category_stats:
            category_stats[key] = {
                "province": province,
                "category": category,
                "highest_rank": float("inf"),
                "lowest_rank": 0,
            }

        if min_rank > 0 and min_rank < category_stats[key]["highest_rank"]:
            category_stats[key]["highest_rank"] = min_rank

        if max_rank > category_stats[key]["lowest_rank"]:
            category_stats[key]["lowest_rank"] = max_rank

    # 写入PHP数组格式到文件
    with open(output_file, "w", encoding="utf-8") as f:
        for province, categories in hierarchy.items():
            f.write(f" '{province}' => array(\n")

            for category, majors in categories.items():
                f.write(f"        '{category}' => array(\n")

                for major, data in majors.items():
                    f.write(
                        f"            '{major}' => array('Num' => {data['Num']}, "
                        f"'MaxScore' => {data['MaxScore']}, "
                        f"'MinScore' => {data['MinScore']}, "
                        f"'AvgScore' => {data['AvgScore']}, "
                        f"'MaxRank' => {data['MaxRank']}, "
                        f"'MinRank' => {data['MinRank']}),\n"
                    )

                f.write("        ),\n")

            f.write("    ),\n")

    print(f"处理完成，结果已保存到: {output_file}")

    # 生成科类统计报告
    stats_file = os.path.join(output_dir, f"category_stats_{current_time}.txt")
    with open(stats_file, "w", encoding="utf-8") as f:
        f.write("省市,科类,最高位次,最低位次\n")
        for key, stats in sorted(category_stats.items()):
            province = stats["province"]
            category = stats["category"]
            highest = (
                stats["highest_rank"]
                if stats["highest_rank"] != float("inf")
                else "无数据"
            )
            lowest = stats["lowest_rank"] if stats["lowest_rank"] > 0 else "无数据"
            f.write(f"{province},{category},{highest},{lowest}\n")

    print(f"科类统计报告已保存到: {stats_file}")


if __name__ == "__main__":
    process_excel()
