<?php
require '../common/init.php';
$id=htmlspecialchars($_GET['id']);
$del=mysqli_query($conn,"DELETE from `tiyu` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/tiyu.php';</script>";
}
?>