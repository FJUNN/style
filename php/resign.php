<?php
require_once '../common/init.php';
header("content-type:text/html;charset=utf-8");
//
$tel=htmlspecialchars($_POST['tel']);
// $xq=htmlspecialchars($_POST['xq']);
//
if(mb_strlen($tel)!='11'){
	echo "<script>alert('手机号码少于11位！');window.history.go(-1);</script>";
	exit;
}
$result=mysqli_query($conn,"SELECT COUNT(*) AS `tel` FROM `et` WHERE `tel`='$tel'");
$data=mysqli_fetch_assoc($result);
$data=$data['tel'];
if($data!='0'){
	echo('<script>alert("该手机号码已被注册");window.history.go(-1);</script>');
	exit;
	
}
$time=date('Y-m-d h:i:s');
$pwd=md5(htmlspecialchars($_POST['pwd']));
//
$result=mysqli_query($conn,"INSERT into `et`(`time`,`tel`,`pwd`) values ('$time','$tel','$pwd')");
if($result){
	echo "<script>alert('注册成功');location.href='../index.php';</script>";
}