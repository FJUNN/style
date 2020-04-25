 <?php 
require '../common/init.php';
$tel=htmlspecialchars($_POST['tel']);
$email=htmlspecialchars($_POST['email']);
$result=mysqli_query($conn,"INSERT INTO `active` (`tel`,`email`) values ('$lianjie','$email')");
if($result){
echo "<script>alert('添加成功');location.href='../biao/user.php';</script>";
}