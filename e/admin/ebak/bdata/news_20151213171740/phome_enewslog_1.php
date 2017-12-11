<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=236 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','admin','2014-06-15 17:00:04','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('2','admin','2014-06-16 21:14:42','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('3','admin','2014-06-17 12:39:01','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('4','admin','2014-06-17 18:15:04','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('5','admin','2014-06-18 09:29:40','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('6','admin','2014-06-19 13:31:15','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('7','admin','2014-06-19 14:05:43','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('8','admin','2014-06-19 18:55:40','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('9','admin','2014-06-19 20:08:52','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('10','admin','2014-06-20 01:55:12','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('11','admin','2014-06-20 01:55:41','119.185.221.16','1','','0','');");
E_D("replace into `phome_enewslog` values('12','admin','2014-06-20 17:51:52','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('13','admin','2014-06-20 19:29:04','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('14','admin','2014-06-21 17:08:43','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('15','admin','2014-06-21 17:11:31','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('16','admin','2014-06-22 00:01:30','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('17','admin','2014-06-22 00:53:11','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('18','admin','2014-06-22 01:24:18','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('19','admin','2014-06-22 01:37:56','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('20','admin','2014-06-22 14:04:55','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('21','admin','2014-06-23 00:37:24','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('22','admin','2014-06-23 19:20:05','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('23','99yuanma.net','2014-06-23 19:20:26','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('24','99yuanma','2014-06-23 19:20:48','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('25','admin','2014-06-23 19:38:21','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('26','admin','2014-06-23 19:38:43','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('27','admin','2014-06-23 20:43:42','192.168.1.232','1','','0','');");
E_D("replace into `phome_enewslog` values('28','admin','2014-06-23 21:25:44','192.168.1.232','0','','0','');");
E_D("replace into `phome_enewslog` values('29','admin','2014-06-23 22:47:30','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('30','admin','2014-06-23 22:58:14','119.179.200.107','1','','0','');");
E_D("replace into `phome_enewslog` values('31','admin','2014-06-24 08:31:29','124.161.224.68','0','','0','');");
E_D("replace into `phome_enewslog` values('32','admin','2014-06-24 08:34:08','124.161.224.68','0','','0','');");
E_D("replace into `phome_enewslog` values('33','admin','2014-06-24 08:35:06','124.161.224.68','0','','0','');");
E_D("replace into `phome_enewslog` values('34','admin','2014-06-27 13:45:22','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('35','admin','2014-06-27 22:10:50','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('36','admin','2014-07-01 13:41:03','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('37','admin','2014-07-01 16:35:20','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('38','admin','2014-07-01 18:49:59','119.179.203.142','1','','0','');");
E_D("replace into `phome_enewslog` values('39','admin','2014-07-02 19:46:32','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('40','admin','2014-07-04 16:04:27','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('41','admin','2014-07-07 08:17:51','117.136.28.65','0','','0','');");
E_D("replace into `phome_enewslog` values('42','admin','2014-07-07 08:18:14','117.136.28.65','0','','0','');");
E_D("replace into `phome_enewslog` values('43','admin','2014-07-07 08:19:01','117.136.28.65','0','','0','');");
E_D("replace into `phome_enewslog` values('44','admin','2014-07-10 16:20:19','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('45','admin','2014-07-15 21:49:30','112.239.1.175','1','','0','');");
E_D("replace into `phome_enewslog` values('46','admin','2014-07-15 21:52:48','14.23.233.188','1','','0','');");
E_D("replace into `phome_enewslog` values('47','admin','2014-07-15 23:23:22','112.239.1.175','0','','0','');");
E_D("replace into `phome_enewslog` values('48','admin','2014-07-15 23:23:28','112.239.1.175','1','','0','');");
E_D("replace into `phome_enewslog` values('49','admin','2014-08-01 17:56:37','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('50','admin','2014-08-06 15:28:04','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('51','admin','2014-08-07 01:16:38','119.180.219.152','1','','0','');");
E_D("replace into `phome_enewslog` values('52','admin','2014-08-07 13:41:00','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('53','admin','2014-08-08 00:08:34','119.180.219.152','1','','0','');");
E_D("replace into `phome_enewslog` values('54','admin','2014-08-08 17:58:50','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('55','admin','2014-08-14 14:47:03','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('56','admin','2014-08-14 14:52:47','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('57','admin','2014-08-21 10:09:40','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('58','admin','2014-08-21 11:01:01','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('59','admin','2014-08-21 12:48:26','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('60','admin','2014-08-30 01:04:28','119.186.221.65','1','','0','');");
E_D("replace into `phome_enewslog` values('61','admin','2014-09-05 10:23:08','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('62','admin','2014-09-10 17:46:38','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('63','admin','2014-09-11 00:45:50','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('64','admin','2014-09-11 00:56:29','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('65','admin','2014-09-11 04:21:35','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('66','admin','2014-09-12 23:05:04','119.186.224.47','1','','0','');");
E_D("replace into `phome_enewslog` values('67','admin','2014-09-12 23:17:29','119.186.224.47','0','','0','');");
E_D("replace into `phome_enewslog` values('68','admin','2014-09-12 23:17:36','119.186.224.47','1','','0','');");
E_D("replace into `phome_enewslog` values('69','admin','2014-09-12 23:25:39','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('70','admin','2014-09-12 23:25:59','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('71','admin','2014-09-12 23:27:40','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('72','admin','2014-09-12 23:27:48','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('73','admin','2014-09-12 23:27:54','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('74','admin','2014-09-12 23:28:06','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('75','admin','2014-09-19 15:42:56','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('76','admin','2014-09-19 16:02:58','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('77','admin','2014-09-19 16:03:03','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('78','admin','2014-09-19 19:18:27','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('79','admin','2014-09-19 19:35:10','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('80','admin','2014-09-19 19:47:27','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('81','admin','2014-09-19 21:54:22','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('82','admin','2014-09-20 19:52:40','119.179.206.121','1','','0','');");
E_D("replace into `phome_enewslog` values('83','admin','2014-09-23 20:04:11','119.180.207.88','0','','0','');");
E_D("replace into `phome_enewslog` values('84','admin','2014-09-23 20:04:18','119.180.207.88','1','','0','');");
E_D("replace into `phome_enewslog` values('85','admin','2014-09-24 13:42:59','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('86','admin','2014-09-24 13:43:06','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('87','admin','2014-09-24 13:43:11','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('88','admin','2014-09-24 13:43:24','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('89','admin','2014-09-24 15:28:34','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('90','admin','2014-09-24 15:28:40','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('91','admin','2014-09-25 14:15:44','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('92','admin','2014-09-28 15:06:31','119.180.207.88','1','','0','');");
E_D("replace into `phome_enewslog` values('93','admin','2014-09-28 15:19:04','119.180.207.88','1','','0','');");
E_D("replace into `phome_enewslog` values('94','admin','2014-09-28 16:59:48','119.180.207.88','1','','0','');");
E_D("replace into `phome_enewslog` values('95','admin','2014-10-15 09:56:54','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('96','admin','2014-10-18 09:36:54','111.201.159.226','0','','0','');");
E_D("replace into `phome_enewslog` values('97','admin','2014-10-26 14:15:37','111.204.252.234','0','','0','');");
E_D("replace into `phome_enewslog` values('98','admin','2014-10-26 14:15:44','111.204.252.234','0','','0','');");
E_D("replace into `phome_enewslog` values('99','admin','2014-10-26 14:16:13','111.204.252.234','0','','0','');");
E_D("replace into `phome_enewslog` values('100','admin','2014-10-26 14:16:26','111.204.252.234','0','','0','');");
E_D("replace into `phome_enewslog` values('101','admin','2014-10-26 17:23:22','119.186.231.82','1','','0','');");
E_D("replace into `phome_enewslog` values('102','admin','2014-10-26 17:38:31','119.186.231.82','1','','0','');");
E_D("replace into `phome_enewslog` values('103','admin','2014-11-05 22:11:33','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('104','admin','2014-11-05 22:11:41','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('105','admin','2014-11-06 11:37:33','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('106','admin','2014-11-06 13:33:23','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('107','admin','2014-11-07 11:05:57','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('108','admin','2014-11-07 14:21:39','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('109','admin','2014-11-11 16:57:46','124.135.124.38','1','','0','');");
E_D("replace into `phome_enewslog` values('110','admin','2014-11-24 11:07:13','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('111','admin','2014-11-25 22:15:14','192.168.1.1','0','','0','');");
E_D("replace into `phome_enewslog` values('112','admin','2014-11-25 22:15:22','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('113','admin','2014-12-01 17:27:10','119.186.220.252','1','','0','');");
E_D("replace into `phome_enewslog` values('114','admin','2014-12-10 14:42:27','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('115','admin','2014-12-18 10:39:25','157.61.153.165','0','','0','');");
E_D("replace into `phome_enewslog` values('116','admin','2014-12-20 11:09:35','123.52.185.32','0','','0','');");
E_D("replace into `phome_enewslog` values('117','admin','2014-12-20 14:11:47','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('118','admin','2014-12-20 17:41:37','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('119','ecms008','2014-12-22 16:20:14','59.38.64.229','0','','0','');");
E_D("replace into `phome_enewslog` values('120','admin','2014-12-23 18:40:44','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('121','admin','2014-12-24 23:39:27','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('122','admin','2014-12-25 12:18:53','123.52.153.142','0','','0','');");
E_D("replace into `phome_enewslog` values('123','admin','2015-01-05 16:27:58','119.185.222.140','1','','0','');");
E_D("replace into `phome_enewslog` values('124','admin','2015-01-05 22:39:32','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('125','admin','2015-01-06 00:16:08','112.228.133.196','0','','0','');");
E_D("replace into `phome_enewslog` values('126','admin','2015-01-10 00:11:31','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('127','admin','2015-01-10 01:44:19','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('128','admin','2015-01-10 02:06:54','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('129','admin','2015-01-11 00:21:42','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('130','admin','2015-01-14 17:25:51','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('131','admin','2015-01-17 14:46:19','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('132','admin','2015-01-22 19:39:27','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('133','admin','2015-01-23 12:19:14','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('134','admin','2015-01-23 12:24:36','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('135','admin','2015-01-23 23:17:46','192.168.1.1','1','','0','');");
E_D("replace into `phome_enewslog` values('136','admin','2015-01-28 10:32:57','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('137','admin','2015-01-28 13:40:54','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('138','admin','2015-01-28 13:47:20','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('139','admin','2015-01-29 00:09:31','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('140','admin','2015-01-29 12:59:23','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('141','admin','2015-01-29 13:51:06','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('142','admin','2015-01-31 21:47:16','42.227.225.133','0','','0','0');");
E_D("replace into `phome_enewslog` values('143','admin','2015-02-08 18:23:02','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('144','admin','2015-02-08 19:00:48','192.168.1.1','0','','0','0');");
E_D("replace into `phome_enewslog` values('145','admin','2015-02-08 19:00:53','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('146','admin','2015-02-08 19:03:02','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('147','admin','2015-02-10 12:52:28','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('148','admin','2015-02-18 03:41:50','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('149','admin','2015-02-24 22:51:57','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('150','admin','2015-02-27 13:58:14','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('151','admin','2015-02-27 15:06:57','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('152','admin','2015-02-27 15:15:51','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('153','admin','2015-02-27 21:50:59','113.138.81.63','0','','0','0');");
E_D("replace into `phome_enewslog` values('154','admin','2015-02-28 19:12:50','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('155','admin','2015-02-28 19:14:19','113.138.81.27','1','','0','0');");
E_D("replace into `phome_enewslog` values('156','admin','2015-02-28 19:21:39','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('157','admin','2015-02-28 20:30:46','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('158','admin','2015-02-28 20:58:54','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('159','admin','2015-03-13 22:07:07','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('160','admin','2015-03-15 19:43:53','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('161','admin','2015-03-15 23:53:58','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('162','admin','2015-03-16 17:15:08','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('163','admin','2015-04-10 13:25:21','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('164','admin','2015-04-10 14:12:01','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('165','admin','2015-04-10 15:38:27','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('166','admin','2015-04-10 17:20:09','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('167','admin','2015-04-17 13:26:42','15.203.233.79','0','','0','0');");
E_D("replace into `phome_enewslog` values('168','admin','2015-04-19 21:21:53','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('169','admin','2015-04-28 00:01:09','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('170','admin','2015-04-28 10:07:56','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('171','admin','2015-05-14 21:59:46','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('172','admin','2015-05-18 12:23:32','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('173','admin','2015-05-18 13:40:34','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('174','admin','2015-05-18 13:40:53','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('175','admin','2015-05-21 15:22:47','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('176','admin','2015-05-22 19:39:56','122.7.119.35','1','','0','0');");
E_D("replace into `phome_enewslog` values('177','admin','2015-06-03 10:54:28','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('178','admin','2015-06-07 22:18:50','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('179','admin','2015-06-09 10:58:17','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('180','admin','2015-06-09 18:13:27','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('181','admin','2015-06-09 22:48:47','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('182','admin','2015-06-10 12:30:47','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('183','admin','2015-06-16 11:14:06','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('184','admin','2015-06-22 23:27:00','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('185','admin','2015-06-26 13:08:55','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('186','admin','2015-06-26 13:23:13','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('187','admin','2015-06-27 10:19:33','123.160.208.28','0','','0','0');");
E_D("replace into `phome_enewslog` values('188','admin','2015-06-27 10:19:48','123.160.208.28','0','','0','0');");
E_D("replace into `phome_enewslog` values('189','admin','2015-06-28 22:06:38','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('190','admin','2015-06-29 18:32:50','27.215.30.139','1','','0','0');");
E_D("replace into `phome_enewslog` values('191','admin','2015-06-29 20:27:22','27.215.30.139','1','','0','0');");
E_D("replace into `phome_enewslog` values('192','admin','2015-06-30 16:41:25','222.134.183.194','1','','0','0');");
E_D("replace into `phome_enewslog` values('193','admin','2015-07-02 16:21:30','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('194','admin','2015-07-03 20:52:00','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('195','admin','2015-07-05 00:25:15','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('196','admin','2015-07-06 16:58:20','124.135.124.155','1','','0','0');");
E_D("replace into `phome_enewslog` values('197','admin','2015-07-06 23:35:55','124.135.124.155','1','','0','0');");
E_D("replace into `phome_enewslog` values('198','admin','2015-07-07 22:25:03','124.135.124.155','1','','0','0');");
E_D("replace into `phome_enewslog` values('199','admin','2015-07-08 20:59:24','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('200','admin','2015-07-23 17:10:36','119.180.214.116','1','','0','0');");
E_D("replace into `phome_enewslog` values('201','admin','2015-07-23 20:44:01','119.180.214.116','1','','0','0');");
E_D("replace into `phome_enewslog` values('202','admin','2015-07-25 17:44:45','119.180.214.116','1','','0','0');");
E_D("replace into `phome_enewslog` values('203','admin','2015-08-08 15:04:59','112.239.49.83','1','','0','0');");
E_D("replace into `phome_enewslog` values('204','admin','2015-08-16 15:26:18','221.204.169.136','0','','0','0');");
E_D("replace into `phome_enewslog` values('205','admin','2015-08-16 15:26:31','101.71.77.196','0','','0','0');");
E_D("replace into `phome_enewslog` values('206','admin','2015-08-20 18:21:15','113.140.58.103','0','','0','0');");
E_D("replace into `phome_enewslog` values('207','admin','2015-08-21 11:45:39','119.179.226.41','1','','0','0');");
E_D("replace into `phome_enewslog` values('208','admin','2015-08-21 14:24:42','119.179.226.41','1','','0','0');");
E_D("replace into `phome_enewslog` values('209','admin','2015-08-25 15:49:48','112.239.51.244','1','','0','0');");
E_D("replace into `phome_enewslog` values('210','admin','2015-08-25 15:56:13','112.239.51.244','1','','0','0');");
E_D("replace into `phome_enewslog` values('211','admin','2015-09-01 20:54:11','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('212','admin','2015-09-02 14:52:36','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('213','admin','2015-09-10 22:43:52','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('214','admin','2015-09-11 21:46:11','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('215','admin','2015-09-13 11:18:57','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('216','admin','2015-09-15 22:35:57','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('217','admin','2015-09-22 22:52:55','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('218','admin','2015-09-23 11:00:12','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('219','admin','2015-10-01 15:41:28','192.168.1.1','0','','0','0');");
E_D("replace into `phome_enewslog` values('220','admin','2015-10-01 15:41:33','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('221','admin','2015-10-06 21:27:58','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('222','admin','2015-10-07 21:42:21','192.168.1.1','0','','0','0');");
E_D("replace into `phome_enewslog` values('223','admin','2015-10-07 21:42:30','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('224','admin','2015-10-08 10:14:41','113.116.29.81','0','','0','0');");
E_D("replace into `phome_enewslog` values('225','admin','2015-10-10 10:38:42','27.186.159.128','0','','0','0');");
E_D("replace into `phome_enewslog` values('226','admin','2015-10-21 14:33:23','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('227','admin','2015-10-22 17:53:52','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('228','admin','2015-10-24 19:17:15','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('229','admin','2015-10-25 13:32:02','192.168.1.1','1','','0','0');");
E_D("replace into `phome_enewslog` values('230','admin','2015-10-31 17:23:28','127.0.0.1','1','','0','64471');");
E_D("replace into `phome_enewslog` values('231','admin','2015-10-31 17:29:40','127.0.0.1','1','','0','64952');");
E_D("replace into `phome_enewslog` values('232','admin','2015-12-12 15:29:03','127.0.0.1','0','','0','60309');");
E_D("replace into `phome_enewslog` values('233','admin','2015-12-12 15:29:22','127.0.0.1','1','','0','60359');");
E_D("replace into `phome_enewslog` values('234','admin','2015-12-12 16:08:15','127.0.0.1','1','','0','50784');");
E_D("replace into `phome_enewslog` values('235','admin','2015-12-13 17:10:18','127.0.0.1','1','','0','54538');");

@include("../../inc/footer.php");
?>