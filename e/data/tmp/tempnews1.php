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
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?> " />
<title><?=$grpagetitle?>--<?=$public_r[sitename]?></title>
<script>window._deel = {name: '<?=$public_r[sitename]?>',url: '/', ajaxpager: 'on', commenton: 0, roll: [1,8],appkey: {tqq: '123456',tsina: '123456'}}
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
<body class="single single-post single-format-standard">
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
      <header class="article-header">
        <h1 class="article-title"><a href="<?=$grtitleurl?>">[!--p.title--]</a></h1>
        <div class="meta"> <span id="mute-category" class="muted"><i class="fa fa-list-alt"></i><a href="<?=sys_ReturnBqClassname($navinfor,9)?>"> <?=$class_r[$ecms_gr[classid]][classname]?></a></span> <span class="muted"><i class="fa fa-user"></i> <?=$ecms_gr[username]?></span>
          <time class="muted"><i class="fa fa-clock-o"></i> <?=user_time($navinfor[newstime],0)?> (<?=date('m-d',$ecms_gr[newstime])?>)</time>
          <span class="muted" style="display:none;"><i class="fa fa-eye"></i> <script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script>℃</span> <span class="muted"><i class="fa fa-comments-o"></i> <a href="<?=$grtitleurl?>#comments"  class="ds-thread-count" data-thread-key="<?=$ecms_gr[id]?>">暂无评论</a></span></div>
      </header>
      <div class="banner banner-post"><script src=/d/js/acmsd/thea6.js></script></div>
      <article class="article-content">
        <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
<div class="pagination2" style="display: block;">
        <ul>
          [!--page.url--]
        </ul>
      </div>
        <p>转载请注明：<a href="/"><?=$public_r[sitename]?></a> &raquo; <a href="<?=$grtitleurl?>"><?=$ecms_gr[title]?></a></p>
        
        <div class="article-social"> <a href="JavaScript:makeRequest('/e/public/digg/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');" class="action"><i class="fa fa-heart-o"></i>喜欢 (<span class="count"  id="diggnum"><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5></script></span>)</a><span class="or">or</span><span class="action action-share bdsharebuttonbox"><i class="fa fa-share-alt"></i>分享 
          <div class="action-popover">
            <div class="popover top in">
              <div class="arrow"></div>
              <div class="popover-content"><a href="#" class="sinaweibo fa fa-weibo" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone fa fa-star" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="tencentweibo fa fa-tencent-weibo" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="qq fa fa-qq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_renren fa fa-renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin fa fa-weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more fa fa-ellipsis-h" data-cmd="more"></a></div>
            </div>
          </div>
          </span></div>
      </article>
      <footer class="article-footer">
        <div class="article-tags"><i class="fa fa-tags"></i><? @sys_eShowTags('selfinfo',10,0,'',0,'','',0,'','tagname');?></div>
      </footer>
      <nav class="article-nav"> <span class="article-nav-prev"><i class="fa fa-angle-double-left"></i> <?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid='$ecms_gr[classid]' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?></span> <span class="article-nav-next"><?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid='$ecms_gr[classid]' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?> <i class="fa fa-angle-double-right"></i></span> </nav>
      <div class="related_top">
        <div class="related_posts">
          <ul class="related_img">
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',4,0,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li class="related_box"  > <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" target="_blank"> <img src="<?=sys_ResizeImg($bqr[titlepic],185,110,1,'')?>" alt="<?=$bqr['title']?>" /> <br>
              <span class="r_title"><?=$bqr['title']?></span></a></li>
            <?php
}
}
?>
          </ul>
          <div class="relates">
            <ul>
            <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo','5,8',0,1,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
              <li><i class="fa fa-minus"></i><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></li>
            <?php
}
}
?>
            </ul>
          </div>
        </div>
      </div>
      <div id="comment-ad" class="banner banner-related">
        <div style="margin-bottom: -6px;"><script src=/d/js/acmsd/thea8.js></script></div>
      </div>
      
      <div id="comments">
<div class="ds-thread" data-category="<?=$ecms_gr[classid]?>" data-thread-key="<?=$ecms_gr[id]?>" data-title="<?=$ecms_gr[title]?>"></div>
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
    <div class="copyright pull-left"> <a href="/" title="<?=$public_r[sitename]?>"><?=$public_r[sitename]?></a> 吾爱源码BBS.52CODES.NET版权所有，保留一切权利 ! Theme <a href="http://www.moyublog.com">Moyu</a> © 2011-2014 · <?=$public_r['add_icp']?> </div>
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