<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmemberadd`;");
E_C("CREATE TABLE `phome_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `job` varchar(255) DEFAULT NULL,
  `juzhu` varchar(10) DEFAULT NULL,
  `Diybg` varchar(255) DEFAULT NULL,
  `renzheng` text,
  `xingyun` varchar(255) DEFAULT NULL,
  `lockBgImg` varchar(255) DEFAULT NULL,
  `repeatBg` varchar(255) DEFAULT NULL,
  `Bgalign` varchar(255) DEFAULT NULL,
  `bgcolor` varchar(255) DEFAULT NULL,
  `bgsize` varchar(255) DEFAULT NULL,
  `feeduserid` mediumtext,
  `zuijin` varchar(140) DEFAULT NULL,
  `regipport` varchar(6) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmemberadd` values('1','','','','','','','','1','','','','','/d/file/2015-08-02/2090b50c593d30bbe36e3a8b7886394f.jpg','','','39','192.168.1.1','1439895820','112.248.90.38','18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4::::::5::::::','','0');");
E_D("replace into `phome_enewsmemberadd` values('2','','','','','','','','1','','','','','/d/file/2014-09-11/14317f6e47567df767a9acf4c38261df.gif','','','0','192.168.1.1','1410367679','192.168.1.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('3','','','','','','','','1','','','','','','','','1','123.117.39.129','1411169994','123.117.39.129','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('4','','','','','','','','1','','','','','/d/file/avator/user4_avator.jpg','','','2','124.127.65.129','1412997817','124.127.65.76','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('5','','','','','','','','1','','http://ecms010.99yuanma.net/e/member/EditInfo/','','','/d/file/avator/user5_avator.jpg','http://ecms010.99yuanma.net/e/member/EditInfo/','http://ecms010.99yuanma.net/e/member/EditInfo/','1','123.117.47.172','1411476241','123.117.47.172','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1::::::',NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('6','','','','','','','','1','','','','','','','','1','49.77.98.248','1412259310','49.77.98.248','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('7','','','','','','','','1','','','','','','','','0','192.168.1.1','1415202512','192.168.1.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('9','','','','','','','','1','','','','','','','','1','124.134.165.141','1420471243','124.134.165.141','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('8','','','','','','','','1','','','','','','','','0','202.97.237.57','1418124106','202.97.237.57','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('10','','','','','','','','1','','','','','','','','0','192.168.1.1','1420471829','192.168.1.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('11','','','','','','','','1','','','','','','','','1','210.74.155.210','1420606823','210.74.155.210','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('12','','','','','','','','1','','','','','','','','0','171.90.40.125','1420821519','171.90.40.125','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('13','','','','','','','','1','','','','','','','','1','123.7.87.126','1424248118','123.4.233.254','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','0');");
E_D("replace into `phome_enewsmemberadd` values('14','','','','','','','','1','','','','','','','','0','112.249.29.132','1420974416','112.249.29.132','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('15','','','','','','','','1','','','','','','','','0','183.32.52.137','1421044759','183.32.52.137','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('16','','','','','','','','1','','','','','','','','1','101.71.232.16','1421069964','101.71.232.16','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('17','','','','','','','','1','','','','','','','','1','119.85.113.43','1421157139','119.85.113.43','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('18','','','','','','','','1','','','','','','','','0','58.254.168.13','1421305791','58.254.168.13','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('19','','','','','','','','1','','','','','','','','0','220.248.175.41','1421569135','124.68.3.24','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('20','','','','','','','','1','','','','','','','','0','222.208.154.135','1421512023','222.208.154.135','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('21','','','','','','','','1','','','','','','','','0','119.5.53.84','1421667659','119.5.53.84','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('22','','','','','','','','1','','','','','','','','0','218.71.136.108','1421724953','218.71.136.108','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('23','','','','','','','','1','','','','','','','','1','223.167.198.216','1422091077','220.248.175.42','7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('24','','','','','','','','1','','','','','','','','0','124.167.79.174','1421748753','124.167.79.174','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('25','','','','','','','','1','','','','','','','','0','116.237.60.227','1422362132','116.237.60.227','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('26','','','','','','','','1','','','','','','','','2','114.249.220.232','1422585705','114.249.220.232','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('27','','','','','','','','1','','','','','','','','0','110.80.36.210','1422670749','110.80.36.210','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('28','','','','','','','','1','','','','','','','','0','222.72.188.71','1422718378','222.72.188.71','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('29','','','','','','','','1','','','','','','','','0','221.220.96.202','1422942021','221.220.96.202','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('30','','','','','','','','1','','','','','','','','1','222.129.195.92','1423454184','222.129.195.92','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('31','','','','','','','','1','','','','','','','','1','223.199.254.172','1423491629','223.199.254.172','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('32','','','','','','','','1','','','','','','','','1','49.85.41.40','1424080754','49.85.41.40','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('33','','','','','','','','1','','','','','','','','2','113.57.142.165','1430022911','113.57.190.2','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('34','','1572790','','','','','','1','','','','','/d/file/2015-03-04/d70216944a9bbeedf20046d83dae81fe.jpg','边度TV','','1','183.53.24.9','1425480028','183.53.24.9','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('35','','','','','','','','1','','','','','','','','1','27.210.15.90','1425653375','27.210.15.90','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('36','','','','','','','','1','','','','','','','','1','113.234.12.207','1426164498','113.234.12.207','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('37','','','','','','','','1','','','','','','','','0','58.16.27.217','1426604037','58.16.0.197','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('38','','','','','','','','1','','','','','','','','0','113.119.152.147','1427483779','113.119.152.147','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('39','','','','','','','','1','','','','','','','','1','218.21.47.154','1428323808','218.21.47.154','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('40','','','','','','','','1','','','','','','','','1','221.204.167.245','1428818038','221.204.167.245','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('41','','','','','','','','1','','','','','','','','0','124.114.123.135','1429196118','124.114.123.135','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('42','','','','','','','','1','','','','','','','','0','15.203.233.79','1439716329','221.221.153.132','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('43','','','','','','','','1','','','','','','','','1','219.155.150.183','1429438805','219.155.150.183','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('44','zc','','','','','','','1','','','','','','','','1','36.59.224.18','1429898825','36.59.224.18','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('45','','','','','','','','1','','','','','','','','1','116.23.233.123','1429933094','116.23.233.123','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('46','','','','','','','','1','','','','','','','','1','58.20.235.20','1430072425','58.20.235.20','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('47','','','','','','','','1','','','','','','','','4','122.13.141.113','1430249236','122.13.141.113','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('48','','','','','','','','1','','','','','','','','0','122.227.233.22','1430795961','122.227.233.22','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('49','','','','','','','','1','','','','','','','','1','14.134.33.11','1430797159','14.134.33.11','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('50','','','','','','','','1','','','','','','','','1','123.116.134.131','1430906793','123.116.134.131','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('51','','','','','','','','1','','','','','','','','0','116.211.6.86','1430982671','116.211.6.86','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('52','','','','','','','','1','','','','','','','','0','27.16.104.57','1431001150','27.16.104.57','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('53','','','','','','','','1','','','','','','','','0','122.224.76.150','1431138798','122.224.76.150','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('54','','','','','','','','1','','','','','','','','1','113.64.109.49','1431142272','113.64.109.49','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('55','','','','','','','','1','','','','','','','','2','211.162.34.1','1431260937','211.162.34.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('56','','','','','','','','1','','','','','','','','1','222.89.20.204','1431674848','222.89.20.204','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('57','','','','','','','','1','','','','','','','','1','222.89.4.48','1431758142','222.89.4.48','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('58','111','111','111','111','11','','','1','11','','','','','','','1','112.87.205.0','1431773291','112.87.205.0','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('59','','','','','','','','1','','','','','','','','1','202.105.60.231','1432009058','202.105.60.231','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('60','','','','','','','','1','','','','','','','','1','119.122.181.96','1432478441','119.122.181.96','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('61','','','','','','','','1','','','','','/d/file/avator/user61_avator.jpg','','','1','59.34.131.103','1433170938','59.34.131.103','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('62','','','','','','','','1','','','','','','','','1','175.2.194.45','1434219180','175.2.194.45','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('63','','','','','','','','1','','','','','','','','1','118.182.60.114','1434682185','118.182.60.114','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('64','','','','','','','','1','','','','','','','','2','119.57.110.138','1435294532','119.57.110.138','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('65','','','','','','','','1','','','','','','','','0','183.184.184.164','1435650463','171.117.82.31','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('68','','','','','','','','1','','','','','/d/file/2015-07-22/06dc1fb5b109512b76a93e3d49e368ff.jpg','','','0','61.163.104.178','1437537752','61.163.104.178','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('66','','','','','','','','1','','','','','/d/file/2015-07-15/bf573fe09bd3c62d861a64d67eb840cd.jpg','','','6','221.204.168.146','1436919800','221.204.168.146','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'67::::::','0','0');");
E_D("replace into `phome_enewsmemberadd` values('67','','','','','','','','1','','','','','','噢噢噢合久必婚虖u噢 ','急呼呼u ','4','221.204.168.146','1436920259','221.204.168.146','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'66::::::',NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('69','','','','','','','','1','','','','','/d/file/2015-07-25/938c9cb2fbf1e38c299e6b00619e5721.jpg','','','1','163.125.179.13','1437816634','163.125.179.13','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('70','','','','','','','','1','','','','','','','','4','157.122.148.232','1438002333','157.122.148.232','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('71','','','','','','','','1','','','','','','','','1','221.2.220.166','1438158222','221.2.220.166','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('72','','','','','','','','1','','','','','','','','0','49.80.117.110','1438264315','49.80.124.219','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('73','','','','','','','','1','','','','','','','','4','171.110.24.129','1438783117','171.110.24.129','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('74','','88888888','','','','','','1','','','','','','','','2','122.13.247.102','1438939476','122.13.247.102','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('75','','','','','','','','1','','','','','','','','5','183.13.83.138','1439014864','183.13.83.138','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('76','','','','','','','','1','','','','','','','','0','218.106.93.37','1439286628','36.32.24.74','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('77','王宁海','','','','','','','1','','','','','','','','0','219.140.117.24','1439185687','219.140.117.24','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('78','','','','','','','','1','','','','','','','','0','221.11.101.174','1439531923','221.11.101.174','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('79','','','','','','','','1','','','','','','','','1','113.206.35.1','1439745057','113.206.35.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('80','','','','','','','','1','','','','','','','','1','115.152.144.54','1440050427','115.152.144.54','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('81','','','','','','','','1','','','','','','','','1','27.152.195.130','1440089185','27.152.195.130','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('82','','','','','','','','1','','','','','','','','0','58.251.146.187','1440290439','183.54.17.125','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('83','','','','','','','','1','','','','','','','','1','223.99.161.10','1441071094','223.99.161.10','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('84','ll','465456','654564','654654','65465456','123123','','1','564546','123','','','','','','1','1.189.60.190','1441444893','1.189.60.190','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('85','白白','531550830','123','13717951212','13717951212','','','1','','','','','','','','0','222.35.110.176','1441872352','222.35.110.176','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('86','','','','','','','','1','','','','','','','','1','60.211.240.46','1442264545','60.211.240.46','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('87','','','','','','','','1','','','','','','','','0','112.67.219.83','1442567395','112.67.219.83','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('88','','','','','','','','1','','','','','','','','0','14.145.101.248','1442800126','14.145.101.248','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('89','','','','','','','','1','','','','','','','','0','222.172.136.254','1442838769','222.172.136.254','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('90','','','','','','','','1','','','','','','','','0','114.234.144.46','1443255397','114.234.144.46','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('91','杨宇','','','15115612345','15115612345','','415000','1','多环境','','','','','','','0','222.246.99.44','1443412296','222.246.99.44','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('92','','','','','','','','1','','','','','','','','0','222.210.221.92','1443776447','222.210.221.92','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('93','啊啊','10474959','1','076985555555','15625555555','aaaaaaaaaaa','523085','1','cxvdx.com','aaaaaaaaaaaaaaaaaaaaaa','','','','','','1','183.9.239.146','1443790799','183.9.239.146','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('94','','','','','','','','1','','','','','','','','1','125.125.70.98','1444397632','125.125.70.98','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('95','','','','','','','','1','','','','','','','','1','113.101.144.223','1444989444','113.101.144.223','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('96','','','','','','','','1','','','','','','','','0','113.101.144.223','1445016787','113.101.144.223','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('97','','','','','','','','1','','','','','','','','0','113.101.144.223','1445067051','113.101.144.223','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('98','','','','','','','','1','','','','','','','','0','113.101.144.223','1445087968','113.101.144.223','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('99','','','','','','','','1','','','','','','','','0','58.62.102.127','1445322123','58.62.102.127','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('100','何吉','969988548','','02029898450','18679331835','','','1','www.zlwljr1987.com','','','','/d/file/2015-10-24/bac91a3b0b959dc2bb2f96b825eee2c1.jpg','子龙玩转网络金融','我们以专业的态度，以客户的利益至上服务与金融中介与个人金融，子龙网络金融--您身边的金融咨询师。网址：www.zlwljr1987.com,400服务热线：400-805-2238，微信公众号：ZJJWLJR1987，客服QQ：3186805517/969988548，客服微信：hj969988548','1','111.73.0.37','1445680974','111.73.0.37','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('101','','','','','','','','1','','','','','','','','1','127.0.0.1','1449905829','127.0.0.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'61910','61910');");

@include("../../inc/footer.php");
?>