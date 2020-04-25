<?php
require '../common/mail/sendmail.php';

header("content-type:text/html;charset=utf-8");
//接受email
$email=htmlspecialchars($_POST['email']);
// 发送目的地
$to=$email;
// 生成6位数验证码
$rand=rand(000000,999999);
// $_SESSION['token']=$rand;
echo "<script>var true_token=".$rand."</script>";

//发送标题
$title='验证码';

//发送内容
$content= '您的邮箱账号'.$to.',</br>
           验证码为'.$rand.'</br>';

//开始发送
$res = sendmail($to,$title,$content);

if($res) {
	echo "
	<script>
	var token=prompt('你的邮箱已经收到验证码，请您输入验证码激活账号');
	if(token){
		if(token!=true_token){
			alert('验证错误');

		}
		else{
		    alert('验证正确');
		    location.href='../yan.html';	
		}
			}
	</script>";
}else {

    echo '403';//发送失败
}
?>