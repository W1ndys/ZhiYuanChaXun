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
                print(f"原始Token数据: {token_data}")

                if "," in token_data:
                    token_parts = token_data.split(",")
                    self.csrf_token = token_parts[0] if token_parts else token_data
                    print(f"使用第一个片段作为CSRF Token: {self.csrf_token}")
                else:
                    self.csrf_token = token_data

                print(f"Session ID: {response_json.get('jessionid')}")
            else:
                print(f"获取CSRF Token失败: {response_json.get('msg', '未知错误')}")
                raise Exception("无法获取CSRF Token")

        except Exception as e:
            print(f"获取CSRF Token时发生错误: {e}")
            raise

    def get_admission_plan_data(
        self, province: str, year: str, subject_category: str, admission_type: str
    ):
        """
        获取招生计划数据
        """
        try:
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

    def get_all_admission_plans(self, config_file_path="data/招生计划列表.json"):
        """
        根据配置文件获取所有招生计划数据
        """
        try:
            # 读取配置文件
            with open(config_file_path, "r", encoding="utf-8") as f:
                config = json.load(f)

            ssmc_nf_zslx_sex_campus_klmc_map = config.get(
                "ssmc_nf_zslx_sex_campus_klmc_Map", {}
            )

            all_data = {}

            for province, combinations in ssmc_nf_zslx_sex_campus_klmc_map.items():
                print(f"\n开始处理省份: {province}")
                province_data = {}

                for combo in combinations:
                    year = combo.get("nf")
                    subject_category = combo.get("klmc")
                    admission_type = combo.get("zslx")

                    # 跳过空值
                    if not all([year, subject_category, admission_type]):
                        continue

                    print(f"  处理: {year}年 {subject_category} {admission_type}")

                    # 获取数据
                    data = self.get_admission_plan_data(
                        province, year, subject_category, admission_type
                    )

                    if data:
                        # 构建数据键
                        data_key = f"{year}_{subject_category}_{admission_type}"
                        province_data[data_key] = data

                        # 保存单个文件
                        safe_province = province.replace("/", "_")
                        safe_year = year
                        safe_category = subject_category.replace("/", "_")
                        safe_type = admission_type.replace("/", "_")

                        filename = f"招生计划_{safe_province}_{safe_year}_{safe_category}_{safe_type}.json"
                        filepath = os.path.join(
                            "data", "QFNU_data", "招生计划", filename
                        )

                        # 创建目录
                        os.makedirs(os.path.dirname(filepath), exist_ok=True)

                        with open(filepath, "w", encoding="utf-8") as f:
                            json.dump(data, f, ensure_ascii=False, indent=2)

                        print(f"    已保存到: {filepath}")

                    # 添加延迟避免频繁请求
                    time.sleep(2)

                if province_data:
                    all_data[province] = province_data

            # 保存汇总数据
            summary_filepath = os.path.join("data", "QFNU_data", "招生计划汇总.json")
            with open(summary_filepath, "w", encoding="utf-8") as f:
                json.dump(all_data, f, ensure_ascii=False, indent=2)

            print(f"\n所有数据获取完成，汇总文件保存到: {summary_filepath}")
            return all_data

        except Exception as e:
            print(f"获取所有招生计划数据时发生错误: {e}")
            return None


def main():
    """
    主函数，执行所有招生计划数据的获取
    """
    try:
        client = QfnuAdmissionsClient()

        print("开始获取所有招生计划数据...")
        all_data = client.get_all_admission_plans()

        if all_data:
            print(f"成功获取了 {len(all_data)} 个省份的招生计划数据")
        else:
            print("未能获取到任何数据")

    except Exception as e:
        print(f"程序执行失败: {e}")


if __name__ == "__main__":
    main()
