<?php if(!defined('InEmpireCMS')){exit();} ?>
<?php
$public_diyr['pagetitle']='修改头像';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;<span>修改头像</span>";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script>function updateavatar() {window.location.reload();}</script>
<div class="huiyuanmainright fr">
        <div class="hyzmrb">
                <ul>
                        <li><a href="index.php">修改资料</a></li>
                        <li class="on"><a href="EditAvatar.php">修改头像</a></li>
                        <li><a href="EditSafeInfo.php">修改安全信息</a></li>
                </ul>
        </div>
        <div class="huizcen avatar clearfix">
                <table border="0" cellspacing="1"><tr><td>
                        <h3>当前我的头像</h3>
                        <p>如果您还没有设置自己的头像，系统会显示为默认头像，您需要自己上传一张新照片来作为自己的个人头像 </p>
                        <p><img src="<?=$addr['userpic']?$addr['userpic']:$public_r['newsurl'].'e/data/images/nouserpic.gif'?>" /></p>
                        <h3>设置我的新头像</h3>
                        <p>请选择一个新照片进行上传编辑。<br />
                        头像保存后，您可能需要刷新一下本页面(按F5键)，才能查看最新的头像效果</p>
                        <p><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="450" height="253" id="camera" align="middle"><param name="allowScriptAccess" value="sameDomain" /><param name="allowFullScreen" value="false" /><param name="movie" value="<?=$public_r['newsurl']?>e/extend/UserAvatar/camera.swf?debug=1&uploadSize=1024" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="<?=$public_r['newsurl']?>e/extend/UserAvatar/camera.swf?debug=1&uploadSize=1024" quality="high" bgcolor="#ffffff" width="450" height="253" name="camera" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_cn" /></object></p>
                        </td></tr></table>
        </div>
</div>
<?php require(ECMS_PATH.'e/template/incfile/footer.php');?>