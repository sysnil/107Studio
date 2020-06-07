<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../images/校徽.jpg" type="image/gif" >
		<title>登录</title>
		<link rel="stylesheet" href="../css/login.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/index.js"></script>
	</head>
	<body>
		<div class="login">
			<div class="title">
				<h1>后台管理系统</h1>
			</div>
			<form action="logincheck.php" method="post">
				<div class="username">
					<div class="left">
						<img src="../images/login.png">
					</div>
					<input type="text" name="username" placeholder="请输入用户名" id="username">
				</div>
				<div class="password">
					<div class="left">
						<img src="../images/login_password.png">
					</div>
					<input type="password" name="password" placeholder="请输入密码" id="password">
				</div>
				<div class="button">
					<input type="submit"  value ="立即登录" name="submit">
				</div>
				<div class="else">
					<ul>
						<li>
							<a href="#"><p>忘记密码</p></a>
						</li>
						<li>
							<a href="super_login.php"><p>超级管理员登录入口</p></a>
						</li>
						<li class="register">
							<a href="register.php"><p>立即注册</p></a>
						</li>
					</ul>
				</div>
			</form>
		</div>
		<div class="footer">
			<br><br><br>
			<p>Copyright © 2019 河南大学党委统战部 技术支持<span>河南大学 </span><span>107网站工作室</span><span> 管理后台</span></p>
			<p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
		</div>
	</body>
</html>