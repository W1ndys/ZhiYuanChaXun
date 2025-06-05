<?php
$AreaType = array(
    '安徽' => array('文史', '理工'),
    '福建' => array('物理科目组', '历史科目组'),
    '甘肃' => array('理工'),
    '广东' => array('文史', '理工'),
    '广西' => array('文史', '理工'),
    '贵州' => array('文史', '理工'),
    '海南' => array('综合'),
    '河北' => array('物理科目组合', '历史科目组合'),
    '河南' => array('文科综合', '理科综合'),
    '湖北' => array('普通类（物理）', '普通类（历史）'),
    '湖南' => array('普通类(首选物理)', '普通类(首选历史)'),
    '吉林' => array('文史', '理工'),
    '江苏' => array('普通类（物理等科目类）', '普通类（历史等科目类）'),
    '江西' => array('文史', '理工'),
    '辽宁' => array('物理学科类', '历史学科类'),
    '内蒙古' => array('文科', '理科'),
    '宁夏' => array('文史', '理工'),
    '山东' => array('综合'),
    '陕西' => array('理工'),
    '四川' => array('文史', '理工'),
    '天津' => array('综合改革'),
    '新疆' => array('文史', '理工'),
    '云南' => array('文史', '理工'),
    '浙江' => array('综合改革'),
    '重庆' => array('物理', '历史')
);
$AreaScore = array(
    '安徽' => array('文史' => array(21507, 39145), '理工' => array(107169, 117339)),
    '福建' => array('物理科目组' => array(53669, 63399), '历史科目组' => array(11503, 16142)),
    '甘肃' => array('理工' => array(44138, 54520)),
    '广东' => array('文史' => array(34586, 46808), '理工' => array(142706, 154541)),
    '广西' => array('文史' => array(19051, 22993), '理工' => array(54884, 76832)),
    '贵州' => array('文史' => array(13730, 16609), '理工' => array(69159, 72629)),
    '海南' => array('综合' => array(11773, 18712)),
    '河北' => array('物理科目组合' => array(23490, 26504), '历史科目组合' => array(15634, 23489)),
    '河南' => array('文科综合' => array(9568, 134299), '理科综合' => array(48277, 356438)),
    '湖北' => array('普通类（物理）' => array(70145, 89970), '普通类（历史）' => array(16731, 22031)),
    '湖南' => array('普通类(首选物理)' => array(35896, 39165), '普通类(首选历史)' => array(118010, 132900)),
    '吉林' => array('文史' => array(9905, 11360), '理工' => array(38927, 43897)),
    '江苏' => array('普通类（物理等科目类）' => array(108392, 140150), '普通类（历史等科目类）' => array(29523, 39762)),
    '江西' => array('文史' => array(12466, 18081), '理工' => array(78608, 88259)),
    '辽宁' => array('物理学科类' => array(72840, 76392), '历史学科类' => array(13725, 14418)),
    '内蒙古' => array('文科' => array(7185, 10173), '理科' => array(34269, 48793)),
    '宁夏' => array('文史' => array(4243, 4679), '理工' => 16094, 18571),
    '山东' => array('综合' => array(136104, 219565)),
    '陕西' => array('理工' => array(24727, 69264)),
    '四川' => array('文史' => array(24257, 32293), '理工' => array(109026, 128538)),
    '天津' => array('综合改革' => array(18978, 35951)),
    '新疆' => array('文史' => array(0, 0), '理工' => array(0, 0)),
    '云南' => array('文史' => array(18406, 23045), '理工' => array(58130, 70627)),
    '浙江' => array('综合改革' => array(104400, 125644)),
    '重庆' => array('物理' => array(55410, 60060), '历史' => array(14460, 17010))
);
$Subject = array(
    '安徽' => array(
        '文史' => array(
            '自然地理与资源环境' => array('Num' => 5, 'MaxScore' => 495, 'MinScore' => 466, 'MaxRank' => 24969, 'MinRank' => 39145),
            '心理学(师范)' => array('Num' => 5, 'MaxScore' => 503, 'MinScore' => 466, 'MaxRank' => 21507, 'MinRank' => 39145)
        ),
        '理工' => array(
            '道路桥梁与渡河工程' => array('Num' => 5, 'MaxScore' => 475, 'MinScore' => 469, 'MaxRank' => 108249, 'MinRank' => 116181),
            '金融工程' => array('Num' => 5, 'MaxScore' => 476, 'MinScore' => 468, 'MaxRank' => 107169, 'MinRank' => 117339)
        )
    ),
    '福建' => array(
        '物理科目组' => array(
            '土木工程' => array('Num' => 5, 'MaxScore' => 502, 'MinScore' => 487, 'MaxRank' => 53669, 'MinRank' => 63399),
            '生物技术' => array('Num' => 5, 'MaxScore' => 493, 'MinScore' => 490, 'MaxRank' => 59028, 'MinRank' => 61531)
        ),
        '历史科目组' => array(
            '翻译' => array('Num' => 5, 'MaxScore' => 509, 'MinScore' => 486, 'MaxRank' => 11503, 'MinRank' => 16142)
        )
    ),
    '甘肃' => array(
        '理工' => array(
            '人工智能' => array('Num' => 5, 'MaxScore' => 392, 'MinScore' => 388, 'MaxRank' => 53445, 'MinRank' => 56155),
            '信息与计算科学' => array('Num' => 5, 'MaxScore' => 402, 'MinScore' => 395, 'MaxRank' => 48178, 'MinRank' => 52352),
            '地理信息科学' => array('Num' => 5, 'MaxScore' => 410, 'MinScore' => 392, 'MaxRank' => 44138, 'MinRank' => 53949),
            '生物制药' => array('Num' => 5, 'MaxScore' => 393, 'MinScore' => 391, 'MaxRank' => 52901, 'MinRank' => 54520)
        )
    ),
    '广东' => array(
        '文史' => array(
            '经济学(中外合作)' => array('Num' => 4, 'MaxScore' => 508, 'MinScore' => 490, 'MaxRank' => 34586, 'MinRank' => 46808)
        ),
        '理工' => array(
            '土木工程(中外合作)' => array('Num' => 5, 'MaxScore' => 493, 'MinScore' => 492, 'MaxRank' => 151566, 'MinRank' => 154541),
            '生物技术(中外合作)' => array('Num' => 4, 'MaxScore' => 499, 'MinScore' => 494, 'MaxRank' => 142706, 'MinRank' => 151565)
        )
    ),
    '广西' => array(
        '文史' => array(
            '经济学' => array('Num' => 5, 'MaxScore' => 504, 'MinScore' => 497, 'MaxRank' => 19051, 'MinRank' => 21868),
            '社会工作' => array('Num' => 5, 'MaxScore' => 503, 'MinScore' => 494, 'MaxRank' => 19388, 'MinRank' => 22993)
        ),
        '理工' => array(
            '地理信息科学' => array('Num' => 5, 'MaxScore' => 450, 'MinScore' => 437, 'MaxRank' => 64597, 'MinRank' => 74637),
            '生物制药' => array('Num' => 5, 'MaxScore' => 465, 'MinScore' => 434, 'MaxRank' => 54884, 'MinRank' => 76832)
        )
    ),
    '贵州' => array(
        '文史' => array(
            '小学教育(师范)' => array('Num' => 5, 'MaxScore' => 533, 'MinScore' => 526, 'MaxRank' => 13730, 'MinRank' => 16609)
        ),
        '理工' => array(
            '信息与计算科学' => array('Num' => 5, 'MaxScore' => 432, 'MinScore' => 427, 'MaxRank' => 69159, 'MinRank' => 72629)
        )
    ),
    '海南' => array(
        '综合' => array(
            '工商管理' => array('Num' => 5, 'MaxScore' => 579, 'MinScore' => 569, 'MaxRank' => 15213, 'MinRank' => 17601),
            '学前教育(师范)' => array('Num' => 5, 'MaxScore' => 597, 'MinScore' => 567, 'MaxRank' => 11773, 'MinRank' => 18046),
            '应用化学' => array('Num' =>5, 'MaxScore' => 578, 'MinScore' => 564, 'MaxRank' => 15428, 'MinRank' => 18712 )
        )
    ),
    '河北' => array(
        '物理科目组合' => array(
            '金融工程' => array('Num' => 6, 'MaxScore' => 511, 'MinScore' => 505, 'MaxRank' => 23490, 'MinRank' => 26504)
        ),
        '历史科目组合' => array(
            '社会学' => array('Num' => 7, 'MaxScore' => 533, 'MinScore' => 512, 'MaxRank' => 15634, 'MinRank' => 23489)
        )
    ),
    '河南' => array(
        '文科综合' => array(
            '思想政治教育(师范)' => array('Num' => 165, 'MaxScore' => 572, 'MinScore' => 558, 'MaxRank' => 12361, 'MinRank' => 18371),
            '法学' => array('Num' => 105, 'MaxScore' => 574, 'MinScore' => 558, 'MaxRank' => 11649, 'MinRank' => 18371),
            '社会工作' => array('Num' => 23, 'MaxScore' => 547, 'MinScore' => 536, 'MaxRank' => 23832, 'MinRank' => 31297),
            '社会学' => array('Num' => 23, 'MaxScore' => 551, 'MinScore' => 536, 'MaxRank' => 21541, 'MinRank' => 31297),
            '汉语言文学(师范)' => array('Num' => 205, 'MaxScore' => 579, 'MinScore' => 568, 'MaxRank' => 9568, 'MinRank' => 13933),
            '汉语国际教育' => array('Num' => 50, 'MaxScore' => 557, 'MinScore' => 545, 'MaxRank' => 25536, 'MinRank' => 25536),
            '汉语言文学(创意写作方向)' => array('Num' => 40, 'MaxScore' => 574, 'MinScore' => 561, 'MaxRank' => 11313, 'MinRank' => 16864),
            '英语(师范)' => array('Num' => 135, 'MaxScore' => 576, 'MinScore' => 558, 'MaxRank' => 10637, 'MinRank' => 18371),
            '日语' => array('Num' => 30, 'MaxScore' => 547, 'MinScore' => 537, 'MaxRank' => 23832, 'MinRank' => 30602),
            '翻译' => array('Num' => 10, 'MaxScore' => 548, 'MinScore' => 540, 'MaxRank' => 23283, 'MinRank' => 28646),
            '地理科学(师范)' => array('Num' => 95, 'MaxScore' => 571, 'MinScore' => 558, 'MaxRank' => 12362, 'MinRank' => 18371),
            '小学教育' => array('Num' => 2, 'MaxScore' => 541, 'MinScore' => 541, 'MaxRank' => 28035, 'MinRank' => 28035),
            '旅游管理类' => array('Num' => 2, 'MaxScore' => 541, 'MinScore' => 533, 'MaxRank' => 28035, 'MinRank' => 33412),
            '自然地理与资源环境' => array('Num' => 5, 'MaxScore' => 552, 'MinScore' => 546, 'MaxRank' => 21012, 'MinRank' => 24938),
            '经济学' => array('Num' => 103, 'MaxScore' => 553, 'MinScore' => 536, 'MaxRank' => 20465, 'MinRank' => 31297),
            '国际经济与贸易' => array('Num' => 15, 'MaxScore' => 546, 'MinScore' => 537, 'MaxRank' => 24387, 'MinRank' => 30602),
            '工商管理' => array('Num' => 40, 'MaxScore' => 549, 'MinScore' => 537, 'MaxRank' => 22699, 'MinRank' => 30602),
            '会计学' => array('Num' => 60, 'MaxScore' => 568, 'MinScore' => 558, 'MaxRank' => 13525, 'MinRank' => 18371),
            '教育学(师范)' => array('Num' => 60, 'MaxScore' => 568, 'MinScore' => 558, 'MaxRank' => 13525, 'MinRank' => 18371),
            '心理学(师范)' => array('Num' => 35, 'MaxScore' => 555, 'MinScore' => 536, 'MaxRank' => 19380, 'MinRank' => 31297),
            '学前教育(师范)' => array('Num' => 10, 'MaxScore' => 550, 'MinScore' => 536, 'MaxRank' => 22133, 'MinRank' => 31297),
            '历史学(师范)' => array('Num' => 185, 'MaxScore' => 575 , 'MinScore' => 558, 'MaxRank' => 10981, 'MinRank' => 18371),
            '经济学(中外合作)' => array('Num' => 25, 'MaxScore' => 543, 'MinScore' => 526, 'MaxRank' => 26175, 'MinRank' => 38692),
            '小学教育(师范)' => array('Num' => 19, 'MaxScore' => 556, 'MinScore' => 547, 'MaxRank' => 18862, 'MinRank' => 24386),
            '护理学' => array('Num' => 52, 'MaxScore' => 546, 'MinScore' => 531, 'MaxRank' => 24387, 'MinRank' => 34873),
            '软件技术(专科)' => array('Num' => 200, 'MaxScore' => 485, 'MinScore' => 435, 'MaxRank' => 75937, 'MinRank' => 134299),
            '计算机网络技术(专科)' => array('Num' => 200, 'MaxScore' => 476, 'MinScore' => 435, 'MaxRank' => 85702, 'MinRank' => 134299),
            '计算机应用技术(专科)' => array('Num' => 200, 'MaxScore' => 498, 'MinScore' => 451, 'MaxRank' => 62432, 'MinRank' => 115265)
        ),
        '理科综合' => array(
            '数学与应用数学(国家专项计划)' => array('Num' => 20, 'MaxScore' => 559, 'MinScore' => 550, 'MaxRank' => 58305, 'MinRank' => 70991),
            '数学与应用数学(师范)' => array('Num' => 170, 'MaxScore' => 568, 'MinScore' => 550, 'MaxRank' => 48277, 'MinRank' => 70991),
            '统计学' => array('Num' => 55, 'MaxScore' => 531, 'MinScore' => 509, 'MaxRank' => 96634, 'MinRank' => 133928),
            '信息与计算科学' => array('Num' => 20, 'MaxScore' => 529, 'MinScore' => 520, 'MaxRank' => 99674, 'MinRank' => 115516),
            '物理学(师范)' => array('Num' => 130, 'MaxScore' => 566, 'MinScore' => 542, 'MaxRank' => 50410, 'MinRank' => 81975),
            '物理学(地方专项计划)' => array('Num' => 10, 'MaxScore' => 550, 'MinScore' => 533, 'MaxRank' => 69663, 'MinRank' => 95116),
            '电子科学与技术' => array('Num' => 30, 'MaxScore' => 531, 'MinScore' => 517, 'MaxRank' => 96634, 'MinRank' => 120414),
            '材料物理' => array('Num' => 30, 'MaxScore' => 539, 'MinScore' => 501, 'MaxRank' => 84885, 'MinRank' => 147888),
            '化学(师范)' => array('Num' => 200, 'MaxScore' => 564, 'MinScore' => 539, 'MaxRank' => 52598, 'MinRank' => 86255),
            '应用化学' => array('Num' => 9, 'MaxScore' => 533, 'MinScore' => 517, 'MaxRank' => 93678, 'MinRank' => 120414),
            '材料化学' => array('Num' => 30, 'MaxScore' => 520, 'MinScore' => 503, 'MaxRank' => 113939, 'MinRank' => 144399),
            '化学工程与工艺' => array('Num' => 30, 'MaxScore' => 520, 'MinScore' => 501, 'MaxRank' => 113939, 'MinRank' => 147888),
            '英语(师范)' => array('Num' => 45, 'MaxScore' => 567, 'MinScore' => 549, 'MaxRank' => 49344, 'MinRank' => 72337),
            '日语' => array('Num' => 15, 'MaxScore' => 516, 'MinScore' => 502, 'MaxRank' => 120415, 'MinRank' => 146079),
            '翻译' => array('Num' => 5, 'MaxScore' => 525, 'MinScore' => 512, 'MaxRank' => 105905, 'MinRank' => 128863),
            '生物科学(师范)' => array('Num' => 160, 'MaxScore' => 561, 'MinScore' => 539, 'MaxRank' => 56000, 'MinRank' => 86255),
            '生物科学(地方专项计划)' => array('Num' => 10, 'MaxScore' => 538, 'MinScore' => 531, 'MaxRank' => 86256, 'MinRank' => 98157),
            '生物技术' => array('Num' => 48, 'MaxScore' => 525, 'MinScore' => 501, 'MaxRank' => 105905, 'MinRank' => 147888),
            '生物制药' => array('Num' => 30, 'MaxScore' => 523, 'MinScore' => 504, 'MaxRank' => 109014, 'MinRank' => 142648),
            '茶学' => array('Num' => 30, 'MaxScore' => 516, 'MinScore' => 501, 'MaxRank' => 120415, 'MinRank' => 147888),
            '食品科学与工程' => array('Num' => 30, 'MaxScore' => 522, 'MinScore' => 502, 'MaxRank' => 110643, 'MinRank' => 146079),
            '生物信息学' => array('Num' => 30, 'MaxScore' => 524, 'MinScore' => 501, 'MaxRank' => 107464, 'MinRank' => 147888),
            '地理科学(师范)' => array('Num' => 95, 'MaxScore' => 554, 'MinScore' => 539, 'MaxRank' => 64506, 'MinRank' => 86255),
            '地理信息科学' => array('Num' => 5, 'MaxScore' => 528, 'MinScore' => 516, 'MaxRank' => 101261, 'MinRank' => 122128),
            '自然地理与资源环境' => array('Num' => 11, 'MaxScore' => 516, 'MinScore' => 503, 'MaxRank' => 120415,'MinRank' => 144399),
            '测绘工程' => array('Num' => 28, 'MaxScore' => 517, 'MinScore' => 501, 'MaxRank' => 118761, 'MinRank' => 147888),
            '环境科学与工程' => array('Num' => 27, 'MaxScore' => 514, 'MinScore' => 501, 'MaxRank' => 123772, 'MinRank' => 147888),
            '土木工程' => array('Num' => 78, 'MaxScore' => 518, 'MinScore' => 502, 'MaxRank' => 117139, 'MinRank' => 146079),
            '工程管理' => array('Num' => 21, 'MaxScore' => 518, 'MinScore' => 501, 'MaxRank' => 117139, 'MinRank' => 147888),
            '道路桥梁与渡河工程' => array('Num' => 20, 'MaxScore' => 519, 'MinScore' => 502, 'MaxRank' => 115517, 'MinRank' => 146079),
            '计算机与科学技术(师范)' => array('Num' => 120, 'MaxScore' => 550, 'MinScore' => 539, 'MaxRank' => 69663, 'MinRank' => 86255),
            '物联网工程(软件类)' => array('Num' => 100, 'MaxScore' => 512, 'MinScore' => 492, 'MaxRank' => 127156, 'MinRank' => 163896),
            '经济学' => array('Num' => 35, 'MaxScore' => 525, 'MinScore' => 501, 'MaxRank' => 105905, 'MinRank' => 147888),
            '国际经济与贸易' => array('Num' => 25, 'MaxScore' => 520, 'MinScore' => 502, 'MaxRank' => 113939, 'MinRank' => 146079),
            '金融工程' => array('Num' => 14, 'MaxScore' => 519, 'MinScore' => 502, 'MaxRank' => 115517, 'MinRank' => 146079),
            '工商管理' => array('Num' => 20, 'MaxScore' => 518, 'MinScore' => 502, 'MaxRank' => 117139, 'MinRank' => 146079),
            '会计学' => array('Num' => 20, 'MaxScore' => 550, 'MinScore' => 540, 'MaxRank' => 69663, 'MinRank' => 84884),
            '心理学(师范)' => array('Num' => 34, 'MaxScore' => 530, 'MinScore' => 501, 'MaxRank' => 98158, 'MinRank' => 147888),
            '学前教育(师范)' => array('Num' => 25, 'MaxScore' => 519, 'MinScore' => 501, 'MaxRank' => 115517, 'MinRank' => 84884),
            '教育技术学' => array('Num' => 50, 'MaxScore' => 526, 'MinScore' => 501, 'MaxRank' => 104361, 'MinRank' => 147888),
            '土木工程(中外合作)' => array('Num' => 70, 'MaxScore' => 499, 'MinScore' => 471, 'MaxRank' => 149645, 'MinRank' => 202505),
            '生物技术(中外合作)' => array('Num' => 86, 'MaxScore' => 498, 'MinScore' => 471, 'MaxRank' => 151420, 'MinRank' => 202505),
            '经济学(中外合作)' => array('Num' => 56, 'MaxScore' => 500, 'MinScore' => 471, 'MaxRank' => 147889, 'MinRank' => 151420),
            '小学教育(师范)' => array('Num' => 42, 'MaxScore' => 531, 'MinScore' => 510, 'MaxRank' => 96634, 'MinRank' => 132206),
            '小学教育(数学方向师范)' => array('Num' => 30, 'MaxScore' => 537, 'MinScore' => 514, 'MaxRank' => 87739, 'MinRank' => 125465),
            '护理学' => array('Num' => 103, 'MaxScore' => 530, 'MinScore' => 496, 'MaxRank' => 98158, 'MinRank' => 156724),
            '软件工程(软件类)' => array('Num' => 400, 'MaxScore' => 516, 'MinScore' => 479, 'MaxRank' => 120415, 'MinRank' => 187640),
            '数据科学与大数据技术(软件类)' => array('Num' => 400, 'MaxScore' => 504, 'MinScore' => 474, 'MaxRank' => 140855, 'MinRank' => 197003),
            '新能源材料与器件' => array('Num' => 150,'MaxScore' => 518, 'MinScore' => 469, 'MaxRank' => 117139, 'MinRank' => 206385),
            '电气工程及其自动化' => array('Num' => 150, 'MaxScore' => 525, 'MinScore' => 486, 'MaxRank' => 105905, 'MinRank' => 174777),
            '遥感科学与技术' => array('Num' => 200, 'MaxScore' => 526, 'MinScore' => 468, 'MaxRank' => 104361, 'MinRank' => 208260),
            '环境工程' => array('Num' => 200, 'MaxScore' => 510, 'MinScore' => 468, 'MaxRank' => 130501, 'MinRank' => 208260),
            '人工智能' => array('Num' => 195, 'MaxScore' => 524, 'MinScore' => 469, 'MaxRank' => 107464, 'MinRank' => 206385),
            '电子信息工程' => array('Num' => 150, 'MaxScore' => 528, 'MinScore' => 479, 'MaxRank' => 101261, 'MinRank' => 187640),
            '新能源科学与工程' => array('Num' => 150, 'MaxScore' => 525, 'MinScore' => 469, 'MaxRank' => 105905, 'MinRank' => 206385),
            '建筑工程技术(专科)' => array('Num' => 300, 'MaxScore' => 465, 'MinScore' => 414, 'MaxRank' => 212193, 'MinRank' => 311112),
            '软件技术(专科)' => array('Num' => 300, 'MaxScore' => 428, 'MinScore' => 387, 'MaxRank' => 283405, 'MinRank' => 358073),
            '计算机网络技术(专科)' => array('Num' => 300, 'MaxScore' => 441, 'MinScore' => 387, 'MaxRank' => 258526, 'MinRank' => 358073),
            '计算机应用技术(专科)' => array('Num' => 300, 'MaxScore' => 454, 'MinScore' => 403, 'MaxRank' => 233550, 'MinRank' => 330867)
        )
    ),
    '湖北' => array(
        '普通类（物理）' => array(
            '土木工程' => array('Num' => 5, 'MaxScore' => 513, 'MinScore' => 484, 'MaxRank' => 70145, 'MinRank' => 89970)
        ),
        '普通类（历史）' => array(
            '工商管理' => array('Num' => 5, 'MaxScore' => 514, 'MinScore' => 496, 'MaxRank' => 16731, 'MinRank' => 22031)
        )
    ),
    '湖南' => array(
        '普通类(首选物理)' => array(
            '土木工程(中外合作)' => array('Num' => 10, 'MaxScore' => 462, 'MinScore' => 449, 'MaxRank' => 118010, 'MinRank' => 132900)
        ),
        '普通类(首选历史)' => array(
            '经济学(中外合作)' => array('Num' => 10, 'MaxScore' => 464, 'MinScore' => 459, 'MaxRank' => 35896, 'MinRank' => 39165)
        )
    ),
    '吉林' => array(
        '文史' => array(
            '翻译' => array('Num' => 5, 'MaxScore' => 428, 'MinScore' => 418, 'MaxRank' => 9905, 'MinRank' => 11360)
        ),
        '理工' => array(
            '工程管理' => array('Num' => 5, 'MaxScore' => 383, 'MinScore' => 366, 'MaxRank' => 38927, 'MinRank' => 43897)
        )
    ),
    '江苏' => array(
        '普通类（物理等科目类）' => array(
            '金融工程' => array('Num' => 5, 'MaxScore' => 518, 'MinScore' => 507, 'MaxRank' => 108392, 'MinRank' => 120486),
            '生物技术(中外合作)' => array('Num' => 10, 'MaxScore' => 492, 'MinScore' => 487, 'MaxRank' => 134437, 'MinRank' => 140150)
        ),
        '普通类（历史等科目类）' => array(
            '工商管理' => array('Num' => 5, 'MaxScore' => 522, 'MinScore' => 510, 'MaxRank' => 29523, 'MinRank' => 35865),
            '经济学(中外合作)' => array('Num' => 10, 'MaxScore' => 510, 'MinScore' => 502, 'MaxRank' => 35366, 'MinRank' => 39762)
        )
    ),
    '江西' => array(
        '文史' => array(
            '经济学' => array('Num' => 5, 'MaxScore' => 539, 'MinScore' => 526, 'MaxRank' => 12466, 'MinRank' => 18081),
            '心理学(师范)' => array('Num' => 5, 'MaxScore' => 529, 'MinScore' => 526, 'MaxRank' => 16335, 'MinRank' => 18081)
        ),
        '理工' => array(
            '地理信息科学' => array('Num' => 5, 'MaxScore' => 491, 'MinScore' => 485, 'MaxRank' => 78608, 'MinRank' => 86138),
            '道路桥梁与渡河工程' => array('Num' => 5, 'MaxScore' => 486, 'MinScore' => 483, 'MaxRank' => 83922, 'MinRank' => 88259)
        )
    ),
    '辽宁' => array(
        '物理学科类' => array(
            '土木工程(中外合作)' => array('Num' => 5, 'MaxScore' => 437, 'MinScore' => 431, 'MaxRank' => 72840, 'MinRank' => 76392)
        ),
        '历史学科类' => array(
            '会计学(中外合作)' => array('Num' => 5, 'MaxScore' => 486, 'MinScore' => 483, 'MaxRank' => 13725, 'MinRank' => 14418)
        )
    ),
    '内蒙古' => array(
        '文科' => array(
            '心理学(师范)' => array('Num' => 5, 'MaxScore' => 464, 'MinScore' => 441, 'MaxRank' => 7185, 'MinRank' => 10173)
        ),
        '理科' => array(
            '生物技术' => array('Num' => 5, 'MaxScore' => 414, 'MinScore' => 368, 'MaxRank' => 34269, 'MinRank' => 48793)
        )
    ),
    '宁夏' => array(
        '文史' => array(
            '学前教育(师范)' => array('Num' => 5, 'MaxScore' => 474, 'MinScore' => 470, 'MaxRank' => 4243, 'MinRank' => 4679)
        ),
        '理工' => array(
            '地理信息科学' => array('Num' => 5, 'MaxScore' => 385, 'MinScore' => 374, 'MaxRank' => 16094, 'MinRank' => 18571)
        )
    ),
    '山东' => array(
        '综合' => array(
            '应用化学' => array('Num' => 5, 'MaxScore' => 514, 'MinScore' => 496, 'MaxRank' => 136104, 'MinRank' => 178401),
            '道路桥梁与渡河工程' => array('Num' => 5, 'MaxScore' => 493, 'MinScore' => 489, 'MaxRank' => 183161, 'MinRank' => 195066),
            '土木工程(中外合作)' => array('Num' => 10, 'MaxScore' => 486, 'MinScore' => 479, 'MaxRank' => 199903, 'MinRank' => 219565),
            '生物技术(中外合作)' => array('Num' => 10, 'MaxScore' => 486, 'MinScore' => 484, 'MaxRank' => 199903, 'MinRank' => 207177),
            '自然地理与资源环境' => array('Num' => 5, 'MaxScore' => 511, 'MinScore' => 505, 'MaxRank' => 142415, 'MinRank' => 157763),
        )
    ),
    '陕西' => array(
        '理工' => array(
            '应用化学' => array('Num' => 6, 'MaxScore' => 431, 'MinScore' => 420, 'MaxRank' => 51742, 'MinRank' => 61607),
            '生物技术' => array('Num' => 7, 'MaxScore' => 425, 'MinScore' => 419, 'MaxRank' => 64932, 'MinRank' => 66276),
            '工程管理' => array('Num' => 7, 'MaxScore' => 420, 'MinScore' => 418, 'MaxRank' => 62921, 'MinRank' => 66881)
        )
    ),
    '四川' => array(
        '文史' => array(
            '经济学' => array('Num' => 5, 'MaxScore' => 520, 'MinScore' => 510, 'MaxRank' => 24257, 'MinRank' => 31513),
            '学前教育(师范)' => array('Num' => 5, 'MaxScore' => 517, 'MinScore' => 509, 'MaxRank' => 26147, 'MinRank' => 32293)
        ),
        '理工' => array(
            '生物制药' => array('Num' => 5, 'MaxScore' => 491, 'MinScore' => 483, 'MaxRank' => 116238, 'MinRank' => 127255),
            '国际经济与贸易' => array('Num' => 5, 'MaxScore' => 497, 'MinScore' => 482, 'MaxRank' => 109026, 'MinRank' => 128538)
        )
    ),
    '天津' => array(
        '综合改革' => array(
            '小学教育(师范)' => array('Num' => 4, 'MaxScore' => 571, 'MinScore' => 555, 'MaxRank' => 18978, 'MinRank' => 23602),
            '土木工程' => array('Num' => 4, 'MaxScore' => 519, 'MinScore' => 510, 'MaxRank' => 33187, 'MinRank' => 35951)
        )
    ),
    '新疆' => array(
        '文史' => array(
            '心理学(师范单列)' => array('Num' => 5, 'MaxScore' => 406, 'MinScore' => 395, 'MaxRank' => 0, 'MinRank' => 0),
            '心理学(师范)' => array('Num' => 5, 'MaxScore' => 455, 'MinScore' => 455, 'MaxRank' => 0, 'MinRank' => 0),
            '学前教育(师范)' => array('Num' => 5, 'MaxScore' => 437, 'MinScore' => 418, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '理工' => array(
            '应用化学(单列)' => array('Num' => 2, 'MaxScore' => 380, 'MinScore' => 374, 'MaxRank' => 0, 'MinRank' => 0),
            '土木工程(单列)' => array('Num' => 2, 'MaxScore' => 377, 'MinScore' => 375, 'MaxRank' => 0, 'MinRank' => 0),
            '学前教育(师范单列)' => array('Num' => 2, 'MaxScore' => 382, 'MinScore' => 382, 'MaxRank' => 0, 'MinRank' => 0),
            '学前教育(师范)' => array('Num' => 2, 'MaxScore' => 425, 'MinScore' => 418, 'MaxRank' => 0, 'MinRank' => 0),
            '生物技术' => array('Num' => 2, 'MaxScore' => 372, 'MinScore' => 360, 'MaxRank' => 0, 'MinRank' => 0),
            '土木工程' => array('Num' => 2, 'MaxScore' => 367, 'MinScore' => 360, 'MaxRank' => 0, 'MinRank' => 0)
        )
    ),
    '云南' => array(
        '文史' => array(
            '翻译' => array('Num' => 5, 'MaxScore' => 516, 'MinScore' => 506, 'MaxRank' => 18406, 'MinRank' => 23045)
        ),
        '理工' => array(
            '生物制药' => array('Num' => 5, 'MaxScore' => 467, 'MinScore' => 449, 'MaxRank' => 58130, 'MinRank' => 70627)
        )
    ),
    '浙江' => array(
        '综合改革' => array(
            '生物技术(中外合作)' => array('Num' => 5, 'MaxScore' => 549, 'MinScore' => 538, 'MaxRank' => 111551, 'MinRank' => 125644),
            '经济学(中外合作)' => array('Num' => 5, 'MaxScore' => 555, 'MinScore' => 547, 'MaxRank' => 104400, 'MinRank' => 115121)
    )
    ),
    '重庆' => array(
        '物理' => array(
            '国际经济与贸易' => array('Num' => 5, 'MaxScore' => 469, 'MinScore' => 461, 'MaxRank' => 55410, 'MinRank' => 60060)
        ),
        '历史' => array(
            '工商管理' => array('Num' => 5, 'MaxScore' => 482, 'MinScore' => 472, 'MaxRank' => 14460, 'MinRank' => 17010)
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
                            array_push($low_major, array('Subject'=>$key)+$value);
                        } else if ($value['MinRank'] < $rank) {
                            array_push($high_major, array('Subject'=>$key)+$value);
                        } else {
                            array_push($middle_major, array('Subject'=>$key)+$value);
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
    <!-- import CSS -->
    <link rel="stylesheet" href="https://act.mcsog.top/css/index.css">
    <!-- import JavaScript -->
    <script src="https://act.mcsog.top/js/index.full.js"></script>
    <title>XYNUSEC-志愿查询</title>
  </head>
  <body>
    <div id="app">
      <h1>信阳师范大学志愿查询</h1>
      <p>此页面查询结果仅供参考，请勿过度依赖此页面结果，理性填报，<em>对口专业仅有分数参考价值</em>，数据来源于：<a href="https://zs.xynu.edu.cn/lnsj.htm">信阳师范大学2023级录取情况</a></p>
      <p>信阳师范大学贴吧2024级综合迎新群：793681396</p>
      <el-form :model="form" :inline="true">
        <el-form-item label="省份">
          <el-select v-model="form.province" placeholder="请选择省份" @change="getMajor" style="width:150px">
            <el-option
              v-for="item in provinceList"
              :key="item"
              :label="item"
              :value="item"
            ></el-option>
          </el-select>
        </el-form-item>
        <el-form-item label="科类">
          <el-select v-model="form.major" placeholder="请选择科类" @change="getRank" style="width:150px">
            <el-option
              v-for="item in majorList"
              :key="item"
              :label="item"
              :value="item"
            ></el-option>
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
        <el-table-column prop="MaxRank" label="最高排名"></el-table-column>
        <el-table-column prop="MinRank" label="最低排名"></el-table-column>
      </el-table>
      <h2>接近排名的专业</h2>
        <el-table v-if="form.rank>0" :data="subjectList.middle_major" style="width: 100%" :empty-text="middle_text">
            <el-table-column prop="Subject" label="专业"></el-table-column>
            <el-table-column prop="Num" label="招生人数"></el-table-column>
            <el-table-column prop="MaxScore" label="最高分"></el-table-column>
            <el-table-column prop="MinScore" label="最低分"></el-table-column>
            <el-table-column prop="MaxRank" label="最高排名"></el-table-column>
            <el-table-column prop="MinRank" label="最低排名"></el-table-column>
        </el-table>
        <h2>低于排名的专业</h2>
        <el-table v-if="form.rank>0" :data="subjectList.low_major" style="width: 100%" empty-text="没有数据">
            <el-table-column prop="Subject" label="专业"></el-table-column>
            <el-table-column prop="Num" label="招生人数"></el-table-column>
            <el-table-column prop="MaxScore" label="最高分"></el-table-column>
            <el-table-column prop="MinScore" label="最低分"></el-table-column>
            <el-table-column prop="MaxRank" label="最高排名"></el-table-column>
            <el-table-column prop="MinRank" label="最低排名"></el-table-column>
        </el-table>
        <el-image style="width: 400px; height: 400px" src="https://download.imxbt.cn/upload/fcb433e892924f3282c7a96638c77743.png"></el-image>
        <p>Run by <a href="https://www.imxbt.cn/">SfTian</a> 任何意见整改请发送邮件到 <a href="mailto://xibotian@xynu.edu.cn">xibotian@xynu.edu.cn</a></p>
        <p>Powered by <a href="https://dlusec.cn/">大理大学网络安全协会</a>&amp;MCSOG&amp;<a href="https://mcsog.top/">f00001111</a></p>
        <p>已加入School Robot V2计划</p>
    </div>
    <script>
      const App = {
        mounted() {
          this.getProvince();
        },
        methods: {
            getProvince() {
                fetch("https://act.imxbt.cn/index.php?type=area")
                .then((response) => response.json())
                .then((data) => {
                    this.provinceList = data;
                    this.high_text = "你的排名超过了大多数专业哦~";
                    this.middle_text = "你的排名可能不太合适";
                });
            },
            getMajor() {
                fetch("https://act.imxbt.cn/index.php?type=area&province=" + this.form.province)
                .then((response) => response.json())
                .then((data) => {
                    this.majorList = data;
                    this.form.major = data[0];
                    this.high_text = "你的排名超过了大多数专业哦~";
                    this.middle_text = "你的排名可能不太合适";
                    this.getRank();
                });
            },
            getRank() {
                fetch(
                "https://act.imxbt.cn/index.php?type=rank&province=" +
                    this.form.province +
                    "&major=" +
                    this.form.major
                )
                .then((response) => response.json())
                .then((data) => {
                    this.maxRank = data[0] > data[1] ? data[1] : data[0];
                    this.minRank = data[0] > data[1] ? data[0] : data[1];
                    this.high_text = "你的排名超过了大多数专业哦~";
                    this.middle_text = "你的排名可能不太合适";
                    this.getSubject();
                });
            },
            getSubject() {
                if(this.form.rank==0 || this.form.major=="" || this.form.province==""){
                    this.high_text = "没有数据";
                    this.middle_text = "没有数据";
                    return;
                }
                this.high_text = "你的排名超过了大多数专业哦~";
                this.middle_text = "你的排名可能不太合适";
                fetch(
                "https://act.imxbt.cn/index.php?type=rank&province=" +
                    this.form.province +
                    "&major=" +
                    this.form.major +
                    "&rank=" +
                    this.form.rank
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