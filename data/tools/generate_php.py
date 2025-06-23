import json
import os
from pathlib import Path


def load_json_file(file_path):
    """Load JSON file"""
    try:
        with open(file_path, "r", encoding="utf-8") as f:
            data = json.load(f)
            print(f"  Successfully loaded file: {file_path}")
            return data
    except Exception as e:
        print(f"  Failed to load file {file_path}: {e}")
        return None


def process_province_data(province_name, admission_data_path, enrollment_plan_path):
    """Process data for a single province"""
    print(f"  Starting to process admission data: {admission_data_path}")

    # Load 2024 admission data
    admission_data = load_json_file(admission_data_path)
    if not admission_data:
        print(f"  Failed to load admission data")
        return None, None, None

    print(f"  Admission data structure: {list(admission_data.keys())}")

    # Load 2025 enrollment plan
    enrollment_plan = None
    if enrollment_plan_path.exists():
        print(f"  Starting to process enrollment plan: {enrollment_plan_path}")
        enrollment_plan = load_json_file(enrollment_plan_path)
    else:
        print(f"  Enrollment plan file does not exist: {enrollment_plan_path}")

    # Store results
    area_types = []
    area_scores = {}
    subjects = {}

    # Check data structure
    data_list = admission_data.get("数据", [])
    print(f"  Data list length: {len(data_list)}")

    # Process admission data
    for i, data_group in enumerate(data_list):
        print(f"  Processing data group {i+1}:")

        query_conditions = data_group.get("查询条件", {})
        print(f"    Query conditions: {query_conditions}")

        subject_category = query_conditions.get("科类", "")
        enrollment_type = query_conditions.get("招生类型", "")

        print(
            f"    Subject category: '{subject_category}', Enrollment type: '{enrollment_type}'"
        )

        # Only process regular enrollment type
        if enrollment_type != "普通类":
            print(f"    Skipping non-regular type: {enrollment_type}")
            continue

        print(f"    Processing regular type data, subject category: {subject_category}")

        # Collect subject category types
        if subject_category not in area_types:
            area_types.append(subject_category)
            print(f"    Added subject category: {subject_category}")

        # Process provincial admission info (for calculating AreaScore)
        provincial_admission_info = data_group.get("省份录取信息", [])
        print(f"    Provincial admission info count: {len(provincial_admission_info)}")

        if provincial_admission_info:
            admission_info = provincial_admission_info[0]
            min_score_rank = admission_info.get("最低分位次")
            max_score_rank = admission_info.get("最高分位次")

            print(f"    Rank range: {max_score_rank} - {min_score_rank}")

            if min_score_rank and max_score_rank:
                try:
                    min_score_rank = int(min_score_rank)
                    max_score_rank = int(max_score_rank)

                    if subject_category not in area_scores:
                        area_scores[subject_category] = [max_score_rank, min_score_rank]
                        print(
                            f"    Initialized {subject_category} rank: [{max_score_rank}, {min_score_rank}]"
                        )
                    else:
                        # Update highest rank (smaller number) and lowest rank (larger number)
                        old_scores = area_scores[subject_category].copy()
                        area_scores[subject_category][0] = min(
                            area_scores[subject_category][0], max_score_rank
                        )
                        area_scores[subject_category][1] = max(
                            area_scores[subject_category][1], min_score_rank
                        )
                        print(
                            f"    Updated {subject_category} rank: {old_scores} -> {area_scores[subject_category]}"
                        )
                except ValueError as e:
                    print(f"    Rank conversion error: {e}")

        # Process major admission info
        major_admission_info = data_group.get("专业录取信息", [])
        print(f"    Major admission info count: {len(major_admission_info)}")

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

            print(
                f"      Major {j+1}: {major_name}, Enrollment count: {enrollment_count}"
            )

            # Get 2025 plan count from enrollment plan (if available)
            plan_count = enrollment_count  # Default to 2024 enrollment count
            if enrollment_plan:
                for plan_group in enrollment_plan.get("数据", []):
                    plan_query_conditions = plan_group.get("查询条件", {})
                    if plan_query_conditions.get("科类") == subject_category:
                        for plan_major in plan_group.get("专业招生计划", []):
                            if plan_major.get("专业名称") == major_name:
                                plan_count = plan_major.get("计划数", enrollment_count)
                                print(f"        Found 2025 plan count: {plan_count}")
                                break

            # Convert data types
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
                print(f"        Added major data: {major_name}")
            except (ValueError, TypeError) as e:
                print(f"        Data conversion error: {e}")
                continue

    print(
        f"  Processing completed - Subject categories: {area_types}, Total majors: {sum(len(subjects[k]) for k in subjects)}"
    )
    return area_types, area_scores, subjects


def generate_php_code(all_data):
    """Generate PHP code"""
    php_code = ["<?php", "return ["]

    # Generate AreaType section
    php_code.append("    'AreaType' => array(")
    for province, data in all_data.items():
        if data["area_types"]:
            types_str = "', '".join(data["area_types"])
            php_code.append(f"        '{province}' => array('{types_str}'),")
    php_code.append("        // Can be extended further")
    php_code.append("    ),")

    # Generate AreaScore section
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
    php_code.append("        // Can be extended further")
    php_code.append("    ),")

    # Generate Subject section
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
    php_code.append("        // Can be extended further")
    php_code.append("    ),")

    php_code.append("];")
    return "\n".join(php_code)


def main():
    """Main function"""
    # Data directory paths
    admission_data_dir = Path("../../data/QFNU_data/曲师大2024年分省专业录取数据")
    enrollment_plan_dir = Path("../../data/QFNU_data/曲师大2025招生计划")

    print(f"Admission data directory: {admission_data_dir}")
    print(f"Enrollment plan directory: {enrollment_plan_dir}")
    print(f"Admission data directory exists: {admission_data_dir.exists()}")
    print(f"Enrollment plan directory exists: {enrollment_plan_dir.exists()}")

    if not admission_data_dir.exists():
        print("Admission data directory does not exist!")
        return

    all_data = {}
    processed_summary = []  # Store province-subject category info

    # Traverse all province files
    json_files = list(admission_data_dir.glob("*.json"))
    print(f"Found {len(json_files)} JSON files")

    for admission_file in json_files:
        province_name = admission_file.stem  # Get filename without extension

        # Find corresponding enrollment plan file
        enrollment_plan_file = enrollment_plan_dir / f"{province_name}.json"

        print(f"\nProcessing province: {province_name}")
        print(f"Admission data file: {admission_file}")
        print(f"Enrollment plan file: {enrollment_plan_file}")

        area_types, area_scores, subjects = process_province_data(
            province_name, admission_file, enrollment_plan_file
        )

        if area_types is not None and len(area_types) > 0:
            all_data[province_name] = {
                "area_types": area_types,
                "area_scores": area_scores,
                "subjects": subjects,
            }
            print(f"  - Successfully processed, subject categories: {area_types}")

            # Add to summary
            for subject_category in area_types:
                processed_summary.append(f"{province_name}-{subject_category}")
        else:
            print(f"  - Processing failed or no valid data")

    # Generate PHP code
    if all_data:
        php_code = generate_php_code(all_data)

        # Save to file
        output_file = "generated_data.php"
        with open(output_file, "w", encoding="utf-8") as f:
            f.write(php_code)

        print(f"\nPHP code has been generated and saved to: {output_file}")
        print(f"Processed data for {len(all_data)} provinces")

        # Output processed province-subject category summary
        print(f"\n=== Processing Summary ===")
        print(
            f"Total processed province-subject category combinations: {len(processed_summary)}"
        )
        print("Processed province-subject categories:")
        for item in sorted(processed_summary):
            print(f"  - {item}")
    else:
        print("\nNo data was successfully processed")


if __name__ == "__main__":
    main()
