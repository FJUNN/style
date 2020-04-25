<?php
require_once '../common/init.php';
header("content-type:text/html;charset=utf-8");
error_reporting(0);

$gai=$_POST['gai'];
$xiu=$_POST['xiu'];
if(empty($xiu)){
	echo "<script>alert(404);</script>";

}else{
$result=mysqli_query($conn,"SELECT * from `food` where (`mcontent`)='$xiu'");
$data=mysqli_fetch_assoc($result);
$id=$data['id'];
var_dump($id);
$result=mysqli_query($conn,"UPDATE `food` set `mcontent`='$gai' where `id`=('$id')");
}
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<title>修改页面</title>
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
修改：<laber><input type="text" name="xiu" required> </laber>
	<laber><input type="text" name="gai" required> </laber>
	<input type="submit" value="修改">
	
	</form>
</div>
</body>
</html>