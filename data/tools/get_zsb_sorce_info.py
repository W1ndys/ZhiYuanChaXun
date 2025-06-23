import requests
import json
import time


class QfnuAdmissionsClient:
    """
    一个模拟请求曲阜师范大学招生办历年分数线数据的客户端。
    (根据抓包分析，需要先获取CSRF Token)
    """

    def __init__(self):
        self.api_url = "https://zsb.qfnu.edu.cn/f/ajax_lnfs"
        self.csrf_token_url = "https://zsb.qfnu.edu.cn/f/ajax_get_csrfToken"
        self.html_page_url = (
            "https://zsb.qfnu.edu.cn/static/front/qfnu/basic/html_web/lnfs.html"
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
                self._original_token_data = token_data  # 保存原始token数据
                print(f"原始Token数据: {token_data}")

                if "," in token_data:
                    token_parts = token_data.split(",")
                    print(f"Token片段: {token_parts}")

                    # 尝试不同的策略
                    # 策略1: 使用第一个片段
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

    def get_admission_data(
        self, province: str, year: str, subject_category: str, admission_type: str
    ):
        # 先尝试第一个片段
        success = self._try_request_with_token(
            province, year, subject_category, admission_type, 0
        )

        if not success:
            print("第一个片段失败，尝试第二个片段...")
            success = self._try_request_with_token(
                province, year, subject_category, admission_type, 1
            )

        if not success:
            print("第二个片段失败，尝试第三个片段...")
            success = self._try_request_with_token(
                province, year, subject_category, admission_type, 2
            )

        return success

    def _try_request_with_token(
        self,
        province: str,
        year: str,
        subject_category: str,
        admission_type: str,
        token_index: int,
    ):
        """
        尝试使用指定索引的token片段进行请求
        """
        try:
            # 重新获取token以确保新鲜
            self._get_csrf_token()

            # 解析token片段
            if hasattr(self, "_original_token_data"):
                token_parts = self._original_token_data.split(",")
            else:
                # 重新获取
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
                response = self.session.post(
                    self.csrf_token_url,
                    params=csrf_params,
                    headers=csrf_headers,
                    data=csrf_payload,
                    timeout=10,
                )
                response_json = response.json()
                token_data = response_json.get("data", "")
                token_parts = token_data.split(",")

            if token_index < len(token_parts):
                selected_token = token_parts[token_index]
                print(f"尝试使用Token片段[{token_index}]: {selected_token}")
            else:
                print(f"Token索引{token_index}超出范围")
                return None

            current_timestamp = str(int(time.time() * 1000))
            request_params = {"ts": current_timestamp}
            request_headers = {
                "X-Requested-Time": current_timestamp,
                "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
                "X-Requested-With": "XMLHttpRequest",
                "Origin": "https://zsb.qfnu.edu.cn",
                "Referer": self.html_page_url,
                "Sec-Fetch-Site": "same-origin",
                "Sec-Fetch-Mode": "cors",
                "Sec-Fetch-Dest": "empty",
                "Csrf-Token": selected_token,  # 使用选定的token片段
            }

            payload = {
                "ssmc": province,
                "zsnf": year,
                "klmc": subject_category,
                "zslx": admission_type,
            }

            print(
                f"正在查询: 省份={province}, 年份={year}, 科类={subject_category}, 招生类型={admission_type}"
            )
            print(f"使用CSRF Token: {selected_token}")

            response = self.session.post(
                self.api_url,
                params=request_params,
                headers=request_headers,
                data=payload,
                timeout=10,
            )
            response.raise_for_status()

            response_json = response.json()

            if response_json.get("state") == 1:
                print(f"查询成功！使用的Token片段索引: {token_index}")
                return self._process_response(response_json.get("data", {}))
            else:
                print(f"API请求失败: {response_json.get('msg', '未知错误')}")
                return None

        except Exception as e:
            print(f"使用Token片段[{token_index}]时发生错误: {e}")
            return None

    def _process_response(self, data: dict) -> dict:
        province_key_map = {
            "nf": "年份",
            "klmc": "科类",
            "ssmc": "省份",
            "zslx": "招生类型",
            "rs": "录取人数",
            "minScore": "最低分",
            "avgScore": "平均分",
            "maxScore": "最高分",
        }
        major_key_map = {
            "zymc": "专业名称",
            "nf": "年份",
            "klmc": "科类",
            "ssmc": "省份",
            "zslx": "招生类型",
            "rs": "录取人数",
            "minScore": "最低分",
            "avgScore": "平均分",
            "maxScore": "最高分",
        }
        processed_province_data = [
            {
                new_key: item.get(old_key)
                for old_key, new_key in province_key_map.items()
            }
            for item in data.get("zsSsgradeList", [])
        ]
        processed_major_data = [
            {new_key: item.get(old_key) for old_key, new_key in major_key_map.items()}
            for item in data.get("sszygradeList", [])
        ]
        return {
            "省份录取信息": processed_province_data,
            "专业录取信息": processed_major_data,
        }


if __name__ == "__main__":
    try:
        client = QfnuAdmissionsClient()
        admission_data = client.get_admission_data(
            province="山东",
            year="2024",
            subject_category="综合改革",
            admission_type="普通类",
        )
        if admission_data:
            pretty_json = json.dumps(admission_data, indent=2, ensure_ascii=False)
            print(pretty_json)
    except Exception as e:
        print(f"程序启动或执行出错: {e}")
