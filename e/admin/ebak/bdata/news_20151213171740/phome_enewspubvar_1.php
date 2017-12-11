<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspubvar`;");
E_C("CREATE TABLE `phome_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspubvar` values('1','xlwb','新浪微博地址','http://weibo.com/u/2462548165','变量值内填写新浪微博地址','0','0','1');");
E_D("replace into `phome_enewspubvar` values('2','txwb','腾讯微博地址','http://t.qq.com/moyu_blog/','变量值内填写腾讯微博地址','0','0','1');");
E_D("replace into `phome_enewspubvar` values('3','icp','备案信息','鲁ICP备12345678号','填入你的备案信息','0','0','1');");
E_D("replace into `phome_enewspubvar` values('4','tongji','统计代码','','填入你的统计代码','0','0','1');");
E_D("replace into `phome_enewspubvar` values('7','duoshuo','多说2级域名','shuxue','这里填写你申请的多说代码的二级域名','0','0','1');");
E_D("replace into `phome_enewspubvar` values('8','qq','QQ号码','12345678','下方变量值填入你的QQ号码','0','0','1');");
E_D("replace into `phome_enewspubvar` values('9','email','电子邮箱','12345678@qq.com','下方变量值填入你的email邮箱','0','0','1');");

@include("../../inc/footer.php");
?>