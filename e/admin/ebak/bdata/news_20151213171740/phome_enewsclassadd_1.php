<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclassadd`;");
E_C("CREATE TABLE `phome_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `shuoming` mediumtext NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassadd` values('1','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('2','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('3','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('4','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('5','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('12','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('13','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('14','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('15','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('16','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('17','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");
E_D("replace into `phome_enewsclassadd` values('18','','','<p>请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！</p>');");

@include("../../inc/footer.php");
?>