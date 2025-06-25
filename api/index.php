<?php

$data = require __DIR__ . '/data.php';
$AreaType = $data['AreaType'];
$AreaScore = $data['AreaScore'];
$Subject = $data['Subject'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['type'])) {
        if ($_GET['type'] === 'area') {
            if (isset($_GET['province'])) {
                echo (json_encode($AreaType[$_GET['province']]));
            } else {
                echo (json_encode(array_keys($AreaType)));
            }
        } else if ($_GET['type'] === 'major') {
            if (isset($_GET['province']) && isset($AreaType[$_GET['province']])) {
                echo (json_encode($AreaType[$_GET['province']]));
            } else {
                echo json_encode([]);
            }
        } else if ($_GET['type'] === 'rank') {
            if (isset($_GET['province']) && isset($_GET['major'])) {
                if (isset($_GET['rank']) && $_GET['rank'] != '') {
                    $rank = intval($_GET['rank']);
                    $high_major = array();
                    $middle_major = array();
                    $low_major = array();
                    foreach ($Subject[$_GET['province']][$_GET['major']] as $key => $value) {
                        if ($rank > $value['MinRank']) {
                            // 冲一冲
                            array_push($high_major, array('Subject' => $key) + $value);
                        } else if ($rank < $value['MaxRank']) {
                            // 保一保
                            array_push($low_major, array('Subject' => $key) + $value);
                        } else {
                            // 稳一稳
                            array_push($middle_major, array('Subject' => $key) + $value);
                        }
                    }
                    echo (json_encode(array('high_major' => $high_major, 'middle_major' => $middle_major, 'low_major' => $low_major)));
                } else {
                    echo json_encode($AreaScore[$_GET['province']][$_GET['major']]);
                }
            }
        }
        die();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>曲阜师范大学-志愿帮填</title>
    <link rel="stylesheet" href="/style.css" />
    <script src="/js/vue.global.prod.js"></script>
    <script>
        if (typeof Vue === 'undefined') {
            console.warn('本地 Vue.js 加载失败，尝试 CDN...');
            document.write('<script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"><\/script>');
            setTimeout(function () {
                if (typeof Vue === 'undefined') {
                    console.warn('第一个 CDN 失败，尝试备用 CDN...');
                    const script = document.createElement('script');
                    script.src = 'https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js';
                    script.onerror = function () {
                        document.body.innerHTML = '<div style="text-align:center;padding:50px;color:#d32f2f;">页面加载失败，请检查网络连接或联系管理员</div>';
                    };
                    document.head.appendChild(script);
                }
            }, 1000);
        }
    </script>
    <script charset="UTF-8" id="LA_COLLECT" src="//sdk.51.la/js-sdk-pro.min.js"></script>
    <script>LA.init({ id: "3LXM1Spq74C2Vg9h", ck: "3LXM1Spq74C2Vg9h", autoTrack: true, hashMode: true })</script>
</head>

<body>
    <div id="loading"
        style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(255,255,255,0.9);display:flex;align-items:center;justify-content:center;z-index:9999;">
        <div style="text-align:center;">
            <div style="margin-bottom:16px;">页面加载中...</div>
            <div
                style="width:40px;height:40px;border:4px solid #f3f3f3;border-top:4px solid #1976d2;border-radius:50%;animation:spin 1s linear infinite;margin:0 auto;">
            </div>
        </div>
    </div>
    <style>
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <div id="app">
        <!-- 新生交流群弹窗已暂时关闭，如需开启请恢复此处代码 -->
        <!--
        <div v-if="showGroupModal" class="modal-overlay">
            <div class="modal-card">
                <h2 style="margin-bottom:12px;">加入新生交流群</h2>
                <p style="margin-bottom:8px;">欢迎加入【2025曲阜师范大学新生交流群】，获取最新资讯、结识新同学！</p>
                <a href="https://qm.qq.com/q/T04jorATMQ" target="_blank" rel="noopener noreferrer" class="group-link">
                    点击加入QQ群：2025曲阜师范大学新生交流群
                </a>
                <div style="margin:18px 0 8px 0; text-align:center;">
                    <img src="/qrcode.png" alt="交流群二维码"
                        style="width:160px; height:160px; border-radius:12px; box-shadow:0 2px 12px rgba(58,26,9,0.10); border:1px solid #eee; object-fit: cover;" />
                </div>
                <button class="modal-btn" @click="showGroupModal=false">确定</button>
            </div>
        </div>
        -->
        <div class="card">
            <h1>曲阜师范大学志愿帮填</h1>
            <div
                style="background: #f8f9fa; border-radius: 8px; padding: 14px 18px; margin-bottom: 12px; font-size: 1.05em; line-height: 1.8;">
                <div style="color: #d32f2f; font-weight: bold; margin-bottom: 6px;">
                    本网站为22级师哥个人设计，与学校无任何关系，特此声明。
                </div>
                <div style="margin-bottom: 6px;">
                    此页面结果仅供参考，请勿过度依赖，理性填报。
                </div>
                <div style="margin-bottom: 6px;">
                    主站：<a href="https://act.w1ndys.top/" target="_blank" rel="noopener noreferrer"
                        style="color:#1976d2;text-decoration:underline;">https://act.w1ndys.top/</a>
                    <span style="margin:0 8px;">|</span>
                    备用站点：<a href="https://act.easy-qfnu.top/" target="_blank" rel="noopener noreferrer"
                        style="color:#1976d2;text-decoration:underline;">https://act.easy-qfnu.top/</a>
                </div>
                <div>
                    数据来源：
                    <a href="https://zsb.qfnu.edu.cn/static/front/qfnu/basic/html_web/zsjh.html#/" target="_blank"
                        rel="noopener noreferrer" style="color:#1976d2;text-decoration:underline;">
                        曲阜师范大学本科招生网（招生计划和历年分数）
                    </a>
                    <span style="margin:0 4px;">、</span>
                    <a href="https://www.gaokao.cn/colleges/bypart" target="_blank" rel="noopener noreferrer"
                        style="color:#1976d2;text-decoration:underline;">
                        百度一分一段查询API/阳光高考一分一段数据
                    </a>
                </div>
            </div>
            <p>
                <span
                    style="color: #d32f2f; font-weight: bold; font-size: 1.15em; background: #fffbe6; padding: 4px 8px; border-radius: 6px; display: inline-block;">
                    点击链接加入群聊
                    <a href="https://qm.qq.com/q/T04jorATMQ" target="_blank" rel="noopener noreferrer"
                        style="color: #1976d2; font-weight: bold; text-decoration: underline;">
                        【2025曲阜师范大学新生交流群】
                    </a>
                </span>
            </p>
            <p>
                只有普通批数据，不含体育、艺术、对口类专业、公费师范等特殊批次，不含特殊录取省份数据
            </p>
        </div>
        <div class="card">
            <form class="form-row" @submit.prevent>
                <label for="province">省份</label>
                <select id="province" v-model="form.province" @change="getMajor">
                    <option value="">请选择省份</option>
                    <option v-for="province in provinceList" :key="province" :value="province">{{province}}</option>
                </select>
                <label for="major">科类</label>
                <select id="major" v-model="form.major" :disabled="loadingMajor">
                    <option value="">{{loadingMajor ? '加载中...' : '请选择科类'}}</option>
                    <option v-for="major in majorList" :key="major" :value="major">{{major}}</option>
                </select>
                <label for="rank">位次</label>
                <input id="rank" type="number" v-model="form.rank" min="0" max="5000000" placeholder="请输入位次" />
                <button type="button" @click="onQuery"
                    style="margin-left:16px;padding:10px 24px;border-radius:12px;background:#1976d2;color:#fff;border:none;font-size:1.08em;cursor:pointer;">查询</button>
            </form>
            <div style="margin-top:12px;color:var(--main-color);font-weight:500;">
                最高排名：{{maxRank}}&nbsp;最低排名：{{minRank}}
            </div>
        </div>
        <div class="card">
            <h2>高于排名的专业（冲一冲）</h2>
            <div class="table-wrap">
                <table v-if="form.rank>0 && subjectList.high_major && subjectList.high_major.length">
                    <thead>
                        <tr>
                            <th>专业</th>
                            <th>招生人数(0表示暂无数据)</th>
                            <th>最高分</th>
                            <th>最低分</th>
                            <th>平均分</th>
                            <th>最高排名</th>
                            <th>最低排名</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in subjectList.high_major" :key="item.Subject">
                            <td>{{item.Subject}}</td>
                            <td>{{item.Num}}</td>
                            <td>{{item.MaxScore}}</td>
                            <td>{{item.MinScore}}</td>
                            <td>{{item.AvgScore}}</td>
                            <td>{{item.MaxRank}}</td>
                            <td>{{item.MinRank}}</td>
                        </tr>
                    </tbody>
                </table>
                <div v-else style="color:#aaa;text-align:center;padding:16px 0;">{{high_text}}</div>
            </div>
        </div>
        <div class="card">
            <h2>接近排名的专业（试一试）</h2>
            <div class="table-wrap">
                <table v-if="form.rank>0 && subjectList.middle_major && subjectList.middle_major.length">
                    <thead>
                        <tr>
                            <th>专业</th>
                            <th>招生人数(0表示暂无数据)</th>
                            <th>最高分</th>
                            <th>最低分</th>
                            <th>平均分</th>
                            <th>最高排名</th>
                            <th>最低排名</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in subjectList.middle_major" :key="item.Subject">
                            <td>{{item.Subject}}</td>
                            <td>{{item.Num}}</td>
                            <td>{{item.MaxScore}}</td>
                            <td>{{item.MinScore}}</td>
                            <td>{{item.AvgScore}}</td>
                            <td>{{item.MaxRank}}</td>
                            <td>{{item.MinRank}}</td>
                        </tr>
                    </tbody>
                </table>
                <div v-else style="color:#aaa;text-align:center;padding:16px 0;">{{middle_text}}</div>
            </div>
        </div>
        <div class="card">
            <h2>低于排名的专业（保一保）</h2>
            <div class="table-wrap">
                <table v-if="form.rank>0 && subjectList.low_major && subjectList.low_major.length">
                    <thead>
                        <tr>
                            <th>专业</th>
                            <th>招生人数(0表示暂无数据)</th>
                            <th>最高分</th>
                            <th>最低分</th>
                            <th>平均分</th>
                            <th>最高排名</th>
                            <th>最低排名</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in subjectList.low_major" :key="item.Subject">
                            <td>{{item.Subject}}</td>
                            <td>{{item.Num}}</td>
                            <td>{{item.MaxScore}}</td>
                            <td>{{item.MinScore}}</td>
                            <td>{{item.AvgScore}}</td>
                            <td>{{item.MaxRank}}</td>
                            <td>{{item.MinRank}}</td>
                        </tr>
                    </tbody>
                </table>
                <div v-else style="color:#aaa;text-align:center;padding:16px 0;">没有数据</div>
            </div>
        </div>
        <div class="card qr">
            <img src="/qrcode.png" alt="交流群二维码"
                style="width: min(400px, 40vw); height: auto; aspect-ratio: 1/1; max-width: 100%; border-radius:16px; box-shadow:0 2px 16px rgba(58,26,9,0.10); border:1px solid #eee; object-fit: cover;" />
        </div>
        <div class="footer"
            style="padding:32px 0 16px 0; background:#fafbfc; color:#444; font-size:15px; text-align:center; line-height:2;">

            <div style="margin-bottom:10px;">
                <span style="font-weight:bold;">W1ndys</span>、<span style="font-weight:bold;"><a
                        href="https://easy-qfnu.top/" target="_blank"
                        style="color:inherit;text-decoration:underline;">Easy-QFNU</a></span>、微信公众号【W1ndys】提供数据整理，网站搭建，网站运行维护，网站UI设计，服务器维护，服务器域名支出
            </div>
            <div style="margin-bottom:10px;">
                <span style="font-weight:bold;">Vercel</span> 提供部署服务
            </div>
            <div style="margin-bottom:10px;">
                <span style="font-weight:bold;">曲阜师范大学本科招生网</span>、<span style="font-weight:bold;">阳光高考</span> 提供数据
            </div>
            <div style="margin-bottom:10px; color:#888;">
                如对网站有任何疑问或建议，欢迎联系微信公众号 <b>W1ndys</b>
                或QQ号 <b><a href="https://qm.qq.com/q/nc6EADciVq" target="_blank"
                        style="color:inherit;text-decoration:underline;">2769731875</a></b>
                或邮箱 <b><a href="mailto:w1ndys@qfnu.edu.cn"
                        style="color:inherit;text-decoration:underline;">w1ndys@qfnu.edu.cn</a></b> 咨询！
            </div>
            <div style="margin-bottom:10px;">
                <span style="font-weight:bold;">大理大学网络空间安全协会</span> &amp; <span
                    style="font-weight:bold;">f00001111</span> 提供网站框架
            </div>
            <div style="margin-bottom:10px;">
                已加入 School Robot V2 计划
            </div>
        </div>
    </div>
    <script>
        if (typeof Vue === 'undefined') {
            document.body.innerHTML = '<div style="text-align:center;padding:50px;color:#d32f2f;">页面加载失败，请刷新重试或使用其他浏览器访问</div>';
        } else {
            const App = {
                mounted() {
                    this.getProvince();
                    // 弹窗只在首次加载显示
                    if (!localStorage.getItem('groupModalClosed')) {
                        this.showGroupModal = true;
                    }
                },
                methods: {
                    getProvince() {
                        fetch('?type=area')
                            .then(res => res.json())
                            .then(data => {
                                this.provinceList = data;
                                this.form.province = '';
                                this.majorList = [];
                                this.form.major = '';
                            });
                        this.high_text = "你的排名超过了大多数专业哦~";
                        this.middle_text = "你的排名可能不太合适";
                    },
                    getMajor() {
                        if (!this.form.province) {
                            this.majorList = [];
                            this.form.major = '';
                            this.loadingMajor = false;
                            return;
                        }

                        this.loadingMajor = true;
                        fetch(`?type=major&province=${this.form.province}`)
                            .then(res => res.json())
                            .then(data => {
                                this.majorList = data;
                                this.form.major = '';
                                this.loadingMajor = false;
                            })
                            .catch(error => {
                                console.error('获取科类数据失败:', error);
                                this.loadingMajor = false;
                            });
                        this.high_text = "你的排名超过了大多数专业哦~";
                        this.middle_text = "你的排名可能不太合适";
                    },
                    getRank() {
                        if (!this.form.province || !this.form.major) {
                            this.maxRank = 0;
                            this.minRank = 0;
                            return;
                        }
                        fetch(`?type=rank&province=${this.form.province}&major=${this.form.major}`)
                            .then(res => res.json())
                            .then(data => {
                                if (Array.isArray(data)) {
                                    this.maxRank = data[0];
                                    this.minRank = data[1];
                                } else {
                                    this.maxRank = 0;
                                    this.minRank = 0;
                                }
                            });
                        this.high_text = "你的排名超过了大多数专业哦~";
                        this.middle_text = "你的排名可能不太合适";
                    },
                    getSubject() {
                        if (this.form.rank == 0 || this.form.major == "" || this.form.province == "") {
                            this.high_text = "没有数据";
                            this.middle_text = "没有数据";
                            return;
                        }
                        this.high_text = "你的排名超过了大多数专业哦~";
                        this.middle_text = "你的排名可能不太合适";
                        fetch(
                            `?type=rank&province=${this.form.province}&major=${this.form.major}&rank=${this.form.rank}`
                        )
                            .then((response) => response.json())
                            .then((data) => {
                                this.subjectList = data;
                            });
                    },
                    onQuery() {
                        this.getRank();
                        this.getSubject();
                    },
                    closeGroupModal() {
                        this.showGroupModal = false;
                        localStorage.setItem('groupModalClosed', '1');
                    },
                },
                data() {
                    return {
                        provinceList: [],
                        majorList: [],
                        subjectList: {},
                        form: {
                            province: "",
                            major: "",
                            rank: 0,
                        },
                        maxRank: 0,
                        minRank: 0,
                        high_text: "没有数据",
                        middle_text: "没有数据",
                        showGroupModal: false,
                        loadingMajor: false,
                    };
                },
            };

            try {
                const app = Vue.createApp(App);
                app.mount("#app");
            } catch (error) {
                console.error('Vue 应用初始化失败:', error);
                document.getElementById('app').innerHTML = '<div style="text-align:center;padding:50px;color:#d32f2f;">应用初始化失败，请刷新页面重试</div>';
            }
        }

        // 隐藏加载指示器
        window.addEventListener('load', function () {
            setTimeout(function () {
                const loading = document.getElementById('loading');
                if (loading) {
                    loading.style.display = 'none';
                }
            }, 500);
        });
    </script>
</body>

</html>