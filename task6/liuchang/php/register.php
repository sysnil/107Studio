<!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<meta charset="utf-8" http-equiv="content-type">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: #cceeff;
			font-family: kaiti;
		}
		img{
			width: 100%;
			height: 150px;
		}
		.content{
			height: 520px;
			width: 300px;
			border: thin solid #00bbff;
			border-radius: 8px;
			margin:30px auto;
		}
		.middle form table tr td{
			padding-top: 15px;
		}
		#register{
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
		input{
			border-radius: 6px;
			border:thin solid #00bbff;
		}
	</style>
</head>
<body>
	<img src="../images/top-bj2.gif">
	<div class="content" align="center">
		<div class="header">
			<h2>注册</h2>
		</div>
		<div class="middle">
			<form action="registeraction.php" method="post">
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
					<td><input type="text" name="username" required="required" placeholder="请输入用户名" id="username"></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input type="password" name="password" required="required" placeholder="请输入密码" id="password"></td>
				</tr>
				<tr>
					<td>确认密码：</td>
					<td><input type="password" name="repassword" required="required" placeholder="请再次输入密码" id="repassword"></td>
				</tr>
				<tr>
					<td>性别：</td>
					<td>
						<input type="radio" name="sex" value="man" id="sex">男
						<input type="radio" name="sex" value="woman">女
					</td>
				</tr>
				<tr>
					<td>qq：</td>
					<td><input type="text" name="qq" required="required" placeholder="请输入qq号" id="qq"></td>
				</tr>
				<tr>
					<td>email：</td>
					<td><input type="email" name="email" required="required" placeholder="请输入邮箱" id="email"></td>
				</tr>
				<tr>
					<td>电话：</td>
					<td><input type="text" name="phone" required="required" placeholder="请输入手机号" id="phone"></td>
				</tr>
				<tr>
					<td>地址：</td>
					<td><input type="text" name="address" required="required" placeholder="请输入地址" id="address"></td>
				</tr>
				<tr>
					<td align="center" colspan="2">
				<?php
				$err=isset($_GET["err"]) ? $_GET["err"] : "";
				switch($err){
				case 1:
				echo "用户名已存在";
				break;
				case 2:
				echo "密码与确认密码不一致";
				break;
				case 3:
				echo "注册成功，点击去登录吧！";
				break;
			}
			?>
			       </td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" name="register" id="register" value="注册">
						<input type="reset" name="reset" id="reset" value="重置">
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2">已有账号，<a href="login.php">去登录</a></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
<img src="../images/top-bj2.gif">
</body>
</html>