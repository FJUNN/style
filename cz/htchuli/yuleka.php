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
$text=htmlspecialchars($_POST['content']);
 switch ($type) {
    case 1:
    $result=mysqli_query($conn,"INSERT INTO `yule` (`lianjie`,`content`) values ('$lianjie','$text')");
	if($result){
	echo "<script>alert('添加成功');location.href='../biao/yuleka.php';</script>";
}	
      break;
    case 2:
      $id=htmlspecialchars($_GET['id']);
      $result=mysqli_query($conn,"UPDATE `yule` SET `lianjie`='$lianjie' where `id`='$id'");
      $result=mysqli_query($conn,"UPDATE `yule` SET `content`='$text' where `id`='$id'");
      if($result){
	  echo "<script>alert('修改成功');location.href='../biao/yuleka.php';</script>";
}
      break;
  }
  
};