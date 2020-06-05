<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			*{
				padding: 0;border: 0;
			}
			body{
				background-color: darkslategray;
			}
			.box{
				width: 600px;height: 500px;
				background-color: black;
				border-radius: 30px;
				margin: auto;
			}
			.box>.title{
				color: white;
				font-family: 幼圆;
				text-align: center;
				padding-top: 50px;
			}
			.box>input{
				width: 400px;height: 50px;
				border-radius: 10px;
				margin-top: 40px;
				margin-left: 100px;
				text-indent: 30px;
				font-size: 16px;
			}
			a{
				color: white;
				text-align: center;
				text-decoration: none;
				border: noe;
			}
		</style>
		<meta charset="utf-8" />
		<title>登录页面</title>
	</head>
	<body>
		<form action="doACtion.php?act=adlogin" method="post">
			<div class="box">
				<h2 class="title">统战部网站管理系统超级管理员登录</h2>
				<input type="text" name="adname" id="username" value="" placeholder="请输入用户名" required="required" />
				<input type="password" name="psd" id="password" value="" placeholder="请输入密码" required="required" />
				<input type="submit" name="" id="login" value="login" style="text-indent: 0;background-color: #01acb7;"/>
				<a><p>没有账号？</p></a><a href="choose.php"><p>去注册</p></a>
			</div>
		</form> 
	</body>
</html>