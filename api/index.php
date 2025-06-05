<?php
$AreaType = array(
    '山东' => array('普通类'),
    '江苏' => array('普通类', '物理类'),
    '北京' => array('综合改革'),
    // 可继续扩展
);
$AreaScore = array(
    '山东' => array('普通类' => array(21199, 144676)),
    '江苏' => array('普通类' => array(10000, 80000), '物理类' => array(12000, 90000)),
    '北京' => array('综合改革' => array(5000, 30000)),
);
$Subject = array(
    '山东' => array(
        '普通类' => array(
            '汉语言文学（师范）' => array('Num' => 0, 'MaxScore' => 602, 'MinScore' => 572, 'AvgScore' => 575.38, 'MaxRank' => 21199, 'MinRank' => 47164),
            '法学' => array('Num' => 0, 'MaxScore' => 584, 'MinScore' => 567, 'AvgScore' => 569.28, 'MaxRank' => 34999, 'MinRank' => 52916),
            '思想政治教育（师范）' => array('Num' => 0, 'MaxScore' => 579, 'MinScore' => 566, 'AvgScore' => 568.50, 'MaxRank' => 39755, 'MinRank' => 54147),
            '英语（师范）' => array('Num' => 0, 'MaxScore' => 572, 'MinScore' => 561, 'AvgScore' => 563.61, 'MaxRank' => 47164, 'MinRank' => 60500),
            '历史学（师范）' => array('Num' => 0, 'MaxScore' => 576, 'MinScore' => 559, 'AvgScore' => 562.31, 'MaxRank' => 42812, 'MinRank' => 63234),
            '英语' => array('Num' => 0, 'MaxScore' => 566, 'MinScore' => 557, 'AvgScore' => 559.87, 'MaxRank' => 54147, 'MinRank' => 65942),
            '汉语国际教育（师范）' => array('Num' => 0, 'MaxScore' => 564, 'MinScore' => 557, 'AvgScore' => 559.38, 'MaxRank' => 56667, 'MinRank' => 65942),
            '教育学（师范）' => array('Num' => 0, 'MaxScore' => 569, 'MinScore' => 555, 'AvgScore' => 557.68, 'MaxRank' => 50519, 'MinRank' => 68861),
            '小学教育（师范）' => array('Num' => 0, 'MaxScore' => 569, 'MinScore' => 553, 'AvgScore' => 556.42, 'MaxRank' => 50519, 'MinRank' => 71855),
            '地理科学（师范）' => array('Num' => 0, 'MaxScore' => 572, 'MinScore' => 552, 'AvgScore' => 555.71, 'MaxRank' => 47164, 'MinRank' => 73415),
            '财务管理' => array('Num' => 0, 'MaxScore' => 563, 'MinScore' => 551, 'AvgScore' => 554.31, 'MaxRank' => 57955, 'MinRank' => 74897),
            '政治学与行政学' => array('Num' => 0, 'MaxScore' => 565, 'MinScore' => 550, 'AvgScore' => 552.56, 'MaxRank' => 55382, 'MinRank' => 76535),
            '文物与博物馆学' => array('Num' => 0, 'MaxScore' => 558, 'MinScore' => 547, 'AvgScore' => 550.91, 'MaxRank' => 64556, 'MinRank' => 81425),
            '数学与应用数学（师范）' => array('Num' => 0, 'MaxScore' => 571, 'MinScore' => 546, 'AvgScore' => 551.49, 'MaxRank' => 48309, 'MinRank' => 83093),
            '心理学（师范）' => array('Num' => 0, 'MaxScore' => 559, 'MinScore' => 545, 'AvgScore' => 548.54, 'MaxRank' => 63234, 'MinRank' => 84781),
            '电子信息工程' => array('Num' => 0, 'MaxScore' => 560, 'MinScore' => 544, 'AvgScore' => 546.86, 'MaxRank' => 61868, 'MinRank' => 86433),
            '电气工程及其自动化' => array('Num' => 0, 'MaxScore' => 554, 'MinScore' => 543, 'AvgScore' => 546.15, 'MaxRank' => 70326, 'MinRank' => 88128),
            '哲学' => array('Num' => 0, 'MaxScore' => 558, 'MinScore' => 543, 'AvgScore' => 546.39, 'MaxRank' => 64556, 'MinRank' => 88128),
            '数学与应用数学' => array('Num' => 0, 'MaxScore' => 561, 'MinScore' => 543, 'AvgScore' => 547.45, 'MaxRank' => 60500, 'MinRank' => 88128),
            '经济学' => array('Num' => 0, 'MaxScore' => 590, 'MinScore' => 542, 'AvgScore' => 545.48, 'MaxRank' => 29931, 'MinRank' => 89872),
            '计算机科学与技术（师范）' => array('Num' => 0, 'MaxScore' => 566, 'MinScore' => 541, 'AvgScore' => 544.41, 'MaxRank' => 54147, 'MinRank' => 91627),
            '数据科学与大数据技术' => array('Num' => 0, 'MaxScore' => 550, 'MinScore' => 541, 'AvgScore' => 543.14, 'MaxRank' => 76535, 'MinRank' => 91627),
            '通信工程' => array('Num' => 0, 'MaxScore' => 554, 'MinScore' => 541, 'AvgScore' => 542.82, 'MaxRank' => 70326, 'MinRank' => 91627),
            '文化产业管理' => array('Num' => 0, 'MaxScore' => 558, 'MinScore' => 539, 'AvgScore' => 543.58, 'MaxRank' => 64556, 'MinRank' => 95162),
            '新闻学' => array('Num' => 0, 'MaxScore' => 559, 'MinScore' => 539, 'AvgScore' => 542.51, 'MaxRank' => 63234, 'MinRank' => 95162),
            '网络工程' => array('Num' => 0, 'MaxScore' => 541, 'MinScore' => 538, 'AvgScore' => 538.38, 'MaxRank' => 91627, 'MinRank' => 96989),
            '网络空间安全' => array('Num' => 0, 'MaxScore' => 546, 'MinScore' => 538, 'AvgScore' => 539.74, 'MaxRank' => 83093, 'MinRank' => 96989),
            '光电信息科学与工程' => array('Num' => 0, 'MaxScore' => 544, 'MinScore' => 537, 'AvgScore' => 538.52, 'MaxRank' => 86433, 'MinRank' => 98857),
            '俄语' => array('Num' => 0, 'MaxScore' => 555, 'MinScore' => 536, 'AvgScore' => 541.81, 'MaxRank' => 68861, 'MinRank' => 100722),
            '翻译' => array('Num' => 0, 'MaxScore' => 558, 'MinScore' => 536, 'AvgScore' => 542.35, 'MaxRank' => 64556, 'MinRank' => 100722),
            '工商管理' => array('Num' => 0, 'MaxScore' => 547, 'MinScore' => 536, 'AvgScore' => 539.31, 'MaxRank' => 81425, 'MinRank' => 100722),
            '土地资源管理' => array('Num' => 0, 'MaxScore' => 548, 'MinScore' => 536, 'AvgScore' => 539.89, 'MaxRank' => 79758, 'MinRank' => 100722),
            '人工智能' => array('Num' => 0, 'MaxScore' => 543, 'MinScore' => 535, 'AvgScore' => 536.77, 'MaxRank' => 88128, 'MinRank' => 102601),
            '统计学' => array('Num' => 0, 'MaxScore' => 557, 'MinScore' => 535, 'AvgScore' => 539.49, 'MaxRank' => 65942, 'MinRank' => 102601),
            '日语（师范）' => array('Num' => 0, 'MaxScore' => 557, 'MinScore' => 534, 'AvgScore' => 538.44, 'MaxRank' => 65942, 'MinRank' => 104521),
            '自动化' => array('Num' => 0, 'MaxScore' => 549, 'MinScore' => 534, 'AvgScore' => 536.52, 'MaxRank' => 78109, 'MinRank' => 104521),
            '物流管理' => array('Num' => 0, 'MaxScore' => 548, 'MinScore' => 534, 'AvgScore' => 537.05, 'MaxRank' => 79758, 'MinRank' => 104521),
            '广播电视学' => array('Num' => 0, 'MaxScore' => 546, 'MinScore' => 534, 'AvgScore' => 536.67, 'MaxRank' => 83093, 'MinRank' => 104521),
            '国际经济与贸易' => array('Num' => 0, 'MaxScore' => 545, 'MinScore' => 534, 'AvgScore' => 536.02, 'MaxRank' => 84781, 'MinRank' => 104521),
            '软件工程' => array('Num' => 0, 'MaxScore' => 555, 'MinScore' => 534, 'AvgScore' => 538.60, 'MaxRank' => 68861, 'MinRank' => 104521),
            '新能源材料与器件' => array('Num' => 0, 'MaxScore' => 539, 'MinScore' => 533, 'AvgScore' => 534.62, 'MaxRank' => 95162, 'MinRank' => 106424),
            '数据科学' => array('Num' => 0, 'MaxScore' => 543, 'MinScore' => 531, 'AvgScore' => 535.00, 'MaxRank' => 88128, 'MinRank' => 110277),
            '旅游管理' => array('Num' => 0, 'MaxScore' => 538, 'MinScore' => 530, 'AvgScore' => 533.07, 'MaxRank' => 96989, 'MinRank' => 112306),
            '物理学（师范）' => array('Num' => 0, 'MaxScore' => 555, 'MinScore' => 530, 'AvgScore' => 537.88, 'MaxRank' => 68861, 'MinRank' => 112306),
            '法语' => array('Num' => 0, 'MaxScore' => 548, 'MinScore' => 528, 'AvgScore' => 531.78, 'MaxRank' => 79758, 'MinRank' => 116439),
            '生物工程' => array('Num' => 0, 'MaxScore' => 537, 'MinScore' => 526, 'AvgScore' => 530.81, 'MaxRank' => 98857, 'MinRank' => 120563),
            '智能感知工程' => array('Num' => 0, 'MaxScore' => 541, 'MinScore' => 526, 'AvgScore' => 530.08, 'MaxRank' => 91627, 'MinRank' => 120563),
            '金融工程' => array('Num' => 0, 'MaxScore' => 547, 'MinScore' => 525, 'AvgScore' => 528.63, 'MaxRank' => 81425, 'MinRank' => 122666),
            '化学工程与工艺' => array('Num' => 0, 'MaxScore' => 532, 'MinScore' => 524, 'AvgScore' => 526.38, 'MaxRank' => 108386, 'MinRank' => 124857),
            '材料化学' => array('Num' => 0, 'MaxScore' => 531, 'MinScore' => 522, 'AvgScore' => 524.69, 'MaxRank' => 110277, 'MinRank' => 129038),
            '化学（师范）' => array('Num' => 0, 'MaxScore' => 561, 'MinScore' => 521, 'AvgScore' => 532.08, 'MaxRank' => 60500, 'MinRank' => 131231),
            '生物科学（师范）' => array('Num' => 0, 'MaxScore' => 569, 'MinScore' => 518, 'AvgScore' => 534.05, 'MaxRank' => 50519, 'MinRank' => 137792),
            '教育技术学（师范）' => array('Num' => 0, 'MaxScore' => 549, 'MinScore' => 518, 'AvgScore' => 528.65, 'MaxRank' => 78109, 'MinRank' => 137792),
            '戏剧影视文学' => array('Num' => 0, 'MaxScore' => 540, 'MinScore' => 517, 'AvgScore' => 523.23, 'MaxRank' => 93374, 'MinRank' => 140041),
            '生态学' => array('Num' => 0, 'MaxScore' => 531, 'MinScore' => 515, 'AvgScore' => 519.30, 'MaxRank' => 110277, 'MinRank' => 144676),
        )
    ),
    '江苏' => array(
        '普通类' => array(
            '经济学' => array('Num' => 0, 'MaxScore' => 600, 'MinScore' => 570, 'AvgScore' => 580, 'MaxRank' => 10000, 'MinRank' => 20000),
        ),
        '物理类' => array(
            '物理学' => array('Num' => 0, 'MaxScore' => 590, 'MinScore' => 560, 'AvgScore' => 575, 'MaxRank' => 12000, 'MinRank' => 25000),
        ),
    ),
    '北京' => array(
        '综合改革' => array(
            '法学' => array('Num' => 0, 'MaxScore' => 610, 'MinScore' => 580, 'AvgScore' => 595, 'MaxRank' => 5000, 'MinRank' => 10000),
        ),
    ),
);
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
                        if ($value['MaxRank'] >= $rank) {
                            array_push($low_major, array('Subject' => $key) + $value);
                        } else if ($value['MinRank'] < $rank) {
                            array_push($high_major, array('Subject' => $key) + $value);
                        } else {
                            array_push($middle_major, array('Subject' => $key) + $value);
                        }
                    }
                    echo (json_encode(array('high_major' => $high_major, 'middle_major' => $middle_major, 'low_major' => $low_major)));
                } else {
                    echo (json_encode($AreaScore[$_GET['province']][$_GET['major']]));
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
    <title>Easy-QFNU-志愿查询</title>
    <style>
        :root {
            --main-color: #3A1A09;
            --accent-color: #4e2e1f;
            --bg-color: #f7f7fa;
            --card-bg: #fff;
            --shadow: 0 4px 24px rgba(58, 26, 9, 0.08);
            --radius: 18px;
            --text-color: #222;
            --border: 1px solid #ececec;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', 'PingFang SC', 'Hiragino Sans', Arial, sans-serif;
            background: var(--bg-color);
            color: var(--text-color);
            min-height: 100vh;
        }

        #app {
            max-width: 900px;
            margin: 0 auto;
            padding: 24px 16px 32px 16px;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 24px 20px;
            border: var(--border);
            margin-bottom: 16px;
        }

        h1,
        h2 {
            color: var(--main-color);
            letter-spacing: 1px;
        }

        a {
            color: var(--main-color);
            text-decoration: underline;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .form-row label {
            min-width: 60px;
            font-weight: 500;
        }

        .form-row select,
        .form-row input[type="number"] {
            border: var(--border);
            border-radius: 8px;
            padding: 6px 12px;
            font-size: 1rem;
            outline: none;
            transition: border 0.2s;
        }

        .form-row select:focus,
        .form-row input[type="number"]:focus {
            border-color: var(--main-color);
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-bottom: 16px;
        }

        th,
        td {
            padding: 10px 8px;
            text-align: center;
            border-bottom: 1px solid #f0f0f0;
        }

        th {
            background: #f5f3f2;
            color: var(--main-color);
            font-weight: 600;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .qr {
            display: flex;
            justify-content: center;
            margin: 24px 0;
        }

        .footer {
            text-align: center;
            color: #888;
            font-size: 0.98em;
            margin-top: 24px;
        }

        @media (max-width: 600px) {
            #app {
                padding: 8px 2vw;
            }

            .card {
                padding: 14px 6px;
            }

            h1 {
                font-size: 1.3em;
            }

            h2 {
                font-size: 1.1em;
            }

            .form-row {
                flex-direction: column;
                gap: 10px;
                align-items: stretch;
            }

            table,
            th,
            td {
                font-size: 0.95em;
            }

            .qr img {
                width: 90vw !important;
                height: auto !important;
                max-width: 350px;
            }
        }
    </style>
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
</head>

<body>
    <div id="app">
        <div class="card">
            <h1>曲阜师范大学志愿查询</h1>
            <p>此页面查询结果仅供参考，请勿过度依赖此页面结果，理性填报，数据来源于：<a href="https://zsb.qfnu.edu.cn/static/front/qfnu/basic/html_web/lnfs.html">曲阜师范大学本科招生网</a></p>
            <p>
                点击链接加入群聊
                <a href="https://qm.qq.com/q/T04jorATMQ" target="_blank" rel="noopener noreferrer">
                    【2025曲阜师范大学新生交流群】
                </a>
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
                <select id="major" v-model="form.major">
                    <option value="">请选择科类</option>
                    <option v-for="major in majorList" :key="major" :value="major">{{major}}</option>
                </select>
                <label for="rank">位次</label>
                <input id="rank" type="number" v-model="form.rank" min="0" max="5000000" @change="getSubject" placeholder="请输入位次" />
            </form>
            <div style="margin-top:12px;color:var(--main-color);font-weight:500;">
                最高排名：{{maxRank}}&nbsp;最低排名：{{minRank}}
            </div>
        </div>
        <div class="card">
            <h2>高于排名的专业</h2>
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
            <h2>接近排名的专业</h2>
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
            <h2>低于排名的专业</h2>
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
            <img src="qrcode.jpg" alt="交流群二维码" style="width: 400px; height: 400px;max-width:100%;border-radius:16px;box-shadow:0 2px 16px rgba(58,26,9,0.10);border:1px solid #eee;" />
        </div>
        <div class="footer">
            <p>Fork by W1ndys <a href="https://easy-qfnu.top">Easy-QFNU | W1ndys | 微信公众号【W1ndys】</a></p>
            <p style="color:#888;">如对网站有任何疑问或建议，欢迎联系微信公众号 <b>W1ndys</b> 咨询！</p>
            <p>Powered by <a href="https://dlusec.cn/">大理大学网络安全协会</a>&amp;MCSOG&amp;<a href="https://mcsog.top/">f00001111</a></p>
            <p>已加入School Robot V2计划</p>

        </div>
    </div>
    <script>
        const App = {
            mounted() {
                this.getProvince();
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
                        return;
                    }
                    fetch(`?type=major&province=${this.form.province}`)
                        .then(res => res.json())
                        .then(data => {
                            this.majorList = data;
                            this.form.major = '';
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
                    this.getSubject();
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
                };
            },
        };
        const app = Vue.createApp(App);
        app.mount("#app");
    </script>
</body>

</html>