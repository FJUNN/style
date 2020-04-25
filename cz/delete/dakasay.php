<?php
require '../common/init.php';
$id=htmlspecialchars($_GET['id']);
$del=mysqli_query($conn,"DELETE from `dakasay` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/dakasay.php';</script>";
}
?>