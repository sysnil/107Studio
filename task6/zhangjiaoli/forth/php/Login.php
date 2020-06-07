<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="../css/register_login.css"/>
	<title>登录</title>
	</head>
<body>
	<div class="left_img">
		<img src="../images/firefox_left.png" width="100%"/>
	</div>
	<div id="login_content">
		<div class="title"><h2>欢迎登录107网站</h2></div>
		<form class="form1" method="post" action="loginAction.php">
			<label class="input-placeholder"><input type='text' name='login_name' id="username" class="username" placeholder="请输入用户名" /></label><br/>
			<label class="input-placeholder"><input type='password' name='login_pw' id="password" class="password" placeholder="请输入密码" /></label><br/>
			<div style="clear:both;"></div>
    	    <div class="login_option">
    	    	<input type="submit" value="立即登录" class="j_login" data-tj-key="b_login_click"/>
    	    </div>
    	    <label>还没有账号？<a href="register.php">立即注册</a></label>
		</form>
	</div>
	<div class="right_img">
    	<img src="../images/firefox_right.png" width="100%"/>
    </div>
</body>
</html>