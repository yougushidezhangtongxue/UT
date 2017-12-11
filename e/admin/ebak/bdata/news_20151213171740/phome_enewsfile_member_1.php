<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_member`;");
E_C("CREATE TABLE `phome_enewsfile_member` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_member` values('12','0','2090b50c593d30bbe36e3a8b7886394f.jpg','9108','2015-08-02','[EditInfo]hanxing3437','1438494489','0','Member[userpic]','1','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('2','0','14317f6e47567df767a9acf4c38261df.gif','2012','2014-09-11','[EditInfo]hanxing3438','1410367680','0','Member[userpic]','1','0','2','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('3','0','user5_avator.jpg','6379','avator','[EditInfo]复复','1411476851','0','Member[userpic]','1','0','1','0','2','6');");
E_D("replace into `phome_enewsfile_member` values('4','0','user4_avator.jpg','8529','avator','[EditInfo]高洋','1412997875','0','Member[userpic]','1','0','1','0','2','6');");
E_D("replace into `phome_enewsfile_member` values('5','0','d70216944a9bbeedf20046d83dae81fe.jpg','32229','2015-03-04','[EditInfo]tvbian','1425480028','0','Member[userpic]','1','0','34','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('6','0','user61_avator.jpg','4965','avator','[EditInfo]zhuidu','1433171067','0','Member[userpic]','1','0','1','0','2','6');");
E_D("replace into `phome_enewsfile_member` values('9','0','bf573fe09bd3c62d861a64d67eb840cd.jpg','8265','2015-07-15','[EditInfo]q12345','1436921847','0','Member[userpic]','1','0','66','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('10','0','06dc1fb5b109512b76a93e3d49e368ff.jpg','5467','2015-07-22','[EditInfo]chaidakang','1437537772','0','Member[userpic]','1','0','68','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('11','0','938c9cb2fbf1e38c299e6b00619e5721.jpg','9137','2015-07-25','[EditInfo]admin11','1437816788','0','Member[userpic]','1','0','69','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('13','0','bac91a3b0b959dc2bb2f96b825eee2c1.jpg','9587','2015-10-24','[EditInfo]hj19870912','1445680974','0','Member[userpic]','1','0','100','0','2','0');");

@include("../../inc/footer.php");
?>