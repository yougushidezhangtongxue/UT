<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfavaclass`;");
E_C("CREATE TABLE `phome_enewsfavaclass` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL DEFAULT '',
  `userid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfavaclass` values('1','呵呵','3');");
E_D("replace into `phome_enewsfavaclass` values('2','呵呵','5');");
E_D("replace into `phome_enewsfavaclass` values('3','12','47');");
E_D("replace into `phome_enewsfavaclass` values('4','11','58');");

@include("../../inc/footer.php");
?>