<?php
$AreaType = array(
    '安徽' => array('文史', '理工'),
    '北京' => array('综合改革'),
    '福建' => array('物理科目组', '历史科目组'),
    '甘肃' => array('文史', '理工'),
    '广东' => array('默认'),
    '广西' => array('文史', '理工'),
    '贵州' => array('文史', '理工'),
    '海南' => array('普通类'),
    '河北' => array('物理科目组合', '历史科目组合'),
    '河南' => array('文科综合', '理科综合'),
    '黑龙江' => array('文史', '理工'),
    '湖北' => array('普通类（物理）', '普通类（历史）'),
    '湖南' => array('普通类(首选物理)', '普通类(首选历史)'),
    '吉林' => array('文史', '理工'),
    '江苏' => array('普通类（物理等科目类）', '普通类（历史等科目类）'),
    '江西' => array('文史', '理工'),
    '辽宁' => array('物理学科类', '历史学科类'),
    '内蒙古' => array('文科', '理科'),
    '宁夏' => array('文史', '理工'),
    '青海' => array('理工'),
    '山东' => array('普通类'),
    '山西' => array('文史', '理工'),
    '陕西' => array('文史', '理工'),
    '上海' => array('综合改革'),
    '四川' => array('文史', '理工'),
    '天津' => array('综合改革'),
    '新疆' => array('文史', '理工'),
    '云南' => array('文史', '理工'),
    '浙江' => array('综合改革'),
    '重庆' => array('物理', '历史')
);
$AreaScore = array(
    '安徽' => array('文史' => array(20260, 26312), '理工' => array(50299, 65386)),
    '北京' => array('综合改革' => array(23242, 27402)),
    '福建' => array('物理科目组' => array(27972, 56616), '历史科目组' => array(9842, 12787)),
    '甘肃' => array('文史' => array(5496, 7949), '理工' => array(24398, 37653)),
    '广东' => array('默认' => array(12670, 35754)),
    '广西' => array('文史' => array(8615, 32413), '理工' => array(23883, 66560)),
    '贵州' => array('文史' => array(7187, 23969), '理工' => array(24505, 73369)),
    '海南' => array('普通类' => array(8154, 15427)),
    '河北' => array('物理科目组合' => array(37078, 102809), '历史科目组合' => array(8590, 20329)),
    '河南' => array('文科综合' => array(22698, 33412), '理科综合' => array(60657, 204468)),
    '黑龙江' => array('文史' => array(7728, 9897), '理工' => array(32776, 51368)),
    '湖北' => array('普通类（物理）' => array(54816, 72830), '普通类（历史）' => array(14209, 18328)),
    '湖南' => array('普通类(首选物理)' => array(41536, 85029), '普通类(首选历史)' => array(14538, 27391)),
    '吉林' => array('文史' => array(6109, 10269), '理工' => array(20604, 40898)),
    '江苏' => array('普通类（物理等科目类）' => array(49755, 149565), '普通类（历史等科目类）' => array(25823, 31465)),
    '江西' => array('文史' => array(11467, 15894), '理工' => array(50115, 63124)),
    '辽宁' => array('物理学科类' => array(30000, 63365), '历史学科类' => array(7074, 13365)),
    '内蒙古' => array('文科' => array(5964, 12275), '理科' => array(22055, 54991)),
    '宁夏' => array('文史' => array(3252, 3252), '理工' => 14918, 18786),
    '青海' => array('理工' => array(3948, 4770)),
    '山东' => array('普通类' => array(71818, 157763)),
    '山西' => array('文史' => array(9874, 13281), '理工' => array(26634, 85217)),
    '陕西' => array('文史' => array(16024, 17575), '理工' => array(51742, 89001)),
    '上海' => array('综合改革' => array(15390, 35697)),
    '四川' => array('文史' => array(13268, 36796), '理工' => array(40488, 121079)),
    '天津' => array('综合改革' => array(11106, 28048)),
    '新疆' => array('文史' => array(0, 0), '理工' => array(0, 0)),
    '云南' => array('文史' => array(4832, 29364), '理工' => array(8300, 69302)),
    '浙江' => array('综合改革' => array(35802, 104863)),
    '重庆' => array('物理' => array(17392, 47855), '历史' => array(7132, 18023))
);
$Subject = array(
    '安徽' => array(
        '文史' => array(
            '汉语言文学' => array('Num' => 2, 'MaxScore' => 507, 'MinScore' => 499, 'AvgScore' => 503.87, 'MaxRank' => 20260, 'MinRank' => 23652),
            '经济学' => array('Num' => 2, 'MaxScore' => 494, 'MinScore' => 493, 'AvgScore' => 494.34, 'MaxRank' => 25881, 'MinRank' => 26312)
        ),
        '理工' => array(
            '口腔医学' => array('Num' => 2, 'MaxScore' => 539, 'MinScore' => 535, 'AvgScore' => 537.66, 'MaxRank' => 50299, 'MinRank' => 53281),
            '临床医学' => array('Num' => 3, 'MaxScore' => 533, 'MinScore' => 525, 'AvgScore' => 530.83, 'MaxRank' => 54778, 'MinRank' => 61204),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 523, 'MinScore' => 520, 'AvgScore' => 522.19, 'MaxRank' => 62835, 'MinRank' => 65386)
        )
    ),
    '北京' => array(
        '综合改革' => array(
            '临床医学' => array('Num' => 2, 'MaxScore' => 537, 'MinScore' => 525, 'AvgScore' => 531.00, 'MaxRank' => 23242, 'MinRank' => 26003),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 525, 'MinScore' => 519, 'AvgScore' => 522.00, 'MaxRank' => 26003, 'MinRank' => 27402)
        )
    ),
    '福建' => array(
        '物理科目组' => array(
            '医学影像学' => array('Num' => 2, 'MaxScore' => 547, 'MinScore' => 545, 'AvgScore' => 546.00, 'MaxRank' => 30694, 'MinRank' => 31583),
            '临床医学' => array('Num' => 4, 'MaxScore' => 553, 'MinScore' => 540, 'AvgScore' => 545.00, 'MaxRank' => 27972, 'MinRank' => 33930),
            '眼视光医学' => array('Num' => 2, 'MaxScore' => 549, 'MinScore' => 538, 'AvgScore' => 543.50, 'MaxRank' => 29795, 'MinRank' => 34921),
            '临床药学' => array('Num' => 2, 'MaxScore' => 534, 'MinScore' => 531, 'AvgScore' => 532.50, 'MaxRank' => 36876, 'MinRank' => 38353),
            '预防医学' => array('Num' => 5, 'MaxScore' => 537, 'MinScore' => 529, 'AvgScore' => 532.60, 'MaxRank' => 35395, 'MinRank' => 39382),
            '生物科学' => array('Num' => 4, 'MaxScore' => 533, 'MinScore' => 523, 'AvgScore' => 527.50, 'MaxRank' => 37323, 'MinRank' => 42498),
            '电子信息工程' => array('Num' => 2, 'MaxScore' => 520, 'MinScore' => 512, 'AvgScore' => 516.00, 'MaxRank' => 44116, 'MinRank' => 48455),
            '计算机类' => array('Num' => 4, 'MaxScore' => 520, 'MinScore' => 509, 'AvgScore' => 513.00, 'MaxRank' => 44116, 'MinRank' => 50143),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 514, 'MinScore' => 508, 'AvgScore' => 511.00, 'MaxRank' => 47320, 'MinRank' => 50756),
            '护理学' => array('Num' => 2, 'MaxScore' => 508, 'MinScore' => 507, 'AvgScore' => 507.50, 'MaxRank' => 50756, 'MinRank' => 51307),
            '经济学' => array('Num' => 2, 'MaxScore' => 507, 'MinScore' => 506, 'AvgScore' => 506.50, 'MaxRank' => 51307, 'MinRank' => 51923),
            '医学检验技术' => array('Num' => 2, 'MaxScore' => 505, 'MinScore' => 500, 'AvgScore' => 502.50, 'MaxRank' => 52513, 'MinRank' => 55395),
            '康复治疗学' => array('Num' => 2, 'MaxScore' => 500, 'MinScore' => 498, 'AvgScore' => 499.00, 'MaxRank' => 55395, 'MinRank' => 56616)
        ),
        '历史科目组' => array(
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 522, 'MinScore' => 518, 'AvgScore' => 520.00, 'MaxRank' => 9842, 'MinRank' => 10158),
            '护理学' => array('Num' => 2, 'MaxScore' => 515, 'MinScore' => 511, 'AvgScore' => 513.00, 'MaxRank' => 10628, 'MinRank' => 11333),
            '英语' => array('Num' => 2, 'MaxScore' => 516, 'MinScore' => 510, 'AvgScore' => 513.00, 'MaxRank' => 10456, 'MinRank' => 11502),
            '广告学' => array('Num' => 2, 'MaxScore' => 513, 'MinScore' => 510, 'AvgScore' => 511.50, 'MaxRank' => 10975, 'MinRank' => 11502),
            '工商管理类' => array('Num' => 4, 'MaxScore' => 510, 'MinScore' => 508, 'AvgScore' => 509.50, 'MaxRank' => 11502, 'MinRank' => 11842),
            '泰语' => array('Num' => 2, 'MaxScore' => 509, 'MinScore' => 505, 'AvgScore' => 507.00, 'MaxRank' => 11653, 'MinRank' => 12406),
            '旅游管理类' => array('Num' => 4, 'MaxScore' => 507, 'MinScore' => 503, 'AvgScore' => 505.25, 'MaxRank' => 12033, 'MinRank' => 12787)
        )
    ),
    '甘肃' => array(
        '文史' => array(
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 501, 'MinScore' => 489, 'AvgScore' => 495.11, 'MaxRank' => 5496, 'MinRank' => 7373),
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 492, 'MinScore' => 489, 'AvgScore' => 490.37, 'MaxRank' => 6866, 'MinRank' => 7373),
            '汉语国际教育' => array('Num' => 2, 'MaxScore' => 488, 'MinScore' => 488, 'AvgScore' => 488.11, 'MaxRank' => 7549, 'MinRank' => 7549),
            '新闻学' => array('Num' => 2, 'MaxScore' => 488, 'MinScore' => 487, 'AvgScore' => 487.62, 'MaxRank' => 7549, 'MinRank' => 7749),
            '护理学' => array('Num' => 2, 'MaxScore' => 486, 'MinScore' => 486, 'AvgScore' => 486.12, 'MaxRank' => 7949, 'MinRank' => 7949)
        ),
        '理工' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 459, 'MinScore' => 441, 'AvgScore' => 448.08, 'MaxRank' => 24398, 'MinRank' => 30941),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 440, 'MinScore' => 439, 'AvgScore' => 439.57, 'MaxRank' => 31326, 'MinRank' => 31699),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 437, 'MinScore' => 436, 'AvgScore' => 436.58, 'MaxRank' => 32523, 'MinRank' => 32924),
            '护理学' => array('Num' => 2, 'MaxScore' => 436, 'MinScore' => 431, 'AvgScore' => 433.58, 'MaxRank' => 32924, 'MinRank' => 35055),
            '药学' => array('Num' => 4, 'MaxScore' => 437, 'MinScore' => 427, 'AvgScore' => 432.08, 'MaxRank' => 32523, 'MinRank' => 36726),
            '生物科学' => array('Num' => 2, 'MaxScore' => 428, 'MinScore' => 426, 'AvgScore' => 427.07, 'MaxRank' => 36279, 'MinRank' => 37192),
            '食品质量与安全' => array('Num' => 2, 'MaxScore' => 434, 'MinScore' => 425, 'AvgScore' => 429.57, 'MaxRank' => 33796, 'MinRank' => 37653)
        )
    ),
    '广东' => array(
        '默认' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 558, 'MinScore' => 547, 'AvgScore' => 553.50, 'MaxRank' => 12670, 'MinRank' => 16469),
            '药学' => array('Num' => 2, 'MaxScore' => 544, 'MinScore' => 544, 'AvgScore' => 544.00, 'MaxRank' => 17601, 'MinRank' => 17601),
            '经济学' => array('Num' => 2, 'MaxScore' => 534, 'MinScore' => 532, 'AvgScore' => 533.00, 'MaxRank' => 21856, 'MinRank' => 22728),
            '护理学' => array('Num' => 2, 'MaxScore' => 538, 'MinScore' => 531, 'AvgScore' => 534.50, 'MaxRank' => 20109, 'MinRank' => 23185),
            '小学教育' => array('Num' => 2, 'MaxScore' => 528, 'MinScore' => 525, 'AvgScore' => 526.50, 'MaxRank' => 24525, 'MinRank' => 25967),
            '新闻学' => array('Num' => 2, 'MaxScore' => 527, 'MinScore' => 523, 'AvgScore' => 525.00, 'MaxRank' => 24992, 'MinRank' => 26951),
            '动物科学' => array('Num' => 2, 'MaxScore' => 528, 'MinScore' => 516, 'AvgScore' => 522.00, 'MaxRank' => 24525, 'MinRank' => 30521),
            '广告学' => array('Num' => 2, 'MaxScore' => 517, 'MinScore' => 513, 'AvgScore' => 515.00, 'MaxRank' => 29980, 'MinRank' => 32266),
            '公共管理类' => array('Num' => 2, 'MaxScore' => 508, 'MinScore' => 507, 'AvgScore' => 507.50, 'MaxRank' => 35176, 'MinRank' => 35754)
        )
    ),
    '广西' => array(
        '文史' => array(
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 544, 'MinScore' => 536, 'AvgScore' => 540.24, 'MaxRank' => 8615, 'MinRank' => 10327),
            '建筑学' => array('Num' => 2, 'MaxScore' => 535, 'MinScore' => 533, 'AvgScore' => 534.99, 'MaxRank' => 10639, 'MinRank' => 11027),
            '旅游管理类' => array('Num' => 4, 'MaxScore' => 535, 'MinScore' => 523, 'AvgScore' => 530.24, 'MaxRank' => 10601, 'MinRank' => 13495),
            '学前教育' => array('Num' => 2, 'MaxScore' => 524, 'MinScore' => 523, 'AvgScore' => 524.49, 'MaxRank' => 13276, 'MinRank' => 13495),
            '泰语' => array('Num' => 2, 'MaxScore' => 532, 'MinScore' => 522, 'AvgScore' => 527.99, 'MaxRank' => 11289, 'MinRank' => 13756),
            '护理学' => array('Num' => 4, 'MaxScore' => 528, 'MinScore' => 522, 'AvgScore' => 525.24, 'MaxRank' => 12260, 'MinRank' => 13756),
            '缅甸语' => array('Num' => 2, 'MaxScore' => 524, 'MinScore' => 472, 'AvgScore' => 498.98, 'MaxRank' => 13234, 'MinRank' => 32413)
        ),
        '理工' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 527, 'MinScore' => 503, 'AvgScore' => 515.22, 'MaxRank' => 23883, 'MinRank' => 34065),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 503, 'MinScore' => 497, 'AvgScore' => 500.96, 'MaxRank' => 34254, 'MinRank' => 36991),
            '眼视光医学' => array('Num' => 2, 'MaxScore' => 496, 'MinScore' => 490, 'AvgScore' => 493.96, 'MaxRank' => 37696, 'MinRank' => 40636),
            '计算机类' => array('Num' => 3, 'MaxScore' => 488, 'MinScore' => 484, 'AvgScore' => 486.29, 'MaxRank' => 41917, 'MinRank' => 43900),
            '药学' => array('Num' => 4, 'MaxScore' => 484, 'MinScore' => 477, 'AvgScore' => 482.45, 'MaxRank' => 43900, 'MinRank' => 47979),
            '智能医学工程' => array('Num' => 2, 'MaxScore' => 477, 'MinScore' => 477, 'AvgScore' => 477.00, 'MaxRank' => 47979, 'MinRank' => 47979),
            '小学教育' => array('Num' => 2, 'MaxScore' => 485, 'MinScore' => 476, 'AvgScore' => 481.45, 'MaxRank' => 43585, 'MinRank' => 48612),
            '生物科学' => array('Num' => 2, 'MaxScore' => 479, 'MinScore' => 475, 'AvgScore' => 477.95, 'MaxRank' => 47012, 'MinRank' => 49181),
            '英语' => array('Num' => 2, 'MaxScore' => 474, 'MinScore' => 472, 'AvgScore' => 473.95, 'MaxRank' => 49985, 'MinRank' => 50933),
            '园艺' => array('Num' => 2, 'MaxScore' => 473, 'MinScore' => 472, 'AvgScore' => 473.45, 'MaxRank' => 50570, 'MinRank' => 51518),
            '工商管理类' => array('Num' => 4, 'MaxScore' => 471, 'MinScore' => 411, 'AvgScore' => 451.43, 'MaxRank' => 56202, 'MinRank' => 66560)
        )
    ),
    '贵州' => array(
        '文史' => array(
            '汉语言文学' => array('Num' => 2, 'MaxScore' => 560, 'MinScore' => 556, 'AvgScore' => 558.10, 'MaxRank' => 7187, 'MinRank' => 8053),
            '英语' => array('Num' => 2, 'MaxScore' => 556, 'MinScore' => 555, 'AvgScore' => 555.60, 'MaxRank' => 8053, 'MinRank' => 8268),
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 558, 'MinScore' => 553, 'AvgScore' => 555.60, 'MaxRank' => 7617, 'MinRank' => 8635),
            '小学教育' => array('Num' => 2, 'MaxScore' => 553, 'MinScore' => 550, 'AvgScore' => 551.60, 'MaxRank' => 8635, 'MinRank' => 9287),
            '泰语' => array('Num' => 2, 'MaxScore' => 552, 'MinScore' => 550, 'AvgScore' => 551.10, 'MaxRank' => 8841, 'MinRank' => 9287),
            '经济学' => array('Num' => 2, 'MaxScore' => 550, 'MinScore' => 550, 'AvgScore' => 550.10, 'MaxRank' => 9287, 'MinRank' => 9287),
            '护理学' => array('Num' => 2, 'MaxScore' => 555, 'MinScore' => 548, 'AvgScore' => 551.60, 'MaxRank' => 8268, 'MinRank' => 9769),
            '缅甸语' => array('Num' => 2, 'MaxScore' => 549, 'MinScore' => 548, 'AvgScore' => 548.60, 'MaxRank' => 9522, 'MinRank' => 9769),
            '学前教育' => array('Num' => 2, 'MaxScore' => 548, 'MinScore' => 548, 'AvgScore' => 548.10, 'MaxRank' => 9769, 'MinRank' => 9769),
            '工商管理类' => array('Num' => 2, 'MaxScore' => 547, 'MinScore' => 547, 'AvgScore' => 547.10, 'MaxRank' => 10023, 'MinRank' => 10023),
            '公共管理类' => array('Num' => 4, 'MaxScore' => 547, 'MinScore' => 546, 'AvgScore' => 546.85, 'MaxRank' => 10023, 'MinRank' => 10262),
            '旅游管理类' => array('Num' => 4, 'MaxScore' => 547, 'MinScore' => 509, 'AvgScore' => 528.85, 'MaxRank' => 10023, 'MinRank' => 23969)
        ),
        '理工' => array(
            '口腔医学' => array('Num' => 2, 'MaxScore' => 513, 'MinScore' => 500, 'AvgScore' => 506.60, 'MaxRank' => 24505, 'MinRank' => 29795),
            '临床医学' => array('Num' => 4, 'MaxScore' => 499, 'MinScore' => 492, 'AvgScore' => 496.85, 'MaxRank' => 30235, 'MinRank' => 33490),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 490, 'MinScore' => 487, 'AvgScore' => 488.60, 'MaxRank' => 34508, 'MinRank' => 35976),
            '医学检验技术' => array('Num' => 2, 'MaxScore' => 491, 'MinScore' => 486, 'AvgScore' => 488.60, 'MaxRank' => 34007, 'MinRank' => 36485),
            '儿科学' => array('Num' => 2, 'MaxScore' => 486, 'MinScore' => 485, 'AvgScore' => 485.60, 'MaxRank' => 36485, 'MinRank' => 37022),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 485, 'MinScore' => 483, 'AvgScore' => 484.10, 'MaxRank' => 37022, 'MinRank' => 38093),
            '临床药学' => array('Num' => 2, 'MaxScore' => 484, 'MinScore' => 483, 'AvgScore' => 483.60, 'MaxRank' => 37570, 'MinRank' => 38093),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 483, 'MinScore' => 481, 'AvgScore' => 482.10, 'MaxRank' => 38093, 'MinRank' => 39147),
            '药学' => array('Num' => 2, 'MaxScore' => 483, 'MinScore' => 480, 'AvgScore' => 481.60, 'MaxRank' => 38093, 'MinRank' => 39699),
            '生物科学' => array('Num' => 2, 'MaxScore' => 479, 'MinScore' => 479, 'AvgScore' => 479.10, 'MaxRank' => 40227, 'MinRank' => 40227),
            '预防医学' => array('Num' => 4, 'MaxScore' => 482, 'MinScore' => 477, 'AvgScore' => 479.10, 'MaxRank' => 38638, 'MinRank' => 41302),
            '食品质量与安全' => array('Num' => 2, 'MaxScore' => 477, 'MinScore' => 477, 'AvgScore' => 477.10, 'MaxRank' => 41302, 'MinRank' => 41302),
            '化学' => array('Num' => 2, 'MaxScore' => 479, 'MinScore' => 475, 'AvgScore' => 477.10, 'MaxRank' => 40227, 'MinRank' => 42364),
            '园艺' => array('Num' => 2, 'MaxScore' => 475, 'MinScore' => 474, 'AvgScore' => 474.60, 'MaxRank' => 42364, 'MinRank' => 42944),
            '智能医学工程' => array('Num' => 2, 'MaxScore' => 475, 'MinScore' => 474, 'AvgScore' => 474.60, 'MaxRank' => 42364, 'MinRank' => 42944),
            '动物科学' => array('Num' => 2, 'MaxScore' => 476, 'MinScore' => 473, 'AvgScore' => 474.60, 'MaxRank' => 41859, 'MinRank' => 43510),
            '工商管理类' => array('Num' => 2, 'MaxScore' => 478, 'MinScore' => 433, 'AvgScore' => 455.59, 'MaxRank' => 40767, 'MinRank' => 72556),
            '知识产权' => array('Num' => 2, 'MaxScore' => 447, 'MinScore' => 432, 'AvgScore' => 439.59, 'MaxRank' => 61108, 'MinRank' => 73369)
        )
    ),
    '海南' => array(
        '普通类' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 621, 'MinScore' => 614, 'AvgScore' => 616.75, 'MaxRank' => 8154, 'MinRank' => 9197),
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 612, 'MinScore' => 605, 'AvgScore' => 608.50, 'MaxRank' => 9455, 'MinRank' => 10565),
            '英语' => array('Num' => 2, 'MaxScore' => 600, 'MinScore' => 593, 'AvgScore' => 596.50, 'MaxRank' => 11421, 'MinRank' => 12668),
            '工商管理类' => array('Num' => 2, 'MaxScore' => 591, 'MinScore' => 591, 'AvgScore' => 591.00, 'MaxRank' => 13023, 'MinRank' => 13023),
            '医学检验技术' => array('Num' => 2, 'MaxScore' => 610, 'MinScore' => 588, 'AvgScore' => 599.00, 'MaxRank' => 9784, 'MinRank' => 13616),
            '康复治疗学' => array('Num' => 2, 'MaxScore' => 588, 'MinScore' => 586, 'AvgScore' => 587.00, 'MaxRank' => 13616, 'MinRank' => 13982),
            '智能医学工程' => array('Num' => 2, 'MaxScore' => 585, 'MinScore' => 585, 'AvgScore' => 585.00, 'MaxRank' => 14182, 'MinRank' => 14182),
            '建筑学' => array('Num' => 2, 'MaxScore' => 590, 'MinScore' => 584, 'AvgScore' => 587.00, 'MaxRank' => 13216, 'MinRank' => 14402),
            '储能科学与工程' => array('Num' => 2, 'MaxScore' => 585, 'MinScore' => 579, 'AvgScore' => 582.00, 'MaxRank' => 14182, 'MinRank' => 15427)
        )
    ),
    '河北' => array(
        '物理科目组合' => array(
            '口腔医学' => array('Num' => 2, 'MaxScore' => 564, 'MinScore' => 561, 'AvgScore' => 562.50, 'MaxRank' => 37078, 'MinRank' => 39366),
            '临床医学' => array('Num' => 4, 'MaxScore' => 559, 'MinScore' => 548, 'AvgScore' => 552.00, 'MaxRank' => 40851, 'MinRank' => 49919),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 548, 'MinScore' => 547, 'AvgScore' => 547.50, 'MaxRank' => 49919, 'MinRank' => 50798),
            '眼视光医学' => array('Num' => 2, 'MaxScore' => 550, 'MinScore' => 543, 'AvgScore' => 546.50, 'MaxRank' => 48177, 'MinRank' => 54267),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 541, 'MinScore' => 541, 'AvgScore' => 541.00, 'MaxRank' => 56064, 'MinRank' => 56064),
            '儿科学' => array('Num' => 2, 'MaxScore' => 539, 'MinScore' => 539, 'AvgScore' => 539.00, 'MaxRank' => 57829, 'MinRank' => 57829),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 538, 'MinScore' => 525, 'AvgScore' => 531.50, 'MaxRank' => 58780, 'MinRank' => 71670),
            '小学教育' => array('Num' => 2, 'MaxScore' => 525, 'MinScore' => 522, 'AvgScore' => 523.50, 'MaxRank' => 71670, 'MinRank' => 74834),
            '建筑学' => array('Num' => 2, 'MaxScore' => 528, 'MinScore' => 520, 'AvgScore' => 524.00, 'MaxRank' => 68584, 'MinRank' => 76982),
            '食品质量与安全' => array('Num' => 2, 'MaxScore' => 516, 'MinScore' => 516, 'AvgScore' => 516.00, 'MaxRank' => 81468, 'MinRank' => 81468),
            '预防医学' => array('Num' => 4, 'MaxScore' => 532, 'MinScore' => 515, 'AvgScore' => 520.25, 'MaxRank' => 64617, 'MinRank' => 82588),
            '护理学' => array('Num' => 4, 'MaxScore' => 529, 'MinScore' => 511, 'AvgScore' => 517.00, 'MaxRank' => 67555, 'MinRank' => 87137),
            '动物科学' => array('Num' => 2, 'MaxScore' => 512, 'MinScore' => 510, 'AvgScore' => 511.00, 'MaxRank' => 86019, 'MinRank' => 88306),
            '康复治疗学' => array('Num' => 2, 'MaxScore' => 507, 'MinScore' => 507, 'AvgScore' => 507.00, 'MaxRank' => 91868, 'MinRank' => 91868),
            '公共管理类' => array('Num' => 4, 'MaxScore' => 508, 'MinScore' => 500, 'AvgScore' => 504.00, 'MaxRank' => 90687, 'MinRank' => 100365),
            '园艺' => array('Num' => 2, 'MaxScore' => 504, 'MinScore' => 498, 'AvgScore' => 501.00, 'MaxRank' => 95445, 'MinRank' => 102809)
        ),
        '历史科目组合' => array(
            '法学' => array('Num' => 2, 'MaxScore' => 553, 'MinScore' => 553, 'AvgScore' => 553.00, 'MaxRank' => 10470, 'MinRank' => 10470),
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 561, 'MinScore' => 551, 'AvgScore' => 556.00, 'MaxRank' => 8590, 'MinRank' => 10978),
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 550, 'MinScore' => 546, 'AvgScore' => 548.00, 'MaxRank' => 11236, 'MinRank' => 12246),
            '汉语国际教育' => array('Num' => 2, 'MaxScore' => 539, 'MinScore' => 537, 'AvgScore' => 538.00, 'MaxRank' => 14156, 'MinRank' => 14735),
            '广告学' => array('Num' => 2, 'MaxScore' => 531, 'MinScore' => 530, 'AvgScore' => 530.50, 'MaxRank' => 16560, 'MinRank' => 16886),
            '学前教育' => array('Num' => 2, 'MaxScore' => 523, 'MinScore' => 520, 'AvgScore' => 521.50, 'MaxRank' => 19237, 'MinRank' => 20329)
        )
    ),
    '河南' => array(
        '文科综合' => array(
            '法学' => array('Num' => 2, 'MaxScore' => 550, 'MinScore' => 546, 'AvgScore' => 548.13, 'MaxRank' => 22698, 'MinRank' => 24938),
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 550, 'MinScore' => 545, 'AvgScore' => 546.87, 'MaxRank' => 22698, 'MinRank' => 25536),
            '知识产权' => array('Num' => 2, 'MaxScore' => 545, 'MinScore' => 545, 'AvgScore' => 545.12, 'MaxRank' => 25536, 'MinRank' => 25536),
            '广告学' => array('Num' => 2, 'MaxScore' => 544, 'MinScore' => 543, 'AvgScore' => 543.62, 'MaxRank' => 26174, 'MinRank' => 26791),
            '汉语国际教育' => array('Num' => 2, 'MaxScore' => 545, 'MinScore' => 542, 'AvgScore' => 543.62, 'MaxRank' => 25536, 'MinRank' => 27428),
            '经济学' => array('Num' => 2, 'MaxScore' => 542, 'MinScore' => 542, 'AvgScore' => 542.13, 'MaxRank' => 27428, 'MinRank' => 27428),
            '学前教育' => array('Num' => 2, 'MaxScore' => 545, 'MinScore' => 541, 'AvgScore' => 543.12, 'MaxRank' => 25536, 'MinRank' => 28035),
            '护理学' => array('Num' => 2, 'MaxScore' => 542, 'MinScore' => 541, 'AvgScore' => 541.63, 'MaxRank' => 27428, 'MinRank' => 28035),
            '小学教育' => array('Num' => 2, 'MaxScore' => 541, 'MinScore' => 541, 'AvgScore' => 541.12, 'MaxRank' => 28035, 'MinRank' => 28035),
            '旅游管理类' => array('Num' => 2, 'MaxScore' => 541, 'MinScore' => 533, 'AvgScore' => 537.12, 'MaxRank' => 28035, 'MinRank' => 33412)
        ),
        '理科综合' => array(
            '口腔医学' => array('Num' => 2, 'MaxScore' => 558, 'MinScore' => 553, 'AvgScore' => 555.62, 'MaxRank' => 60657, 'MinRank' => 67050),
            '临床医学' => array('Num' => 4, 'MaxScore' => 542, 'MinScore' => 531, 'AvgScore' => 535.87, 'MaxRank' => 81975, 'MinRank' => 98157),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 531, 'MinScore' => 529, 'AvgScore' => 530.12, 'MaxRank' => 98157, 'MinRank' => 101260),
            '电子信息工程' => array('Num' => 2, 'MaxScore' => 525, 'MinScore' => 523, 'AvgScore' => 524.12, 'MaxRank' => 107463, 'MinRank' => 110642),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 524, 'MinScore' => 523, 'AvgScore' => 523.62, 'MaxRank' => 109013, 'MinRank' => 110642),
            '药学' => array('Num' => 2, 'MaxScore' => 526, 'MinScore' => 522, 'AvgScore' => 524.13, 'MaxRank' => 105904, 'MinRank' => 112300),
            '康复治疗学' => array('Num' => 2, 'MaxScore' => 523, 'MinScore' => 522, 'AvgScore' => 522.62, 'MaxRank' => 110642, 'MinRank' => 112300),
            '通信工程' => array('Num' => 2, 'MaxScore' => 523, 'MinScore' => 521, 'AvgScore' => 522.11, 'MaxRank' => 110642, 'MinRank' => 113938),
            '园艺' => array('Num' => 2, 'MaxScore' => 519, 'MinScore' => 517, 'AvgScore' => 518.12, 'MaxRank' => 117138, 'MinRank' => 120414),
            '化学' => array('Num' => 2, 'MaxScore' => 526, 'MinScore' => 516, 'AvgScore' => 521.11, 'MaxRank' => 105904, 'MinRank' => 122128),
            '环境科学' => array('Num' => 2, 'MaxScore' => 516, 'MinScore' => 516, 'AvgScore' => 516.11, 'MaxRank' => 122128, 'MinRank' => 122128),
            '卫生检验与检疫' => array('Num' => 2, 'MaxScore' => 516, 'MinScore' => 516, 'AvgScore' => 516.11, 'MaxRank' => 122128, 'MinRank' => 122128),
            '英语' => array('Num' => 2, 'MaxScore' => 520, 'MinScore' => 515, 'AvgScore' => 517.62, 'MaxRank' => 115516, 'MinRank' => 123771),
            '动物科学' => array('Num' => 2, 'MaxScore' => 519, 'MinScore' => 515, 'AvgScore' => 517.12, 'MaxRank' => 117138, 'MinRank' => 123771),
            '护理学' => array('Num' => 2, 'MaxScore' => 516, 'MinScore' => 515, 'AvgScore' => 515.62, 'MaxRank' => 122128, 'MinRank' => 123771),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 524, 'MinScore' => 514, 'AvgScore' => 519.12, 'MaxRank' => 109013, 'MinRank' => 125465),
            '生物科学' => array('Num' => 2, 'MaxScore' => 478, 'MinScore' => 473, 'AvgScore' => 475.61, 'MaxRank' => 189445, 'MinRank' => 198806),
            '公共管理类' => array('Num' => 2, 'MaxScore' => 471, 'MinScore' => 470, 'AvgScore' => 470.61, 'MaxRank' => 202505, 'MinRank' => 204468)
        )
    ),
    '黑龙江' => array(
        '文史' => array(
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 431, 'MinScore' => 423, 'AvgScore' => 427.10, 'MaxRank' => 7728, 'MinRank' => 8759),
            '护理学' => array('Num' => 2, 'MaxScore' => 423, 'MinScore' => 416, 'AvgScore' => 419.60, 'MaxRank' => 8759, 'MinRank' => 9753),
            '经济学' => array('Num' => 2, 'MaxScore' => 419, 'MinScore' => 416, 'AvgScore' => 417.61, 'MaxRank' => 9298, 'MinRank' => 9753),
            '学前教育' => array('Num' => 2, 'MaxScore' => 420, 'MinScore' => 415, 'AvgScore' => 417.60, 'MaxRank' => 9167, 'MinRank' => 9897)
        ),
        '理工' => array(
            '医学影像学' => array('Num' => 2, 'MaxScore' => 427, 'MinScore' => 419, 'AvgScore' => 423.06, 'MaxRank' => 32776, 'MinRank' => 35254),
            '临床医学' => array('Num' => 4, 'MaxScore' => 426, 'MinScore' => 406, 'AvgScore' => 414.82, 'MaxRank' => 33075, 'MinRank' => 39316),
            '卫生检验与检疫' => array('Num' => 2, 'MaxScore' => 405, 'MinScore' => 395, 'AvgScore' => 400.07, 'MaxRank' => 39653, 'MinRank' => 43077),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 403, 'MinScore' => 395, 'AvgScore' => 399.06, 'MaxRank' => 40334, 'MinRank' => 43077),
            '临床药学' => array('Num' => 2, 'MaxScore' => 403, 'MinScore' => 395, 'AvgScore' => 399.07, 'MaxRank' => 40334, 'MinRank' => 43077),
            '药学' => array('Num' => 4, 'MaxScore' => 417, 'MinScore' => 394, 'AvgScore' => 402.07, 'MaxRank' => 35825, 'MinRank' => 43397),
            '电子信息工程' => array('Num' => 2, 'MaxScore' => 395, 'MinScore' => 393, 'AvgScore' => 394.08, 'MaxRank' => 43077, 'MinRank' => 43748),
            '化学' => array('Num' => 2, 'MaxScore' => 397, 'MinScore' => 372, 'AvgScore' => 384.57, 'MaxRank' => 42336, 'MinRank' => 51368)
        )
    ),
    '湖北' => array(
        '普通类（物理）' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 537, 'MinScore' => 533, 'AvgScore' => 535.25, 'MaxRank' => 54816, 'MinRank' => 57499),
            '眼视光医学' => array('Num' => 2, 'MaxScore' => 534, 'MinScore' => 532, 'AvgScore' => 533.00, 'MaxRank' => 56821, 'MinRank' => 58152),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 531, 'MinScore' => 531, 'AvgScore' => 531.00, 'MaxRank' => 58805, 'MinRank' => 58805),
            '儿科学' => array('Num' => 2, 'MaxScore' => 530, 'MinScore' => 529, 'AvgScore' => 529.50, 'MaxRank' => 59451, 'MinRank' => 60122),
            '药学' => array('Num' => 4, 'MaxScore' => 531, 'MinScore' => 528, 'AvgScore' => 529.50, 'MaxRank' => 58805, 'MinRank' => 60759),
            '电子信息工程' => array('Num' => 2, 'MaxScore' => 528, 'MinScore' => 527, 'AvgScore' => 527.50, 'MaxRank' => 60759, 'MinRank' => 61396),
            '计算机类' => array('Num' => 4, 'MaxScore' => 530, 'MinScore' => 526, 'AvgScore' => 528.00, 'MaxRank' => 59451, 'MinRank' => 62091),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 525, 'MinScore' => 525, 'AvgScore' => 525.00, 'MaxRank' => 62798, 'MinRank' => 62798),
            '通信工程' => array('Num' => 2, 'MaxScore' => 525, 'MinScore' => 524, 'AvgScore' => 524.50, 'MaxRank' => 62798, 'MinRank' => 63434),
            '智能医学工程' => array('Num' => 2, 'MaxScore' => 522, 'MinScore' => 519, 'AvgScore' => 520.50, 'MaxRank' => 64838, 'MinRank' => 66865),
            '小学教育' => array('Num' => 2, 'MaxScore' => 518, 'MinScore' => 517, 'AvgScore' => 517.50, 'MaxRank' => 67513, 'MinRank' => 68196),
            '学前教育' => array('Num' => 2, 'MaxScore' => 515, 'MinScore' => 514, 'AvgScore' => 514.50, 'MaxRank' => 69479, 'MinRank' => 70144),
            '护理学' => array('Num' => 2, 'MaxScore' => 513, 'MinScore' => 510, 'AvgScore' => 511.50, 'MaxRank' => 70821, 'MinRank' => 72830)
        ),
        '普通类（历史）' => array(
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 525, 'MinScore' => 520, 'AvgScore' => 521.75, 'MaxRank' => 14209, 'MinRank' => 15480),
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 522, 'MinScore' => 520, 'AvgScore' => 521.00, 'MaxRank' => 14972, 'MinRank' => 15480),
            '工商管理类' => array('Num' => 4, 'MaxScore' => 519, 'MinScore' => 517, 'AvgScore' => 518.00, 'MaxRank' => 15720, 'MinRank' => 16245),
            '小学教育' => array('Num' => 2, 'MaxScore' => 516, 'MinScore' => 515, 'AvgScore' => 515.50, 'MaxRank' => 16480, 'MinRank' => 16730),
            '学前教育' => array('Num' => 2, 'MaxScore' => 516, 'MinScore' => 515, 'AvgScore' => 515.50, 'MaxRank' => 16480, 'MinRank' => 16730),
            '经济学' => array('Num' => 2, 'MaxScore' => 516, 'MinScore' => 514, 'AvgScore' => 515.00, 'MaxRank' => 16480, 'MinRank' => 17022),
            '护理学' => array('Num' => 3, 'MaxScore' => 516, 'MinScore' => 513, 'AvgScore' => 514.33, 'MaxRank' => 16480, 'MinRank' => 17274),
            '广告学' => array('Num' => 2, 'MaxScore' => 512, 'MinScore' => 511, 'AvgScore' => 511.50, 'MaxRank' => 17523, 'MinRank' => 17807),
            '新闻学' => array('Num' => 2, 'MaxScore' => 510, 'MinScore' => 510, 'AvgScore' => 510.00, 'MaxRank' => 18068, 'MinRank' => 18068),
            '英语' => array('Num' => 2, 'MaxScore' => 518, 'MinScore' => 509, 'AvgScore' => 513.50, 'MaxRank' => 15976, 'MinRank' => 18328)
        )
    ),
    '湖南' => array(
        '普通类(首选物理)' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 550, 'MinScore' => 540, 'AvgScore' => 544.50, 'MaxRank' => 41536, 'MinRank' => 48436),
            '儿科学' => array('Num' => 2, 'MaxScore' => 536, 'MinScore' => 534, 'AvgScore' => 535.00, 'MaxRank' => 51442, 'MinRank' => 52879),
            '药学' => array('Num' => 4, 'MaxScore' => 535, 'MinScore' => 530, 'AvgScore' => 532.50, 'MaxRank' => 52153, 'MinRank' => 55963),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 533, 'MinScore' => 517, 'AvgScore' => 525.00, 'MaxRank' => 53632, 'MinRank' => 66535),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 528, 'MinScore' => 516, 'AvgScore' => 522.00, 'MaxRank' => 57510, 'MinRank' => 67417),
            '计算机类' => array('Num' => 4, 'MaxScore' => 529, 'MinScore' => 511, 'AvgScore' => 515.75, 'MaxRank' => 56728, 'MinRank' => 71675),
            '动物科学' => array('Num' => 2, 'MaxScore' => 514, 'MinScore' => 509, 'AvgScore' => 511.50, 'MaxRank' => 69068, 'MinRank' => 73398),
            '护理学' => array('Num' => 2, 'MaxScore' => 498, 'MinScore' => 498, 'AvgScore' => 498.00, 'MaxRank' => 83200, 'MinRank' => 83200),
            '小学教育' => array('Num' => 2, 'MaxScore' => 502, 'MinScore' => 497, 'AvgScore' => 499.50, 'MaxRank' => 79588, 'MinRank' => 84112),
            '公共管理类' => array('Num' => 2, 'MaxScore' => 498, 'MinScore' => 496, 'AvgScore' => 497.00, 'MaxRank' => 83200, 'MinRank' => 85029)
        ),
        '普通类(首选历史)' => array(
            '汉语言文学' => array('Num' => 2, 'MaxScore' => 518, 'MinScore' => 516, 'AvgScore' => 517.00, 'MaxRank' => 14538, 'MinRank' => 15168),
            '法学' => array('Num' => 2, 'MaxScore' => 512, 'MinScore' => 510, 'AvgScore' => 511.00, 'MaxRank' => 16258, 'MinRank' => 16856),
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 508, 'MinScore' => 508, 'AvgScore' => 508.00, 'MaxRank' => 17533, 'MinRank' => 17533),
            '广告学' => array('Num' => 2, 'MaxScore' => 511, 'MinScore' => 502, 'AvgScore' => 506.50, 'MaxRank' => 16580, 'MinRank' => 19479),
            '护理学' => array('Num' => 2, 'MaxScore' => 504, 'MinScore' => 502, 'AvgScore' => 503.00, 'MaxRank' => 18803, 'MinRank' => 19479),
            '公共管理类' => array('Num' => 2, 'MaxScore' => 513, 'MinScore' => 500, 'AvgScore' => 506.50, 'MaxRank' => 15975, 'MinRank' => 20194),
            '学前教育' => array('Num' => 2, 'MaxScore' => 501, 'MinScore' => 500, 'AvgScore' => 500.50, 'MaxRank' => 19853, 'MinRank' => 20194),
            '新闻学' => array('Num' => 2, 'MaxScore' => 509, 'MinScore' => 499, 'AvgScore' => 504.00, 'MaxRank' => 17178, 'MinRank' => 20561),
            '泰语' => array('Num' => 2, 'MaxScore' => 498, 'MinScore' => 482, 'AvgScore' => 490.00, 'MaxRank' => 20918, 'MinRank' => 27391)
        )
    ),
    '吉林' => array(
        '文史' => array(
            '经济学' => array('Num' => 2, 'MaxScore' => 462, 'MinScore' => 443, 'AvgScore' => 452.61, 'MaxRank' => 6109, 'MinRank' => 8145),
            '建筑学' => array('Num' => 2, 'MaxScore' => 450, 'MinScore' => 443, 'AvgScore' => 446.60, 'MaxRank' => 7346, 'MinRank' => 8145),
            '学前教育' => array('Num' => 2, 'MaxScore' => 442, 'MinScore' => 438, 'AvgScore' => 440.10, 'MaxRank' => 8279, 'MinRank' => 8771),
            '护理学' => array('Num' => 2, 'MaxScore' => 431, 'MinScore' => 426, 'AvgScore' => 428.61, 'MaxRank' => 9640, 'MinRank' => 10269)
        ),
        '理工' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 460, 'MinScore' => 443, 'AvgScore' => 449.09, 'MaxRank' => 20604, 'MinRank' => 24252),
            '临床药学' => array('Num' => 2, 'MaxScore' => 443, 'MinScore' => 432, 'AvgScore' => 437.59, 'MaxRank' => 24252, 'MinRank' => 26764),
            '计算机类' => array('Num' => 2, 'MaxScore' => 445, 'MinScore' => 427, 'AvgScore' => 436.08, 'MaxRank' => 23787, 'MinRank' => 27938),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 434, 'MinScore' => 426, 'AvgScore' => 430.09, 'MaxRank' => 26323, 'MinRank' => 28168),
            '电子信息工程' => array('Num' => 2, 'MaxScore' => 423, 'MinScore' => 410, 'AvgScore' => 416.56, 'MaxRank' => 28897, 'MinRank' => 32166),
            '智能医学工程' => array('Num' => 2, 'MaxScore' => 413, 'MinScore' => 400, 'AvgScore' => 406.57, 'MaxRank' => 31340, 'MinRank' => 34737),
            '化学' => array('Num' => 2, 'MaxScore' => 422, 'MinScore' => 393, 'AvgScore' => 407.57, 'MaxRank' => 29134, 'MinRank' => 36594),
            '卫生检验与检疫' => array('Num' => 2, 'MaxScore' => 407, 'MinScore' => 392, 'AvgScore' => 399.57, 'MaxRank' => 32934, 'MinRank' => 36823),
            '护理学' => array('Num' => 2, 'MaxScore' => 426, 'MinScore' => 389, 'AvgScore' => 407.56, 'MaxRank' => 28168, 'MinRank' => 37637),
            '知识产权' => array('Num' => 2, 'MaxScore' => 391, 'MinScore' => 387, 'AvgScore' => 389.06, 'MaxRank' => 37079, 'MinRank' => 38125),
            '生物科学' => array('Num' => 2, 'MaxScore' => 417, 'MinScore' => 386, 'AvgScore' => 401.57, 'MaxRank' => 30327, 'MinRank' => 38389),
            '药学' => array('Num' => 4, 'MaxScore' => 437, 'MinScore' => 382, 'AvgScore' => 422.08, 'MaxRank' => 25649, 'MinRank' => 39460),
            '预防医学' => array('Num' => 2, 'MaxScore' => 428, 'MinScore' => 381, 'AvgScore' => 404.58, 'MaxRank' => 27695, 'MinRank' => 39741),
            '环境科学' => array('Num' => 2, 'MaxScore' => 380, 'MinScore' => 377, 'AvgScore' => 378.57, 'MaxRank' => 40027, 'MinRank' => 40898)
        )
    ),
    '江苏' => array(
        '普通类（物理等科目类）' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 579, 'MinScore' => 571, 'AvgScore' => 575.00, 'MaxRank' => 49755, 'MinRank' => 56968),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 568, 'MinScore' => 568, 'AvgScore' => 568.00, 'MaxRank' => 59798, 'MinRank' => 59798),
            '生物科学' => array('Num' => 2, 'MaxScore' => 559, 'MinScore' => 556, 'AvgScore' => 557.50, 'MaxRank' => 68330, 'MinRank' => 71147),
            '计算机类' => array('Num' => 4, 'MaxScore' => 538, 'MinScore' => 528, 'AvgScore' => 532.00, 'MaxRank' => 89031, 'MinRank' => 99220),
            '通信工程' => array('Num' => 2, 'MaxScore' => 528, 'MinScore' => 528, 'AvgScore' => 528.00, 'MaxRank' => 99220, 'MinRank' => 99220),
            '储能科学与工程' => array('Num' => 2, 'MaxScore' => 526, 'MinScore' => 526, 'AvgScore' => 526.00, 'MaxRank' => 101268, 'MinRank' => 101268),
            '食品质量与安全' => array('Num' => 2, 'MaxScore' => 529, 'MinScore' => 525, 'AvgScore' => 527.00, 'MaxRank' => 98179, 'MinRank' => 102240),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 526, 'MinScore' => 525, 'AvgScore' => 525.50, 'MaxRank' => 101268, 'MinRank' => 102240),
            '康复治疗学' => array('Num' => 2, 'MaxScore' => 513, 'MinScore' => 513, 'AvgScore' => 513.00, 'MaxRank' => 114462, 'MinRank' => 114462),
            '园艺' => array('Num' => 2, 'MaxScore' => 521, 'MinScore' => 501, 'AvgScore' => 511.00, 'MaxRank' => 106375, 'MinRank' => 126588),
            '预防医学' => array('Num' => 4, 'MaxScore' => 545, 'MinScore' => 477, 'AvgScore' => 512.25, 'MaxRank' => 81926, 'MinRank' => 149565)
        ),
        '普通类（历史等科目类）' => array(
            '法学' => array('Num' => 2, 'MaxScore' => 529, 'MinScore' => 528, 'AvgScore' => 528.50, 'MaxRank' => 26738, 'MinRank' => 27182),
            '护理学' => array('Num' => 4, 'MaxScore' => 531, 'MinScore' => 527, 'AvgScore' => 529.25, 'MaxRank' => 25823, 'MinRank' => 27626),
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 529, 'MinScore' => 526, 'AvgScore' => 527.25, 'MaxRank' => 26738, 'MinRank' => 28083),
            '新闻学' => array('Num' => 2, 'MaxScore' => 520, 'MinScore' => 519, 'AvgScore' => 519.50, 'MaxRank' => 30948, 'MinRank' => 31465)
        )
    ),
    '江西' => array(
        '文史' => array(
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 543, 'MinScore' => 535, 'AvgScore' => 538.49, 'MaxRank' => 11467, 'MinRank' => 14282),
            '英语' => array('Num' => 2, 'MaxScore' => 535, 'MinScore' => 534, 'AvgScore' => 535.49, 'MaxRank' => 14282, 'MinRank' => 14674),
            '建筑学' => array('Num' => 2, 'MaxScore' => 533, 'MinScore' => 532, 'AvgScore' => 533.48, 'MaxRank' => 15073, 'MinRank' => 15506),
            '学前教育' => array('Num' => 2, 'MaxScore' => 533, 'MinScore' => 532, 'AvgScore' => 533.48, 'MaxRank' => 15073, 'MinRank' => 15506),
            '护理学' => array('Num' => 2, 'MaxScore' => 535, 'MinScore' => 531, 'AvgScore' => 533.99, 'MaxRank' => 14282, 'MinRank' => 15894),
            '旅游管理类' => array('Num' => 4, 'MaxScore' => 533, 'MinScore' => 531, 'AvgScore' => 533.49, 'MaxRank' => 15073, 'MinRank' => 15894)
        ),
        '理工' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 523, 'MinScore' => 516, 'AvgScore' => 518.95, 'MaxRank' => 50115, 'MinRank' => 55835),
            '计算机类' => array('Num' => 2, 'MaxScore' => 522, 'MinScore' => 515, 'AvgScore' => 519.45, 'MaxRank' => 50887, 'MinRank' => 56725),
            '眼视光医学' => array('Num' => 2, 'MaxScore' => 517, 'MinScore' => 515, 'AvgScore' => 516.94, 'MaxRank' => 54971, 'MinRank' => 56725),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 515, 'MinScore' => 515, 'AvgScore' => 515.94, 'MaxRank' => 56725, 'MinRank' => 56725),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 513, 'MinScore' => 511, 'AvgScore' => 512.94, 'MaxRank' => 58510, 'MinRank' => 60332),
            '智能医学工程' => array('Num' => 2, 'MaxScore' => 512, 'MinScore' => 510, 'AvgScore' => 511.94, 'MaxRank' => 59459, 'MinRank' => 61243),
            '通信工程' => array('Num' => 2, 'MaxScore' => 511, 'MinScore' => 510, 'AvgScore' => 511.44, 'MaxRank' => 60332, 'MinRank' => 61243),
            '化学' => array('Num' => 2, 'MaxScore' => 512, 'MinScore' => 509, 'AvgScore' => 511.44, 'MaxRank' => 59459, 'MinRank' => 62203),
            '药学' => array('Num' => 4, 'MaxScore' => 514, 'MinScore' => 508, 'AvgScore' => 510.94, 'MaxRank' => 57620, 'MinRank' => 63124),
            '预防医学' => array('Num' => 4, 'MaxScore' => 514, 'MinScore' => 508, 'AvgScore' => 511.94, 'MaxRank' => 57620, 'MinRank' => 63124),
            '护理学' => array('Num' => 2, 'MaxScore' => 509, 'MinScore' => 508, 'AvgScore' => 509.44, 'MaxRank' => 62203, 'MinRank' => 63124),
            '卫生检验与检疫' => array('Num' => 2, 'MaxScore' => 509, 'MinScore' => 508, 'AvgScore' => 509.44, 'MaxRank' => 62203, 'MinRank' => 63124),
            '园艺' => array('Num' => 2, 'MaxScore' => 508, 'MinScore' => 508, 'AvgScore' => 508.94, 'MaxRank' => 63124, 'MinRank' => 63124)
        )
    ),
    '辽宁' => array(
        '物理学科类' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 536, 'MinScore' => 528, 'AvgScore' => 531.00, 'MaxRank' => 30000, 'MinRank' => 32882),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 535, 'MinScore' => 528, 'AvgScore' => 531.50, 'MaxRank' => 30340, 'MinRank' => 32882),
            '眼视光医学' => array('Num' => 2, 'MaxScore' => 530, 'MinScore' => 525, 'AvgScore' => 527.50, 'MaxRank' => 32170, 'MinRank' => 34033),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 530, 'MinScore' => 519, 'AvgScore' => 524.50, 'MaxRank' => 32170, 'MinRank' => 36288),
            '建筑学' => array('Num' => 2, 'MaxScore' => 486, 'MinScore' => 483, 'AvgScore' => 484.50, 'MaxRank' => 50033, 'MinRank' => 51369),
            '康复治疗学' => array('Num' => 2, 'MaxScore' => 482, 'MinScore' => 481, 'AvgScore' => 481.50, 'MaxRank' => 51808, 'MinRank' => 52242),
            '预防医学' => array('Num' => 2, 'MaxScore' => 491, 'MinScore' => 457, 'AvgScore' => 474.00, 'MaxRank' => 47915, 'MinRank' => 63365)
        ),
        '历史学科类' => array(
            '法学' => array('Num' => 2, 'MaxScore' => 532, 'MinScore' => 531, 'AvgScore' => 531.50, 'MaxRank' => 7074, 'MinRank' => 7240),
            '汉语言文学' => array('Num' => 2, 'MaxScore' => 532, 'MinScore' => 531, 'AvgScore' => 531.50, 'MaxRank' => 7074, 'MinRank' => 7240),
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 519, 'MinScore' => 516, 'AvgScore' => 517.50, 'MaxRank' => 8761, 'MinRank' => 9181),
            '汉语国际教育' => array('Num' => 2, 'MaxScore' => 510, 'MinScore' => 503, 'AvgScore' => 506.50, 'MaxRank' => 10060, 'MinRank' => 11118),
            '公共管理类' => array('Num' => 2, 'MaxScore' => 504, 'MinScore' => 500, 'AvgScore' => 502.00, 'MaxRank' => 10965, 'MinRank' => 11604),
            '护理学' => array('Num' => 2, 'MaxScore' => 501, 'MinScore' => 500, 'AvgScore' => 500.50, 'MaxRank' => 11432, 'MinRank' => 11604),
            '学前教育' => array('Num' => 2, 'MaxScore' => 490, 'MinScore' => 489, 'AvgScore' => 489.50, 'MaxRank' => 13220, 'MinRank' => 13365)
        )
    ),
    '内蒙古' => array(
        '文科' => array(
            '知识产权' => array('Num' => 2, 'MaxScore' => 476, 'MinScore' => 469, 'AvgScore' => 472.50, 'MaxRank' => 5964, 'MinRank' => 6732),
            '旅游管理类' => array('Num' => 2, 'MaxScore' => 431, 'MinScore' => 425, 'AvgScore' => 428.00, 'MaxRank' => 11465, 'MinRank' => 12275)
        ),
        '理科' => array(
            '临床医学' => array('Num' => 2, 'MaxScore' => 461, 'MinScore' => 455, 'AvgScore' => 458.00, 'MaxRank' => 22055, 'MinRank' => 23526),
            '计算机类' => array('Num' => 2, 'MaxScore' => 447, 'MinScore' => 442, 'AvgScore' => 444.50, 'MaxRank' => 25578, 'MinRank' => 26851),
            '化学' => array('Num' => 2, 'MaxScore' => 388, 'MinScore' => 349, 'AvgScore' => 368.50, 'MaxRank' => 42359, 'MinRank' => 54991)
        )
    ),
    '宁夏' => array(
        '文史' => array(
            '汉语言文学' => array('Num' => 2, 'MaxScore' => 488, 'MinScore' => 488, 'AvgScore' => 488.22, 'MaxRank' => 3252, 'MinRank' => 3252)
        ),
        '理工' => array(
            '临床医学' => array('Num' => 2, 'MaxScore' => 391, 'MinScore' => 390, 'AvgScore' => 390.64, 'MaxRank' => 15132, 'MinRank' => 15333),
            '储能科学与工程' => array('Num' => 2, 'MaxScore' => 392, 'MinScore' => 388, 'AvgScore' => 390.15, 'MaxRank' => 14918, 'MinRank' => 15698),
            '预防医学' => array('Num' => 2, 'MaxScore' => 387, 'MinScore' => 384, 'AvgScore' => 385.63, 'MaxRank' => 15897, 'MinRank' => 16526),
            '小学教育' => array('Num' => 2, 'MaxScore' => 376, 'MinScore' => 373, 'AvgScore' => 374.65, 'MaxRank' => 18142, 'MinRank' => 18786)
        )
    ),
    '青海' => array(
        '理工' => array(
            '临床医学' => array('Num' => 2, 'MaxScore' => 429, 'MinScore' => 418, 'AvgScore' => 423.56, 'MaxRank' => 3948, 'MinRank' => 4694),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 417, 'MinScore' => 417, 'AvgScore' => 417.06, 'MaxRank' => 4770, 'MinRank' => 4770)
        )
    ),
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
    ),
    '山西' => array(
        '文史' => array(
            '法学' => array('Num' => 2, 'MaxScore' => 477, 'MinScore' => 466, 'AvgScore' => 471.61, 'MaxRank' => 9874, 'MinRank' => 12134),
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 465, 'MinScore' => 464, 'AvgScore' => 464.60, 'MaxRank' => 12359, 'MinRank' => 12587),
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 466, 'MinScore' => 462, 'AvgScore' => 464.10, 'MaxRank' => 12134, 'MinRank' => 13053),
            '工商管理类' => array('Num' => 2, 'MaxScore' => 463, 'MinScore' => 462, 'AvgScore' => 462.60, 'MaxRank' => 12820, 'MinRank' => 13053),
            '汉语国际教育' => array('Num' => 2, 'MaxScore' => 462, 'MinScore' => 462, 'AvgScore' => 462.11, 'MaxRank' => 13053, 'MinRank' => 13053),
            '小学教育' => array('Num' => 2, 'MaxScore' => 462, 'MinScore' => 461, 'AvgScore' => 461.61, 'MaxRank' => 13053, 'MinRank' => 13281)
        ),
        '理工' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 517, 'MinScore' => 513, 'AvgScore' => 514.85, 'MaxRank' => 26634, 'MinRank' => 28176),
            '医学影像学' => array('Num' => 4, 'MaxScore' => 514, 'MinScore' => 511, 'AvgScore' => 512.32, 'MaxRank' => 27801, 'MinRank' => 29000),
            '儿科学' => array('Num' => 2, 'MaxScore' => 508, 'MinScore' => 507, 'AvgScore' => 507.55, 'MaxRank' => 30280, 'MinRank' => 30713),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 456, 'MinScore' => 450, 'AvgScore' => 453.09, 'MaxRank' => 55767, 'MinRank' => 59324),
            '药学' => array('Num' => 4, 'MaxScore' => 455, 'MinScore' => 447, 'AvgScore' => 450.08, 'MaxRank' => 56376, 'MinRank' => 61036),
            '临床药学' => array('Num' => 2, 'MaxScore' => 452, 'MinScore' => 441, 'AvgScore' => 446.57, 'MaxRank' => 58154, 'MinRank' => 64867),
            '预防医学' => array('Num' => 2, 'MaxScore' => 445, 'MinScore' => 440, 'AvgScore' => 442.59, 'MaxRank' => 62278, 'MinRank' => 65475),
            '医学检验技术' => array('Num' => 2, 'MaxScore' => 447, 'MinScore' => 435, 'AvgScore' => 441.09, 'MaxRank' => 61036, 'MinRank' => 68610),
            '护理学' => array('Num' => 2, 'MaxScore' => 441, 'MinScore' => 435, 'AvgScore' => 438.06, 'MaxRank' => 64867, 'MinRank' => 68610),
            '环境科学' => array('Num' => 2, 'MaxScore' => 435, 'MinScore' => 434, 'AvgScore' => 434.58, 'MaxRank' => 68610, 'MinRank' => 69199),
            '食品质量与安全' => array('Num' => 2, 'MaxScore' => 439, 'MinScore' => 410, 'AvgScore' => 424.57, 'MaxRank' => 66078, 'MinRank' => 85217)
        )
    ),
    '陕西' => array(
        '文史' => array(
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 484, 'MinScore' => 482, 'AvgScore' => 483.12, 'MaxRank' => 16024, 'MinRank' => 16631),
            '新闻学' => array('Num' => 2, 'MaxScore' => 481, 'MinScore' => 481, 'AvgScore' => 481.11, 'MaxRank' => 16964, 'MinRank' => 16964),
            '学前教育' => array('Num' => 2, 'MaxScore' => 481, 'MinScore' => 480, 'AvgScore' => 480.62, 'MaxRank' => 16964, 'MinRank' => 17247),
            '旅游管理类' => array('Num' => 2, 'MaxScore' => 481, 'MinScore' => 479, 'AvgScore' => 480.11, 'MaxRank' => 16964, 'MinRank' => 17575),
            '工商管理类' => array('Num' => 2, 'MaxScore' => 480, 'MinScore' => 479, 'AvgScore' => 479.61, 'MaxRank' => 17247, 'MinRank' => 17575)
        ),
        '理工' => array(
            '临床医学' => array('Num' => 4, 'MaxScore' => 460, 'MinScore' => 444, 'AvgScore' => 448.61, 'MaxRank' => 51742, 'MinRank' => 61607),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 439, 'MinScore' => 437, 'AvgScore' => 438.12, 'MaxRank' => 64932, 'MinRank' => 66276),
            '医学检验技术' => array('Num' => 2, 'MaxScore' => 442, 'MinScore' => 436, 'AvgScore' => 439.11, 'MaxRank' => 62921, 'MinRank' => 66881),
            '计算机类' => array('Num' => 2, 'MaxScore' => 434, 'MinScore' => 431, 'AvgScore' => 432.61, 'MaxRank' => 68211, 'MinRank' => 70234),
            '护理学' => array('Num' => 2, 'MaxScore' => 431, 'MinScore' => 430, 'AvgScore' => 430.60, 'MaxRank' => 70234, 'MinRank' => 70884),
            '通信工程' => array('Num' => 2, 'MaxScore' => 435, 'MinScore' => 427, 'AvgScore' => 431.10, 'MaxRank' => 67552, 'MinRank' => 73007),
            '预防医学' => array('Num' => 2, 'MaxScore' => 425, 'MinScore' => 416, 'AvgScore' => 420.61, 'MaxRank' => 74337, 'MinRank' => 80586),
            '智能医学工程' => array('Num' => 2, 'MaxScore' => 421, 'MinScore' => 415, 'AvgScore' => 418.10, 'MaxRank' => 77103, 'MinRank' => 81307),
            '临床药学' => array('Num' => 2, 'MaxScore' => 419, 'MinScore' => 415, 'AvgScore' => 417.10, 'MaxRank' => 78493, 'MinRank' => 81307),
            '经济学' => array('Num' => 2, 'MaxScore' => 419, 'MinScore' => 413, 'AvgScore' => 416.10, 'MaxRank' => 78493, 'MinRank' => 82647),
            '学前教育' => array('Num' => 2, 'MaxScore' => 432, 'MinScore' => 411, 'AvgScore' => 421.62, 'MaxRank' => 69570, 'MinRank' => 84007),
            '知识产权' => array('Num' => 2, 'MaxScore' => 425, 'MinScore' => 408, 'AvgScore' => 416.61, 'MaxRank' => 74337, 'MinRank' => 86143),
            '食品质量与安全' => array('Num' => 2, 'MaxScore' => 414, 'MinScore' => 407, 'AvgScore' => 410.62, 'MaxRank' => 81971, 'MinRank' => 86880),
            '卫生检验与检疫' => array('Num' => 2, 'MaxScore' => 410, 'MinScore' => 404, 'AvgScore' => 407.11, 'MaxRank' => 84708, 'MinRank' => 89001)
        )
    ),
    '上海' => array(
        '综合改革' => array(
            '口腔医学' => array('Num' => 2, 'MaxScore' => 517, 'MinScore' => 515, 'AvgScore' => 516.00, 'MaxRank' => 15390, 'MinRank' => 15916),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 498, 'MinScore' => 486, 'AvgScore' => 492.00, 'MaxRank' => 20181, 'MinRank' => 23115),
            '临床医学' => array('Num' => 2, 'MaxScore' => 478, 'MinScore' => 477, 'AvgScore' => 477.50, 'MaxRank' => 25081, 'MinRank' => 25351),
            '经济学' => array('Num' => 2, 'MaxScore' => 442, 'MinScore' => 433, 'AvgScore' => 437.50, 'MaxRank' => 33564, 'MinRank' => 35473),
            '工商管理类' => array('Num' => 2, 'MaxScore' => 437, 'MinScore' => 432, 'AvgScore' => 434.50, 'MaxRank' => 34625, 'MinRank' => 35697)
        )
    ),
    '四川' => array(
        '文史' => array(
            '汉语言文学' => array('Num' => 3, 'MaxScore' => 538, 'MinScore' => 533, 'AvgScore' => 535.12, 'MaxRank' => 15424, 'MinRank' => 17772),
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 531, 'MinScore' => 531, 'AvgScore' => 531.11, 'MaxRank' => 18797, 'MinRank' => 18797),
            '英语' => array('Num' => 2, 'MaxScore' => 543, 'MinScore' => 530, 'AvgScore' => 536.62, 'MaxRank' => 13269, 'MinRank' => 19323),
            '小学教育' => array('Num' => 2, 'MaxScore' => 530, 'MinScore' => 530, 'AvgScore' => 530.12, 'MaxRank' => 19323, 'MinRank' => 19323),
            '新闻学' => array('Num' => 2, 'MaxScore' => 530, 'MinScore' => 529, 'AvgScore' => 529.60, 'MaxRank' => 19323, 'MinRank' => 19827),
            '经济学' => array('Num' => 2, 'MaxScore' => 529, 'MinScore' => 529, 'AvgScore' => 529.12, 'MaxRank' => 19827, 'MinRank' => 19827),
            '广告学' => array('Num' => 2, 'MaxScore' => 531, 'MinScore' => 528, 'AvgScore' => 529.62, 'MaxRank' => 18797, 'MinRank' => 20307),
            '学前教育' => array('Num' => 2, 'MaxScore' => 529, 'MinScore' => 527, 'AvgScore' => 528.11, 'MaxRank' => 19827, 'MinRank' => 20831),
            '护理学' => array('Num' => 4, 'MaxScore' => 530, 'MinScore' => 526, 'AvgScore' => 528.36, 'MaxRank' => 19323, 'MinRank' => 21377),
            '公共管理类' => array('Num' => 4, 'MaxScore' => 526, 'MinScore' => 525, 'AvgScore' => 525.86, 'MaxRank' => 21377, 'MinRank' => 21959),
            '缅甸语' => array('Num' => 2, 'MaxScore' => 526, 'MinScore' => 503, 'AvgScore' => 514.61, 'MaxRank' => 21377, 'MinRank' => 36796)
        ),
        '理工' => array(
            '口腔医学' => array('Num' => 2, 'MaxScore' => 570, 'MinScore' => 569, 'AvgScore' => 569.61, 'MaxRank' => 40488, 'MinRank' => 41149),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 558, 'MinScore' => 549, 'AvgScore' => 553.60, 'MaxRank' => 49185, 'MinRank' => 56474),
            '临床医学' => array('Num' => 4, 'MaxScore' => 557, 'MinScore' => 545, 'AvgScore' => 552.09, 'MaxRank' => 49992, 'MinRank' => 59908),
            '眼视光医学' => array('Num' => 2, 'MaxScore' => 544, 'MinScore' => 543, 'AvgScore' => 543.60, 'MaxRank' => 60765, 'MinRank' => 61706),
            '儿科学' => array('Num' => 2, 'MaxScore' => 545, 'MinScore' => 540, 'AvgScore' => 542.59, 'MaxRank' => 59908, 'MinRank' => 64480),
            '临床药学' => array('Num' => 2, 'MaxScore' => 541, 'MinScore' => 540, 'AvgScore' => 540.60, 'MaxRank' => 63567, 'MinRank' => 64480),
            '食品质量与安全' => array('Num' => 2, 'MaxScore' => 538, 'MinScore' => 534, 'AvgScore' => 536.08, 'MaxRank' => 66337, 'MinRank' => 70054),
            '药学' => array('Num' => 4, 'MaxScore' => 529, 'MinScore' => 528, 'AvgScore' => 528.59, 'MaxRank' => 75055, 'MinRank' => 76054),
            '英语' => array('Num' => 2, 'MaxScore' => 530, 'MinScore' => 523, 'AvgScore' => 526.59, 'MaxRank' => 74014, 'MinRank' => 81146),
            '护理学' => array('Num' => 2, 'MaxScore' => 524, 'MinScore' => 523, 'AvgScore' => 523.59, 'MaxRank' => 80071, 'MinRank' => 81146),
            '化学' => array('Num' => 2, 'MaxScore' => 534, 'MinScore' => 521, 'AvgScore' => 527.59, 'MaxRank' => 70054, 'MinRank' => 83195),
            '学前教育' => array('Num' => 2, 'MaxScore' => 521, 'MinScore' => 520, 'AvgScore' => 520.60, 'MaxRank' => 83195, 'MinRank' => 84257),
            '经济学' => array('Num' => 2, 'MaxScore' => 519, 'MinScore' => 519, 'AvgScore' => 519.08, 'MaxRank' => 85318, 'MinRank' => 85318),
            '储能科学与工程' => array('Num' => 2, 'MaxScore' => 518, 'MinScore' => 515, 'AvgScore' => 516.59, 'MaxRank' => 86366, 'MinRank' => 89573),
            '生物科学' => array('Num' => 4, 'MaxScore' => 521, 'MinScore' => 513, 'AvgScore' => 516.83, 'MaxRank' => 83195, 'MinRank' => 91741),
            '知识产权' => array('Num' => 2, 'MaxScore' => 517, 'MinScore' => 513, 'AvgScore' => 515.09, 'MaxRank' => 87452, 'MinRank' => 91741),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 514, 'MinScore' => 513, 'AvgScore' => 513.60, 'MaxRank' => 90645, 'MinRank' => 91741),
            '工商管理类' => array('Num' => 4, 'MaxScore' => 523, 'MinScore' => 488, 'AvgScore' => 504.85, 'MaxRank' => 81146, 'MinRank' => 121079)
        )
    ),
    '天津' => array(
        '综合改革' => array(
            '口腔医学' => array('Num' => 2, 'MaxScore' => 607, 'MinScore' => 599, 'AvgScore' => 603.12, 'MaxRank' => 11106, 'MinRank' => 12824),
            '临床医学' => array('Num' => 2, 'MaxScore' => 582, 'MinScore' => 582, 'AvgScore' => 582.10, 'MaxRank' => 16526, 'MinRank' => 16526),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 598, 'MinScore' => 572, 'AvgScore' => 585.11, 'MaxRank' => 13028, 'MinRank' => 18938),
            '经济学' => array('Num' => 2, 'MaxScore' => 553, 'MinScore' => 536, 'AvgScore' => 544.61, 'MaxRank' => 23667, 'MinRank' => 28048),
            '工商管理类' => array('Num' => 2, 'MaxScore' => 548, 'MinScore' => 536, 'AvgScore' => 542.10, 'MaxRank' => 24947, 'MinRank' => 28048)
        )
    ),
    '新疆' => array(
        '文史' => array(
            '法学' => array('Num' => 2, 'MaxScore' => 459, 'MinScore' => 454, 'AvgScore' => 456.61, 'MaxRank' => 0, 'MinRank' => 0),
            '汉语言文学' => array('Num' => 2, 'MaxScore' => 459, 'MinScore' => 454, 'AvgScore' => 456.61, 'MaxRank' => 0, 'MinRank' => 0),
            '思想政治教育' => array('Num' => 2, 'MaxScore' => 453, 'MinScore' => 452, 'AvgScore' => 452.61, 'MaxRank' => 0, 'MinRank' => 0),
            '汉语言文学(专项南单对口本二)' => array('Num' => 2, 'MaxScore' => 459, 'MinScore' => 450, 'AvgScore' => 454.62, 'MaxRank' => 0, 'MinRank' => 0),
            '英语' => array('Num' => 2, 'MaxScore' => 452, 'MinScore' => 450, 'AvgScore' => 451.10, 'MaxRank' => 0, 'MinRank' => 0),
            '护理学' => array('Num' => 2, 'MaxScore' => 451, 'MinScore' => 446, 'AvgScore' => 448.62, 'MaxRank' => 0, 'MinRank' => 0),
            '学前教育' => array('Num' => 2, 'MaxScore' => 450, 'MinScore' => 446, 'AvgScore' => 448.11, 'MaxRank' => 0, 'MinRank' => 0),
            '广告学' => array('Num' => 2, 'MaxScore' => 451, 'MinScore' => 445, 'AvgScore' => 448.12, 'MaxRank' => 0, 'MinRank' => 0),
            '护理学(专项南单对口本二)' => array('Num' => 2, 'MaxScore' => 447, 'MinScore' => 444, 'AvgScore' => 445.61, 'MaxRank' => 0, 'MinRank' => 0)
        ),
        '理工' => array(
            '临床医学' => array('Num' => 2, 'MaxScore' => 436, 'MinScore' => 419, 'AvgScore' => 427.58, 'MaxRank' => 0, 'MinRank' => 0),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 417, 'MinScore' => 414, 'AvgScore' => 415.58, 'MaxRank' => 0, 'MinRank' => 0),
            '眼视光医学' => array('Num' => 2, 'MaxScore' => 415, 'MinScore' => 409, 'AvgScore' => 412.05, 'MaxRank' => 0, 'MinRank' => 0),
            '预防医学' => array('Num' => 2, 'MaxScore' => 400, 'MinScore' => 396, 'AvgScore' => 398.07, 'MaxRank' => 0, 'MinRank' => 0),
            '计算机类' => array('Num' => 2, 'MaxScore' => 398, 'MinScore' => 396, 'AvgScore' => 397.07, 'MaxRank' => 0, 'MinRank' => 0),
            '临床药学' => array('Num' => 2, 'MaxScore' => 403, 'MinScore' => 395, 'AvgScore' => 399.08, 'MaxRank' => 0, 'MinRank' => 0),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 394, 'MinScore' => 394, 'AvgScore' => 394.07, 'MaxRank' => 0, 'MinRank' => 0),
            '电子信息工程' => array('Num' => 2, 'MaxScore' => 400, 'MinScore' => 393, 'AvgScore' => 396.58, 'MaxRank' => 0, 'MinRank' => 0),
            '医学检验技术' => array('Num' => 2, 'MaxScore' => 393, 'MinScore' => 392, 'AvgScore' => 392.57, 'MaxRank' => 0, 'MinRank' => 0),
            '通信工程' => array('Num' => 2, 'MaxScore' => 391, 'MinScore' => 390, 'AvgScore' => 390.58, 'MaxRank' => 0, 'MinRank' => 0),
            '护理学' => array('Num' => 2, 'MaxScore' => 390, 'MinScore' => 390, 'AvgScore' => 390.07, 'MaxRank' => 0, 'MinRank' => 0),
            '储能科学与工程' => array('Num' => 2, 'MaxScore' => 397, 'MinScore' => 389, 'AvgScore' => 393.07, 'MaxRank' => 0, 'MinRank' => 0),
            '食品质量与安全' => array('Num' => 2, 'MaxScore' => 401, 'MinScore' => 388, 'AvgScore' => 394.58, 'MaxRank' => 0, 'MinRank' => 0),
            '学前教育' => array('Num' => 2, 'MaxScore' => 394, 'MinScore' => 388, 'AvgScore' => 391.07, 'MaxRank' => 0, 'MinRank' => 0),
            '药学(专项南单对口本二)' => array('Num' => 2, 'MaxScore' => 389, 'MinScore' => 387, 'AvgScore' => 388.07, 'MaxRank' => 0, 'MinRank' => 0),
            '环境科学' => array('Num' => 2, 'MaxScore' => 388, 'MinScore' => 387, 'AvgScore' => 387.56, 'MaxRank' => 0, 'MinRank' => 0)
        )
    ),
    '云南' => array(
        '文史' => array(
            '汉语言文学' => array('Num' => 89, 'MaxScore' => 559, 'MinScore' => 541, 'AvgScore' => 546.37, 'MaxRank' => 6405, 'MinRank' => 10494),
            '法学' => array('Num' => 76, 'MaxScore' => 553, 'MinScore' => 537, 'AvgScore' => 542.01, 'MaxRank' => 7612, 'MinRank' => 11640),
            '汉语国际教育' => array('Num' => 36, 'MaxScore' => 568, 'MinScore' => 536, 'AvgScore' => 539.75, 'MaxRank' => 4832, 'MinRank' => 11917),
            '思想政治教育' => array('Num' => 74, 'MaxScore' => 556, 'MinScore' => 536, 'AvgScore' => 541.10, 'MaxRank' => 6989, 'MinRank' => 11917),
            '小学教育' => array('Num' => 40, 'MaxScore' => 556, 'MinScore' => 536, 'AvgScore' => 540.05, 'MaxRank' => 6989, 'MinRank' => 11917),
            '英语' => array('Num' => 34, 'MaxScore' => 546, 'MinScore' => 536, 'AvgScore' => 539.91, 'MaxRank' => 9181, 'MinRank' => 11917),
            '护理学' => array('Num' => 63, 'MaxScore' => 536, 'MinScore' => 518, 'AvgScore' => 523.57, 'MaxRank' => 11917, 'MinRank' => 17987),
            '知识产权' => array('Num' => 28, 'MaxScore' => 535, 'MinScore' => 516, 'AvgScore' => 522.30, 'MaxRank' => 12207, 'MinRank' => 18785),
            '新闻学' => array('Num' => 32, 'MaxScore' => 539, 'MinScore' => 511, 'AvgScore' => 520.46, 'MaxRank' => 11054, 'MinRank' => 20875),
            '建筑学' => array('Num' => 14, 'MaxScore' => 525, 'MinScore' => 508, 'AvgScore' => 516.80, 'MaxRank' => 15406, 'MinRank' => 22140),
            '学前教育' => array('Num' => 39, 'MaxScore' => 545, 'MinScore' => 507, 'AvgScore' => 519.57, 'MaxRank' => 9423, 'MinRank' => 22568),
            '经济学' => array('Num' => 29, 'MaxScore' => 530, 'MinScore' => 507, 'AvgScore' => 516.72, 'MaxRank' => 13709, 'MinRank' => 22568),
            '工商管理类' => array('Num' => 30, 'MaxScore' => 536, 'MinScore' => 503, 'AvgScore' => 514.29, 'MaxRank' => 11917, 'MinRank' => 24406),
            '广告学' => array('Num' => 34, 'MaxScore' => 529, 'MinScore' => 503, 'AvgScore' => 510.18, 'MaxRank' => 14061, 'MinRank' => 24406),
            '泰语' => array('Num' => 20, 'MaxScore' => 526, 'MinScore' => 493, 'AvgScore' => 505.20, 'MaxRank' => 15040, 'MinRank' => 29364),
            '公共管理类' => array('Num' => 48, 'MaxScore' => 523, 'MinScore' => 493, 'AvgScore' => 505.56, 'MaxRank' => 16100, 'MinRank' => 29364),
            '旅游管理类' => array('Num' => 33, 'MaxScore' => 523, 'MinScore' => 493, 'AvgScore' => 502.49, 'MaxRank' => 16100, 'MinRank' => 29364),
            '缅甸语' => array('Num' => 22, 'MaxScore' => 518, 'MinScore' => 493, 'AvgScore' => 497.33, 'MaxRank' => 17987, 'MinRank' => 29364)
        ),
        '理工' => array(
            '口腔医学' => array('Num' => 19, 'MaxScore' => 579, 'MinScore' => 565, 'AvgScore' => 569.66, 'MaxRank' => 9858, 'MinRank' => 13433),
            '临床医学(地方专项批)' => array('Num' => 10, 'MaxScore' => 570, 'MinScore' => 554, 'AvgScore' => 560.98, 'MaxRank' => 12072, 'MinRank' => 16767),
            '临床医学' => array('Num' => 295, 'MaxScore' => 585, 'MinScore' => 549, 'AvgScore' => 557.60, 'MaxRank' => 8522, 'MinRank' => 18448),
            '儿科学' => array('Num' => 32, 'MaxScore' => 549, 'MinScore' => 546, 'AvgScore' => 548.32, 'MaxRank' => 18448, 'MinRank' => 19450),
            '临床医学(国家专项批)' => array('Num' => 140, 'MaxScore' => 570, 'MinScore' => 545, 'AvgScore' => 554.14, 'MaxRank' => 12072, 'MinRank' => 19830),
            '医学影像学' => array('Num' => 46, 'MaxScore' => 564, 'MinScore' => 545, 'AvgScore' => 549.93, 'MaxRank' => 13735, 'MinRank' => 19830),
            '眼视光医学' => array('Num' => 29, 'MaxScore' => 560, 'MinScore' => 544, 'AvgScore' => 548.03, 'MaxRank' => 14884, 'MinRank' => 20191),
            '医学检验技术' => array('Num' => 33, 'MaxScore' => 547, 'MinScore' => 539, 'AvgScore' => 542.97, 'MaxRank' => 19109, 'MinRank' => 22018),
            '临床药学' => array('Num' => 37, 'MaxScore' => 548, 'MinScore' => 538, 'AvgScore' => 543.07, 'MaxRank' => 18777, 'MinRank' => 22406),
            '卫生检验与检疫' => array('Num' => 46, 'MaxScore' => 548, 'MinScore' => 532, 'AvgScore' => 540.92, 'MaxRank' => 18777, 'MinRank' => 24737),
            '康复治疗学' => array('Num' => 46, 'MaxScore' => 545, 'MinScore' => 532, 'AvgScore' => 538.32, 'MaxRank' => 19830, 'MinRank' => 24737),
            '英语' => array('Num' => 20, 'MaxScore' => 532, 'MinScore' => 507, 'AvgScore' => 515.15, 'MaxRank' => 24737, 'MinRank' => 36030),
            '药学' => array('Num' => 89, 'MaxScore' => 552, 'MinScore' => 504, 'AvgScore' => 527.44, 'MaxRank' => 17451, 'MinRank' => 37615),
            '预防医学' => array('Num' => 113, 'MaxScore' => 551, 'MinScore' => 503, 'AvgScore' => 525.66, 'MaxRank' => 17796, 'MinRank' => 38097),
            '数学与应用数学' => array('Num' => 34, 'MaxScore' => 558, 'MinScore' => 502, 'AvgScore' => 512.68, 'MaxRank' => 15481, 'MinRank' => 38632),
            '小学教育' => array('Num' => 23, 'MaxScore' => 517, 'MinScore' => 502, 'AvgScore' => 508.15, 'MaxRank' => 31327, 'MinRank' => 38632),
            '电气工程及其自动化' => array('Num' => 135, 'MaxScore' => 509, 'MinScore' => 482, 'AvgScore' => 489.93, 'MaxRank' => 35046, 'MinRank' => 49724),
            '计算机类' => array('Num' => 115, 'MaxScore' => 523, 'MinScore' => 479, 'AvgScore' => 487.75, 'MaxRank' => 28638, 'MinRank' => 51468),
            '电子信息工程' => array('Num' => 36, 'MaxScore' => 499, 'MinScore' => 478, 'AvgScore' => 484.10, 'MaxRank' => 40268, 'MinRank' => 52037),
            '学前教育' => array('Num' => 20, 'MaxScore' => 501, 'MinScore' => 477, 'AvgScore' => 486.48, 'MaxRank' => 39166, 'MinRank' => 52603),
            '护理学' => array('Num' => 40, 'MaxScore' => 499, 'MinScore' => 477, 'AvgScore' => 486.11, 'MaxRank' => 40268, 'MinRank' => 52603),
            '通信工程' => array('Num' => 45, 'MaxScore' => 494, 'MinScore' => 476, 'AvgScore' => 481.10, 'MaxRank' => 42957, 'MinRank' => 53158),
            '化学' => array('Num' => 36, 'MaxScore' => 502, 'MinScore' => 475, 'AvgScore' => 481.66, 'MaxRank' => 38632, 'MinRank' => 53752),
            '智能医学工程' => array('Num' => 24, 'MaxScore' => 499, 'MinScore' => 475, 'AvgScore' => 484.08, 'MaxRank' => 40268, 'MinRank' => 53752),
            '储能科学与工程' => array('Num' => 36, 'MaxScore' => 500, 'MinScore' => 474, 'AvgScore' => 480.05, 'MaxRank' => 39732, 'MinRank' => 54313),
            '食品质量与安全' => array('Num' => 34, 'MaxScore' => 502, 'MinScore' => 470, 'AvgScore' => 475.59, 'MaxRank' => 38632, 'MinRank' => 56802),
            '经济学' => array('Num' => 40, 'MaxScore' => 500, 'MinScore' => 470, 'AvgScore' => 476.88, 'MaxRank' => 39732, 'MinRank' => 56802),
            '工商管理类' => array('Num' => 34, 'MaxScore' => 488, 'MinScore' => 470, 'AvgScore' => 475.68, 'MaxRank' => 46317, 'MinRank' => 56802),
            '知识产权' => array('Num' => 10, 'MaxScore' => 486, 'MinScore' => 470, 'AvgScore' => 476.38, 'MaxRank' => 47425, 'MinRank' => 56802),
            '生物科学' => array('Num' => 70, 'MaxScore' => 498, 'MinScore' => 468, 'AvgScore' => 476.00, 'MaxRank' => 40765, 'MinRank' => 58129),
            '旅游管理类' => array('Num' => 25, 'MaxScore' => 474, 'MinScore' => 467, 'AvgScore' => 470.35, 'MaxRank' => 54313, 'MinRank' => 58739),
            '建筑学' => array('Num' => 30, 'MaxScore' => 482, 'MinScore' => 466, 'AvgScore' => 473.91, 'MaxRank' => 49724, 'MinRank' => 59346),
            '泰语' => array('Num' => 10, 'MaxScore' => 477, 'MinScore' => 466, 'AvgScore' => 469.51, 'MaxRank' => 52603, 'MinRank' => 59346),
            '动物科学' => array('Num' => 36, 'MaxScore' => 485, 'MinScore' => 465, 'AvgScore' => 470.07, 'MaxRank' => 48009, 'MinRank' => 59967),
            '缅甸语' => array('Num' => 10, 'MaxScore' => 478, 'MinScore' => 465, 'AvgScore' => 468.53, 'MaxRank' => 52037, 'MinRank' => 59967),
            '园艺' => array('Num' => 34, 'MaxScore' => 478, 'MinScore' => 465, 'AvgScore' => 470.54, 'MaxRank' => 52037, 'MinRank' => 59967),
            '公共管理类' => array('Num' => 30, 'MaxScore' => 476, 'MinScore' => 465, 'AvgScore' => 470.72, 'MaxRank' => 53158, 'MinRank' => 59967),
            '环境科学' => array('Num' => 88, 'MaxScore' => 505, 'MinScore' => 462, 'AvgScore' => 471.40, 'MaxRank' => 37098, 'MinRank' => 61956),
            '临床医学(免费定向批(本科))' => array('Num' => 40, 'MaxScore' => 586, 'MinScore' => 451, 'AvgScore' => 508.63, 'MaxRank' => 8300, 'MinRank' => 69302)
        )
    ),
    '浙江' => array(
        '综合改革' => array(
            '口腔医学' => array('Num' => 2, 'MaxScore' => 618, 'MinScore' => 611, 'AvgScore' => 614.50, 'MaxRank' => 35802, 'MinRank' => 42216),
            '临床医学' => array('Num' => 4, 'MaxScore' => 598, 'MinScore' => 589, 'AvgScore' => 592.50, 'MaxRank' => 54960, 'MinRank' => 64455),
            '法学' => array('Num' => 2, 'MaxScore' => 586, 'MinScore' => 586, 'AvgScore' => 586.00, 'MaxRank' => 67676, 'MinRank' => 67676),
            '药学' => array('Num' => 4, 'MaxScore' => 582, 'MinScore' => 572, 'AvgScore' => 576.00, 'MaxRank' => 71896, 'MinRank' => 82691),
            '医学影像学' => array('Num' => 2, 'MaxScore' => 575, 'MinScore' => 571, 'AvgScore' => 573.00, 'MaxRank' => 79412, 'MinRank' => 83858),
            '建筑学' => array('Num' => 2, 'MaxScore' => 570, 'MinScore' => 570, 'AvgScore' => 570.00, 'MaxRank' => 84979, 'MinRank' => 84979),
            '新闻学' => array('Num' => 2, 'MaxScore' => 570, 'MinScore' => 569, 'AvgScore' => 569.50, 'MaxRank' => 84979, 'MinRank' => 86091),
            '预防医学' => array('Num' => 2, 'MaxScore' => 569, 'MinScore' => 569, 'AvgScore' => 569.00, 'MaxRank' => 86091, 'MinRank' => 86091),
            '计算机类' => array('Num' => 2, 'MaxScore' => 571, 'MinScore' => 568, 'AvgScore' => 569.50, 'MaxRank' => 83858, 'MinRank' => 87214),
            '卫生检验与检疫' => array('Num' => 2, 'MaxScore' => 569, 'MinScore' => 566, 'AvgScore' => 567.50, 'MaxRank' => 86091, 'MinRank' => 89403),
            '电气工程及其自动化' => array('Num' => 2, 'MaxScore' => 566, 'MinScore' => 566, 'AvgScore' => 566.00, 'MaxRank' => 89403, 'MinRank' => 89403),
            '储能科学与工程' => array('Num' => 2, 'MaxScore' => 583, 'MinScore' => 563, 'AvgScore' => 573.00, 'MaxRank' => 70865, 'MinRank' => 92679),
            '汉语国际教育' => array('Num' => 2, 'MaxScore' => 577, 'MinScore' => 563, 'AvgScore' => 570.00, 'MaxRank' => 77235, 'MinRank' => 92679),
            '英语' => array('Num' => 2, 'MaxScore' => 574, 'MinScore' => 561, 'AvgScore' => 567.50, 'MaxRank' => 80462, 'MinRank' => 94840),
            '生物科学' => array('Num' => 2, 'MaxScore' => 560, 'MinScore' => 558, 'AvgScore' => 559.00, 'MaxRank' => 95943, 'MinRank' => 98206),
            '环境科学' => array('Num' => 2, 'MaxScore' => 557, 'MinScore' => 557, 'AvgScore' => 557.00, 'MaxRank' => 99276, 'MinRank' => 99276),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 570, 'MinScore' => 556, 'AvgScore' => 563.00, 'MaxRank' => 84979, 'MinRank' => 100341),
            '通信工程' => array('Num' => 2, 'MaxScore' => 553, 'MinScore' => 552, 'AvgScore' => 552.50, 'MaxRank' => 103688, 'MinRank' => 104863)
        )
    ),
    '重庆' => array(
        '物理' => array(
            '口腔医学' => array('Num' => 2, 'MaxScore' => 558, 'MinScore' => 556, 'AvgScore' => 557.20, 'MaxRank' => 17392, 'MinRank' => 18037),
            '临床医学' => array('Num' => 4, 'MaxScore' => 554, 'MinScore' => 545, 'AvgScore' => 548.69, 'MaxRank' => 18673, 'MinRank' => 21776),
            '儿科学' => array('Num' => 2, 'MaxScore' => 545, 'MinScore' => 542, 'AvgScore' => 543.70, 'MaxRank' => 21776, 'MinRank' => 22909),
            '医学影像学' => array('Num' => 4, 'MaxScore' => 566, 'MinScore' => 541, 'AvgScore' => 550.70, 'MaxRank' => 14943, 'MinRank' => 23274),
            '眼视光医学' => array('Num' => 2, 'MaxScore' => 540, 'MinScore' => 540, 'AvgScore' => 540.19, 'MaxRank' => 23650, 'MinRank' => 23650),
            '小学教育' => array('Num' => 2, 'MaxScore' => 529, 'MinScore' => 527, 'AvgScore' => 528.20, 'MaxRank' => 27853, 'MinRank' => 28698),
            '电气工程及其自动化' => array('Num' => 4, 'MaxScore' => 521, 'MinScore' => 512, 'AvgScore' => 514.93, 'MaxRank' => 31143, 'MinRank' => 35119),
            '药学' => array('Num' => 4, 'MaxScore' => 538, 'MinScore' => 511, 'AvgScore' => 520.93, 'MaxRank' => 24376, 'MinRank' => 35580),
            '护理学' => array('Num' => 4, 'MaxScore' => 512, 'MinScore' => 508, 'AvgScore' => 510.44, 'MaxRank' => 35119, 'MinRank' => 36919),
            '学前教育' => array('Num' => 2, 'MaxScore' => 505, 'MinScore' => 503, 'AvgScore' => 504.18, 'MaxRank' => 38333, 'MinRank' => 39250),
            '数学与应用数学' => array('Num' => 2, 'MaxScore' => 503, 'MinScore' => 501, 'AvgScore' => 502.20, 'MaxRank' => 39250, 'MinRank' => 40207),
            '生物科学' => array('Num' => 4, 'MaxScore' => 505, 'MinScore' => 499, 'AvgScore' => 502.69, 'MaxRank' => 38333, 'MinRank' => 41180),
            '经济学' => array('Num' => 2, 'MaxScore' => 498, 'MinScore' => 497, 'AvgScore' => 497.67, 'MaxRank' => 41691, 'MinRank' => 42153),
            '动物科学' => array('Num' => 2, 'MaxScore' => 496, 'MinScore' => 493, 'AvgScore' => 494.67, 'MaxRank' => 42640, 'MinRank' => 44017),
            '园艺' => array('Num' => 2, 'MaxScore' => 487, 'MinScore' => 485, 'AvgScore' => 486.18, 'MaxRank' => 46881, 'MinRank' => 47855)
        ),
        '历史' => array(
            '小学教育' => array('Num' => 2, 'MaxScore' => 524, 'MinScore' => 521, 'AvgScore' => 522.68, 'MaxRank' => 7132, 'MinRank' => 7602),
            '汉语言文学' => array('Num' => 4, 'MaxScore' => 522, 'MinScore' => 519, 'AvgScore' => 520.92, 'MaxRank' => 7449, 'MinRank' => 7899),
            '法学' => array('Num' => 2, 'MaxScore' => 522, 'MinScore' => 518, 'AvgScore' => 520.17, 'MaxRank' => 7449, 'MinRank' => 8060),
            '护理学' => array('Num' => 2, 'MaxScore' => 512, 'MinScore' => 507, 'AvgScore' => 509.66, 'MaxRank' => 8993, 'MinRank' => 9809),
            '英语' => array('Num' => 2, 'MaxScore' => 505, 'MinScore' => 501, 'AvgScore' => 503.15, 'MaxRank' => 10191, 'MinRank' => 10925),
            '经济学' => array('Num' => 2, 'MaxScore' => 502, 'MinScore' => 500, 'AvgScore' => 501.17, 'MaxRank' => 10729, 'MinRank' => 11117),
            '工商管理类' => array('Num' => 4, 'MaxScore' => 509, 'MinScore' => 496, 'AvgScore' => 501.17, 'MaxRank' => 9473, 'MinRank' => 11835),
            '泰语' => array('Num' => 2, 'MaxScore' => 483, 'MinScore' => 480, 'AvgScore' => 481.66, 'MaxRank' => 14459, 'MinRank' => 15119),
            '缅甸语' => array('Num' => 2, 'MaxScore' => 472, 'MinScore' => 468, 'AvgScore' => 470.15, 'MaxRank' => 17010, 'MinRank' => 18023)
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
    <title>DLUSEC-志愿查询</title>
  </head>
  <body>
    <div id="app">
      <h1>大理大学志愿查询</h1>
      <p>此页面查询结果仅供参考，请勿过度依赖此页面结果，理性填报，数据来源于：<a href="2023年普通类录取情况统计表">大理大学2023级录取情况</a></p>
      <p>大理大学贴吧2024级迎新群：916020426</p>
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
                fetch("https://act.mcsog.top/info.php?type=area")
                .then((response) => response.json())
                .then((data) => {
                    this.provinceList = data;
                    this.high_text = "你的排名超过了大多数专业哦~";
                    this.middle_text = "你的排名可能不太合适";
                });
            },
            getMajor() {
                fetch("https://act.mcsog.top/info.php?type=area&province=" + this.form.province)
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
                "https://act.mcsog.top/info.php?type=rank&province=" +
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
                "https://act.mcsog.top/info.php?type=rank&province=" +
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