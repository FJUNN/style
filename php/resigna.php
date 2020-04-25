<?php
// session_start();

require_once '../common/init.php';

header("content-type:text/html;charset=utf-8");
//
$email=htmlspecialchars($_POST['email']);
$pwd=htmlspecialchars($_POST['pwd']);
// $xq=htmlspecialchars($_POST['xq']);
//
if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/',$email)){
	echo "<script>alert('邮箱输入格式有误！');window.history.go(-1);</script>";
	exit;
}
$result=mysqli_query($conn,"SELECT COUNT(*) AS `email` FROM `et` WHERE `email`='$email'");
$data=mysqli_fetch_assoc($result);
$data=$data['email'];
if($data!='0'){
	echo('<script>alert("该邮箱已被注册");window.history.go(-1);</script>');
	exit;
}
if(!preg_match('/^\w{6,}$/',$pwd)) {
	echo "<script>alert('密码设置的位数少于6位');window.history.go(-1);</script>";
	exit;	
}
$time=date('Y-m-d h:i:s');
$pwd=md5(htmlspecialchars($_POST['pwd']));
$result=mysqli_query($conn,"INSERT into `et`(`time`,`email`,`pwd`) values ('$time','$email','$pwd')");
if($result){
	echo "<script>alert('注册成功');location.href='../index.php';</script>";
}else{
	echo "注册失败";
}


	
