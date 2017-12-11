<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('1','大自然','1407552273','title','1','192.168.1.1','','6','newstime','0','971c1b39003e46e48d73b0a916e8ae55','news','1','0',' and ((title LIKE ''%大自然%''))','0');");
E_D("replace into `phome_enewssearch` values('2','自然','1404301871','title','5','192.168.1.1','','1','newstime','0','f0e3c8f290355b8c0967bfaef62afb19','news','1','0',' and ((title LIKE ''%自然%''))','0');");
E_D("replace into `phome_enewssearch` values('3','世界','1408607602','title','11','113.97.51.150','','2','newstime','0','35f688409eaa4368db550393a7afe03a','news','1','0',' and ((title LIKE ''%世界%''))','0');");
E_D("replace into `phome_enewssearch` values('4','测试','1404663407','title','3','171.34.115.173','','1','newstime','0','a390fcbe4c44150a513de10c0255d3ca','news','1','0',' and ((title LIKE ''%测试%''))','0');");
E_D("replace into `phome_enewssearch` values('5','爱的猫','1404864006','title','1','122.233.230.170','','1','newstime','0','b66a1e1f1119ca8f949c3b53d6cbe28a','news','1','0',' and ((title LIKE ''%爱的猫%''))','0');");
E_D("replace into `phome_enewssearch` values('6','手机','1405298484','title','2','71.119.73.93','','1','newstime','0','a2313f8c21ae88ec3b164221b0d75873','news','1','0',' and ((title LIKE ''%手机%''))','0');");
E_D("replace into `phome_enewssearch` values('7','让你','1409881964','title','8','58.101.221.113','','1','newstime','0','a501cfc523d29fac29164e24ae080a3a','news','1','0',' and ((title LIKE ''%让你%''))','0');");
E_D("replace into `phome_enewssearch` values('8','风景','1409888633','title','2','58.101.221.113','','1','newstime','0','154a1970ff3f35e780c391c8258bfe66','news','1','0',' and ((title LIKE ''%风景%''))','0');");
E_D("replace into `phome_enewssearch` values('9','可爱','1445150302','title','1','192.168.1.1','','3','newstime','0','dff16b243d855b7c6b007d891a2bc1ee','news','1','0',' and ((title LIKE ''%可爱%''))','0');");
E_D("replace into `phome_enewssearch` values('10','人','1412998138','title','11','124.127.65.76','','1','newstime','0','e6c82824942984669639753b68824f02','news','1','0',' and ((title LIKE ''%人%''))','0');");
E_D("replace into `phome_enewssearch` values('11','花朵','1413620749','title','1','14.117.105.239','','1','newstime','0','6e7d4bd90c4c25c6265d9416f3e4a642','news','1','0',' and ((title LIKE ''%花朵%''))','0');");
E_D("replace into `phome_enewssearch` values('12','工具','1415254768','title','2','192.168.1.1','','1','newstime','0','61acbe646ac266ba656a327be2c192c5','news','1','0',' and ((title LIKE ''%工具%''))','0');");
E_D("replace into `phome_enewssearch` values('13','线条','1415348764','title','1','192.168.1.1','','1','newstime','0','c6837e11bb6c7743cb666fc2bb535b94','news','1','0',' and ((title LIKE ''%线条%''))','0');");
E_D("replace into `phome_enewssearch` values('14','微距','1415348800','title','2','192.168.1.1','','1','newstime','0','e89d6ea55ea8655af183a54806adc97f','news','1','0',' and ((title LIKE ''%微距%''))','0');");
E_D("replace into `phome_enewssearch` values('15','花糖','1419342697','title','1','114.66.199.5','','1','newstime','0','9e54fd28e28e3c17bafd30a019bc66da','news','1','0',' and ((title LIKE ''%花糖%''))','0');");
E_D("replace into `phome_enewssearch` values('16','花海','1435763532','title','1','121.22.249.200','','2','newstime','0','2b27b04cc27f1a68ecc30aa58799eb58','news','1','0',' and ((title LIKE ''%花海%''))','0');");
E_D("replace into `phome_enewssearch` values('17','00','1422379089','title','1','36.250.224.101','','1','newstime','0','77585354c8fdf156f1ac94657c2d367e','news','1','0',' and ((title LIKE ''%00%''))','0');");
E_D("replace into `phome_enewssearch` values('18','雕塑','1422513379','title','3','182.242.227.214','','2','newstime','0','4056bb79ca0afdb25e6fbd9d74f8e1ec','news','1','0',' and ((title LIKE ''%雕塑%''))','0');");
E_D("replace into `phome_enewssearch` values('19','充电','1422798597','title','2','222.72.188.71','','1','newstime','0','48a13d48b595246b52a3e4256c48a3e6','news','1','0',' and ((title LIKE ''%充电%''))','0');");
E_D("replace into `phome_enewssearch` values('20','浪漫','1423490606','title','2','42.122.177.160','','1','newstime','0','30effb3285df89c0b26fc8aa620e0dd0','news','1','0',' and ((title LIKE ''%浪漫%''))','0');");
E_D("replace into `phome_enewssearch` values('21','中国没有被黑','1424956160','title','1','183.18.33.98','','1','newstime','0','89ddf416111f66d6d16e81464443d52b','news','1','0',' and ((title LIKE ''%中国没有被黑%''))','0');");
E_D("replace into `phome_enewssearch` values('22','红杏翻墙','1427263518','title','1','113.73.73.235','','1','newstime','0','ad2ea0396816e2eb63caf77dc94c4844','news','1','0',' and ((title LIKE ''%红杏翻墙%''))','0');");
E_D("replace into `phome_enewssearch` values('23','七牛','1445654801','title','1','119.57.162.16','','2','newstime','0','de3cce45dc1639b6c0f772f3cad0f1eb','news','1','0',' and ((title LIKE ''%七牛%''))','0');");
E_D("replace into `phome_enewssearch` values('24','加速','1449906123','title','1','58.23.50.62','','3','newstime','0','5b33c6e5445f4972b3d25caeb0b21a81','news','1','0',' and ((title LIKE ''%加速%''))','0');");
E_D("replace into `phome_enewssearch` values('25','女','1431009733','title','1','116.9.12.176','','1','newstime','0','84a0adb70a67bc9aa3e2dc3c8568d462','news','1','0',' and ((title LIKE ''%女%''))','0');");
E_D("replace into `phome_enewssearch` values('26','科技','1433401941','title','1','124.127.144.46','','1','newstime','0','8c1d2bf4a57d5433cc926bc0e59c201d','news','1','0',' and ((title LIKE ''%科技%''))','0');");
E_D("replace into `phome_enewssearch` values('27','文件加速','1433847710','title','1','175.2.111.183','','1','newstime','0','2b9dbe66afba2bec78b69759386efbb5','news','1','0',' and ((title LIKE ''%文件加速%''))','0');");
E_D("replace into `phome_enewssearch` values('28','利用','1444740412','title','3','110.80.36.210','','3','newstime','0','9c279ea610ec1e0010c43858ac82c111','news','1','0',' and ((title LIKE ''%利用%''))','0');");
E_D("replace into `phome_enewssearch` values('29','生活','1435656427','title','1','183.15.28.236','','3','newstime','0','63ccc0351d7b8136d77f3ef08203d70a','news','1','0',' and ((title LIKE ''%生活%''))','0');");
E_D("replace into `phome_enewssearch` values('30','龟','1435763566','title','1','111.197.220.68','','1','newstime','0','805db305453919139746dd8ee117f8d1','news','1','0',' and ((title LIKE ''%龟%''))','0');");
E_D("replace into `phome_enewssearch` values('31','煎饼','1436922056','title','1','221.204.168.146','','1','newstime','0','0e7bf82ce80fa060c4c5b74ea160ca45','news','1','0',' and ((title LIKE ''%煎饼%''))','0');");
E_D("replace into `phome_enewssearch` values('32','云存储','1437377207','title','1','113.90.81.17','','1','newstime','0','d08fd2a1b4efc24cd137df0612dda16c','news','1','0',' and ((title LIKE ''%云存储%''))','0');");
E_D("replace into `phome_enewssearch` values('33','让人','1437623671','title','2','182.33.9.198','','2','newstime','0','bce0ea8559a98f2a42c51b641dc034eb','news','1','0',' and ((title LIKE ''%让人%''))','0');");
E_D("replace into `phome_enewssearch` values('34','你','1437998554','title','25','157.122.148.232','','2','newstime','0','f196b2c2663a4badfb1537ed22399685','news','1','0',' and ((title LIKE ''%你%''))','0');");
E_D("replace into `phome_enewssearch` values('35','不','1437998633','title','9','157.122.148.232','','1','newstime','0','ac74965f81d20762c21ddbb318e8253f','news','1','0',' and ((title LIKE ''%不%''))','0');");
E_D("replace into `phome_enewssearch` values('36','态文件加速','1438138547','title','1','118.194.236.57','','1','newstime','0','a9cdeeb0707d85632c58c5dc999fbe7c','news','1','0',' and ((title LIKE ''%态文件加速%''))','0');");
E_D("replace into `phome_enewssearch` values('37','雨林','1438264187','title','1','49.80.124.219','','1','newstime','0','b868012259db6c61edd0bc7bebe6fe9c','news','1','0',' and ((title LIKE ''%雨林%''))','0');");
E_D("replace into `phome_enewssearch` values('38','文件','1439137563','title','1','221.204.178.14','','2','newstime','0','5cd26785d6ec5f3502487c8e2ca1cf3c','news','1','0',' and ((title LIKE ''%文件%''))','0');");
E_D("replace into `phome_enewssearch` values('39','美味','1439784954','title','1','182.203.47.78','','1','newstime','0','ae0922f48cba6cbe6f6c945591fee3b8','news','1','0',' and ((title LIKE ''%美味%''))','0');");
E_D("replace into `phome_enewssearch` values('40','cdn','1440376936','title','1','120.192.78.41','','1','newstime','0','dc6d5ff170d0189e6df4aaacd2d7d3cf','news','1','0',' and ((title LIKE ''%cdn%''))','0');");
E_D("replace into `phome_enewssearch` values('41','杯子','1441375016','title','1','122.13.245.50','','1','newstime','0','24377ac4ceb322fd3c776eaaa11b3a1a','news','1','0',' and ((title LIKE ''%杯子%''))','0');");
E_D("replace into `phome_enewssearch` values('42','科学','1445411266','title','1','180.107.98.135','','3','newstime','0','6b0c0b6d61e68ebb6184cd56752c2ed6','news','1','0',' and ((title LIKE ''%科学%''))','0');");
E_D("replace into `phome_enewssearch` values('43','15','1443189962','title','1','106.9.234.64','','1','newstime','0','864f809edec02032bfe8de45e24f1b66','news','1','0',' and ((title LIKE ''%15%''))','0');");
E_D("replace into `phome_enewssearch` values('44','的','1445411331','title','74','192.168.1.1','','1','newstime','0','df8cfc447487db36a983362af553a345','news','1','0',' and ((title LIKE ''%的%''))','0');");

@include("../../inc/footer.php");
?>