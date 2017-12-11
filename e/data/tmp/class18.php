<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="/skin/ecms008/images/favicon.ico" type="image/x-icon" />
<link type="text/css" media="all" href="/skin/ecms008/css/style.css" rel="stylesheet" />
<meta name="keywords" content="" />
<meta name="description" content=" " />
<title>页面三--<?=$public_r[sitename]?></title>
<script>window._deel = {name: '<?=$public_r[sitename]?>',url: '/', ajaxpager: 'on', commenton: 0, roll: [1,7],appkey: {tqq: '123456',tsina: '123456'}}
</script>
<script type='text/javascript' src='http://libs.baidu.com/jquery/1.8.3/jquery.min.js?ver=1.0'></script>
<script type='text/javascript' src='/skin/ecms008/js/jquery.js?ver=1.0'></script>
<script type="text/javascript" src="/e/data/js/ajax.js"></script>
<!--[if lt IE 9]><script src="/skin/ecms008/js/html5.js"></script>
<script src="/skin/ecms008/js/selectivizr-min.js"></script><![endif]--><!--[if lte IE 8]> <![endif]-->
<style>
.bdsharebuttonbox a{border-bottom:0;margin-right:5px;width:28px;height:28px;line-height:28px;color: #fff;}
.bds_renren{background:#94b3eb;}
.bds_qzone{background:#fac33f;}
.bds_more{background:#40a57d;}
.bds_weixin{background:#7ad071;}
.bdsharebuttonbox a:hover{background-color:#7fb4ab;color: #fff;border-bottom:0;}
</style>
</head>
<body class="page page-template page-template-pagespage-php">
<header id="header" class="header">
  <div class="container-inner">
    <div class="yusi-logo"> <a href="/">
      <h1><span class="yusi-mono"><img src="/skin/ecms008/images/logo.png" /></span><span class="yusi-bloger"><img src="/skin/ecms008/images/logo2.png" /></span></h1>
      </a></div>
  </div>
  <div id="nav-header" class="navbar">
    <ul class="nav">
      <li class="menu-item <?=$GLOBALS[navclassid]?"":"current_page_item"?>"><a href="/">首页</a></li>
      <?php
$sql=$empire->query("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc");
    while($s=$empire->fetch($sql)){
    	$tclass="";
        $fr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
        $topbclassid=$fr[1]?$fr[1]:$GLOBALS[navclassid];
        if($topbclassid==$s[classid]){
        	$tclass='current_page_item';
        }
        $classurl=sys_ReturnBqClassname($s,9);
        echo '<li class="menu-item '.$tclass.'"><a href="'.$classurl.'">'.$s[classname].'</a>';
        if(!$s[islast]){
        	$sql2=$empire->query("select classid,classname from {$dbtbpre}enewsclass where bclassid=$s[classid] and showclass=0 order by myorder,myorder asc");
            $str="";
            while($s2=$empire->fetch($sql2)){
            	$classurl2=sys_ReturnBqClassname($s2,9); 
            	$str.='<li class="menu-item"><a href="'.$classurl2.'">'.$s2[classname].'</a></li>';
            }
            echo '<ul class="sub-menu">'.$str.'</ul>';
        }
        echo '</li>';
    }
?>
      <li style="float:right;">
        <div class="toggle-search"><i class="fa fa-search"></i></div>
        <div class="search-expand" style="display: none;">
          <div class="search-expand-inner">
            <form onsubmit="return checkSearchForm()" method="post" name="searchform" id="searchform" class="searchform themeform" action="/e/search/index.php" >
              <div>
                <input type="ext" class="search" name="keyboard" onblur="if(this.value=='')this.value='回车搜索...';" onfocus="if(this.value=='回车搜索...')this.value='';" value="回车搜索...">
              </div>
              <input type="hidden" value="title" name="show"></input>
          <input type="hidden" value="1" name="tempid"></input>
          <input type="hidden" value="news" name="tbname"></input>
          <input name="mid" value="1" type="hidden">
          <input name="dopost" value="search" type="hidden">
            </form>
          </div>
        </div>
      </li>
    </ul>
  </div>
  </div>
</header>
<section class="container">
  <div class="speedbar">
    <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <script src=/d/js/acmsd/thea1.js></script></div>
  </div>
  <div class="pagewrapper clearfix">
    <aside class="pagesidebar">
      <ul class="pagesider-menu">
      <? @sys_ShowClassByTemp(15,1,0,0);?>
      </ul>
    </aside>
    <div class="pagecontent">
      <header class="pageheader clearfix">
        <h1 class="pull-left"> 页面三</h1>
        <div class="pull-right"> <span class="action action-share bdsharebuttonbox"><i class="fa fa-share-alt"></i>分享
          <div class="action-popover">
            <div class="popover top in">
              <div class="arrow"></div>
              <div class="popover-content"><a href="#" class="sinaweibo fa fa-weibo" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone fa fa-star" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="tencentweibo fa fa-tencent-weibo" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="qq fa fa-qq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_renren fa fa-renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin fa fa-weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more fa fa-ellipsis-h" data-cmd="more"></a></div>
            </div>
          </div>
          </span></div>
      </header>
      <div class="article-content">
        后台--模板--封面模板-管理封面模板：来定义此处文字，支持HTML代码！
      </div>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="footer-inner">
    <div class="copyright pull-left"> <a href="/" title="<?=$public_r[sitename]?>"><?=$public_r[sitename]?></a> 版权所有，保留一切权利 ! Theme <a href="http://www.moyublog.com">Moyu</a> © 2011-2014 · <?=$public_r['add_icp']?> </div>
    <div class="trackcode pull-right"> <?=$public_r['add_tongji']?></div>
  </div>
</footer>
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?=$public_r['add_duoshuo']?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
</body>
</html>