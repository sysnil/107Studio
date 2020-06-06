<?php 
//获得一个四位随机验证码
$string="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
$code='';
for($i=0;$i<4;$i++){
    $code.='<span>'.$string{mt_rand(0,strlen($string)-1)}.'</span>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="../css/register_login.css"/>
	<title>注册</title>
	</head>
<body>
	<div class="left_img">
		<img src="../images/firefox_left.png" width="100%"/>
	</div>
    <div id='register_content'>
    	<div class="title"><h2>欢迎注册成为107网站会员</h2></div>
    	<form class="form" method="post" action="regAction.php">
    		<label class="input-placeholder"><input type='text' name='name' id="username" class="username" placeholder="请输入用户名" /></label><span>*用户名最大长度为12,最小为3</span><br/>
    		<label class="input-placeholder"><input type='password' name='pw' id="password" class="password" placeholder="请输入密码" /></label><span>*密码不超过15个字符，最小为6，不能为空</span><br/>
    		<label class="input-placeholder"><input type='password' name='confirm_pw' id="password1" class="password1" placeholder="再次输入密码" /></label><span>*再次输入密码</span><br/>
    		<label class="input-placeholder"><input type='text' name='vcode' placeholder="请输入对应验证码" /></label><span>*请输入对应验证码:<?php echo $code;?></span><br/>
    		<input type="hidden" name='vcode1' value='<?php echo strip_tags($code);?>'/> 
    	    <div style="clear:both;"></div>
    	    <div class="register_option">
    	    	<input type="submit" value="立即注册" class="j_register" data-tj-key="b_register_click"/>
    	    </div>
    	</form>
    </div>
    <div class="right_img">
    	<img src="../images/firefox_right.png" width="100%"/>
    </div>
</body>
</html>