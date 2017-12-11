<?php
require("../../class/connect.php");
require('../../class/db_sql.php');
require("../class/user.php");
require("../class/member_modfun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
$user=islogin();
$r=ReturnUserInfo($user[userid]);
$addr=$empire->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='$user[userid]' limit 1");
/**
 * 这个是标准表单上传PHP文件
 */
if (!$_FILES['Filedata']) {
	die ( '未检测到图像数据！' );
}

if ($_FILES['Filedata']['error'] > 0) {
	switch ($_FILES ['Filedata'] ['error']) {
		case 1 :
			$error_log = '文件大小超过PHP最大限制';
			break;
		case 2 :
			$error_log = '文件大小超过form表单最大限制';
			break;
		case 3 :
			$error_log = '只有一部分被上传';
			break;
		case 4 :
			$error_log = '没有此文件';
			break;
		default :
			break;
	}
	die ( '上传失败:' . $error_log );
} else {
	$img_data = $_FILES['Filedata']['tmp_name'];
	$size = getimagesize($img_data);
	$file_type = $size['mime'];
	if (!in_array($file_type, array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'))) {
		$error_log = '只允许上传 jpg,png,gif 为后缀的附件';
		die ( '上传失败:' . $error_log );
	}
	$filesize=(int)$_FILES['Filedata']['size'];
	if($filesize>2*1024*1024){
		$error_log = "图片不能大于2M";
		die ( '上传失败:' . $error_log );
	}
	switch($file_type) {
		case 'image/jpg' :
		case 'image/jpeg' :
		case 'image/pjpeg' :
			$extension = 'jpg';
			break;
		case 'image/png' :
			$extension = 'png';
			break;
		case 'image/gif' :
			$extension = 'gif';
			break;
	}	
}
if (!is_file($img_data)) {
	die ( '图片上传失败!' );
}
DelYMemberTranFile($addr['userpic'],'userpic',$user['username']); //删除原附件
$tfr=DoTranFile($img_data,$_FILES['Filedata']['name'],$_FILES['Filedata']['type'],$filesize,0); //上传附件
if($tfr['tran'])
{
	//写入数据库
	$filepass=$user['userid'];
	eInsertFileTable($tfr[filename],$filesize,$tfr[filepath],'[EditInfo]'.$user['username'],0,"Member[userpic]",1,$filepass,$filepass,$public_r[fpath],0,6,0);
	//更新附件
	UpdateTheFileEditOther(6,$user['userid'],'member');
	$empire->query("update {$dbtbpre}enewsmemberadd set userpic='$tfr[url]' where userid='$addr[userid]'");
}else{
	die("上传成功，但写入附件数据库失败");
}
echo '上传成功';
exit ();

?>