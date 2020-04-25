<?php
require '../common/init.php';
function name($name){
	switch ($name) {
		case '1':
			$del=mysqli_query($conn,"DELETE from `active` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/active.php';</script>";
}
		break;
	    case '2':
			$del=mysqli_query($conn,"DELETE from `ailu` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/ailu.php';</script>";
}
		break;
		case '3':
			$del=mysqli_query($conn,"DELETE from `aimei` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/aimei.php';</script>";
}
		break;
		case '4':
			$del=mysqli_query($conn,"DELETE from `aishe` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/aisheying.php';</script>";
}
		break;
		case '5':
			$del=mysqli_query($conn,"DELETE from `dakasay` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/dakasay.php';</script>";
}
		break;
		case '6':
			$del=mysqli_query($conn,"DELETE from `dahua` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/dhls.php';</script>";
}
		break;
		case '7':
			$del=mysqli_query($conn,"DELETE from `everyday` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/everyday.php';</script>";
}
		break;	
		case '8':
			$del=mysqli_query($conn,"DELETE from `jujiao` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/hod.php';</script>";
}
		break;
		case '9':
			$del=mysqli_query($conn,"DELETE from `talk` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/talk.php';</script>";
}
		break;
		case '10':
			$del=mysqli_query($conn,"DELETE from `tiyu` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/tiyu.php';</script>";
}
		break;
		case '11':
			$del=mysqli_query($conn,"DELETE from `todaypm` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/todaypm.php';</script>";
}
		break;
		case '12':
			$del=mysqli_query($conn,"DELETE from `user` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/user.php';</script>";
}
		break;
		case '13':
			$del=mysqli_query($conn,"DELETE from `xingzuo` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/xingzuo.php';</script>";
}
		break;
		case '14':
			$del=mysqli_query($conn,"DELETE from `yuer` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/yuer.php';</script>";
}
		break;
		case '15':
			$del=mysqli_query($conn,"DELETE from `yule` where `id`='$id'");
if($del){
	echo "<script>alert('删除成功');location.href='../biao/yuleka.php';</script>";
}
		break;
		default:
			if(!$del){
	echo "<script>alert('删除失败');</script>";
}
			break;
	}


}



$id=htmlspecialchars($_GET['id']);






?>