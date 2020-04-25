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
$lianjie=htmlspecialchars($_POST['pic']);
$text=htmlspecialchars($_POST['text']);
 switch ($type) {
    case 1:
    $result=mysqli_query($conn,"INSERT INTO `active` (`pic`,`text`) values ('$lianjie','$content')");
	if($result){
	echo "<script>alert('添加成功');location.href='../biao/active.php';</script>";
}	
      break;
    case 2:
      $id=htmlspecialchars($_GET['id']);
      $result=mysqli_query($conn,"UPDATE `active` SET `pic`='$lianjie' where `id`='$id'");
      $result=mysqli_query($conn,"UPDATE `active` SET `text`='$text' where `id`='$id'");
      if($result){
	  echo "<script>alert('修改成功');location.href='../biao/active.php';</script>";
}
      break;
  }
  
};

?>