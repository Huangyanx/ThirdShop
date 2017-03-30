<!----------------- 头部------------------>
<?php include("views/header.php");?>
<!----------------- 头部end------------------>
	<link rel="stylesheet" type="text/css" href="css/login.css">
		<div class="container">
			<div class="headlink">
					<div class="row col-xs-6  current_link">
						<a href="" class="link-hover"><i class="fa fa-home"></i>首页</a>
						<span>/</span>
						<a href="" class="link-active">用户登陆</a>
						<h4 class="link-active">用户登陆</h4>
					</div>
			</div>
			<div class="container user_form">  
				<div class="col-lg-6 col-md-6 col-sm-12 right_form">
					<form class="login_user">
						<h4>已有账号</h4>
						<div class="user_div">
							<label>邮箱地址</label>
							<input type="email" name=""> 
							<label>输入密码</label>
							<input type="password" name=""> 
						</div>
						<div class="forgot_password">
							<a href="">忘记密码?</a>
						</div>
						<div class="btn_login">
							<button type="submit">
							<i class="fa fa-lock"></i>
								登陆
							</button>
						</div>
					</form>
				</div> 
				<div class="col-lg-6 col-md-6 col-sm-12  left_form">
					<form class="create_user">
						<h4>创建一个用户</h4>
						<p>请输入一个邮箱地址创建一个用户</p>
						<div class="user_div">
							<label>邮箱地址</label>
							<input type="email" name="">
						</div>
						<div class="btn_reg">
							<button type="submit">
							<i class="fa fa-user"></i>
								创建一个用户
							</button>
						</div>
					</form>
				</div> 
			</div> 
		</div>
 
<!---------------------底部----------------------->
<?php include("views/footer.php");?>
 
 