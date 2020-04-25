<?php
require_once '../common/init.php';
header("content-type:text/html;charset=utf-8");
error_reporting(0);
//收
$del=$_POST['del'];
//操作
if(empty($del)){
	echo "<script>alert(404);</script>";

}else{
$del=mysqli_query($conn,"DELETE FROM `food` WHERE `mcontent`='$del'");

}



?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<title>删除页面</title>
<style type="text/css">
#div{
	width: 500px;
	height: 350px;
	background-color: #E8E8E8;
	text-align: center;
	margin-left: 255px;
}
</style>
<body>
<div id="div">
	<a href="../zuo.php">返回</a>
	<br><br><br><br><br><br><br><br>
	<form action="" method="post">
删除：<laber><input type="text" name="del"> <input type="submit" value="删除"></laber><br>
	</form>
</div>
</body>
</html>
