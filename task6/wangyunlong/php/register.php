<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户注册</title>
	<style type="text/css">
	body{
		background-image: url("bg-i.jpg");
	}
	.register_box{
		width: 404px;
		margin: 120px auto;
		border:1px solid #e5e5e5;
		border-radius: 4px;
		height: 360px;
		position: relative;
		overflow: hidden;
	}
	.register{
		position: absolute;
		width: 320px;
		left: 0;
		top: 0;
		padding:42px 42px 36px;
	}
	.reButton{
		height: 40px;
		width: 305px;
		color: #fff;
		margin-top: 30px;
		margin-bottom: 30px;
		border-radius: 10px;
		background-color: #0074e8;
		cursor: pointer;
	}
	.reInput{
		height: 40px;
		width: 300px;
		border-radius: 5px;
		border:1px solid #e5e5e5;
		font-size: 17px;
		margin-top: 20px;
	}
	.reTitle{
		font-size: 25px;
		text-align: center;
		margin:0;
		padding: 0;
	}
	</style>
</head>
<body>
	<form action="doAction.php?act=register" method="post">	
		<div class="register_box">
			<div class="register">
				<p class="reTitle">注册</p>
				<input type="text" name="username" placeholder="请输入用户名" required="required" class="reInput">
				<input type="password" name="password" placeholder="请输入密码" required="required" class="reInput">
				<input type="password" name="psw" placeholder="请再次输入密码" required="required" class="reInput">
				<input type="submit" value="注册" class="reButton">
			</div>
		</div>
		
	</form>
</body>
</html>