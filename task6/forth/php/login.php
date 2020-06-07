<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<meta charset="utf-8" http-equiv="content-type">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: #cceeff;
			font-family: kaiti;
		}
		.content{
			height: 350px;
			width: 250px;
			border: thin solid #00bbff;
			border-radius: 8px;
			margin:30px auto;
		}
		.middle form table tr td{
			padding-top: 15px;
		}
		#login{
			border: thin solid #00bbff;
			border-radius: 6px;
			height: 30px;
			width: 40px;
			background: #00bbff;
			color: white;
		}
		#reset{
			border: thin solid #00bbff;
			border-radius: 6px;
			height: 30px;
			width: 40px;
			background: #00bbff;
			color: white;
		}
		img{
			width: 100%;
			height: 150px;
		}
	</style>
</head>
<body>
	<img src="../images/top-bj2.gif">
	<div class="content" align="center">
		<div class="header">
			<h2>登录</h2>
		</div>
		<div class="middle">
			<form action="loginaction.php" method="post" id="loginform">
				<table>
				<tr>
					<td>分级：</td>
					<td>
						<input type="radio" name="grade" value="superuser" id="grade">超级
						<input type="radio" name="grade" value="user">普通
					</td>
				</tr>
					<tr>
						<td>用户名：</td>
						<td><input type="text" name="username" id="name" required="required" placeholder="请输入用户名" style="border: thin solid black;border-radius: 6px;border: thin solid #00bbff" value="<?php
							echo isset($_COOIKE[""]) ? $_CCOKIE[""] : ""; ?>">
						</td>
					</tr>
					<tr>
						<td>密码：</td>
						<td><input type="password" name="password" id="password" placeholder="请输入密码" style="border: thin solid black;border-radius: 6px; border: thin solid #00bbff"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="checkbox" name="remember"><small>记住信息</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<?php
							$err=isset($_GET["err"]) ? $_GET["err"] : "";
							switch($err){
							case 1:
							echo "用户名或密码错误";
							break;
							case 2:
							echo "用户名户密码不能为空";
							break;
						}
						?>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="login" id="login" value="登录">
							<input type="reset" name="reset" value="重置" id="reset">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">没有账号，<a href="register.php">去注册</a></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<img src="../images/top-bj2.gif">
</body>
</html>