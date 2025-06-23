import json
import os
from pathlib import Path


def load_json_file(file_path):
    """加载JSON文件"""
    try:
        with open(file_path, "r", encoding="utf-8") as f:
            data = json.load(f)
            print(f"  成功加载文件: {file_path}")
            return data
    except Exception as e:
        print(f"  加载文件 {file_path} 失败: {e}")
        return None


def process_province_data(province_name, 录取数据_path, 招生计划_path):
    """处理单个省份的数据"""
    print(f"  开始处理录取数据: {录取数据_path}")

    # 加载2024年录取数据
    录取数据 = load_json_file(录取数据_path)
    if not 录取数据:
        print(f"  录取数据加载失败")
        return None, None, None

    print(f"  录取数据结构: {list(录取数据.keys())}")

    # 加载2025年招生计划
    招生计划 = None
    if 招生计划_path.exists():
        print(f"  开始处理招生计划: {招生计划_path}")
        招生计划 = load_json_file(招生计划_path)
    else:
        print(f"  招生计划文件不存在: {招生计划_path}")

    # 存储结果
    area_types = []
    area_scores = {}
    subjects = {}

    # 检查数据结构
    数据列表 = 录取数据.get("数据", [])
    print(f"  数据列表长度: {len(数据列表)}")

    # 处理录取数据
    for i, data_group in enumerate(数据列表):
        print(f"  处理数据组 {i+1}:")

        查询条件 = data_group.get("查询条件", {})
        print(f"    查询条件: {查询条件}")

        科类 = 查询条件.get("科类", "")
        招生类型 = 查询条件.get("招生类型", "")

        print(f"    科类: '{科类}', 招生类型: '{招生类型}'")

        # 只处理普通类招生类型
        if 招生类型 != "普通类":
            print(f"    跳过非普通类: {招生类型}")
            continue

        print(f"    处理普通类数据，科类: {科类}")

        # 收集科类类型
        if 科类 not in area_types:
            area_types.append(科类)
            print(f"    添加科类: {科类}")

        # 处理省份录取信息（用于计算AreaScore）
        省份录取信息 = data_group.get("省份录取信息", [])
        print(f"    省份录取信息数量: {len(省份录取信息)}")

        if 省份录取信息:
            录取信息 = 省份录取信息[0]
            最低分位次 = 录取信息.get("最低分位次")
            最高分位次 = 录取信息.get("最高分位次")

            print(f"    位次范围: {最高分位次} - {最低分位次}")

            if 最低分位次 and 最高分位次:
                try:
                    最低分位次 = int(最低分位次)
                    最高分位次 = int(最高分位次)

                    if 科类 not in area_scores:
                        area_scores[科类] = [最高分位次, 最低分位次]
                        print(f"    初始化 {科类} 位次: [{最高分位次}, {最低分位次}]")
                    else:
                        # 更新最高位次（数字更小）和最低位次（数字更大）
                        old_scores = area_scores[科类].copy()
                        area_scores[科类][0] = min(area_scores[科类][0], 最高分位次)
                        area_scores[科类][1] = max(area_scores[科类][1], 最低分位次)
                        print(
                            f"    更新 {科类} 位次: {old_scores} -> {area_scores[科类]}"
                        )
                except ValueError as e:
                    print(f"    位次转换错误: {e}")

        # 处理专业录取信息
        专业录取信息 = data_group.get("专业录取信息", [])
        print(f"    专业录取信息数量: {len(专业录取信息)}")

        if 科类 not in subjects:
            subjects[科类] = {}

        for j, 专业 in enumerate(专业录取信息):
            专业名称 = 专业.get("专业名称", "")
            录取人数 = 专业.get("录取人数", 0)
            最低分 = 专业.get("最低分")
            平均分 = 专业.get("平均分")
            最高分 = 专业.get("最高分")
            最低分位次 = 专业.get("最低分位次")
            最高分位次 = 专业.get("最高分位次")

            print(f"      专业 {j+1}: {专业名称}, 录取人数: {录取人数}")

            # 从招生计划中获取2025年计划数（如果有的话）
            计划人数 = 录取人数  # 默认使用2024年录取人数
            if 招生计划:
                for plan_group in 招生计划.get("数据", []):
                    plan_查询条件 = plan_group.get("查询条件", {})
                    if plan_查询条件.get("科类") == 科类:
                        for plan_专业 in plan_group.get("专业招生计划", []):
                            if plan_专业.get("专业名称") == 专业名称:
                                计划人数 = plan_专业.get("计划数", 录取人数)
                                print(f"        找到2025年计划数: {计划人数}")
                                break

            # 转换数据类型
            try:
                if 最低分位次:
                    最低分位次 = int(最低分位次)
                if 最高分位次:
                    最高分位次 = int(最高分位次)
                if 最低分:
                    最低分 = float(最低分)
                if 最高分:
                    最高分 = float(最高分)
                if 平均分:
                    平均分 = float(平均分)

                subjects[科类][专业名称] = {
                    "Num": 计划人数,
                    "MaxScore": 最高分,
                    "MinScore": 最低分,
                    "AvgScore": 平均分,
                    "MaxRank": 最高分位次,
                    "MinRank": 最低分位次,
                }
                print(f"        添加专业数据: {专业名称}")
            except (ValueError, TypeError) as e:
                print(f"        数据转换错误: {e}")
                continue

    print(
        f"  处理完成 - 科类: {area_types}, 专业总数: {sum(len(subjects[k]) for k in subjects)}"
    )
    return area_types, area_scores, subjects


def generate_php_code(all_data):
    """生成PHP代码"""
    php_code = ["<?php", "return ["]

    # 生成AreaType部分
    php_code.append("    'AreaType' => array(")
    for province, data in all_data.items():
        if data["area_types"]:
            types_str = "', '".join(data["area_types"])
            php_code.append(f"        '{province}' => array('{types_str}'),")
    php_code.append("        // 可继续扩展")
    php_code.append("    ),")

    # 生成AreaScore部分
    php_code.append("    'AreaScore' => array(")
    for province, data in all_data.items():
        if data["area_scores"]:
            score_parts = []
            for type_name, scores in data["area_scores"].items():
                score_parts.append(f"'{type_name}' => array({scores[0]}, {scores[1]})")
            if score_parts:
                php_code.append(
                    f"        '{province}' => array({', '.join(score_parts)}),"
                )
    php_code.append("        // 可继续扩展")
    php_code.append("    ),")

    # 生成Subject部分
    php_code.append("    'Subject' => array(")
    for province, data in all_data.items():
        if data["subjects"]:
            php_code.append(f"        '{province}' => array(")
            for type_name, subjects in data["subjects"].items():
                if subjects:
                    php_code.append(f"            '{type_name}' => array(")
                    for subject_name, subject_data in subjects.items():
                        values = []
                        for key, value in subject_data.items():
                            if value is not None:
                                if isinstance(value, (int, float)):
                                    values.append(f"'{key}' => {value}")
                                else:
                                    values.append(f"'{key}' => '{value}'")
                        if values:
                            php_code.append(
                                f"                '{subject_name}' => array({', '.join(values)}),"
                            )
                    php_code.append("            ),")
            php_code.append("        ),")
    php_code.append("        // 可继续扩展")
    php_code.append("    ),")

    php_code.append("];")
    return "\n".join(php_code)


def main():
    """主函数"""
    # 数据目录路径
    录取数据_dir = Path("../../data/QFNU_data/曲师大2024年分省专业录取数据")
    招生计划_dir = Path("../../data/QFNU_data/曲师大2025招生计划")

    print(f"录取数据目录: {录取数据_dir}")
    print(f"招生计划目录: {招生计划_dir}")
    print(f"录取数据目录存在: {录取数据_dir.exists()}")
    print(f"招生计划目录存在: {招生计划_dir.exists()}")

    if not 录取数据_dir.exists():
        print("录取数据目录不存在!")
        return

    all_data = {}

    # 遍历所有省份文件
    json_files = list(录取数据_dir.glob("*.json"))
    print(f"找到 {len(json_files)} 个JSON文件")

    for 录取文件 in json_files:
        province_name = 录取文件.stem  # 获取不带扩展名的文件名

        # 查找对应的招生计划文件
        招生计划文件 = 招生计划_dir / f"{province_name}.json"

        print(f"\n处理省份: {province_name}")
        print(f"录取数据文件: {录取文件}")
        print(f"招生计划文件: {招生计划文件}")

        area_types, area_scores, subjects = process_province_data(
            province_name, 录取文件, 招生计划文件
        )

        if area_types is not None and len(area_types) > 0:
            all_data[province_name] = {
                "area_types": area_types,
                "area_scores": area_scores,
                "subjects": subjects,
            }
            print(f"  - 成功处理，科类: {area_types}")
        else:
            print(f"  - 处理失败或无有效数据")

    # 生成PHP代码
    if all_data:
        php_code = generate_php_code(all_data)

        # 保存到文件
        output_file = "generated_data.php"
        with open(output_file, "w", encoding="utf-8") as f:
            f.write(php_code)

        print(f"\nPHP代码已生成并保存到: {output_file}")
        print(f"处理了 {len(all_data)} 个省份的数据")
    else:
        print("\n没有成功处理任何数据")


if __name__ == "__main__":
    main()
