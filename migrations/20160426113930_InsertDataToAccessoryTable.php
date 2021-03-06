<?php

use Phpmig\Migration\Migration;

class InsertDataToAccessoryTable extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
		$sql='
insert into zt_accessory_type (id, `name`, category) values 
(17, "粘贴剂", "瓦工类"),
(16, "勾缝剂", "瓦工类"),
(15, "堵漏宝", "瓦工类"),
(13, "防水", "瓦工类"),
(18, "地漏", "瓦工类"),
(14, "压条", "瓦工类"),
(5, "弱电线", "电工类"),
(4, "强电线", "电工类"),
(6, "暗盒", "电工类"),
(7, "空开漏保", "电工类"),
(8, "PVC穿线管及配件", "电工类"),
(21, "油工工具", "油工类"),
(22, "腻子粉", "油工类"),
(19, "乳胶漆", "油工类"),
(23, "界面剂", "油工类"),
(20, "石膏粉", "油工类"),
(1, "PPR给水管道及配件", "水工类"),
(3, "水工材料", "水工类"),
(2, "pvc下水管", "水工类"),
(9, "石膏板及轻钢龙骨", "木工类"),
(10, "木工板及配件", "木工类"),
(11, "钉子", "木工类"),
(12, "胶类及工具", "木工类");

 insert into zt_accessory_brand (id, `name`, accessory_type) values 
(3, "伟星", 1),
(1, "微法", 1),
(2, "法兰特", 1),
(4, "装途专供", 1),
(5, "联塑", 2),
(8, "舒氏", 3),
(6, "装途专供", 3),
(7, "九头鸟", 3),
(9, "德力西", 4),
(10, "正泰", 4),
(11, "中科英华", 4),
(13, "TCL", 5),
(12, "飞利浦", 5),
(14, "德力西", 6),
(15, "德力西", 7),
(16, "伟星", 8),
(17, "圣戈班杰科", 9),
(18, "龙牌", 9),
(19, "可耐福", 9),
(20, "装途专供", 9),
(24, "鹏鸿（钛白浮雕）", 10),
(22, "腾飞", 10),
(25, "腾飞（苏香桐）", 10),
(26, "大王椰（罗松木）", 10),
(23, "大王椰", 10),
(21, "鹏鸿", 10),
(29, "科洛森", 10),
(27, "鹏泓", 10),
(28, "装途专供", 10),
(30, "装途专供", 11),
(32, "美巢", 12),
(33, "三维", 12),
(37, "圣泰华邦", 12),
(36, "九泰", 12),
(35, "吕氏", 12),
(31, "智恒", 12),
(34, "拳头", 12),
(38, "家乐邦", 12),
(39, "装途专供", 12),
(40, "圣戈班伟伯", 13),
(41, "雨虹", 13),
(42, "佳帝", 13),
(43, "装途专供", 14),
(44, "雨虹", 15),
(46, "圣戈班伟伯", 16),
(45, "雨虹", 16),
(47, "唐姆", 16),
(49, "智恒", 17),
(48, "圣戈班伟伯", 17),
(50, "雨虹", 17),
(51, "潜水艇", 18),
(53, "多乐士", 19),
(52, "芬琳", 19),
(54, "立邦", 19),
(55, "壁贝", 20),
(56, "美巢", 20),
(62, "超平大师二代滚刷", 21),
(58, "克里斯汀", 21),
(61, "雨虹", 21),
(64, "2英寸灵巧克里斯汀条纹滚刷 ", 21),
(65, "腾飞", 21),
(63, "9英寸油工宝滚刷", 21),
(57, "犀利", 21),
(60, "普通", 21),
(66, "立邦", 21),
(59, "装途专供", 21),
(69, "智恒", 22),
(67, "美巢", 22),
(68, "佳帝", 22),
(72, "美巢", 23),
(71, "雨虹", 23),
(70, "佳帝", 23);

 insert into zt_accessory_norm (id, `name`, accessory_type) values 
(3, "20.0", 1),
(4, "25.0", 1),
(6, "25*1/2", 1),
(10, "25-20", 1),
(7, "20，25", 1),
(1, "20*3.4", 1),
(9, "25*1/2*25", 1),
(5, "20*1/2", 1),
(8, "20*1/2*20", 1),
(11, "通用", 1),
(2, "25*4.2", 1),
(13, "110.0", 2),
(14, "100.0", 2),
(12, "50.0", 2),
(15, "110-50", 2),
(16, "50100.0", 2),
(17, "20.0", 3),
(18, "25.0", 3),
(21, "85mm*18mm", 3),
(19, "通用", 3),
(20, "15yd*18mm", 3),
(25, "黄绿", 4),
(24, "蓝", 4),
(22, "红", 4),
(23, "黄", 4),
(27, "100米/卷", 5),
(26, "305米/卷", 5),
(30, "145*61*50", 6),
(28, "86*86", 6),
(29, "107*61*50", 6),
(31, "187*61*50", 6),
(32, "32A", 7),
(33, "40A", 7),
(36, "100*100*55mm", 8),
(37, "15g", 8),
(35, "500mm", 8),
(34, "16.0", 8),
(53, "0.8", 9),
(39, "1200*3000*12", 9),
(50, "2*3", 9),
(48, "27*20*0.8", 9),
(41, "80.0", 9),
(40, "40.0", 9),
(49, "38*3000", 9),
(43, "120.0", 9),
(47, "20*30*20*0.45", 9),
(45, "75*50*0.6", 9),
(51, "2*4", 9),
(44, "75*40*0.6", 9),
(52, "0.8mm*3000", 9),
(38, "1200*3000*9.5", 9),
(42, "100.0", 9),
(46, "50*19*0.5", 9),
(58, "1220*2440*9", 10),
(54, "1220*2440*18", 10),
(57, "22mm", 10),
(56, "2440*18", 10),
(55, "1220*2440*5", 10),
(64, "ST38", 11),
(67, "25.0", 11),
(66, "ST50", 11),
(65, "ST45", 11),
(63, "ST32", 11),
(62, "ST25", 11),
(69, "50.0", 11),
(59, "F30", 11),
(60, "F20", 11),
(68, "40.0", 11),
(61, "F15", 11),
(72, "20KG", 12),
(73, "300ml", 12),
(76, "750ml", 12),
(70, "16KG", 12),
(75, "590ml", 12),
(74, "350ml", 12),
(77, "通用", 12),
(71, "18KG", 12),
(78, "18KG", 13),
(79, "通用", 14),
(80, "4KG", 15),
(81, "白", 16),
(82, "20KG", 17),
(83, "暂无", 18),
(86, "5L", 19),
(85, "15L", 19),
(84, "18L", 19),
(87, "20KG", 20),
(104, "4\",150mm×300mm", 21),
(89, "240#", 21),
(100, "FPP1标准防粉尘", 21),
(92, "4\",100mm", 21),
(98, "50mmX30m", 21),
(93, "手柄长200mm", 21),
(96, "2\",50mm", 21),
(90, "360#", 21),
(88, "0#", 21),
(101, "FPP1标准活性炭", 21),
(95, "9\",229mm", 21),
(94, "手柄长400mm", 21),
(103, "10\",310mm×350mm", 21),
(97, "2\",51mm", 21),
(102, "2x0.75m", 21),
(99, "通用", 21),
(91, "3\",75mm", 21),
(105, "20KG", 22),
(107, "30KG", 22),
(106, "35KG", 22),
(109, "20KG", 23),
(108, "18KG", 23);

 insert into zt_accessory (id, `name`, brand_id, norm_id, accessory_type, unit_name, unit_price, picture) values 
(49, "等径三通", 1, 3, 1, "个", 7.6, "/d/file/accessory/shuigonglei/shuigong-dengjingsantong.jpg"),
(50, "等径三通", 1, 4, 1, "个", 10.6, "/d/file/accessory/shuigonglei/shuigong-dengjingsantong.jpg"),
(51, "等径三通", 2, 3, 1, "个", 5.6, "/d/file/accessory/shuigonglei/shuigong-dengjingsantong.jpg"),
(52, "等径三通", 2, 4, 1, "个", 6.9, "/d/file/accessory/shuigonglei/shuigong-dengjingsantong.jpg"),
(53, "等径三通", 3, 3, 1, "个", 3.3, "/d/file/accessory/shuigonglei/shuigong-dengjingsantong.jpg"),
(54, "等径三通", 3, 4, 1, "个", 4.6, "/d/file/accessory/shuigonglei/shuigong-dengjingsantong.jpg"),
(43, "外丝直接", 1, 5, 1, "个", 44.3, "/d/file/accessory/shuigonglei/shuigong-waisizhijie.jpg"),
(44, "外丝直接", 1, 6, 1, "个", 52.9, "/d/file/accessory/shuigonglei/shuigong-waisizhijie.jpg"),
(45, "外丝直接", 2, 5, 1, "个", 33.3, "/d/file/accessory/shuigonglei/shuigong-waisizhijie.jpg"),
(46, "外丝直接", 2, 6, 1, "个", 38.9, "/d/file/accessory/shuigonglei/shuigong-waisizhijie.jpg"),
(47, "外丝直接", 3, 5, 1, "个", 15.3, "/d/file/accessory/shuigonglei/shuigong-waisizhijie.jpg"),
(48, "外丝直接", 3, 6, 1, "个", 20.9, "/d/file/accessory/shuigonglei/shuigong-waisizhijie.jpg"),
(61, "异径直接", 1, 10, 1, "个", 8.9, "/d/file/accessory/shuigonglei/shuigong-yijingzhijie.jpg"),
(63, "异径直接", 2, 10, 1, "个", 2.8, "/d/file/accessory/shuigonglei/shuigong-yijingzhijie.jpg"),
(62, "异径直接", 3, 10, 1, "个", 3.2, "/d/file/accessory/shuigonglei/shuigong-yijingzhijie.jpg"),
(13, "90°弯头", 1, 3, 1, "个", 6.6, "/d/file/accessory/shuigonglei/shuigong-90duwantou.jpg"),
(14, "90°弯头", 1, 4, 1, "个", 8.9, "/d/file/accessory/shuigonglei/shuigong-90duwantou.jpg"),
(15, "90°弯头", 2, 3, 1, "个", 3.6, "/d/file/accessory/shuigonglei/shuigong-90duwantou.jpg"),
(16, "90°弯头", 2, 4, 1, "个", 6.9, "/d/file/accessory/shuigonglei/shuigong-90duwantou.jpg"),
(17, "90°弯头", 3, 3, 1, "个", 2.6, "/d/file/accessory/shuigonglei/shuigong-90duwantou.jpg"),
(18, "90°弯头", 3, 4, 1, "个", 3.9, "/d/file/accessory/shuigonglei/shuigong-90duwantou.jpg"),
(19, "45°弯头", 1, 3, 1, "个", 6.9, "/d/file/accessory/shuigonglei/shuigong-45dudianwantou.jpg"),
(20, "45°弯头", 1, 4, 1, "个", 7.9, "/d/file/accessory/shuigonglei/shuigong-45dudianwantou.jpg"),
(21, "45°弯头", 2, 3, 1, "个", 4.6, "/d/file/accessory/shuigonglei/shuigong-45dudianwantou.jpg"),
(22, "45°弯头", 2, 4, 1, "个", 6.9, "/d/file/accessory/shuigonglei/shuigong-45dudianwantou.jpg"),
(23, "45°弯头", 3, 3, 1, "个", 1.8, "/d/file/accessory/shuigonglei/shuigong-45dudianwantou.jpg"),
(24, "45°弯头", 3, 4, 1, "个", 3.3, "/d/file/accessory/shuigonglei/shuigong-45dudianwantou.jpg"),
(25, "内丝弯头", 1, 5, 1, "个", 35.6, "/d/file/accessory/shuigonglei/shuigong-neisiwantou.jpg"),
(26, "内丝弯头", 1, 6, 1, "个", 38.9, "/d/file/accessory/shuigonglei/shuigong-neisiwantou.jpg"),
(27, "内丝弯头", 2, 5, 1, "个", 28.6, "/d/file/accessory/shuigonglei/shuigong-neisiwantou.jpg"),
(28, "内丝弯头", 2, 6, 1, "个", 31.9, "/d/file/accessory/shuigonglei/shuigong-neisiwantou.jpg"),
(29, "内丝弯头", 3, 5, 1, "个", 16.6, "/d/file/accessory/shuigonglei/shuigong-neisiwantou.jpg"),
(30, "内丝弯头", 3, 6, 1, "个", 19.9, "/d/file/accessory/shuigonglei/shuigong-neisiwantou.jpg"),
(32, "直接", 1, 4, 1, "个", 5.3, "/d/file/accessory/shuigonglei/shuigong-zhijie.jpg"),
(31, "直接", 1, 7, 1, "个", 4.3, "/d/file/accessory/shuigonglei/shuigong-zhijie.jpg"),
(33, "直接", 2, 3, 1, "个", 2.3, "/d/file/accessory/shuigonglei/shuigong-zhijie.jpg"),
(34, "直接", 2, 4, 1, "个", 3.6, "/d/file/accessory/shuigonglei/shuigong-zhijie.jpg"),
(35, "直接", 3, 3, 1, "个", 1.5, "/d/file/accessory/shuigonglei/shuigong-zhijie.jpg"),
(36, "直接", 3, 4, 1, "个", 2.7, "/d/file/accessory/shuigonglei/shuigong-zhijie.jpg"),
(7, "过桥", 1, 3, 1, "个", 19.6, "/d/file/accessory/shuigonglei/shuigong-guoqiao.jpg"),
(8, "过桥", 1, 4, 1, "个", 29.9, "/d/file/accessory/shuigonglei/shuigong-guoqiao.jpg"),
(9, "过桥", 2, 3, 1, "个", 11.6, "/d/file/accessory/shuigonglei/shuigong-guoqiao.jpg"),
(10, "过桥", 2, 4, 1, "个", 17.9, "/d/file/accessory/shuigonglei/shuigong-guoqiao.jpg"),
(11, "过桥", 3, 3, 1, "个", 8.6, "/d/file/accessory/shuigonglei/shuigong-guoqiao.jpg"),
(12, "过桥", 3, 4, 1, "个", 9.9, "/d/file/accessory/shuigonglei/shuigong-guoqiao.jpg"),
(1, "冷热水管", 1, 1, 1, "4米/根", 56.7, "/d/file/accessory/shuigonglei/shuigong-lengreshuiguan.jpg"),
(2, "冷热水管", 1, 2, 1, "4米/根", 76.7, "/d/file/accessory/shuigonglei/shuigong-lengreshuiguan.jpg"),
(3, "冷热水管", 2, 1, 1, "4米/根", 38.7, "/d/file/accessory/shuigonglei/shuigong-lengreshuiguan.jpg"),
(4, "冷热水管", 2, 2, 1, "4米/根", 65.7, "/d/file/accessory/shuigonglei/shuigong-lengreshuiguan.jpg"),
(5, "冷热水管", 3, 1, 1, "4米/根", 30.7, "/d/file/accessory/shuigonglei/shuigong-lengreshuiguan.jpg"),
(6, "冷热水管", 3, 2, 1, "4米/根", 49.7, "/d/file/accessory/shuigonglei/shuigong-lengreshuiguan.jpg"),
(64, "双热熔球阀", 1, 3, 1, "个", 158.8, "/d/file/accessory/shuigonglei/shuigong-shuangrerongqiufa.jpg"),
(65, "双热熔球阀", 1, 4, 1, "个", 178.8, "/d/file/accessory/shuigonglei/shuigong-shuangrerongqiufa.jpg"),
(68, "双热熔球阀", 2, 3, 1, "个", 128.8, "/d/file/accessory/shuigonglei/shuigong-shuangrerongqiufa.jpg"),
(69, "双热熔球阀", 2, 4, 1, "个", 158.8, "/d/file/accessory/shuigonglei/shuigong-shuangrerongqiufa.jpg"),
(66, "双热熔球阀", 3, 3, 1, "个", 131.8, "/d/file/accessory/shuigonglei/shuigong-shuangrerongqiufa.jpg"),
(67, "双热熔球阀", 3, 4, 1, "个", 162.8, "/d/file/accessory/shuigonglei/shuigong-shuangrerongqiufa.jpg"),
(55, "内丝三通", 1, 8, 1, "个", 42.6, "/d/file/accessory/shuigonglei/shuigong-neisisantong.jpg"),
(56, "内丝三通", 1, 9, 1, "个", 50.9, "/d/file/accessory/shuigonglei/shuigong-neisisantong.jpg"),
(57, "内丝三通", 2, 8, 1, "个", 29.6, "/d/file/accessory/shuigonglei/shuigong-neisisantong.jpg"),
(58, "内丝三通", 2, 9, 1, "个", 37.9, "/d/file/accessory/shuigonglei/shuigong-neisisantong.jpg"),
(59, "内丝三通", 3, 8, 1, "个", 17.6, "/d/file/accessory/shuigonglei/shuigong-neisisantong.jpg"),
(60, "内丝三通", 3, 9, 1, "个", 22.9, "/d/file/accessory/shuigonglei/shuigong-neisisantong.jpg"),
(37, "内丝直接", 1, 5, 1, "个", 32.6, "/d/file/accessory/shuigonglei/shuigong-neisizhijie.jpg"),
(38, "内丝直接", 1, 6, 1, "个", 35.9, "/d/file/accessory/shuigonglei/shuigong-neisizhijie.jpg"),
(39, "内丝直接", 2, 5, 1, "个", 26.6, "/d/file/accessory/shuigonglei/shuigong-neisizhijie.jpg"),
(40, "内丝直接", 2, 6, 1, "个", 28.9, "/d/file/accessory/shuigonglei/shuigong-neisizhijie.jpg"),
(41, "内丝直接", 3, 5, 1, "个", 12.6, "/d/file/accessory/shuigonglei/shuigong-neisizhijie.jpg"),
(42, "内丝直接", 3, 6, 1, "个", 18.9, "/d/file/accessory/shuigonglei/shuigong-neisizhijie.jpg"),
(73, "吸盘吊卡", 4, 11, 1, "个", 1.5, "/d/file/accessory/shuigonglei/shuigong-xipandiaoka.jpg"),
(70, "管卡", 1, 3, 1, "个", 6.5, "/d/file/accessory/shuigonglei/shuigong-guanka.jpg"),
(72, "管卡", 2, 3, 1, "个", 1.5, "/d/file/accessory/shuigonglei/shuigong-guanka.jpg"),
(71, "管卡", 3, 3, 1, "个", 2.5, "/d/file/accessory/shuigonglei/shuigong-guanka.jpg"),
(82, "吊卡", 5, 12, 2, "支", 1.6, "/d/file/accessory/shuigonglei/shuigong-diaoka.jpg"),
(83, "吊卡", 5, 14, 2, "支", 3.0, "/d/file/accessory/shuigonglei/shuigong-diaoka.jpg"),
(80, "弯头", 5, 12, 2, "支", 1.7, "/d/file/accessory/shuigonglei/shuigong-wantou.jpg"),
(81, "弯头", 5, 13, 2, "支", 8.5, "/d/file/accessory/shuigonglei/shuigong-wantou.jpg"),
(84, "45度弯头", 5, 12, 2, "支", 1.1, "/d/file/accessory/shuigonglei/shuigong-45duwantou.jpg"),
(85, "45度弯头", 5, 14, 2, "支", 6.1, "/d/file/accessory/shuigonglei/shuigong-45duwantou.jpg"),
(86, "异径三通", 5, 15, 2, "支", 7.1, "/d/file/accessory/shuigonglei/shuigong-yijingsantong.jpg"),
(87, "异径直接", 5, 15, 2, "支", 4.1, "/d/file/accessory/shuigonglei/shuigong-liansuyijingzhijie.jpg"),
(74, "下水管", 5, 12, 2, "支", 19.6, "/d/file/accessory/shuigonglei/shuigong-xiashuiguan.jpg"),
(75, "下水管", 5, 13, 2, "支", 52.4, "/d/file/accessory/shuigonglei/shuigong-xiashuiguan.jpg"),
(88, "保温管", 5, 16, 2, "支", 6.7, "/d/file/accessory/shuigonglei/shuigong-baowenguan.jpg"),
(89, "保温管", 5, 14, 2, "支", 9.9, "/d/file/accessory/shuigonglei/shuigong-baowenguan.jpg"),
(76, "直接", 5, 12, 2, "支", 0.7, "/d/file/accessory/shuigonglei/shuigong-liansuzhijie.jpg"),
(77, "直接", 5, 13, 2, "支", 3.9, "/d/file/accessory/shuigonglei/shuigong-liansuzhijie.jpg"),
(78, "三通", 5, 12, 2, "支", 1.9, "/d/file/accessory/shuigonglei/shuigong-santong.jpg"),
(79, "三通", 5, 13, 2, "支", 10.3, "/d/file/accessory/shuigonglei/shuigong-santong.jpg"),
(96, "防水胶布", 7, 20, 3, "盘", 1.92, "/d/file/accessory/shuigonglei/shuigong-fangshuijiaobu.jpg"),
(90, "铁堵头", 6, 17, 3, "个", 0.69, "/d/file/accessory/shuigonglei/shuigong-tiedutou.jpg"),
(91, "铁堵头", 6, 18, 3, "个", 0.99, "/d/file/accessory/shuigonglei/shuigong-tiedutou.jpg"),
(92, "管帽", 6, 17, 3, "个", 1.49, "/d/file/accessory/shuigonglei/shuigong-guanmao.jpg"),
(93, "管帽", 6, 18, 3, "个", 1.99, "/d/file/accessory/shuigonglei/shuigong-guanmao.jpg"),
(97, "绝缘胶布", 8, 21, 3, "盘", 1.92, "/d/file/accessory/shuigonglei/shuigong-jueyuanjiaobu.jpg"),
(95, "生料带", 6, 19, 3, "盘", 1.92, "/d/file/accessory/shuigonglei/shuigong-shengliaodai.jpg"),
(94, "不锈钢对丝", 6, 17, 3, "个", 3.29, "/d/file/accessory/shuigonglei/shuigong-buxiugangduisi.jpg"),
(111, "4bv硬电线", 9, 24, 4, "100米/卷", 213.6, "/d/file/accessory/diangonglei/diangong-4bvyingdianxian.jpg"),
(112, "4bv硬电线", 9, 25, 4, "100米/卷", 213.6, "/d/file/accessory/diangonglei/diangong-4bvyingdianxian.jpg"),
(110, "4bv硬电线", 9, 22, 4, "100米/卷", 213.6, "/d/file/accessory/diangonglei/diangong-4bvyingdianxian.jpg"),
(114, "4bv硬电线", 10, 24, 4, "100米/卷", 221.1, "/d/file/accessory/diangonglei/diangong-4bvyingdianxian.jpg"),
(115, "4bv硬电线", 10, 25, 4, "100米/卷", 221.1, "/d/file/accessory/diangonglei/diangong-4bvyingdianxian.jpg"),
(113, "4bv硬电线", 10, 22, 4, "100米/卷", 221.1, "/d/file/accessory/diangonglei/diangong-4bvyingdianxian.jpg"),
(117, "4bv硬电线", 11, 24, 4, "100米/卷", 339.9, "/d/file/accessory/diangonglei/diangong-4bvyingdianxian.jpg"),
(118, "4bv硬电线", 11, 25, 4, "100米/卷", 339.9, "/d/file/accessory/diangonglei/diangong-4bvyingdianxian.jpg"),
(116, "4bv硬电线", 11, 22, 4, "100米/卷", 339.9, "/d/file/accessory/diangonglei/diangong-4bvyingdianxian.jpg"),
(129, "4bv软电线", 9, 24, 4, "100米/卷", 235.2, "/d/file/accessory/diangonglei/diangong-4bvruandianxian.jpg"),
(130, "4bv软电线", 9, 25, 4, "100米/卷", 235.2, "/d/file/accessory/diangonglei/diangong-4bvruandianxian.jpg"),
(127, "4bv软电线", 9, 22, 4, "100米/卷", 235.2, "/d/file/accessory/diangonglei/diangong-4bvruandianxian.jpg"),
(128, "4bv软电线", 9, 23, 4, "100米/卷", 235.2, "/d/file/accessory/diangonglei/diangong-4bvruandianxian.jpg"),
(133, "4bv软电线", 10, 24, 4, "100米/卷", 242.1, "/d/file/accessory/diangonglei/diangong-4bvruandianxian.jpg"),
(134, "4bv软电线", 10, 25, 4, "100米/卷", 242.1, "/d/file/accessory/diangonglei/diangong-4bvruandianxian.jpg"),
(131, "4bv软电线", 10, 22, 4, "100米/卷", 242.1, "/d/file/accessory/diangonglei/diangong-4bvruandianxian.jpg"),
(132, "4bv软电线", 10, 23, 4, "100米/卷", 242.1, "/d/file/accessory/diangonglei/diangong-4bvruandianxian.jpg"),
(100, "2.5bv硬电线", 9, 24, 4, "100米/卷", 129.6, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(101, "2.5bv硬电线", 9, 25, 4, "100米/卷", 129.6, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(98, "2.5bv硬电线", 9, 22, 4, "100米/卷", 129.6, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(99, "2.5bv硬电线", 9, 23, 4, "100米/卷", 129.6, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(104, "2.5bv硬电线", 10, 24, 4, "100米/卷", 131.1, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(105, "2.5bv硬电线", 10, 25, 4, "100米/卷", 131.1, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(102, "2.5bv硬电线", 10, 22, 4, "100米/卷", 131.1, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(103, "2.5bv硬电线", 10, 23, 4, "100米/卷", 131.1, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(108, "2.5bv硬电线", 11, 24, 4, "100米/卷", 214.9, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(109, "2.5bv硬电线", 11, 25, 4, "100米/卷", 214.9, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(106, "2.5bv硬电线", 11, 22, 4, "100米/卷", 214.9, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(107, "2.5bv硬电线", 11, 23, 4, "100米/卷", 214.9, "/d/file/accessory/diangonglei/diangong-2.5bvyingdianxian.jpg"),
(121, "2.5bv软电线", 9, 24, 4, "100米/卷", 142.8, "/d/file/accessory/diangonglei/diangong-2,5bvruandianxian.jpg"),
(122, "2.5bv软电线", 9, 25, 4, "100米/卷", 142.8, "/d/file/accessory/diangonglei/diangong-2,5bvruandianxian.jpg"),
(119, "2.5bv软电线", 9, 22, 4, "100米/卷", 142.8, "/d/file/accessory/diangonglei/diangong-2,5bvruandianxian.jpg"),
(120, "2.5bv软电线", 9, 23, 4, "100米/卷", 142.8, "/d/file/accessory/diangonglei/diangong-2,5bvruandianxian.jpg"),
(125, "2.5bv软电线", 10, 24, 4, "100米/卷", 148.1, "/d/file/accessory/diangonglei/diangong-2,5bvruandianxian.jpg"),
(126, "2.5bv软电线", 10, 25, 4, "100米/卷", 148.1, "/d/file/accessory/diangonglei/diangong-2,5bvruandianxian.jpg"),
(123, "2.5bv软电线", 10, 22, 4, "100米/卷", 148.1, "/d/file/accessory/diangonglei/diangong-2,5bvruandianxian.jpg"),
(124, "2.5bv软电线", 10, 23, 4, "100米/卷", 148.1, "/d/file/accessory/diangonglei/diangong-2,5bvruandianxian.jpg"),
(135, "高速超5类非屏蔽网线", 12, 26, 5, "米", 2.23, "/d/file/accessory/diangonglei/diangong-gaosuchao5leifeipingbiwangxian.jpg"),
(136, "高速超5类非屏蔽网线", 13, 26, 5, "米", 1.71, "/d/file/accessory/diangonglei/diangong-gaosuchao5leifeipingbiwangxian.jpg"),
(137, "电视线", 12, 27, 5, "卷", 390.0, "/d/file/accessory/diangonglei/dianggong-dianshixian.jpg"),
(138, "电视线", 13, 27, 5, "卷", 329.0, "/d/file/accessory/diangonglei/dianggong-dianshixian.jpg"),
(139, "86底盒", 14, 28, 6, "个", 2.5, "/d/file/accessory/diangonglei/diangong-86dihe.jpg"),
(142, "四位开关底盒", 14, 31, 6, "个", 3.96, "/d/file/accessory/diangonglei/diangong-siweikaiguandihe.jpg"),
(140, "二位开关底盒", 14, 29, 6, "个", 2.49, "/d/file/accessory/diangonglei/diangong-erweikaiguandihe.jpg"),
(141, "三位开关底盒", 14, 30, 6, "个", 2.96, "/d/file/accessory/diangonglei/diangong-sanweikaiguandihe.jpg"),
(143, "2P空开", 15, 32, 7, "个", 12.9, "/d/file/accessory/diangonglei/diangong-2pkongkai.jpg"),
(144, "2P空开", 15, 33, 7, "个", 14.9, "/d/file/accessory/diangonglei/diangong-2pkongkai.jpg"),
(147, "2P漏电保护器", 15, 32, 7, "个", 26.9, "/d/file/accessory/diangonglei/diangong-2ploudianbaohuqi.jpg"),
(148, "2P漏电保护器", 15, 33, 7, "个", 34.9, "/d/file/accessory/diangonglei/diangong-2ploudianbaohuqi.jpg"),
(145, "3P空开", 15, 32, 7, "个", 18.9, "/d/file/accessory/diangonglei/diangong-3pkongkai.jpg"),
(146, "3P空开", 15, 33, 7, "个", 20.9, "/d/file/accessory/diangonglei/diangong-3pkongkai.jpg"),
(149, "3P漏电保护器", 15, 32, 7, "个", 42.9, "/d/file/accessory/diangonglei/diangong-3ploudianbaohuqi.jpg"),
(150, "3P漏电保护器", 15, 33, 7, "个", 46.9, "/d/file/accessory/diangonglei/diangong-3ploudianbaohuqi.jpg"),
(159, "地插盒", 16, 36, 8, "个", 5.0, "/d/file/accessory/diangonglei/diangong-dichahe.jpg"),
(156, "迫码管卡", 16, 34, 8, "200只/包", 6.0, "/d/file/accessory/diangonglei/diangong-pomaguanka.jpg"),
(151, "中型红线管", 16, 34, 8, "2.5米/根", 2.99, "/d/file/accessory/diangonglei/diangong-zhongxinghongxianguan.jpg"),
(157, "波纹管", 16, 34, 8, "盘", 59.9, "/d/file/accessory/diangonglei/diangong-bowenguan.jpg"),
(152, "中型红直接", 16, 34, 8, "个", 0.49, "/d/file/accessory/diangonglei/diangong-zhongxinghongzhijie.jpg"),
(158, "金属软管", 16, 35, 8, "根", 6.0, "/d/file/accessory/diangonglei/diangong-jginshuruanguan.jpg"),
(160, "小pvc胶", 16, 37, 8, "桶", 5.0, "/d/file/accessory/diangonglei/diangong-xiaopvcjiao.jpg"),
(154, "中型红圆四通", 16, 34, 8, "个", 2.49, "/d/file/accessory/diangonglei/diangong-zhongxinghongyuansitong.jpg"),
(153, "中型红锁母", 16, 34, 8, "个", 0.6, "/d/file/accessory/diangonglei/diangong-zhongxinghongsuomu.jpg"),
(155, "弯簧", 16, 34, 8, "个", 3.79, "/d/file/accessory/diangonglei/diangong-wanhuang.jpg"),
(183, "卡式主龙骨", 17, 48, 9, "根", 15.9, "/d/file/accessory/mugonglei/mugong-kashizhulonggu.jpg"),
(184, "卡式主龙骨", 18, 48, 9, "根", 16.9, "/d/file/accessory/mugonglei/mugong-kashizhulonggu.jpg"),
(185, "卡式主龙骨", 19, 48, 9, "根", 17.9, "/d/file/accessory/mugonglei/mugong-kashizhulonggu.jpg"),
(187, "刨光木龙骨", 20, 50, 9, "4根/梱", 23.9, "/d/file/accessory/mugonglei/mugong-paoguangmulonggu.jpg"),
(188, "刨光木龙骨", 20, 51, 9, "4根/梱", 27.9, "/d/file/accessory/mugonglei/mugong-paoguangmulonggu.jpg"),
(190, "内胀", 20, 53, 9, "套", 0.5, "/d/file/accessory/mugonglei/mugong-neizhang.jpg"),
(186, "穿芯龙骨", 20, 49, 9, "根", 4.9, "/d/file/accessory/mugonglei/mugong-chuanxinlonggu.jpg"),
(171, "天地龙骨", 17, 44, 9, "根", 16.9, "/d/file/accessory/mugonglei/mugong-tiandilonggu.jpg"),
(172, "天地龙骨", 18, 44, 9, "根", 23.9, "/d/file/accessory/mugonglei/mugong-tiandilonggu.jpg"),
(173, "天地龙骨", 19, 44, 9, "根", 26.9, "/d/file/accessory/mugonglei/mugong-tiandilonggu.jpg"),
(167, "石膏线（直线条）", 18, 40, 9, "根", 4.9, "/d/file/accessory/mugonglei/mugong-shigaoxian.jpg"),
(168, "石膏线（直线条）", 18, 41, 9, "根", 5.9, "/d/file/accessory/mugonglei/mugong-shigaoxian.jpg"),
(169, "石膏线（直线条）", 18, 42, 9, "根", 6.1, "/d/file/accessory/mugonglei/mugong-shigaoxian.jpg"),
(170, "石膏线（直线条）", 18, 43, 9, "根", 7.9, "/d/file/accessory/mugonglei/mugong-shigaoxian.jpg"),
(180, "边龙骨", 17, 47, 9, "根", 9.9, "/d/file/accessory/mugonglei/mugong-bianlonggu.jpg"),
(181, "边龙骨", 18, 47, 9, "根", 11.9, "/d/file/accessory/mugonglei/mugong-bianlonggu.jpg"),
(182, "边龙骨", 19, 47, 9, "根", 13.9, "/d/file/accessory/mugonglei/mugong-bianlonggu.jpg"),
(177, "副龙骨", 17, 46, 9, "根", 11.9, "/d/file/accessory/mugonglei/mugong-fulonggu.jpg"),
(178, "副龙骨", 18, 46, 9, "根", 12.9, "/d/file/accessory/mugonglei/mugong-fulonggu.jpg"),
(179, "副龙骨", 19, 46, 9, "根", 13.9, "/d/file/accessory/mugonglei/mugong-fulonggu.jpg"),
(161, "普通纸面石膏板", 17, 38, 9, "张", 34.9, "/d/file/accessory/mugonglei/mugong-putongshigaoban.jpg"),
(162, "普通纸面石膏板", 17, 39, 9, "张", 42.9, "/d/file/accessory/mugonglei/mugong-putongshigaoban.jpg"),
(163, "普通纸面石膏板", 18, 38, 9, "张", 33.6, "/d/file/accessory/mugonglei/mugong-putongshigaoban.jpg"),
(164, "普通纸面石膏板", 18, 39, 9, "张", 43.9, "/d/file/accessory/mugonglei/mugong-putongshigaoban.jpg"),
(165, "普通纸面石膏板", 19, 38, 9, "张", 34.9, "/d/file/accessory/mugonglei/mugong-putongshigaoban.jpg"),
(166, "普通纸面石膏板", 19, 39, 9, "张", 44.9, "/d/file/accessory/mugonglei/mugong-putongshigaoban.jpg"),
(189, "吊杆", 20, 52, 9, "根", 4.9, "/d/file/accessory/mugonglei/mugong-diaozhang.jpg"),
(174, "竖向龙骨", 17, 45, 9, "根", 25.9, "/d/file/accessory/mugonglei/mugong-shuxianglonggu.jpg"),
(175, "竖向龙骨", 18, 45, 9, "根", 27.9, "/d/file/accessory/mugonglei/mugong-shuxianglonggu.jpg"),
(176, "竖向龙骨", 19, 45, 9, "根", 28.9, "/d/file/accessory/mugonglei/mugong-shuxianglonggu.jpg"),
(203, "扣条", 27, 56, 10, "2.4米/根", 6.8, "/d/file/accessory/mugonglei/mugong-koutiao.jpg"),
(204, "扣条", 22, 56, 10, "2.4米/根", 6.3, "/d/file/accessory/mugonglei/mugong-koutiao.jpg"),
(205, "扣条", 23, 56, 10, "2.4米/根", 6.9, "/d/file/accessory/mugonglei/mugong-koutiao.jpg"),
(191, "E0木工板", 21, 54, 10, "张", 161.6, "/d/file/accessory/mugonglei/mugong-E0mugongban.jpg"),
(192, "E0木工板", 22, 54, 10, "张", 159.9, "/d/file/accessory/mugonglei/mugong-E0mugongban.jpg"),
(193, "E0木工板", 23, 54, 10, "张", 199.0, "/d/file/accessory/mugonglei/mugong-E0mugongban.jpg"),
(206, "封边皮", 27, 57, 10, "200米/盘", 3.6, "/d/file/accessory/mugonglei/mugong-fengbianpi.jpg"),
(207, "封边皮", 22, 57, 10, "200米/盘", 3.2, "/d/file/accessory/mugonglei/mugong-fengbianpi.jpg"),
(208, "封边皮", 23, 57, 10, "100米/盘", 1.9, "/d/file/accessory/mugonglei/mugong-fengbianpi.jpg"),
(209, "奥松板", 28, 58, 10, "张", 59.9, "/d/file/accessory/mugonglei/mugong-aosongban.jpg"),
(210, "奥松板", 28, 54, 10, "张", 129.9, "/d/file/accessory/mugonglei/mugong-aosongban.jpg"),
(211, "OSB欧松板", 29, 54, 10, "张", 169.0, "/d/file/accessory/mugonglei/mugong-OSBousongban.jpg"),
(200, "背板", 21, 55, 10, "张", 79.9, "/d/file/accessory/mugonglei/mugong-beiban.jpg"),
(201, "背板", 22, 55, 10, "张", 61.9, "/d/file/accessory/mugonglei/mugong-beiban.jpg"),
(202, "背板", 23, 55, 10, "张", 99.0, "/d/file/accessory/mugonglei/mugong-beiban.jpg"),
(197, "E0生态板", 24, 54, 10, "张", 219.9, "/d/file/accessory/mugonglei/mugong-E0shengtaiban.jpg"),
(198, "E0生态板", 25, 54, 10, "张", 210.9, "/d/file/accessory/mugonglei/mugong-E0shengtaiban.jpg"),
(199, "E0生态板", 26, 54, 10, "张", 239.0, "/d/file/accessory/mugonglei/mugong-E0shengtaiban.jpg"),
(194, "E1木工板", 21, 54, 10, "张", 158.9, "/d/file/accessory/mugonglei/mugong-E1mugongban.jpg"),
(195, "E1木工板", 22, 54, 10, "张", 156.9, "/d/file/accessory/mugonglei/mugong-E1mugongban.jpg"),
(196, "E1木工板", 23, 54, 10, "张", 179.0, "/d/file/accessory/mugonglei/mugong-E1mugongban.jpg"),
(220, "干壁钉", 30, 67, 11, "盒", 17.9, "/d/file/accessory/mugonglei/mugong-ganbiding.jpg"),
(221, "干壁钉", 30, 68, 11, "盒", 17.9, "/d/file/accessory/mugonglei/mugong-ganbiding.jpg"),
(222, "干壁钉", 30, 69, 11, "盒", 17.9, "/d/file/accessory/mugonglei/mugong-ganbiding.jpg"),
(217, "400发钢排钉", 30, 64, 11, "盒", 7.6, "/d/file/accessory/mugonglei/mugong-400fagangpaiding.jpg"),
(218, "400发钢排钉", 30, 65, 11, "盒", 8.9, "/d/file/accessory/mugonglei/mugong-400fagangpaiding.jpg"),
(219, "400发钢排钉", 30, 66, 11, "盒", 9.9, "/d/file/accessory/mugonglei/mugong-400fagangpaiding.jpg"),
(215, "400发钢排钉", 30, 62, 11, "盒", 5.2, "/d/file/accessory/mugonglei/mugong-400fagangpaiding.jpg"),
(216, "400发钢排钉", 30, 63, 11, "盒", 6.3, "/d/file/accessory/mugonglei/mugong-400fagangpaiding.jpg"),
(212, "5000发汽钉", 30, 59, 11, "盒", 7.9, "/d/file/accessory/mugonglei/mugong-5000faqiding.jpg"),
(213, "5000发汽钉", 30, 60, 11, "盒", 6.9, "/d/file/accessory/mugonglei/mugong-5000faqiding.jpg"),
(214, "5000发汽钉", 30, 61, 11, "盒", 5.9, "/d/file/accessory/mugonglei/mugong-5000faqiding.jpg"),
(228, "中性瓷白玻璃胶", 35, 73, 12, "支", 11.2, "/d/file/accessory/mugonglei/mugong-zhongxingcibaibolijiao.jpg"),
(229, "免钉胶", 35, 73, 12, "支", 13.2, "/d/file/accessory/mugonglei/mugong-miandingjiao.jpg"),
(232, "泡沫胶", 38, 76, 12, "桶", 17.2, "/d/file/accessory/mugonglei/mugong-paomojiao.jpg"),
(226, "108胶", 34, 72, 12, "桶", 47.6, "/d/file/accessory/mugonglei/mugong-108jiao.jpg"),
(234, "结构胶枪", 39, 77, 12, "把", 28.3, "/d/file/accessory/mugonglei/mugong-jiegoujiaoqiang.jpg"),
(231, "结构胶", 37, 75, 12, "支", 14.2, "/d/file/accessory/mugonglei/mugong-jiegoujiao.jpg"),
(230, "封边灵", 36, 74, 12, "支", 12.2, "/d/file/accessory/mugonglei/mugong-fengbianjiao.jpg"),
(227, "中性透明玻璃胶", 35, 73, 12, "支", 11.2, "/d/file/accessory/mugonglei/mugong-zhongxingtoumingbolijiao.jpg"),
(224, "白乳胶", 32, 70, 12, "桶", 129.6, "/d/file/accessory/mugonglei/mugong-bairujiao.jpg"),
(225, "白乳胶", 33, 71, 12, "桶", 114.6, "/d/file/accessory/mugonglei/mugong-bairujiao.jpg"),
(223, "白乳胶", 31, 70, 12, "桶", 159.6, "/d/file/accessory/mugonglei/mugong-bairujiao.jpg"),
(233, "玻璃胶枪", 39, 77, 12, "把", 13.3, "/d/file/accessory/mugonglei/mugong-bolijiaoqiang.jpg"),
(236, "雨虹吉士涂100", 41, 78, 13, "桶", 149.9, "/d/file/accessory/wagonglei/wagong-yuhongfangshui.jpg"),
(235, "伟伯柔性防水灰浆（高效型蓝色）", 40, 78, 13, "桶", 219.9, "/d/file/accessory/wagonglei/wagong-weibofangshui.jpg"),
(237, "DF-G400", 42, 78, 13, "桶", 129.9, "/d/file/accessory/wagonglei/wagong-jiadifangshui.jpg"),
(238, "瓷砖加厚U形压条", 43, 79, 14, "支", 9.9, "/d/file/accessory/wagonglei/wagong-Uyatiao.jpg"),
(239, "瓷砖半圆压条", 43, 79, 14, "支", 12.9, "/d/file/accessory/wagonglei/wagong-Oyatiao.jpg"),
(240, "雨虹堵漏宝", 44, 80, 15, "袋", 19.6, "/d/file/accessory/wagonglei/wagong-duloubao.jpg"),
(243, "多彩填缝剂", 47, 81, 16, "2KG/盒", 27.8, "/d/file/accessory/wagonglei/wagong-duocaitianfnegji.jpg"),
(242, "彩色陶瓷嵌缝剂", 46, 81, 16, "2KG/袋", 29.8, "/d/file/accessory/wagonglei/wagong-caisetaoci.jpg"),
(241, "雨虹填缝剂", 45, 81, 16, "2KG/盒", 19.8, "/d/file/accessory/wagonglei/wagong-yuhonggoufengji.jpg"),
(244, "通用型瓷砖胶", 48, 82, 17, "袋", 79.0, "/d/file/accessory/wagonglei/wagong-cizhuanjiao.jpg"),
(245, "通用型瓷砖胶", 49, 82, 17, "袋", 69.0, "/d/file/accessory/wagonglei/wagong-cizhuanjiao.jpg"),
(246, "通用型瓷砖胶", 50, 82, 17, "袋", 45.0, "/d/file/accessory/wagonglei/wagong-cizhuanjiao.jpg"),
(247, "暂无", 51, 83, 18, "暂无", 0.0, "/d/file/accessory/wagonglei/wagong-dilou.jpg"),
(250, "金装芬华高效抗污", 52, 84, 19, "桶", 537.0, "/d/file/accessory/yougonglei/yougong-jinzhuangfenhuagaoxiaokangwu.jpg"),
(248, "芬华精装三合一", 52, 84, 19, "桶", 486.0, "/d/file/accessory/yougonglei/yougong-fenhuajingzhuangsanheyi.jpg"),
(252, "至尊安心净味", 53, 84, 19, "桶", 429.0, "/d/file/accessory/yougonglei/yougong-zhizunanxinjingwei.jpg"),
(249, "芬华内墙漆", 52, 85, 19, "桶", 396.0, "/d/file/accessory/yougonglei/yougong-fenhuaneiqiangqi.jpg"),
(251, "芬华内墙漆", 52, 86, 19, "桶", 186.0, "/d/file/accessory/yougonglei/yougong-fenhuaneiqiangqi.jpg"),
(253, "家丽安倍涂净味", 53, 85, 19, "桶", 368.0, "/d/file/accessory/yougonglei/yougong-jialianbeitujinwei.jpg"),
(254, "家丽安乳胶漆", 53, 84, 19, "桶", 299.0, "/d/file/accessory/yougonglei/yougong-jialianrujiaoqi.jpg"),
(255, "家丽安乳胶漆", 53, 86, 19, "桶", 139.0, "/d/file/accessory/yougonglei/yougong-jialianrujiaoqi.jpg"),
(256, "净味美得丽", 54, 84, 19, "桶", 439.0, "/d/file/accessory/yougonglei/yougong-jinweimeideli.jpg"),
(257, "净味美得丽", 54, 86, 19, "桶", 189.0, "/d/file/accessory/yougonglei/yougong-jinweimeideli.jpg"),
(258, "美得丽", 54, 84, 19, "桶", 319.0, "/d/file/accessory/yougonglei/yougong-meideli.jpg"),
(259, "美得丽", 54, 86, 19, "桶", 149.0, "/d/file/accessory/yougonglei/yougong-meideli.jpg"),
(262, "美巢嵌缝石膏", 56, 87, 20, "袋", 34.2, "/d/file/accessory/yougonglei/yougong-meichaoqianfengshigao.jpg"),
(260, "高强石膏", 55, 87, 20, "袋", 32.2, "/d/file/accessory/yougonglei/yougong-gaoqiangshigao.jpg"),
(261, "美巢粉刷石膏", 56, 87, 20, "袋", 33.2, "/d/file/accessory/yougonglei/yougong-meichaofenshuashigao.jpg"),
(285, "刮家阳角", 59, 99, 21, "支", 1.5, "/d/file/accessory/yougonglei/yougong-guajiayangjiao.jpg"),
(280, "滚子", 64, 97, 21, "把", 11.4, "/d/file/accessory/yougonglei/yougong-gunzi.jpg"),
(279, "滚子", 60, 96, 21, "把", 3.0, "/d/file/accessory/yougonglei/yougong-gunzi.jpg"),
(278, "滚子", 60, 95, 21, "把", 7.0, "/d/file/accessory/yougonglei/yougong-gunzi.jpg"),
(275, "滚子", 61, 95, 21, "把", 12.0, "/d/file/accessory/yougonglei/yougong-gunzi.jpg"),
(276, "滚子", 62, 95, 21, "把", 105.0, "/d/file/accessory/yougonglei/yougong-gunzi.jpg"),
(277, "滚子", 63, 95, 21, "把", 21.0, "/d/file/accessory/yougonglei/yougong-gunzi.jpg"),
(286, "毛巾", 59, 99, 21, "条", 2.0, "/d/file/accessory/yougonglei/yougong-maojin.jpg"),
(287, "白的确良布", 59, 99, 21, "米", 1.5, "/d/file/accessory/yougonglei/yougong-baidiqueliangbu.jpg"),
(290, "伸缩杆", 58, 102, 21, "个", 56.6, "/d/file/accessory/yougonglei/yougong-shensuogan.jpg"),
(264, "240水砂纸", 57, 89, 21, "包", 6.0, "/d/file/accessory/yougonglei/yougong-240shuishazhi.jpg"),
(265, "240水砂纸", 58, 89, 21, "包", 7.0, "/d/file/accessory/yougonglei/yougong-240shuishazhi.jpg"),
(269, "3寸棕刷", 59, 91, 21, "把", 4.2, "/d/file/accessory/yougonglei/yougong-3cunzongshua.jpg"),
(268, "3寸油漆刷", 59, 91, 21, "把", 4.2, "/d/file/accessory/yougonglei/yougong-3cunyouqishua.jpg"),
(266, "360水砂纸", 57, 90, 21, "包", 6.0, "/d/file/accessory/yougonglei/yougong-360shuishazhi.jpg"),
(267, "360水砂纸", 58, 90, 21, "包", 7.0, "/d/file/accessory/yougonglei/yougong-360shuishazhi.jpg"),
(284, "刮家阴角", 59, 99, 21, "支", 1.5, "/d/file/accessory/yougonglei/yougong-guajiayinjiao.jpg"),
(292, "托盘", 58, 104, 21, "个", 8.8, "/d/file/accessory/yougonglei/yougong-tuopan.jpg"),
(291, "托盘", 58, 103, 21, "个", 11.6, "/d/file/accessory/yougonglei/yougong-tuopan.jpg"),
(288, "防尘口罩", 58, 100, 21, "个", 8.0, "/d/file/accessory/yougonglei/yougong-fangchenkouzhao.jpg"),
(289, "防尘口罩", 58, 101, 21, "个", 9.0, "/d/file/accessory/yougonglei/yougong-fangchenkouzhao.jpg"),
(273, "清洁刮刀", 58, 93, 21, "把", 21.8, "/d/file/accessory/yougonglei/yougong-qingjieguadao.jpg"),
(274, "清洁刮刀", 58, 94, 21, "把", 26.8, "/d/file/accessory/yougonglei/yougong-qingjieguadao.jpg"),
(263, "0#砂布", 57, 88, 21, "张", 0.9, "/d/file/accessory/yougonglei/yougong-shabu.jpg"),
(272, "4寸羊毛刷", 58, 92, 21, "把", 6.4, "/d/file/accessory/yougonglei/yougong-4cunyangmaoshua.jpg"),
(271, "4寸羊毛刷", 60, 92, 21, "把", 4.2, "/d/file/accessory/yougonglei/yougong-4cunyangmaoshua.jpg"),
(281, "接缝纸带", 65, 98, 21, "卷", 5.8, "/d/file/accessory/yougonglei/yougong-jiefengzhidai.jpg"),
(282, "接缝纸带", 58, 98, 21, "卷", 10.8, "/d/file/accessory/yougonglei/yougong-jiefengzhidai.jpg"),
(283, "接缝纸带", 66, 98, 21, "卷", 19.8, "/d/file/accessory/yougonglei/yougong-jiefengzhidai.jpg"),
(270, "3寸塑柄刷", 58, 91, 21, "把", 5.2, "/d/file/accessory/yougonglei/yougong-3cunsubingshua.jpg"),
(293, "易呱平400JJ(刮墙腻子）", 67, 105, 22, "袋", 31.5, "/d/file/accessory/yougonglei/yougong-guaqiangnizi.jpg"),
(295, "墙宝", 68, 106, 22, "袋", 22.0, "/d/file/accessory/yougonglei/yougong-qiangbao.jpg"),
(296, "硅藻腻子粉", 68, 107, 22, "袋", 19.0, "/d/file/accessory/yougonglei/yougong-guizaonizifen.jpg"),
(294, "易呱平800JJ(耐水腻子）", 67, 105, 22, "袋", 45.5, "/d/file/accessory/yougonglei/yougong-naishuinizi.jpg"),
(298, "智恒衬-7", 69, 105, 22, "袋", 69.0, "/d/file/accessory/yougonglei/yougong-zhihengchen.jpg"),
(297, "智恒衬-6", 69, 105, 22, "袋", 46.0, "/d/file/accessory/yougonglei/yougong-zhihengchen.jpg"),
(299, "界面剂", 70, 108, 23, "桶", 48, "/d/file/accessory/yougonglei/yougong-jiemianji.jpg"),
(300, "墙倍丽", 71, 109, 23, "桶", 136, "/d/file/accessory/yougonglei/yougong-qiangbeili.jpg"),
(301, "500墙堌", 72, 108, 23, "桶", 142.0, "/d/file/accessory/yougonglei/yougong-500qianggu.jpg");
			';
        $container = $this->getContainer();
        $container['db']->query($sql); 
    }

    /**
     * Undo the migration
     */
    public function down()
    {
		$sql='
			delete from zt_accessory;
			delete from zt_accessory_norm;
			delete from zt_accessory_brand;
			delete from zt_accessory_type;
			';
        $container = $this->getContainer();
        $container['db']->query($sql); 
    }
}
