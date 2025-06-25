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
        print(f"  加载文件失败 {file_path}: {e}")
        return None


def process_province_data(province_name, admission_data_path, enrollment_plan_path):
    """处理单个省份的数据"""
    print(f"  开始处理录取数据: {admission_data_path}")

    # 加载2024年录取数据
    admission_data = load_json_file(admission_data_path)
    if not admission_data:
        print(f"  加载录取数据失败")
        return None, None, None

    print(f"  录取数据结构: {list(admission_data.keys())}")

    # 加载2025年招生计划
    enrollment_plan = None
    if enrollment_plan_path.exists():
        print(f"  开始处理招生计划: {enrollment_plan_path}")
        enrollment_plan = load_json_file(enrollment_plan_path)
    else:
        print(f"  招生计划文件不存在: {enrollment_plan_path}")

    # 存储结果
    area_types = []
    area_scores = {}
    subjects = {}

    # 检查数据结构
    data_list = admission_data.get("数据", [])
    print(f"  数据列表长度: {len(data_list)}")

    # 处理录取数据
    for i, data_group in enumerate(data_list):
        print(f"  处理数据组 {i+1}:")

        query_conditions = data_group.get("查询条件", {})
        print(f"    查询条件: {query_conditions}")

        subject_category = query_conditions.get("科类", "")
        enrollment_type = query_conditions.get("招生类型", "")

        print(f"    科类: '{subject_category}', 招生类型: '{enrollment_type}'")

        # 只处理普通类招生类型
        if enrollment_type != "普通类":
            print(f"    跳过非普通类型: {enrollment_type}")
            continue

        print(f"    处理普通类型数据，科类: {subject_category}")

        # 收集科类类型
        if subject_category not in area_types:
            area_types.append(subject_category)
            print(f"    添加科类: {subject_category}")

        # 处理省份录取信息（用于计算AreaScore）
        provincial_admission_info = data_group.get("省份录取信息", [])
        print(f"    省份录取信息数量: {len(provincial_admission_info)}")

        if provincial_admission_info:
            admission_info = provincial_admission_info[0]
            min_score_rank = admission_info.get("最低分位次")
            max_score_rank = admission_info.get("最高分位次")

            print(f"    位次范围: {max_score_rank} - {min_score_rank}")

            if min_score_rank and max_score_rank:
                try:
                    min_score_rank = int(min_score_rank)
                    max_score_rank = int(max_score_rank)

                    if subject_category not in area_scores:
                        area_scores[subject_category] = [max_score_rank, min_score_rank]
                        print(
                            f"    初始化 {subject_category} 位次: [{max_score_rank}, {min_score_rank}]"
                        )
                    else:
                        # 更新最高位次（较小数字）和最低位次（较大数字）
                        old_scores = area_scores[subject_category].copy()
                        area_scores[subject_category][0] = min(
                            area_scores[subject_category][0], max_score_rank
                        )
                        area_scores[subject_category][1] = max(
                            area_scores[subject_category][1], min_score_rank
                        )
                        print(
                            f"    更新 {subject_category} 位次: {old_scores} -> {area_scores[subject_category]}"
                        )
                except ValueError as e:
                    print(f"    位次转换错误: {e}")

        # 处理专业录取信息
        major_admission_info = data_group.get("专业录取信息", [])
        print(f"    专业录取信息数量: {len(major_admission_info)}")

        if subject_category not in subjects:
            subjects[subject_category] = {}

        for j, major in enumerate(major_admission_info):
            major_name = major.get("专业名称", "")
            enrollment_count = major.get("录取人数", 0)
            min_score = major.get("最低分")
            avg_score = major.get("平均分")
            max_score = major.get("最高分")
            min_score_rank = major.get("最低分位次")
            max_score_rank = major.get("最高分位次")

            print(f"      专业 {j+1}: {major_name}, 录取人数: {enrollment_count}")

            # 从招生计划获取2025年计划数（如果可用）
            plan_count = enrollment_count  # 默认为2024年录取人数
            if enrollment_plan:
                # 新的数据结构：遍历 data 字段下的各个招生类型
                plan_data = enrollment_plan.get("data", {})
                for plan_key, plan_info in plan_data.items():
                    # 检查科类是否匹配
                    if plan_info.get("subject_category") == subject_category:
                        # 获取招生计划总数数据
                        zsjh_total = plan_info.get("plan_data", {}).get("zsjhTotal", [])
                        for plan_item in zsjh_total:
                            plan_major_name = plan_item.get("zycc", "")  # 专业名称
                            # 匹配专业名称（可能需要模糊匹配，因为名称格式可能不完全一致）
                            if (
                                plan_major_name == major_name
                                or major_name in plan_major_name
                            ):
                                plan_count = plan_item.get("zsjhs", enrollment_count)
                                print(
                                    f"        找到2025年计划数: {plan_count} (匹配: {plan_major_name})"
                                )
                                break
                        if (
                            plan_count != enrollment_count
                        ):  # 如果找到了计划数就跳出外层循环
                            break

            # 转换数据类型
            try:
                if min_score_rank:
                    min_score_rank = int(min_score_rank)
                if max_score_rank:
                    max_score_rank = int(max_score_rank)
                if min_score:
                    min_score = float(min_score)
                if max_score:
                    max_score = float(max_score)
                if avg_score:
                    avg_score = float(avg_score)

                subjects[subject_category][major_name] = {
                    "Num": plan_count,
                    "MaxScore": max_score,
                    "MinScore": min_score,
                    "AvgScore": avg_score,
                    "MaxRank": max_score_rank,
                    "MinRank": min_score_rank,
                }
                print(f"        添加专业数据: {major_name}")
            except (ValueError, TypeError) as e:
                print(f"        数据转换错误: {e}")
                continue

    print(
        f"  处理完成 - 科类: {area_types}, 总专业数: {sum(len(subjects[k]) for k in subjects)}"
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
    php_code.append("        // 可以进一步扩展")
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
    php_code.append("        // 可以进一步扩展")
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
    php_code.append("        // 可以进一步扩展")
    php_code.append("    ),")

    php_code.append("];")
    return "\n".join(php_code)


def main():
    """主函数"""
    # 数据目录路径
    admission_data_dir = Path("../../data/QFNU_data/曲师大2024年分省专业录取数据")
    enrollment_plan_dir = Path("../../data/QFNU_data/曲师大2025招生计划")

    print(f"录取数据目录: {admission_data_dir}")
    print(f"招生计划目录: {enrollment_plan_dir}")
    print(f"录取数据目录是否存在: {admission_data_dir.exists()}")
    print(f"招生计划目录是否存在: {enrollment_plan_dir.exists()}")

    if not admission_data_dir.exists():
        print("录取数据目录不存在!")
        return

    all_data = {}
    processed_summary = []  # 存储省份-科类信息

    # 遍历所有省份文件
    json_files = list(admission_data_dir.glob("*.json"))
    print(f"找到 {len(json_files)} 个JSON文件")

    for admission_file in json_files:
        province_name = admission_file.stem  # 获取不带扩展名的文件名

        # 查找对应的招生计划文件
        enrollment_plan_file = enrollment_plan_dir / f"{province_name}.json"

        print(f"\n正在处理省份: {province_name}")
        print(f"录取数据文件: {admission_file}")
        print(f"招生计划文件: {enrollment_plan_file}")

        area_types, area_scores, subjects = process_province_data(
            province_name, admission_file, enrollment_plan_file
        )

        if area_types is not None and len(area_types) > 0:
            all_data[province_name] = {
                "area_types": area_types,
                "area_scores": area_scores,
                "subjects": subjects,
            }
            print(f"  - 处理成功，科类: {area_types}")

            # 添加到总结
            for subject_category in area_types:
                processed_summary.append(f"{province_name}-{subject_category}")
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
        print(f"已处理 {len(all_data)} 个省份的数据")

        # 输出处理省份-科类总结
        print(f"\n=== 处理总结 ===")
        print(f"总处理省份-科类组合数: {len(processed_summary)}")
        print("已处理的省份-科类:")
        for item in sorted(processed_summary):
            print(f"  - {item}")
    else:
        print("\n没有成功处理任何数据")


if __name__ == "__main__":
    main()
