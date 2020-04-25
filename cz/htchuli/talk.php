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
$pic=htmlspecialchars($_POST['pic']);
$title=htmlspecialchars($_POST['title']);
$name=htmlspecialchars($_POST['name']);
$content=htmlspecialchars($_POST['text']);
$time=date('Y-m-d h:i:s');
		switch ($type) {
		    case 1:
			$result=mysqli_query($conn,"INSERT INTO `talk` (`title`,`time`,`text`,`name`,`pic`) values ('$title','$time','$content','$name','$pic')");
		    if($result){
		    echo "<script>alert('添加成功');location.href='../biao/talk.php';</script>";
	}	
			break;
			case 2:
	        $id=htmlspecialchars($_GET['id']);
	        $result=mysqli_query($conn,"UPDATE `talk` SET `title`='$title' where `id`='$id'");
	        $result=mysqli_query($conn,"UPDATE `talk` SET `time`='$time' where `id`='$id'");
	        $result=mysqli_query($conn,"UPDATE `talk` SET `text`='$content' where `id`='$id'");
	        $result=mysqli_query($conn,"UPDATE `talk` SET `name`='$name' where `id`='$id'");
	        $result=mysqli_query($conn,"UPDATE `talk` SET `pic`='$pic' where `id`='$id'");
	        if($result){
		    echo "<script>alert('修改成功');location.href='../biao/talk.php';</script>";
	}
	       break;
}
}
?>