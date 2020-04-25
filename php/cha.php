<?php
require_once '../common/init.php';
header("content-type:text/html;charset=utf-8");
error_reporting(0);
//收
$cha=$_POST['cha'];

//操作
$result=mysqli_query($conn,"SELECT * from `food` where `mcontent`=('$cha')");
echo '<table><tr><th>编号</th><th>美食</th><th>养生</th><th>时间</th></tr>';
while($data=mysqli_fetch_assoc($result)){
	echo '<tr><td>' .$data['id'] .'</td>';
	echo '<td>' .$data['mcontent'] .'</td>';
	echo '<td>' .$data['ycontent'] .'</td>';
	echo '<td>' .$data['date'] .'</td>';
}
echo '</table>';
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>查询页面</title>
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
美食系列查询：<laber>
	<input type="text" name="cha"> <input type="submit" value="查询">
	</laber>
	</form>
	</div>
</body>
</html>