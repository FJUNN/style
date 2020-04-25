<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>美食网</title>	
	<script type="text/javascript" src="js/lunbo.js"></script>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="d0">
<!--logo栏开始-->
	<div class="logo">
	    <div class="logo_left"></div>
		<a href="#"><img src="images/logo.jpg" height="80px"></a>
		<a href="#"><img src="images/logo2.jpg" height="35px"></a>
		<a href="#"><img src="images/logo1.jpg" height="80px"></a>
		<a href="#"><img src="images/logo3.jpg" height="35px"></a>
	</div>
<!--logo栏结束-->

<!--导航栏开始-->
	<div class="list">
		<a href="#">首页</a>
		<a href="#">中餐</a>
		<a href="#">西餐</a>
		<a href="#">饮品</a>
		<a href="#">小吃</a>
		<a href="#">水果</a>
		<a href="#">其他</a>
	</div>
<!--导航栏结束-->

<!--轮播开始-->
				
	<div class="lunbo">
		<div class="lunbo_box_1">
			<ul>
				<li>
					<img src="images/1.jpg" alt=""></img>
					<h2>好恰</h2>
				</li>
				<li>
					<img src="images/2.jpg" alt=""></img>
					<h2>好恰</h2>
				</li>
				<li>
					<img src="images/3.jpg" alt=""></img>
					<h2>好恰</h2>
				</li>
				<li>
					<img src="images/4.png" alt=""></img>
					<h2>好恰</h2>
				</li>
				<li>
					<img src="images/5.jpg" alt=""></img>
					<h2>好恰</h2>
				</li>
			</ul>
		</div>
		<div class="lunbo_box_2">
			<ul>
			</ul>
		</div>
		<div class="lunbo_box_3">
			<span class="prev"> < </span>
			<span class="next"> > </span>
		</div>
	</div>
<!--轮播结束-->
<?php 
require './common/init.php';
$result=mysqli_query($conn,"SELECT * from `food`"); 



?>

<!--左边栏开始-->
	<div class="news_left">
	<hr/>
		<div class="news_left_logo">
			<a href="#"><img src="images/mslogo.jpg"></a>
		</div>
		<hr/>
		<ul>
			<?php
			$result=mysqli_query($conn,"SELECT * from `food`");
			$data=mysqli_fetch_array($result);
		do{
			?>
			<li class="clearfix"><a href="#">&nbsp <?php echo $data['mcontent'];?></a><span><?php echo $data['date'];?>&nbsp</span></li>
		<?php
		}while($data=mysqli_fetch_array($result));
						//mysqli_free_result($data);
						//mysqli_close($conn);
		?>
		</ul>
		<hr/>

		
	</div>
<!--左边栏结束-->

<!--右边栏开始-->
	<div class="news_right">
	    <div class="news_right_logo">
			<a href="#"><img src="images/yslogo.jpg"></a>
		</div>
		<hr/>
		<ul>
			
				<?php
			$result=mysqli_query($conn,"SELECT * from `food`");
			$data=mysqli_fetch_array($result);
		do{?>
				<li class="clearfix">
				<a href="#">&nbsp <?php echo $data['ycontent'];?></a><span><?php echo $data['date'];?>&nbsp</span>	</li><?php
		}while($data=mysqli_fetch_array($result));
						//mysqli_free_result($data);
						//mysqli_close($conn);
		?>
			
		</ul>
		<hr/>
		
	</div>
<!--右边栏结束-->

<!--菜单栏开始-->
	<div class="menu">
		<a href="#">菜品展示</a>
	</div>
<!--菜单栏结束-->

<!--菜单展示开始-->
	<div class="menu_shop">
		<table>
			<tr>
				<td>
					<a href="#"><img src="images/menu1.jpg"></a>
				</td>
				<td>
					<a href="#"><img src="images/menu2.jpg"></a>
				</td>
				<td>
					<a href="#"><img src="images/menu3.jpg"></a>
				</td>
				<td>
					<a href="#"><img src="images/menu4.jpg"></a>
				</td>
			</tr>
			<tr>
			<?php
			$result=mysqli_query($conn,"SELECT * from `food`");
			$data=mysqli_fetch_array($result);
		do{?>
			
				<td>
					<a href="#"><?php echo $data['ccontent'];?></a>
				</td>
			
			<?php
		}while($data=mysqli_fetch_array($result));
			?>
			</tr>
			<tr>
				<td>
					<a href="#"><img src="images/menu5.jpg"></a>
				</td>
				<td>
					<a href="#"><img src="images/menu6.jpg"></a>
				</td>
				<td>
					<a href="#"><img src="images/menu7.jpg"></a>
				</td>
				<td>
					<a href="#"><img src="images/menu8.jpg"></a>
				</td>
			</tr>
			<tr>
			<?php
			$result=mysqli_query($conn,"SELECT * from `foods`");
			$data=mysqli_fetch_array($result);
		do{?>
			
				<td>
					<a href="#"><?php echo $data['ccontent'];?></a>
				</td>
			
			<?php
		}while($data=mysqli_fetch_array($result));
			?>
			</tr>
			
		</table>
	</div>
<!--菜单展示开始-->
<br/>
<hr/>
<!--结束栏开始-->
	<div id="d1">
		<a style="margin-left: 150px" href="#">美食天下 - 让吃更美好！</a>
		<br/>
		<a href="#">关于我们</a> - 
		<a href="#">联系我们</a> - 
		<a href="#">加入我们</a> - 
		<a href="#">服务声明</a> - 
		<a href="#">友情链接</a> - 
		<a href="#">网站地图</a> - 
		<a href="#">移动应用</a>
	</div>
<!--结束栏结束-->

</div>

</body>
</html>