<?php
$AreaType = array(
    '山东' => array('普通类')
);
$AreaScore = array(
    '山东' => array('普通类' => array(71818, 157763))
);
$Subject = array(
    '山东' => array(
        '普通类' => array(
            '医学影像学' => array('Num' => 4, 'MaxScore' => 552, 'MinScore' => 548, 'AvgScore' => 549.25, 'MaxRank' => 71818, 'MinRank' => 77422),
            '法学' => array('Num' => 2, 'MaxScore' => 546, 'MinScore' => 544, 'AvgScore' => 545.00, 'MaxRank' => 80420, 'MinRank' => 83459),
            '临床医学' => array('Num' => 4, 'MaxScore' => 548, 'MinScore' => 541, 'AvgScore' => 544.25, 'MaxRank' => 77422, 'MinRank' => 88208),
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 538, 'MinScore' => 535, 'AvgScore' => 536.75, 'MaxRank' => 93123, 'MinRank' => 98072),
            '临床药学' => array('Num' => 2, 'MaxScore' => 541, 'MinScore' => 533, 'AvgScore' => 537.00, 'MaxRank' => 88208, 'MinRank' => 101507),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 532, 'MinScore' => 532, 'AvgScore' => 532.00, 'MaxRank' => 103324, 'MinRank' => 103324),
            '汉语国际教育' => array('Num' => 2, 'MaxScore' => 532, 'MinScore' => 529, 'AvgScore' => 530.50, 'MaxRank' => 103324, 'MinRank' => 108695),
            '电子信息工程' => array('Num' => 2, 'MaxScore' => 531, 'MinScore' => 529, 'AvgScore' => 530.00, 'MaxRank' => 105100, 'MinRank' => 108695),
            '小学教育' => array('Num' => 2, 'MaxScore' => 524, 'MinScore' => 523, 'AvgScore' => 523.50, 'MaxRank' => 118011, 'MinRank' => 119957),
            '储能科学与工程' => array('Num' => 2, 'MaxScore' => 538, 'MinScore' => 521, 'AvgScore' => 529.50, 'MaxRank' => 93123, 'MinRank' => 123904),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 526, 'MinScore' => 521, 'AvgScore' => 523.50, 'MaxRank' => 114157, 'MinRank' => 123904),
            '建筑学' => array('Num' => 2, 'MaxScore' => 521, 'MinScore' => 521, 'AvgScore' => 521.00, 'MaxRank' => 123904, 'MinRank' => 123904),
            '预防医学' => array('Num' => 4, 'MaxScore' => 523, 'MinScore' => 520, 'AvgScore' => 521.00, 'MaxRank' => 119957, 'MinRank' => 125938),
            '英语' => array('Num' => 2, 'MaxScore' => 522, 'MinScore' => 520, 'AvgScore' => 521.00, 'MaxRank' => 121949, 'MinRank' => 125938),
            '药学' => array('Num' => 5, 'MaxScore' => 519, 'MinScore' => 516, 'AvgScore' => 517.20, 'MaxRank' => 127967, 'MinRank' => 134072),
            '智能医学工程' => array('Num' => 2, 'MaxScore' => 520, 'MinScore' => 512, 'AvgScore' => 516.00, 'MaxRank' => 125938, 'MinRank' => 142414),
            '护理学' => array('Num' => 4, 'MaxScore' => 514, 'MinScore' => 511, 'AvgScore' => 513.00, 'MaxRank' => 138189, 'MinRank' => 144528),
            '学前教育' => array('Num' => 4, 'MaxScore' => 514, 'MinScore' => 509, 'AvgScore' => 512.25, 'MaxRank' => 138189, 'MinRank' => 148798),
            '生物科学' => array('Num' => 4, 'MaxScore' => 513, 'MinScore' => 509, 'AvgScore' => 511.50, 'MaxRank' => 140290, 'MinRank' => 148798),
            '园艺' => array('Num' => 2, 'MaxScore' => 507, 'MinScore' => 506, 'AvgScore' => 506.50, 'MaxRank' => 153187, 'MinRank' => 155449),
            '动物科学' => array('Num' => 2, 'MaxScore' => 505, 'MinScore' => 505, 'AvgScore' => 505.00, 'MaxRank' => 157763, 'MinRank' => 157763),
            '环境科学' => array('Num' => 2, 'MaxScore' => 505, 'MinScore' => 505, 'AvgScore' => 505.00, 'MaxRank' => 157763, 'MinRank' => 157763)
        )
    )
);
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['type'])) {
        if ($_GET['type'] === 'area') {
            if (isset($_GET['province'])) {
                echo (json_encode($AreaType[$_GET['province']]));
            } else {
                echo (json_encode(array_keys($AreaType)));
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
    <script src="https://act.mcsog.top/js/vue.global.js"></script>
    <link rel="stylesheet" href="https://act.mcsog.top/css/index.css">
    <script src="https://act.mcsog.top/js/index.full.js"></script>
    <title>DLUSEC-志愿查询</title>
</head>

<body>
    <div id="app">
        <h1>曲阜师范大学志愿查询</h1>
        <p>此页面查询结果仅供参考，请勿过度依赖此页面结果，理性填报，数据来源于：<a href="2023年普通类录取情况统计表">曲阜师范大学2023级录取情况</a></p>
        <p>曲阜师范大学贴吧2024级迎新群：916020426</p>
        <el-form :model="form" :inline="true">
            <el-form-item label="省份">
                <el-select v-model="form.province" placeholder="请选择省份" style="width:150px">
                    <el-option label="山东" value="山东"></el-option>
                </el-select>
            </el-form-item>
            <el-form-item label="科类">
                <el-select v-model="form.major" placeholder="请选择科类" style="width:150px">
                    <el-option label="普通类" value="普通类"></el-option>
                </el-select>
            </el-form-item>
            <el-form-item label="位次">
                <el-input-number v-model="form.rank" :min="0" :max="5000000" @change="getSubject" style="width:150px" />
            </el-form-item>
        </el-form>
        <p>最高排名：{{maxRank}}&nbsp;最低排名：{{minRank}}</p>
        <h2>高于排名的专业</h2>
        <el-table v-if="form.rank>0" :data="subjectList.high_major" style="width: 100%" :empty-text="high_text">
            <el-table-column prop="Subject" label="专业"></el-table-column>
            <el-table-column prop="Num" label="招生人数"></el-table-column>
            <el-table-column prop="MaxScore" label="最高分"></el-table-column>
            <el-table-column prop="MinScore" label="最低分"></el-table-column>
            <el-table-column prop="AvgScore" label="平均分"></el-table-column>
            <el-table-column prop="MaxRank" label="最高排名"></el-table-column>
            <el-table-column prop="MinRank" label="最低排名"></el-table-column>
        </el-table>
        <h2>接近排名的专业</h2>
        <el-table v-if="form.rank>0" :data="subjectList.middle_major" style="width: 100%" :empty-text="middle_text">
            <el-table-column prop="Subject" label="专业"></el-table-column>
            <el-table-column prop="Num" label="招生人数"></el-table-column>
            <el-table-column prop="MaxScore" label="最高分"></el-table-column>
            <el-table-column prop="MinScore" label="最低分"></el-table-column>
            <el-table-column prop="AvgScore" label="平均分"></el-table-column>
            <el-table-column prop="MaxRank" label="最高排名"></el-table-column>
            <el-table-column prop="MinRank" label="最低排名"></el-table-column>
        </el-table>
        <h2>低于排名的专业</h2>
        <el-table v-if="form.rank>0" :data="subjectList.low_major" style="width: 100%" empty-text="没有数据">
            <el-table-column prop="Subject" label="专业"></el-table-column>
            <el-table-column prop="Num" label="招生人数"></el-table-column>
            <el-table-column prop="MaxScore" label="最高分"></el-table-column>
            <el-table-column prop="MinScore" label="最低分"></el-table-column>
            <el-table-column prop="AvgScore" label="平均分"></el-table-column>
            <el-table-column prop="MaxRank" label="最高排名"></el-table-column>
            <el-table-column prop="MinRank" label="最低排名"></el-table-column>
        </el-table>
        <el-image style="width: 400px; height: 400px" src="https://act.mcsog.top/qr.png"></el-image>
        <p>Powered by <a href="https://dlusec.cn/">曲阜师范大学网络安全协会</a>&amp;MCSOG&amp;<a href="https://mcsog.top/">f00001111</a></p>
        <p>已加入School Robot V2计划</p>
    </div>
    <script>
        const App = {
            mounted() {
                this.getProvince();
            },
            methods: {
                getProvince() {
                    this.provinceList = ['山东'];
                    this.high_text = "你的排名超过了大多数专业哦~";
                    this.middle_text = "你的排名可能不太合适";
                },
                getMajor() {
                    this.majorList = ['普通类'];
                    this.form.major = '普通类';
                    this.high_text = "你的排名超过了大多数专业哦~";
                    this.middle_text = "你的排名可能不太合适";
                    this.getRank();
                },
                getRank() {
                    this.maxRank = 71818;
                    this.minRank = 157763;
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
                            "?type=rank&province=山东&major=普通类&rank=" + this.form.rank
                        )
                        .then((response) => response.json())
                        .then((data) => {
                            this.subjectList = data;
                        });
                },
            },
            data() {
                return {
                    provinceList: {},
                    majorList: {},
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
        app.use(ElementPlus);
        app.mount("#app");
    </script>
</body>

</html>