<?php
session_start(); 
require '../common/init.php';
header("content-type:text/html;charset=utf-8");
$pwd=md5($_POST['pwd']);
$user=htmlspecialchars($_POST['user']);
//phone
if((!(preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/',$user)))&&mb_strlen($user)!='11'){
	echo "<script>alert('账号输入格式有误！');window.history.go(-1);</script>";
}
$post="SELECT * from `et` where (`email`='$user' or `tel`='$user')";
	$result=mysqli_query($conn,$post);
	$result=mysqli_fetch_assoc($result);
	$data=$result['pwd'];
if($pwd!==$data){
	echo "<script>alert('账号与密码不对');window.location.href='../index.php';</script>";
}else{
	$_SESSION['UID']=$result['id'];
    echo "<script>alert('登陆成功');window.location.href='../index.php';</script>";
}


	
	

