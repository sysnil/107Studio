<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录</title>
	<style type="text/css">
	body{
		background-image: url("bg-i.jpg");
	}
	.login_box{
		width: 404px;
		margin: 120px auto;
		border:1px solid #e5e5e5;
		border-radius: 4px;
		height: 360px;
		position: relative;
		overflow: hidden;
	}
	.login{
		position: absolute;
		width: 320px;
		left: 0;
		top: 0;
		padding:42px 42px 36px;

	}
	.login_title{
		font-size: 25px;
		text-align: center;
		margin:0;
		padding: 0;
	}
	.inputStyle{
		height: 40px;
		width: 300px;
		border-radius: 5px;
		border:1px solid #e5e5e5;
		font-size: 17px;
		margin-top: 20px;
	}
	.loginStyle{
		height: 40px;
		width: 305px;
		color: #fff;
		margin-top: 30px;
		margin-bottom: 30px;
		border-radius: 10px;
		background-color: #0074e8;
		cursor: pointer;
	}
	.signUp{
		font-size: 13px;
		color: #000;
	}
	.signupButton{
		text-decoration: none;
		color: #6DA628;

	}

	</style>
</head>
<body>
	<div class="login_box">
		<div class="login">
			<form action="doAction.php?act=check" method="post">	
				<p class="login_title">登录</p>
				<input type="username" name="username" placeholder="    请输入用户名" class="inputStyle">
				<input type="password" name="password" placeholder="    请输入密码" class="inputStyle">
				<input type="submit" name="submitButton" value="登录" class="loginStyle">
				<p class="signup">没有账号？<a href="register.php" class="signupButton">
				去注册</a></p>
			</form>
		</div>
	</div>
</body>
</html>