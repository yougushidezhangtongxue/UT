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
<link type="text/css" media="all" href="/skin/ecms008/css/font-awesome.min.css" rel="stylesheet" />
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--] " />
<title>[!--pagetitle--]--<?=$public_r[sitename]?></title>
<script>window._deel = {name: '<?=$public_r[sitename]?>',url: '/', ajaxpager: 'on', commenton: 0, roll: [1,8],appkey: {tqq: '123456',tsina: '123456'}}
</script>
<script type='text/javascript' src='http://libs.baidu.com/jquery/1.8.3/jquery.min.js?ver=1.0'></script>
<script type='text/javascript' src='/skin/ecms008/js/jquery.js?ver=1.0'></script>
<script type="text/javascript" src="/e/data/js/ajax.js"></script>
<!--[if lt IE 9]><script src="/skin/ecms008/js/html5.js"></script>
<script src="/skin/ecms008/js/selectivizr-min.js"></script><![endif]--><!--[if lte IE 8]> <![endif]-->
</head>
<body class="archive category category-wordpress">
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
  <div class="content-wrap">
    <div class="content">
      <header class="archive-header">
        <h1><i class="fa fa-folder-open"></i> &nbsp;分类：[!--class.name--]</h1>
      </header>
      <div class="banner banner-sticky"><script src=/d/js/acmsd/thea5.js></script></div>
      [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]
      <div class="pagination">
        <ul>
          [!--show.listpage--]
        </ul>
      </div>
    </div>
  </div>
  <aside class="sidebar">
    <div class="widget widget_text">
      <div class="textwidget">
        <div class="social"> <a href="<?=$public_r['add_xlwb']?>" rel="external nofollow" title="新浪微博" target="_blank"><i class="sinaweibo fa fa-weibo"></i></a><a  href="<?=$public_r['add_txwb']?>" rel="external nofollow" title="腾讯微博" target="_blank"><i class="tencentweibo fa fa-tencent-weibo"></i></a><a class="weixin"><i class="weixins fa fa-weixin"></i>
          <div class="weixin-popover">
            <div class="popover bottom in">
              <div class="arrow"></div>
              <div class="popover-title">微信订阅</div>
              <div class="popover-content"><img src="/skin/ecms008/images/weixin.gif" ></div>
            </div>
          </div>
          </a><a href="mailto:<?=$public_r['add_email']?>" rel="external nofollow" title="Email" target="_blank"><i class="email fa fa-envelope-o"></i></a><a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$public_r['add_qq']?>&site=qq&menu=yes" rel="external nofollow" title="联系QQ" target="_blank"><i class="qq fa fa-qq"></i></a><a href="/e/web/?type=rss2" rel="external nofollow" target="_blank"  title="订阅本站"><i class="rss fa fa-rss"></i></a></div>
      </div>
    </div>

<div class="widget">
<form onsubmit="return checkSearchForm()" method="post" name="searchform" id="searchform" class="searchform2" action="/e/search/index.php" >
                <input type="ext" class="input2" name="keyboard" onblur="if(this.value=='')this.value='搜索...';" onfocus="if(this.value=='搜索...')this.value='';" value="搜索...">
<input type="submit" class="submit2 " value="搜索">
              <input type="hidden" value="title" name="show"></input>
          <input type="hidden" value="1" name="tempid"></input>
          <input type="hidden" value="news" name="tbname"></input>
          <input name="mid" value="1" type="hidden">
          <input name="dopost" value="search" type="hidden">
            </form>
</div>

<div class="widget">
    <script src="/e/member/login/loginjs.php"></script>
    </div>
    <div class="widget d_subscribe">
      <div class="title">
        <h2>精彩推荐</h2>
      </div>
      <script type="text/javascript" src="/d/js/acmsd/thea2.js"></script>
    </div>
    <div class="widget d_textbanner">
    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',10,18,0,'isgood=2','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <a class="style01" href="<?=$bqsr['titleurl']?>">
      <h3><?=$bqr['title']?></h3>
      <p><?=esub($bqr[smalltext],88)?></p>
      </a>
      <?php
}
}
?>
      </div>
    <div class="widget d_textbanner">
    <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',10,18,0,'isgood=3','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <a class="style02" href="<?=$bqsr['titleurl']?>">
      <h3><?=$bqr['title']?></h3>
      <p><?=esub($bqr[smalltext],80)?></p>
      </a>
      <?php
}
}
?>
      </div>
    <div class="widget d_banner">
      <div class="d_banner_inner"><script type="text/javascript" src="/d/js/acmsd/thea3.js"></script></div>
    </div>
    <div class="widget d_tag">
      <div class="title">
        <h2>标签云</h2>
      </div>
      <div class="d_tags"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewstags order by num DESC limit 20",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <?
echo '<a href="/e/tags/?tagname='.urlencode($bqr['tagname']).'"  target="_blank" title="'.$bqr['num'].'个话题" >'.$bqr['tagname'].'('.$bqr['num'].')</a>';
?>
    <?php
}
}
?></div>
    </div>
    <div class="widget d_postlist">
      <div class="title">
        <h2>推荐阅读</h2>
      </div>
      <ul>
      <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',4,18,0,'isgood=4','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" ><span class="thumbnail"><img src="<?=sys_ResizeImg($bqr[titlepic],100,64,1,'')?>" alt="<?=$bqr['title']?>" /></span><span class="text"><?=$bqr['title']?></span><span class="muted"><?=date('Y-m-d',$bqr[newstime])?></span></a></li>
        <?php
}
}
?>
      </ul>
    </div>
    <div class="widget d_banner">
      <div class="d_banner_inner"><script type="text/javascript" src="/d/js/acmsd/thea4.js"></script></div>
    </div>
    <div class="widget d_comment">
      <div class="title">
        <h2>最新吐槽</h2>
      </div>
      <style>
	  .d_comment ul a {padding: 0px 0px;}
	  </style>
      <ul class="ds-recent-comments" data-num-items="10" data-show-avatars="1" data-show-title="0" data-show-time="1" data-show-admin="1" data-excerpt-length="70"></ul>
    </div>
    <div class="widget widget_links">
      <div class="title">
        <h2>友情链接</h2>
      </div>
      <ul class='xoxo blogroll'>
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and lpic="" order by lid',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <li><a href="<?=$bqr[lurl]?>" target="_blank"><?=$bqr[lname]?></a></li>
      <?php
}
}
?>
      </ul>
    </div>
  </aside>
</section>
<footer class="footer">
  <div class="footer-inner">
    <div class="copyright pull-left"> <a href="[!--news.url--]" title="<?=$public_r[sitename]?>"><?=$public_r[sitename]?></a> 版权所有，保留一切权利 ! Theme <a href="http://www.moyublog.com">Moyu</a> © 2011-2014 · <?=$public_r['add_icp']?> </div>
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