<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
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
						<ul>
							<li class="on" style="box-sizing: initial;-webkit-box-sizing: initial;">大咖说管理</li>
							<li class="" style="box-sizing: initial;-webkit-box-sizing: initial;">添加说说</li>
						</ul>
					</div>
					<div class="bd">
						<ul style="display: block;padding: 20px;">
							<li>
								<!--分页显示角色信息 start-->
								<div id="dv1">
									<table class="table" id="tbRecord">
										<thead>
											<tr>
												
												<th>图片路径</th>
												<th>姓名</th>
												<th>内容</th>
												<th>编辑</th>
												<th>删除</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											require '../common/init.php';
											$result=mysqli_query($conn,"SELECT * from `dakasay`");
											while($date=mysqli_fetch_assoc($result)){?>
											
											<tr>
												<td><?php echo $date['pic']; ?></td>
												<td><?php echo $date['name']; ?></td>
												<td><?php echo $date['fabiao']; ?></td>
												<td class="edit"><button onclick="btn_edit(1)"><i class="icon-edit bigger-120"></i><a href="../edit/dakasay.php?id=<?=$date['id']?>">编辑</a></button></td>
												<td class="delete"><button onclick="btn_delete(1)"><i class="icon-trash bigger-120"></i><a href="../delete/dakasay.php?id=<?=$date['id']?>">删除</a></button></td>
											</tr>
										
										
										<?php }
										
										?>
										
										
							
										</tbody>


									</table>
								</div>
								<!--分页显示角色信息 end-->
							</li>
						</ul>
						<ul class="theme-popbod dform" style="display: none;">
							<div class="am-cf admin-main" style="padding-top: 0px;">
								<!-- content start -->

								<div class="am-cf admin-main" style="padding-top: 0px;">
									<!-- content start -->
									<div class="admin-content">
										<div class="admin-content-body">

											<div class="am-g">
												<div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">

												</div>
												<div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4" style="padding-top: 30px;">
													<form class="am-form am-form-horizontal" action="../htchuli/dakasay.php" method="post">


														<div class="am-form-group">
															<input type="hidden" name="type" value="1">
															<label for="name" class="am-u-sm-3 am-form-label">
														图片路径</label>
															<div class="am-u-sm-9">
																<input type="text" id="name" required placeholder="图片" name="pic">
															</div>
														</div>
														<div class="am-form-group">
															<label for="name" class="am-u-sm-3 am-form-label">
														姓名</label>
															<div class="am-u-sm-9">
																<input type="text" id="name" required placeholder="大咖姓名" name="name">
															</div>
														</div>
														<div class="am-form-group">
															<label for="user-intro" class="am-u-sm-3 am-form-label">
														内容</label>
															<div class="am-u-sm-9">
																<textarea class="" rows="5" id="user-intro" name="fabiao" placeholder="输入内容"></textarea>

															</div>
														</div>
														<div class="am-form-group">
															<div class="am-u-sm-9 am-u-sm-push-3">
																<input type="submit" class="am-btn am-btn-success" value="添加说说" />
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
										<footer class="admin-content-footer">
											<hr>
											<p class="am-padding-left"></p>
										</footer>
									</div>
									<!-- content end -->
								</div>
								<!--添加 end-->
						</ul>
						</div>
					</div>
					<!--tab end-->

				</div>

				<script src="../js/jquery-1.7.2.min.js" type="text/javascript"></script>
              <script src="../js/plugs/Jqueryplugs.js" type="text/javascript"></script>
              <script src="../js/_layout.js"></script>
             <script src="../js/plugs/jquery.SuperSlide.source.js"></script>
				<script>
					var num = 1;
					$(function() {

						$(".tabs").slide({ trigger: "click" });

					});

					var btn_save = function() {
						var pic = $("#RawMaterialsTypePageId  option:selected").val();
						var name = $("#RawMaterialsTypeName").val();
						var fabiao = $("#RawMaterialsTypeDescription").val();
						
						$.ajax({
							type: "post",
							url: "../ht/dakasay.php",
							data: { name: name, pic: pic, fabiao: fabiao },
							success: function(data) {
								if(data > 0) {
									$.jq_Alert({
										message: "添加成功",
										btnOktext: "确认",
										dialogModal: true,
										btnOkClick: function() {
											//$("#RawMaterialsTypeName").val("");
											//$("#RawMaterialsTypeDescription").val("");
											//$("#Ramark").val("");                           
											//page1();
											location.reload();

										}
									});
								}
							}
						});
						alert(t);
					}

					var btn_edit = function(id) {
						$.jq_Panel({
							url: "../edit/dakasay.html?id=" + id,
							title: "编辑分类",
							dialogModal: true,
							iframeWidth: 500,
							iframeHeight: 400
						});
					}
					var btn_delete = function(id) {
						$.jq_Confirm({
							message: "您确定要删除吗?",
							btnOkClick: function() {
							
							}
						});
					}
				</script>

			</div>
	</body>

</html>