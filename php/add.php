<?php
require_once '../common/init.php';
header("content-type:text/html;charset=utf-8");
error_reporting(0);
//收
$add=$_POST['add'];
$date=$_POST['date'];
//操作
if(empty($add)){
	echo "<script>alert(404);</script>";

}else{
$add=mysqli_query($conn,"INSERT INTO `food` (`mcontent`,`date`) values ('$add','$date')");
}

?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<title>添加页面</title>
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
增加：<laber><input type="text" name="add"></laber> 
时间：<laber><input type="date" name="date"></laber> 
	<input type="submit" value="增加"><br>
	</form>
</div>
</body>
</html>
