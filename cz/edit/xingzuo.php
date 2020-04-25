<html>
<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" />
		<link rel="stylesheet" href="../css/Site.css" />
		<link rel="stylesheet" href="../css/zy.all.css" />
		<link rel="stylesheet" href="../css/font-awesome.min.css" />
		<link rel="stylesheet" href="../css/amazeui.min.css" />
		<link rel="stylesheet" href="../css/admin.css" />
</head>
	<body>
		<div class="dvcontent">

			<div>
				<!--tab start-->
				<div class="tabs">
					<div class="hd">
						<ul style="">
							<!-- <li style="box-sizing: initial;-webkit-box-sizing: initial;" class="on">娱乐咖</li> -->
							<li class="" style="box-sizing: initial;-webkit-box-sizing: initial;">修改</li>
						</ul>
					</div>
					<div class="bd">
						<ul style="display: block;padding: 20px;">
							<li>
								<!--分页显示角色信息 start-->
								<div id="dv1">
									<div class="am-cf admin-main" style="padding-top: 0px;">
		<!-- content start -->
		<div class="admin-content">
			<div class="admin-content-body">
				
				<div class="am-g">
					<div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
						
					</div>
					<div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4"
						style="padding-top: 30px;">
						<?php 
							 require '../common/init.php';
							 
							 $id=htmlspecialchars($_GET['id']);
							 $result=mysqli_query($conn,"SELECT * from `xingzuo` where `id`='$id'");
							 $date=mysqli_fetch_assoc($result);
						?>
							<form class="am-form am-form-horizontal" action="../htchuli/xingzuo.php?id=<?=$date['id']?>" method="post">
							<div class="am-form-group">
								<input type="hidden" name="type" value="2">
								<label for="user-intro" class="am-u-sm-3 am-form-label">
									链接</label>
									<div class="am-u-sm-9">
									<input type="text" name="lianjie" id="questionBankName" value="<?php echo $date['lianjie'];?>"></br>
								    </div>

								<label for="user-intro" class="am-u-sm-3 am-form-label">
									内容</label>
								<div class="am-u-sm-9">
								<textarea class="" rows="5" id="user-intro questionBankName" name="content"> <?php echo $date['content'];?></textarea>

								</div>
							</div>
							<div class="am-form-group">
								<div class="am-u-sm-9 am-u-sm-push-3">
									<input type="submit" class="am-btn am-btn-success" value="修改" />
								</div>
							</div>
						</form>
								</div>
								</div>
								</div>
								</div>
								</div>
								<!--分页显示角色信息 end-->
							</li>
						</ul>

</div>
</body>
<script language="javascript">
var textobj=document.getElementById('questionBankName');
textobj.innerHTML=textobj.name;
</script>
</html>