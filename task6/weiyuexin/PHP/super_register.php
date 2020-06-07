<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../images/校徽.jpg" type="image/gif" >
		<title>注册</title>
		<link rel="stylesheet" href="../css/register.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/index.js"></script>
	</head>
	<body>
		<div class="login">
			<div class="title">
				<h1>超级管理员</h1>
			</div>
			<form action="super_regcheck.php" method="post">
				<div class="username">
					<div class="left">
						<img src="../images/login.png">
					</div>
					<input type="text" name="username" placeholder="请输入用户名">
				</div>
				<div class="password">
					<div class="left">
						<img src="../images/login_password.png">
					</div>
					<input type="password" name="password" placeholder="请输入密码">
				</div>
				<div class="pwd">
					<div class="left">
						<img src="../images/login_password.png">
					</div>
					<input type="password" name="pwd" placeholder="请重新输入以确认密码">
				</div>
				<div class="button">
					<input type="submit"  value ="立即注册" name="submit" id="btn">
				</div>
				<div class="else">
					<a href="register.php">普通管理员注册</a>
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