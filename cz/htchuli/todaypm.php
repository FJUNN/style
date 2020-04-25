<?php 
header("content-type:text/html;charset=utf-8");
$type=htmlspecialchars($_POST['type']);
if($type==1){
	type(1);
}
if($type==2){
	type(2);
}
function type($type){
require '../common/init.php';
$text=htmlspecialchars($_POST['text']);
$pm=htmlspecialchars($_POST['pm']);
$lianjie=htmlspecialchars($_POST['lianjie']);
			switch ($type) {
				case '1':
					$result=mysqli_query($conn,"INSERT INTO `todaypm` (`text`,`pm`,`lianjie`) values ('$text','$pm','$lianjie')");
					if($result){
									echo "<script>alert('添加成功');location.href='../biao/todaypm.php';</script>";
					}
					break;
				
				case '2':
					$id=htmlspecialchars($_GET['id']);
					$result=mysqli_query($conn,"UPDATE `todaypm` SET `lianjie`='$lianjie' where `id`='$id'");
					$result=mysqli_query($conn,"UPDATE `todaypm` SET `pm`='$pm' where `id`='$id'");
					$result=mysqli_query($conn,"UPDATE `todaypm` SET `text`='$text' where `id`='$id'");
					if($result){
									echo "<script>alert('修改成功');location.href='../biao/todaypm.php';</script>";
					}
					break;
			}

}
?>