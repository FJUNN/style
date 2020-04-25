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
	$lianjie=htmlspecialchars($_POST['lianjie']);
	//$pm=htmlspecialchars($_POST['pm']);
	$title=htmlspecialchars($_POST['title']);
	$title1=htmlspecialchars($_POST['title1']);
	$title2=htmlspecialchars($_POST['title2']);
	$text=htmlspecialchars($_POST['text']);
	switch ($type) {
		    case 1:
			$result=mysqli_query($conn,"INSERT INTO `jujiao` (`lianjie`,`title`,`title1`,`title2`,`text`) values ('$lianjie','$title','$title1','$title2','$text')");
			
			 if($result){
					    echo "<script>alert('添加成功');location.href='../biao/hod.php';</script>";
			}
			break;	
			case 2:
			$id=htmlspecialchars($_GET['id']);
			$result=mysqli_query($conn,"UPDATE `jujiao` SET `lianjie`='$lianjie' where `id`='$id'");
			$result=mysqli_query($conn,"UPDATE `jujiao` SET `title`='$title' where `id`='$id'");
	        $result=mysqli_query($conn,"UPDATE `jujiao` SET `title1`='$title1' where `id`='$id'");
	        $result=mysqli_query($conn,"UPDATE `jujiao` SET `title2`='$title2' where `id`='$id'");
	        $result=mysqli_query($conn,"UPDATE `jujiao` SET `text`='$text' where `id`='$id'");
	      
	        if($result){
					    echo "<script>alert('修改成功');location.href='../biao/hod.php';</script>";
			}
			break;


	}
}
?>