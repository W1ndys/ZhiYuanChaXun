<?php

$AreaType = array(
    '山东' => array('普通类'),
    '河北' => array('物理类', '历史类'),
    '山西' => array('文史', '理工'),
    // 可继续扩展
);

$AreaScore = array(
    '山东' => array('普通类' => array(21199, 144676)),
    '河北' => array('历史类' => array(5605, 12485), '物理类' => array(36748, 70986)),
    '山西' => array('文史' => array(5996, 8873), '理工' => array(34494, 45282)),
    // 可继续扩展
);
$Subject = array(
    '山东' => array(
        '普通类' => array(
            '汉语言文学（师范）' => array('Num' => 223, 'MaxScore' => 602, 'MinScore' => 572, 'AvgScore' => 575.38, 'MaxRank' => 21199, 'MinRank' => 47164),
            '法学' => array('Num' => 98, 'MaxScore' => 584, 'MinScore' => 567, 'AvgScore' => 569.28, 'MaxRank' => 34999, 'MinRank' => 52916),
            '思想政治教育（师范）' => array('Num' => 130, 'MaxScore' => 579, 'MinScore' => 566, 'AvgScore' => 568.50, 'MaxRank' => 39755, 'MinRank' => 54147),
            '英语（师范）' => array('Num' => 153, 'MaxScore' => 572, 'MinScore' => 561, 'AvgScore' => 563.61, 'MaxRank' => 47164, 'MinRank' => 60500),
            '历史学（师范）' => array('Num' => 232, 'MaxScore' => 576, 'MinScore' => 559, 'AvgScore' => 562.31, 'MaxRank' => 42812, 'MinRank' => 63234),
            '英语' => array('Num' => 39, 'MaxScore' => 566, 'MinScore' => 557, 'AvgScore' => 559.87, 'MaxRank' => 54147, 'MinRank' => 65942),
            '汉语国际教育（师范）' => array('Num' => 40, 'MaxScore' => 564, 'MinScore' => 557, 'AvgScore' => 559.38, 'MaxRank' => 56667, 'MinRank' => 65942),
            '教育学（师范）' => array('Num' => 47, 'MaxScore' => 569, 'MinScore' => 555, 'AvgScore' => 557.68, 'MaxRank' => 50519, 'MinRank' => 68861),
            '小学教育（师范）' => array('Num' => 66, 'MaxScore' => 569, 'MinScore' => 553, 'AvgScore' => 556.42, 'MaxRank' => 50519, 'MinRank' => 71855),
            '地理科学（师范）' => array('Num' => 234, 'MaxScore' => 572, 'MinScore' => 552, 'AvgScore' => 555.71, 'MaxRank' => 47164, 'MinRank' => 73415),
            '财务管理' => array('Num' => 96, 'MaxScore' => 563, 'MinScore' => 551, 'AvgScore' => 554.31, 'MaxRank' => 57955, 'MinRank' => 74897),
            '政治学与行政学' => array('Num' => 55, 'MaxScore' => 565, 'MinScore' => 550, 'AvgScore' => 552.56, 'MaxRank' => 55382, 'MinRank' => 76535),
            '文物与博物馆学' => array('Num' => 32, 'MaxScore' => 558, 'MinScore' => 547, 'AvgScore' => 550.91, 'MaxRank' => 64556, 'MinRank' => 81425),
            '数学与应用数学（师范）' => array('Num' => 272, 'MaxScore' => 571, 'MinScore' => 546, 'AvgScore' => 551.49, 'MaxRank' => 48309, 'MinRank' => 83093),
            '心理学（师范）' => array('Num' => 70, 'MaxScore' => 559, 'MinScore' => 545, 'AvgScore' => 548.54, 'MaxRank' => 63234, 'MinRank' => 84781),
            '电子信息工程' => array('Num' => 36, 'MaxScore' => 560, 'MinScore' => 544, 'AvgScore' => 546.86, 'MaxRank' => 61868, 'MinRank' => 86433),
            '电气工程及其自动化' => array('Num' => 157, 'MaxScore' => 554, 'MinScore' => 543, 'AvgScore' => 546.15, 'MaxRank' => 70326, 'MinRank' => 88128),
            '哲学' => array('Num' => 46, 'MaxScore' => 558, 'MinScore' => 543, 'AvgScore' => 546.39, 'MaxRank' => 64556, 'MinRank' => 88128),
            '数学与应用数学' => array('Num' => 86, 'MaxScore' => 561, 'MinScore' => 543, 'AvgScore' => 547.45, 'MaxRank' => 60500, 'MinRank' => 88128),
            '经济学' => array('Num' => 122, 'MaxScore' => 590, 'MinScore' => 542, 'AvgScore' => 545.48, 'MaxRank' => 29931, 'MinRank' => 89872),
            '计算机科学与技术（师范）' => array('Num' => 108, 'MaxScore' => 566, 'MinScore' => 541, 'AvgScore' => 544.41, 'MaxRank' => 54147, 'MinRank' => 91627),
            '数据科学与大数据技术' => array('Num' => 64, 'MaxScore' => 550, 'MinScore' => 541, 'AvgScore' => 543.14, 'MaxRank' => 76535, 'MinRank' => 91627),
            '通信工程' => array('Num' => 28, 'MaxScore' => 554, 'MinScore' => 541, 'AvgScore' => 542.82, 'MaxRank' => 70326, 'MinRank' => 91627),
            '文化产业管理' => array('Num' => 12, 'MaxScore' => 558, 'MinScore' => 539, 'AvgScore' => 543.58, 'MaxRank' => 64556, 'MinRank' => 95162),
            '新闻学' => array('Num' => 73, 'MaxScore' => 559, 'MinScore' => 539, 'AvgScore' => 542.51, 'MaxRank' => 63234, 'MinRank' => 95162),
            '网络工程' => array('Num' => 26, 'MaxScore' => 541, 'MinScore' => 538, 'AvgScore' => 538.38, 'MaxRank' => 91627, 'MinRank' => 96989),
            '网络空间安全' => array('Num' => 35, 'MaxScore' => 546, 'MinScore' => 538, 'AvgScore' => 539.74, 'MaxRank' => 83093, 'MinRank' => 96989),
            '光电信息科学与工程' => array('Num' => 21, 'MaxScore' => 544, 'MinScore' => 537, 'AvgScore' => 538.52, 'MaxRank' => 86433, 'MinRank' => 98857),
            '俄语' => array('Num' => 16, 'MaxScore' => 555, 'MinScore' => 536, 'AvgScore' => 541.81, 'MaxRank' => 68861, 'MinRank' => 100722),
            '翻译' => array('Num' => 20, 'MaxScore' => 558, 'MinScore' => 536, 'AvgScore' => 542.35, 'MaxRank' => 64556, 'MinRank' => 100722),
            '工商管理' => array('Num' => 52, 'MaxScore' => 547, 'MinScore' => 536, 'AvgScore' => 539.31, 'MaxRank' => 81425, 'MinRank' => 100722),
            '土地资源管理' => array('Num' => 19, 'MaxScore' => 548, 'MinScore' => 536, 'AvgScore' => 539.89, 'MaxRank' => 79758, 'MinRank' => 100722),
            '人工智能' => array('Num' => 60, 'MaxScore' => 543, 'MinScore' => 535, 'AvgScore' => 536.77, 'MaxRank' => 88128, 'MinRank' => 102601),
            '统计学' => array('Num' => 101, 'MaxScore' => 557, 'MinScore' => 535, 'AvgScore' => 539.49, 'MaxRank' => 65942, 'MinRank' => 102601),
            '日语（师范）' => array('Num' => 36, 'MaxScore' => 557, 'MinScore' => 534, 'AvgScore' => 538.44, 'MaxRank' => 65942, 'MinRank' => 104521),
            '自动化' => array('Num' => 162, 'MaxScore' => 549, 'MinScore' => 534, 'AvgScore' => 536.52, 'MaxRank' => 78109, 'MinRank' => 104521),
            '物流管理' => array('Num' => 22, 'MaxScore' => 548, 'MinScore' => 534, 'AvgScore' => 537.05, 'MaxRank' => 79758, 'MinRank' => 104521),
            '广播电视学' => array('Num' => 27, 'MaxScore' => 546, 'MinScore' => 534, 'AvgScore' => 536.67, 'MaxRank' => 83093, 'MinRank' => 104521),
            '国际经济与贸易' => array('Num' => 43, 'MaxScore' => 545, 'MinScore' => 534, 'AvgScore' => 536.02, 'MaxRank' => 84781, 'MinRank' => 104521),
            '软件工程' => array('Num' => 212, 'MaxScore' => 555, 'MinScore' => 534, 'AvgScore' => 538.60, 'MaxRank' => 68861, 'MinRank' => 104521),
            '新能源材料与器件' => array('Num' => 8, 'MaxScore' => 539, 'MinScore' => 533, 'AvgScore' => 534.62, 'MaxRank' => 95162, 'MinRank' => 106424),
            '数据科学' => array('Num' => 24, 'MaxScore' => 543, 'MinScore' => 531, 'AvgScore' => 535.00, 'MaxRank' => 88128, 'MinRank' => 110277),
            '旅游管理' => array('Num' => 14, 'MaxScore' => 538, 'MinScore' => 530, 'AvgScore' => 533.07, 'MaxRank' => 96989, 'MinRank' => 112306),
            '物理学（师范）' => array('Num' => 223, 'MaxScore' => 555, 'MinScore' => 530, 'AvgScore' => 537.88, 'MaxRank' => 68861, 'MinRank' => 112306),
            '法语' => array('Num' => 18, 'MaxScore' => 548, 'MinScore' => 528, 'AvgScore' => 531.78, 'MaxRank' => 79758, 'MinRank' => 116439),
            '生物工程' => array('Num' => 26, 'MaxScore' => 537, 'MinScore' => 526, 'AvgScore' => 530.81, 'MaxRank' => 98857, 'MinRank' => 120563),
            '智能感知工程' => array('Num' => 40, 'MaxScore' => 541, 'MinScore' => 526, 'AvgScore' => 530.08, 'MaxRank' => 91627, 'MinRank' => 120563),
            '金融工程' => array('Num' => 43, 'MaxScore' => 547, 'MinScore' => 525, 'AvgScore' => 528.63, 'MaxRank' => 81425, 'MinRank' => 122666),
            '化学工程与工艺' => array('Num' => 21, 'MaxScore' => 532, 'MinScore' => 524, 'AvgScore' => 526.38, 'MaxRank' => 108386, 'MinRank' => 124857),
            '材料化学' => array('Num' => 26, 'MaxScore' => 531, 'MinScore' => 522, 'AvgScore' => 524.69, 'MaxRank' => 110277, 'MinRank' => 129038),
            '化学（师范）' => array('Num' => 324, 'MaxScore' => 561, 'MinScore' => 521, 'AvgScore' => 532.08, 'MaxRank' => 60500, 'MinRank' => 131231),
            '生物科学（师范）' => array('Num' => 233, 'MaxScore' => 569, 'MinScore' => 518, 'AvgScore' => 534.05, 'MaxRank' => 50519, 'MinRank' => 137792),
            '教育技术学（师范）' => array('Num' => 83, 'MaxScore' => 549, 'MinScore' => 518, 'AvgScore' => 528.65, 'MaxRank' => 78109, 'MinRank' => 137792),
            '戏剧影视文学' => array('Num' => 65, 'MaxScore' => 540, 'MinScore' => 517, 'AvgScore' => 523.23, 'MaxRank' => 93374, 'MinRank' => 140041),
            '生态学' => array('Num' => 20, 'MaxScore' => 531, 'MinScore' => 515, 'AvgScore' => 519.30, 'MaxRank' => 110277, 'MinRank' => 144676),
        )
    ),
    '河北' => array(
        '物理类' => array(
            '数学与应用数学（师范）' => array('Num' => 6, 'MaxScore' => 573, 'MinScore' => 570, 'AvgScore' => 571.00, 'MaxRank' => 34252, 'MinRank' => 36748),
            '计算机科学与技术（师范）' => array('Num' => 6, 'MaxScore' => 576, 'MinScore' => 570, 'AvgScore' => 571.50, 'MaxRank' => 31850, 'MinRank' => 36748),
            '软件工程' => array('Num' => 4, 'MaxScore' => 571, 'MinScore' => 566, 'AvgScore' => 568.00, 'MaxRank' => 35924, 'MinRank' => 40370),
            '电气工程及其自动化' => array('Num' => 4, 'MaxScore' => 568, 'MinScore' => 565, 'AvgScore' => 566.50, 'MaxRank' => 38490, 'MinRank' => 41291),
            '网络工程' => array('Num' => 4, 'MaxScore' => 565, 'MinScore' => 563, 'AvgScore' => 564.00, 'MaxRank' => 41291, 'MinRank' => 43129),
            '自动化' => array('Num' => 5, 'MaxScore' => 566, 'MinScore' => 563, 'AvgScore' => 563.80, 'MaxRank' => 40370, 'MinRank' => 43129),
            '物理学（师范）' => array('Num' => 6, 'MaxScore' => 562, 'MinScore' => 561, 'AvgScore' => 561.17, 'MaxRank' => 44007, 'MinRank' => 44969),
            '网络空间安全' => array('Num' => 4, 'MaxScore' => 569, 'MinScore' => 561, 'AvgScore' => 564.00, 'MaxRank' => 37617, 'MinRank' => 44969),
            '化学（师范）' => array('Num' => 8, 'MaxScore' => 562, 'MinScore' => 560, 'AvgScore' => 560.75, 'MaxRank' => 44007, 'MinRank' => 45895),
            '统计学' => array('Num' => 10, 'MaxScore' => 564, 'MinScore' => 559, 'AvgScore' => 560.90, 'MaxRank' => 42211, 'MinRank' => 46811),
            '生物科学（师范）' => array('Num' => 8, 'MaxScore' => 569, 'MinScore' => 558, 'AvgScore' => 560.25, 'MaxRank' => 37617, 'MinRank' => 47783),
            '财务管理' => array('Num' => 10, 'MaxScore' => 560, 'MinScore' => 556, 'AvgScore' => 557.40, 'MaxRank' => 45895, 'MinRank' => 49791),
            '光电信息科学与工程' => array('Num' => 4, 'MaxScore' => 563, 'MinScore' => 556, 'AvgScore' => 559.00, 'MaxRank' => 43129, 'MinRank' => 49791),
            '数据科学' => array('Num' => 5, 'MaxScore' => 558, 'MinScore' => 553, 'AvgScore' => 555.20, 'MaxRank' => 47783, 'MinRank' => 52953),
            '经济学' => array('Num' => 9, 'MaxScore' => 556, 'MinScore' => 546, 'AvgScore' => 548.22, 'MaxRank' => 49791, 'MinRank' => 60449),
            '化学工程与工艺' => array('Num' => 3, 'MaxScore' => 557, 'MinScore' => 543, 'AvgScore' => 549.00, 'MaxRank' => 48790, 'MinRank' => 63909),
            '金融工程' => array('Num' => 4, 'MaxScore' => 543, 'MinScore' => 542, 'AvgScore' => 542.50, 'MaxRank' => 63909, 'MinRank' => 65074),
            '材料化学' => array('Num' => 3, 'MaxScore' => 547, 'MinScore' => 540, 'AvgScore' => 543.33, 'MaxRank' => 59388, 'MinRank' => 67377),
            '生态学' => array('Num' => 4, 'MaxScore' => 537, 'MinScore' => 529, 'AvgScore' => 532.25, 'MaxRank' => 70986, 'MinRank' => 80942),
            '物流管理' => array('Num' => 10, 'MaxScore' => 538, 'MinScore' => 528, 'AvgScore' => 531.50, 'MaxRank' => 69761, 'MinRank' => 82247),
            '旅游管理' => array('Num' => 4, 'MaxScore' => 540, 'MinScore' => 522, 'AvgScore' => 529.50, 'MaxRank' => 67377, 'MinRank' => 90382),
        ),
        '历史类' => array(
            '法学' => array('Num' => 4, 'MaxScore' => 595, 'MinScore' => 592, 'AvgScore' => 593.25, 'MaxRank' => 5114, 'MinRank' => 5605),
            '汉语言文学（师范）' => array('Num' => 8, 'MaxScore' => 595, 'MinScore' => 589, 'AvgScore' => 590.62, 'MaxRank' => 5114, 'MinRank' => 6167),
            '思想政治教育（师范）' => array('Num' => 8, 'MaxScore' => 589, 'MinScore' => 585, 'AvgScore' => 586.62, 'MaxRank' => 6167, 'MinRank' => 6946),
            '历史学（师范）' => array('Num' => 7, 'MaxScore' => 584, 'MinScore' => 581, 'AvgScore' => 582.57, 'MaxRank' => 7138, 'MinRank' => 7708),
            '政治学与行政学' => array('Num' => 4, 'MaxScore' => 584, 'MinScore' => 576, 'AvgScore' => 579.00, 'MaxRank' => 7138, 'MinRank' => 8851),
            '小学教育（师范）' => array('Num' => 4, 'MaxScore' => 578, 'MinScore' => 576, 'AvgScore' => 576.50, 'MaxRank' => 8380, 'MinRank' => 8851),
            '英语' => array('Num' => 6, 'MaxScore' => 583, 'MinScore' => 575, 'AvgScore' => 577.33, 'MaxRank' => 7336, 'MinRank' => 9066),
            '广播电视学' => array('Num' => 4, 'MaxScore' => 571, 'MinScore' => 563, 'AvgScore' => 568.25, 'MaxRank' => 10021, 'MinRank' => 12223),
            '翻译' => array('Num' => 6, 'MaxScore' => 565, 'MinScore' => 557, 'AvgScore' => 561.83, 'MaxRank' => 11636, 'MinRank' => 13933),
            '日语（师范）' => array('Num' => 6, 'MaxScore' => 562, 'MinScore' => 548, 'AvgScore' => 552.83, 'MaxRank' => 12485, 'MinRank' => 16776),
        ),
    ),
    '山西' => array(
        '理工' => array(
            '数学与应用数学（师范）' => array('Num' => 7, 'MaxScore' => 569, 'MinScore' => 525, 'AvgScore' => 534.14, 'MaxRank' => 16365, 'MinRank' => 34494),
            '物理学（师范）' => array('Num' => 4, 'MaxScore' => 531, 'MinScore' => 522, 'AvgScore' => 525.25, 'MaxRank' => 31639, 'MinRank' => 35861),
            '生物科学（师范）' => array('Num' => 4, 'MaxScore' => 550, 'MinScore' => 521, 'AvgScore' => 532.75, 'MaxRank' => 23366, 'MinRank' => 36352),
            '地理科学（师范）' => array('Num' => 2, 'MaxScore' => 523, 'MinScore' => 520, 'AvgScore' => 521.50, 'MaxRank' => 35415, 'MinRank' => 36886),
            '计算机科学与技术（师范）' => array('Num' => 4, 'MaxScore' => 526, 'MinScore' => 519, 'AvgScore' => 521.75, 'MaxRank' => 34012, 'MinRank' => 37401),
            '电子信息工程' => array('Num' => 4, 'MaxScore' => 521, 'MinScore' => 517, 'AvgScore' => 518.50, 'MaxRank' => 36352, 'MinRank' => 38403),
            '人工智能' => array('Num' => 4, 'MaxScore' => 520, 'MinScore' => 515, 'AvgScore' => 517.75, 'MaxRank' => 36886, 'MinRank' => 39381),
            '生态学' => array('Num' => 2, 'MaxScore' => 519, 'MinScore' => 514, 'AvgScore' => 516.50, 'MaxRank' => 37401, 'MinRank' => 39934),
            '经济学' => array('Num' => 2, 'MaxScore' => 512, 'MinScore' => 511, 'AvgScore' => 511.50, 'MaxRank' => 40977, 'MinRank' => 41507),
            '教育技术学（师范）' => array('Num' => 2, 'MaxScore' => 504, 'MinScore' => 501, 'AvgScore' => 502.50, 'MaxRank' => 45282, 'MinRank' => 46930),
            '金融工程' => array('Num' => 4, 'MaxScore' => 514, 'MinScore' => 495, 'AvgScore' => 502.00, 'MaxRank' => 39934, 'MinRank' => 50257),
        ),
        '文史' => array(
            '汉语言文学（师范）' => array('Num' => 3, 'MaxScore' => 540, 'MinScore' => 528, 'AvgScore' => 532.33, 'MaxRank' => 4383, 'MinRank' => 5996),
            '思想政治教育（师范）' => array('Num' => 4, 'MaxScore' => 538, 'MinScore' => 523, 'AvgScore' => 530.25, 'MaxRank' => 4635, 'MinRank' => 6822),
            '教育学（师范）' => array('Num' => 3, 'MaxScore' => 525, 'MinScore' => 520, 'AvgScore' => 523.00, 'MaxRank' => 6526, 'MinRank' => 7293),
            '哲学' => array('Num' => 4, 'MaxScore' => 525, 'MinScore' => 518, 'AvgScore' => 521.25, 'MaxRank' => 6526, 'MinRank' => 7599),
            '小学教育（师范）' => array('Num' => 3, 'MaxScore' => 525, 'MinScore' => 518, 'AvgScore' => 521.67, 'MaxRank' => 6526, 'MinRank' => 7599),
            '历史学（师范）' => array('Num' => 5, 'MaxScore' => 537, 'MinScore' => 517, 'AvgScore' => 522.40, 'MaxRank' => 4764, 'MinRank' => 7740),
            '汉语国际教育（师范）' => array('Num' => 3, 'MaxScore' => 526, 'MinScore' => 517, 'AvgScore' => 522.67, 'MaxRank' => 6339, 'MinRank' => 7740),
            '政治学与行政学' => array('Num' => 4, 'MaxScore' => 526, 'MinScore' => 516, 'AvgScore' => 520.50, 'MaxRank' => 6339, 'MinRank' => 7906),
            '英语' => array('Num' => 5, 'MaxScore' => 522, 'MinScore' => 516, 'AvgScore' => 518.20, 'MaxRank' => 6969, 'MinRank' => 7906),
            '文化产业管理' => array('Num' => 3, 'MaxScore' => 521, 'MinScore' => 513, 'AvgScore' => 515.67, 'MaxRank' => 7140, 'MinRank' => 8382),
            '戏剧影视文学' => array('Num' => 5, 'MaxScore' => 510, 'MinScore' => 509, 'AvgScore' => 509.60, 'MaxRank' => 8873, 'MinRank' => 9040),
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

        .form-row select {
            border: var(--border);
            border-radius: 16px;
            padding: 12px 18px;
            font-size: 1.12rem;
            outline: none;
            transition: border 0.2s, box-shadow 0.25s, background 0.2s;
            background: #fff;
            box-shadow: 0 2px 12px rgba(58, 26, 9, 0.10);
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            position: relative;
            color: var(--main-color);
        }

        .form-row select:focus,
        .form-row select:hover {
            border-color: #1976d2;
            box-shadow: 0 4px 20px rgba(25, 118, 210, 0.13);
            background: #f5faff;
        }

        .form-row select::-ms-expand {
            display: none;
        }

        .form-row select {
            background-image: url('data:image/svg+xml;utf8,<svg fill="%231976d2" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 20px 20px;
        }

        /* 美化数字输入框 */
        .form-row input[type="number"] {
            border: var(--border);
            border-radius: 16px;
            padding: 12px 18px;
            font-size: 1.12rem;
            outline: none;
            transition: border 0.2s, box-shadow 0.25s, background 0.2s;
            background: #fff;
            box-shadow: 0 2px 12px rgba(58, 26, 9, 0.10);
            color: var(--main-color);
        }

        .form-row input[type="number"]:focus,
        .form-row input[type="number"]:hover {
            border-color: #1976d2;
            box-shadow: 0 4px 20px rgba(25, 118, 210, 0.13);
            background: #f5faff;
        }

        /* 去除input数字框默认箭头 */
        .form-row input[type="number"]::-webkit-outer-spin-button,
        .form-row input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .form-row input[type="number"] {
            -moz-appearance: textfield;
            appearance: textfield;
        }

        @media (max-width: 600px) {

            .form-row select,
            .form-row input[type="number"] {
                font-size: 1.08em;
                padding: 10px 12px;
            }
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
    <script charset="UTF-8" id="LA_COLLECT" src="//sdk.51.la/js-sdk-pro.min.js"></script>
    <script>LA.init({ id: "3LXM1Spq74C2Vg9h", ck: "3LXM1Spq74C2Vg9h", autoTrack: true, hashMode: true })</script>
</head>

<body>
    <div id="app">
        <div class="card">
            <h1>曲阜师范大学志愿帮填</h1>
            <p>本网站为22级师哥发电设计，与学校无任何关系，特此声明。此页面结果仅供参考，请勿过度依赖此页面结果，理性填报，数据来源于：<a
                    href="https://zsb.qfnu.edu.cn/static/front/qfnu/basic/html_web/lnfs.html">曲阜师范大学本科招生网</a></p>
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
                目前只整理了部分省份的数据，其他省份数据正在整理中，敬请期待！
                只有普通批数据，不含体育、艺术、对口类专业、公费师范等特殊批次
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
            <img src="qrcode.png" alt="交流群二维码"
                style="width: min(400px, 40vw); height: auto; aspect-ratio: 1/1; max-width: 100%; border-radius:16px; box-shadow:0 2px 16px rgba(58,26,9,0.10); border:1px solid #eee; object-fit: cover;" />
        </div>
        <div class="footer">
            <p>Fork and Refactor by W1ndys | Easy-QFNU | 微信公众号【W1ndys】</p>
            <p style="color:#888;">如对网站有任何疑问或建议，欢迎联系微信公众号 <b>W1ndys</b>
                或QQ号<b><a href="https://qm.qq.com/q/nc6EADciVq" target="_blank"
                        style="color:inherit;text-decoration:underline;">2769731875</a></b>或邮箱<b><a
                        href="mailto:w1ndys@qfnu.edu.cn"
                        style="color:inherit;text-decoration:underline;">w1ndys@qfnu.edu.cn</a></b>咨询！
            </p>
            <p>Powered by <a href="https://dlusec.cn/">大理大学网络安全协会</a>&amp;MCSOG&amp;<a
                    href="https://mcsog.top/">f00001111</a></p>
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
                }
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