import requests
import json
import os

# https://github.com/School-Robot/YiFenYiDuan/blob/bccc120e3b3223823302adc57a5dca508f98bd2d/yifenyiduan.py#L2
data = "此处省略,原数据在上面这个链接"

SAVE_DIR = "segment_data"

# 确保保存目录存在
os.makedirs(SAVE_DIR, exist_ok=True)


def select_option(options, prompt):
    if not options:
        print("没有可选项，请检查数据。")
        return None
    print(prompt)
    for idx, opt in enumerate(options):
        print(f"{idx + 1}. {opt['text']}")
    while True:
        user_input = input("请输入选项（可输入序号或名称，输入exit退出）：")
        if user_input.lower() == "exit":
            exit()
        # 支持序号选择
        if user_input.isdigit():
            idx = int(user_input) - 1
            if 0 <= idx < len(options):
                return options[idx]
        # 支持名称模糊匹配
        for opt in options:
            if user_input in opt["text"]:
                return opt
        print("输入无效，请重新输入。")


def fetch_segment(prov, level, types):
    params = {
        "fromCard": 1,
        "resource_id": 50266,
        "province": prov["text"],
        "year": level["text"],
        "category": types["text"],
        "query": "一分一段",
    }
    try:
        res = requests.get(
            "https://opendata.baidu.com/api.php",
            params=params,
            verify=False,
            timeout=10,
        ).json()
        seginfo = res["Result"][0]["DisplayData"]["resultData"]["tplData"][
            "segmentInfo"
        ]
        seglist = []
        for i in seginfo:
            seg = list(map(int, i["segment"].split("-")))
            seglist.append({"max": seg[0], "min": seg[1], "info": i["segList"]})
        return {
            "province": prov["text"],
            "year": level["text"],
            "category": types["text"],
            "segments": seglist,
        }
    except Exception as e:
        print(f"{prov['text']} {level['text']} {types['text']} 数据请求或解析失败：{e}")
        return None


def main():
    for prov in data:
        prov_name = prov["text"]  # type: ignore
        all_results = []
        for level in prov.get("options", []):  # type: ignore
            for types in level.get("options", []):  # type: ignore
                result = fetch_segment(prov, level, types)
                if result:
                    all_results.append(result)
        # 保存到本地
        if all_results:
            save_path = os.path.join(SAVE_DIR, f"{prov_name}.json")
            with open(save_path, "w", encoding="utf-8") as f:
                json.dump(all_results, f, ensure_ascii=False, indent=2)
            print(f"{prov_name} 已保存 {len(all_results)} 条数据。")
        else:
            print(f"{prov_name} 没有可保存的数据。")


if __name__ == "__main__":
    main()
