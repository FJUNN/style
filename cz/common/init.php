<?php
//header("content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
mb_internal_encoding('UTF-8');
$conn=mysqli_connect('localhost','root','root','blog');
if(!$conn){
	exit('连接失败：' .mysqli_connect_error());
}
mysqli_set_charset($conn,"utf-8");
?>