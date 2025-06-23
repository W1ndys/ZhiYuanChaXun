import requests
import json
import time
import os
from urllib.parse import quote


class QfnuAdmissionsClient:
    """
    一个模拟请求曲阜师范大学招生计划数据的客户端。
    """

    def __init__(self):
        self.api_url = "https://zsb.qfnu.edu.cn/f/ajax_zsjh"
        self.csrf_token_url = "https://zsb.qfnu.edu.cn/f/ajax_get_csrfToken"
        self.html_page_url = (
            "https://zsb.qfnu.edu.cn/static/front/qfnu/basic/html_web/zsjh.html"
        )
        self.base_headers = {
            "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36",
            "Accept": "*/*",
            "Accept-Language": "zh-CN,zh;q=0.9,en-US;q=0.8,en;q=0.7",
            "Accept-Encoding": "gzip, deflate, br, zstd",
            "Connection": "keep-alive",
            "sec-ch-ua": '"Google Chrome";v="137", "Chromium";v="137", "Not/A)Brand";v="24"',
            "sec-ch-ua-mobile": "?0",
            "sec-ch-ua-platform": '"Windows"',
        }

        # Session对象会自动处理Cookie的获取和发送
        self.session = requests.Session()
        self.session.headers.update(self.base_headers)

        self.csrf_token = None

        # 初始化会话，获取Cookie和CSRF Token
        self._initialize_session()

    def _initialize_session(self):
        """
        初始化会话：
        1. 访问页面获取Cookie
        2. 获取CSRF Token
        """
        try:
            print("正在初始化会话...")

            # 1. 访问目标页面获取Cookie
            response = self.session.get(self.html_page_url, timeout=10)
            response.raise_for_status()

            print(f"访问页面后的Cookie: {self.session.cookies}")

            if not self.session.cookies:
                print("警告：未获取到Cookie，尝试访问主页...")
                main_response = self.session.get("https://zsb.qfnu.edu.cn/", timeout=10)
                print(f"访问主页后的Cookie: {self.session.cookies}")

            # 2. 获取CSRF Token
            self._get_csrf_token()

        except requests.exceptions.RequestException as e:
            print(f"初始化会话失败: {e}")
            raise

    def _get_csrf_token(self):
        """
        获取CSRF Token
        """
        try:
            current_timestamp = str(int(time.time() * 1000))

            csrf_headers = {
                "X-Requested-With": "XMLHttpRequest",
                "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
                "X-Requested-Time": current_timestamp,
                "Origin": "https://zsb.qfnu.edu.cn",
                "Referer": self.html_page_url,
                "Sec-Fetch-Site": "same-origin",
                "Sec-Fetch-Mode": "cors",
                "Sec-Fetch-Dest": "empty",
            }

            csrf_params = {"ts": current_timestamp}
            csrf_payload = "n=3"

            print("正在获取CSRF Token...")
            response = self.session.post(
                self.csrf_token_url,
                params=csrf_params,
                headers=csrf_headers,
                data=csrf_payload,
                timeout=10,
            )
            response.raise_for_status()

            response_json = response.json()

            if response_json.get("state") == 1:
                token_data = response_json.get("data", "")
                self._original_token_data = token_data
                print(f"获取到新的CSRF Token: {token_data}")

                if "," in token_data:
                    token_parts = token_data.split(",")
                    self.csrf_token = token_parts[0] if token_parts else token_data
                    print(f"使用第一个片段作为CSRF Token: {self.csrf_token}")
                else:
                    self.csrf_token = token_data

                return True
            else:
                print(f"获取CSRF Token失败: {response_json.get('msg', '未知错误')}")
                return False

        except Exception as e:
            print(f"获取CSRF Token时发生错误: {e}")
            return False

    def get_admission_plan_data(
        self, province: str, year: str, subject_category: str, admission_type: str
    ):
        """
        获取招生计划数据（每次请求前重新获取CSRF Token）
        """
        try:
            # 每次请求前重新获取CSRF Token
            print(
                f"为请求 {province} {year} {subject_category} {admission_type} 获取新的CSRF Token..."
            )
            if not self._get_csrf_token():
                print("获取CSRF Token失败，跳过此次请求")
                return None

            current_timestamp = str(int(time.time() * 1000))

            # 构建请求头
            request_headers = {
                "X-Requested-With": "XMLHttpRequest",
                "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
                "X-Requested-Time": current_timestamp,
                "Origin": "https://zsb.qfnu.edu.cn",
                "Referer": self.html_page_url,
                "Sec-Fetch-Site": "same-origin",
                "Sec-Fetch-Mode": "cors",
                "Sec-Fetch-Dest": "empty",
                "Csrf-Token": self.csrf_token,
            }

            # 构建请求参数
            params = {"ts": current_timestamp}

            # 构建POST数据
            post_data = f"ssmc={quote(province)}&zsnf={year}&klmc={quote(subject_category)}&zslx={quote(admission_type)}"

            print(
                f"正在请求招生计划数据: {province} {year} {subject_category} {admission_type}"
            )
            print(f"使用CSRF Token: {self.csrf_token}")
            print(f"请求参数: {post_data}")

            response = self.session.post(
                self.api_url,
                params=params,
                headers=request_headers,
                data=post_data,
                timeout=30,
            )

            response.raise_for_status()

            try:
                response_json = response.json()
            except json.JSONDecodeError as e:
                print(f"响应不是有效的JSON格式: {e}")
                print(f"响应内容: {response.text[:500]}")
                return None

            if response_json.get("state") == 1:
                print(
                    f"成功获取 {province} {year} {subject_category} {admission_type} 的招生计划数据"
                )
                return response_json.get("data", {})
            else:
                print(f"获取数据失败: {response_json.get('msg', '未知错误')}")
                return None

        except Exception as e:
            print(f"请求过程中发生错误: {e}")
            return None

    def parse_config_data(self, config_data):
        """
        解析配置数据，提取省份和参数组合
        """
        ssmc_list = config_data.get("data", {}).get(
            "ssmc_nf_klmc_sex_campus_zslx_list", []
        )

        province_combinations = {}

        for item in ssmc_list:
            for key, zslx_list in item.items():
                # 解析键: "省份_年份_科目类别_sex_campus"
                parts = key.split("_")
                if len(parts) >= 4:
                    province = parts[0]
                    year = parts[1]
                    subject_category = parts[2] if parts[2] else "未分类"

                    if province not in province_combinations:
                        province_combinations[province] = []

                    # 为每个招生类型创建组合
                    for admission_type in zslx_list:
                        combination = {
                            "nf": year,
                            "klmc": subject_category,
                            "zslx": admission_type,
                        }
                        province_combinations[province].append(combination)

        return province_combinations

    def get_all_admission_plans(self, config_file_path="招生计划列表.json"):
        """
        根据配置文件获取所有招生计划数据，每个省份保存为一个JSON文件
        """
        try:
            # 读取配置文件
            with open(config_file_path, "r", encoding="utf-8") as f:
                config = json.load(f)

            # 解析配置数据
            province_combinations = self.parse_config_data(config)

            # 创建output目录
            output_dir = "output"
            os.makedirs(output_dir, exist_ok=True)

            successful_provinces = 0
            total_requests = 0

            for province, combinations in province_combinations.items():
                print(f"\n开始处理省份: {province}")
                province_data = {}

                # 添加省份信息
                province_data["province"] = province
                province_data["data"] = {}
                province_data["summary"] = {
                    "total_combinations": len(combinations),
                    "successful_requests": 0,
                    "failed_requests": 0,
                }

                for combo in combinations:
                    year = combo.get("nf")
                    subject_category = combo.get("klmc")
                    admission_type = combo.get("zslx")

                    # 跳过空值
                    if not all([year, subject_category, admission_type]):
                        continue

                    print(f"  处理: {year}年 {subject_category} {admission_type}")
                    total_requests += 1

                    # 获取数据
                    data = self.get_admission_plan_data(
                        province, year, subject_category, admission_type
                    )

                    if data:
                        # 构建数据键
                        data_key = f"{year}_{subject_category}_{admission_type}"
                        province_data["data"][data_key] = {
                            "year": year,
                            "subject_category": subject_category,
                            "admission_type": admission_type,
                            "plan_data": data,
                        }

                        province_data["summary"]["successful_requests"] += 1
                        print(f"    ✓ 成功获取数据")
                    else:
                        province_data["summary"]["failed_requests"] += 1
                        print(f"    ✗ 获取数据失败")

                # 保存省份数据到文件
                if province_data["data"]:
                    safe_province = province.replace("/", "_").replace("\\", "_")
                    filename = f"{safe_province}_招生计划.json"
                    filepath = os.path.join(output_dir, filename)

                    with open(filepath, "w", encoding="utf-8") as f:
                        json.dump(province_data, f, ensure_ascii=False, indent=2)

                    successful_provinces += 1
                    print(f"✓ 省份 {province} 的数据已保存到: {filepath}")
                    print(
                        f"  成功获取: {province_data['summary']['successful_requests']} 个组合"
                    )
                    print(
                        f"  失败: {province_data['summary']['failed_requests']} 个组合"
                    )
                else:
                    print(f"✗ 省份 {province} 未获取到任何数据")

            # 生成总结报告
            summary_report = {
                "总计": {
                    "处理省份数": len(province_combinations),
                    "成功省份数": successful_provinces,
                    "总请求数": total_requests,
                    "生成时间": time.strftime("%Y-%m-%d %H:%M:%S"),
                },
                "省份列表": list(province_combinations.keys()),
            }

            summary_filepath = os.path.join(output_dir, "招生计划获取报告.json")
            with open(summary_filepath, "w", encoding="utf-8") as f:
                json.dump(summary_report, f, ensure_ascii=False, indent=2)

            print(f"\n" + "=" * 50)
            print(f"所有数据获取完成！")
            print(f"成功处理省份: {successful_provinces}/{len(province_combinations)}")
            print(f"总请求数: {total_requests}")
            print(f"文件保存目录: {output_dir}")
            print(f"总结报告: {summary_filepath}")
            print(f"=" * 50)

            return True

        except Exception as e:
            print(f"获取所有招生计划数据时发生错误: {e}")
            return False


def main():
    """
    主函数，执行所有招生计划数据的获取
    """
    try:
        client = QfnuAdmissionsClient()

        print("开始获取所有招生计划数据...")
        success = client.get_all_admission_plans()

        if success:
            print("程序执行完成！")
        else:
            print("程序执行失败！")

    except Exception as e:
        print(f"程序执行失败: {e}")


if __name__ == "__main__":
    main()
