<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="/commission/Public/jquery-1.11.1.min.js"></script>
		<script src="/commission/Public/bootstrap/js/bootstrap.min.js"></script>
		<link href="/commission/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
		<title>登陆页面</title>
	</head>
	<body background="/commission/Public/img/bg.gif" leftMargin=0 topMargin=0 marginheight="0" marginwidth="0">
	<!-- <body style="background-color: #0060c0"> -->
		<div class="container">
			<div style="padding-top: 80px" align="center" valign="middle">
				<div align="center">
					<table style="BORDER-BOTTOM: #ecfafb 6px solid; BORDER-LEFT: #ecfafb 6px solid; BORDER-TOP: #ecfafb 6px solid; BORDER-RIGHT: #ecfafb 6px solid" border=0 cellSpacing=0 cellPadding=0 width=700  height=380>
						<tr>
							<td style="FILTER: alpha(opacity=80); LINE-HEIGHT: 200%; MARGIN-TOP: 0px; FONT-FAMILY: 微软雅黑; MARGIN-BOTTOM: 0px; COLOR: #ffffff; FONT-SIZE: 24pt; FONT-WEIGHT: bold" 
    bgColor=#005a8f height=120 align=middle>提成管理系统</td>
						</tr>
						<tr>
							<td style="FILTER: Alpha(opacity=50); BACKGROUND: #1f79ae" height=55 align=middle>
								<table style="POSITION: relative"border=0 cellSpacing=0 cellPadding=4 width="100%">
      								<tbody>
      									<tr>
      										<div class="input-group form-group" style="width: 50%;margin-top: 5px">
      											 <span class="input-group-addon" style="cursor: pointer;"><i class="glyphicon glyphicon-user "></i></span> 
												 <input type="text" id="user_name" class="form-control" style="margin-top: 0px" placeholder="请输入账号">
							  					 <!-- <span class="input-group-addon" style="cursor: pointer">
							  						<i class="glyphicon glyphicon-remove "></i>
							  					 </span> -->
							  				</div>
							  				<div class="input-group form-group" style="width: 50%">
							  					<span class=" input-group-addon" style="cursor: pointer"><i class="glyphicon glyphicon-lock"></i></span>
							  					<input type="password" id="user_pwd" class="form-control" style="margin-top: 0px" placeholder="请输入密码"/>
							  					<!-- <span class="input-group-addon" style="cursor: pointer">
							  						<i class="glyphicon glyphicon-remove"></i>
							  					</span> -->
							  				</div>
							  				<div class="alert alert-danger" role="alert" style="display: none" id="login_error_area">
												  <button type="button" class="close" id=login_error_btn><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												  <span id="login_error">
												  	  
												  </span>
												</div>
											<div class="form-group col-sm-offset-3" style="width: 50%">
												<span style="float: left;width: 22%">
													<button id= "submit" class="btn btn-primary">登陆</button>
												</span>
												<span style="float: left;width: 22%">
													<button id="reset" class="btn btn-primary">重置</button>
												</span>
											</div>
      									</tr>
      								</tbody>
      				            </table>
							</td>
						</tr>
						<tr>
							<td>
								<img src="/commission/Public/img/loginimg.jpg" />
							</td>
						</tr>
					</table>
				</div>
			</div>
			
		</div>
	</body>
</html>
<script>
	$(function(){
		$(".glyphicon-remove").click(function(){
			$(this).prev().val("");
		});
		$("#reset").click(function(){
			$("#user_name").val("");
			$("#user_pwd").val("");
		});
		$("#login_error_btn").click(function(){
			$(this).parent().hide();
		});
		$("#submit").click(function(){
			var user_name = $("#user_name").val();
			var user_pwd = $("#user_pwd").val();
			if(user_name == "" || user_pwd ==""){
				$("#login_error").html("账号或密码不能为空！");
				$("#login_error_area").show();
			}else{
				$.post("/commission/index.php/Home/Index/checkLogin",{
				"user_name" : user_name,
				"user_pwd" : user_pwd,
				},function(data){
					if(data.status == "success"){
						// console.log("success");
						window.location.href = "/commission/index.php/Home/Index/loadHomePage";
					}else if(data.status == "failure"){
						var content = data.content;
						$("#login_error").html(content);
						$("#login_error_area").show();
					}
				});
			}
		});
		$(document).keydown(function(event){ 
			if(event.keyCode==13){ 
				$("#login_error_area").hide();
				$("#submit").click(); 
			} 
		}); 
		
	});
</script>