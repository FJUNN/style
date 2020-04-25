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
$content=htmlspecialchars($_POST['content']);
 switch ($type) {
    case 1:
    $result=mysqli_query($conn,"INSERT INTO `yuer` (`lianjie`,`content`) values ('$lianjie','$content')");
	if($result){
	echo "<script>alert('添加成功');location.href='../biao/yuer.php';</script>";
}else{
  echo 'no link' .mysqli_error($conn);
}
      break;
    case 2:
      $id=htmlspecialchars($_GET['id']);
      $result=mysqli_query($conn,"UPDATE `yuer` SET `lianjie`='$lianjie' where `id`='$id'");
      $result=mysqli_query($conn,"UPDATE `yuer` SET `content`='$text' where `id`='$id'");
      if($result){
	  echo "<script>alert('修改成功');location.href='../biao/yuer.php';</script>";
}
      break;
  }
  
};