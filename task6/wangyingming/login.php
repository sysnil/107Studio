<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>登录</title>
		<style type="text/css">
			* {
				padding: 0px;
				border: 0px;
			}

			form {
				width: 40%;
				height: 60%;
				position: absolute;
				top: 20%;
				left: 30%;
			}

			body {
				background-color: lightblue;
				font-size: 30px;
			}

			form {
				background-color: ghostwhite;
			}

			p {
				width: 100%;
				margin-top: 50px;
				text-align: center;
			}

			input {
				width: 60%;
				height: 40px;
				margin: 20px 15%;
				border: 2px solid black;
				border-radius: 10px;
				outline: none;
			}

			a {
				text-decoration: none;
				color: lightblue;
			}
		</style>
	</head>
	<body>
		<form action="judge.php?act=login" method="post">
			<center>
				<p>登录你的账号</p>
				<p style="margin-top: 15px;font-size: 15px;">没有账号？&nbsp;&nbsp;&nbsp;点击这里<a href="register.php"><b>注册</b></a>一个</p>
				<input type="text" name="username" placeholder="请输入账户名称">
				<input type="password" name="password" placeholder="请输入密码">
				<input type="submit" value="登录" style="background-color: green;color: white;">
			</center>
		</form>
	</body>
</html>
