<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsad`;");
E_C("CREATE TABLE `phome_enewsad` (
  `adid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `picurl` varchar(255) NOT NULL DEFAULT '',
  `url` text NOT NULL,
  `pic_width` int(10) unsigned NOT NULL DEFAULT '0',
  `pic_height` int(10) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `adtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `alt` varchar(120) NOT NULL DEFAULT '',
  `starttime` date NOT NULL DEFAULT '0000-00-00',
  `endtime` date NOT NULL DEFAULT '0000-00-00',
  `adsay` varchar(255) NOT NULL DEFAULT '',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titlecolor` varchar(10) NOT NULL DEFAULT '',
  `htmlcode` text NOT NULL,
  `t` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ylink` tinyint(1) NOT NULL DEFAULT '0',
  `reptext` text NOT NULL,
  PRIMARY KEY (`adid`),
  KEY `classid` (`classid`),
  KEY `t` (`t`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsad` values('1','','','468','60','0','1','1','首页公告','','','2014-06-17','2019-07-17','','','','请在Chrome、Firefox等现代浏览器浏览本站。欢迎光临我的网站！','2','0','');");
E_D("replace into `phome_enewsad` values('2','/d/file/2014-11-06/3cd871e89f2f6eb8a3a032653a4f8018.jpg','http://www.99yuanma.net/','360','300','34','1','1','侧边广告位置一','_parent','','2014-06-18','2019-07-18','','','','','0','0','');");
E_D("replace into `phome_enewsad` values('3','/d/file/2014-11-06/ab93d4726fd97c7472919aa707607472.jpg','http://www.99yuanma.net/','360','300','22','1','1','侧边广告位置二','_parent','','2014-06-18','2019-07-18','','','','','0','0','');");
E_D("replace into `phome_enewsad` values('4','/d/file/2014-11-06/916da2cd86c3e984da62c4e47993f604.jpg','http://www.99yuanma.net/','360','300','10','1','1','侧边广告位置三','_parent','','2014-09-19','2019-10-19','','','','','0','0','');");
E_D("replace into `phome_enewsad` values('5','/d/file/2014-11-07/4dc5c4fb4648f65a7981828eeeda6db6.jpg','http://www.99yuanma.net/','856','60','34','1','1','栏目顶部广告位','_parent','','2014-09-19','2019-10-19','','','','','0','0','');");
E_D("replace into `phome_enewsad` values('8','/d/file/2014-11-07/fd09c01a975a1aaf833d129f2baf73aa.jpg','http://www.99yuanma.net/','856','80','13','1','1','内容页底部广告位','_blank','','2014-11-07','2019-12-07','','','','','0','0','');");
E_D("replace into `phome_enewsad` values('6','/d/file/2014-11-07/cb01fdef686acc857665cb1e43b9d8f6.jpg','http://www.99yuanma.net/','856','70','31','1','1','内容页顶部广告位','_parent','','2014-09-19','2019-10-19','','','','','0','0','');");
E_D("replace into `phome_enewsad` values('7','/d/file/2014-11-06/65b1aab03fac3a8549cb39ff201784f7.jpg','http://www.99yuanma.net/','856','60','59','1','1','首页幻灯片下方广告','_blank','','2014-11-06','2019-12-06','','','','','0','0','');");
E_D("replace into `phome_enewsad` values('9','/d/file/2015-02-27/8843ccf9456da028e4b8ac2cce6997fa.jpg','http://www.99yuanma.net/','856','60','85','1','1','首页/栏目文章列表中广告','_blank','','2015-02-27','2019-03-29','','','','','0','0','');");

@include("../../inc/footer.php");
?>