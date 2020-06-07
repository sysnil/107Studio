<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>注册</title>
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
				background-color: cadetblue;
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
		<form action="judge.php?act=register" method="post">
			<center>
				<p>注册你的一个新账号</p>
				<input type="text" name="username" placeholder="请输入账户名称">
				<input type="password" name="password" placeholder="请输入密码">
				<input type="password" name="repeat" placeholder="请再次输入密码">
				<input type="submit" value="注册" style="background-color: green;color: white;">
			</center>
		</form>
	</body>
</html>
