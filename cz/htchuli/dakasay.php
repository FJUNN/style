<?php 
header("content-type:text/html;charset=utf-8");
$type=htmlspecialchars($_POST['type']);
if($type==1){
	type(1);
}
if($type==2){
	type(2);
}
//存在类型时处理函数
function type($type){
require '../common/init.php';
$pic=htmlspecialchars($_POST['pic']);
$name=htmlspecialchars($_POST['name']);
$content=htmlspecialchars($_POST['fabiao']);

  switch ($type) {
    case 1:
      $result=mysqli_query($conn,"INSERT INTO `dakasay` (`pic`,`fabiao`,`name`) values ('$pic','$content','$name')");
      if($result){
      echo "<script>alert('添加成功');location.href='../biao/dakasay.php';</script>";
}
      break;
    case 2:
      $id=htmlspecialchars($_GET['id']);
      $result=mysqli_query($conn,"UPDATE `dakasay` SET `name`='$name' where `id`='$id'");
      $result=mysqli_query($conn,"UPDATE `dakasay` SET `fabiao`='$content' where `id`='$id'");
      $result=mysqli_query($conn,"UPDATE `dakasay` SET   `pic`='$pic' where `id`='$id'");
      if($result){
      echo "<script>alert('修改成功');location.href='../biao/dakasay.php';</script>";
}
      break;
  }
  
};

?>