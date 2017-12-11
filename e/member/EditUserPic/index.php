<?php
require("../../class/connect.php");
require('../../class/db_sql.php');
require("../../class/q_functions.php");
require("../class/user.php");
require("../../data/dbcache/MemberLevel.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
$user=islogin();
$r=ReturnUserInfo($user[userid]);
$addr=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$user[userid]' limit 1");
?>
<?php

$public_diyr['pagetitle']='头像上传';

$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;头像上传";

require(ECMS_PATH.'e/template/incfile/header.php');

?>
<script src="xiuxiu.js" type="text/javascript"></script>
<div class="setting yh">
<script type="text/javascript">
window.onload=function(){
	xiuxiu.embedSWF("altContent",5,"650px","600px");
       /*第1个参数是加载编辑器div容器，第2个参数是编辑器类型，第3个参数是div容器宽，第4个参数是div容器高*/
	xiuxiu.setUploadURL("<?=$public_r['newsurl']?>e/member/EditUserPic/upload.php");//修改为您自己的上传接收图片程序
	xiuxiu.setUploadType (2,"altContent");
	xiuxiu.onInit = function ()
	{
		xiuxiu.loadPhoto("<?=$public_r['newsurl']?>e/member/EditUserPic/6.jpg"); //默认背景
	}	
	xiuxiu.onUploadResponse = function (data)
	{
		//alert("上传响应" + data);  可以开启调试
		alert(data);
	}
}
</script>


<div id="altContent">
	<h1>美图秀秀头像上传</h1>
</div>
</div>

<?php

require(ECMS_PATH.'e/template/incfile/footer.php');

?>