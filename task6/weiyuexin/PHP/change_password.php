<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../images/校徽.jpg" type="image/gif" >
		<title>更改管理员密码</title>
		<link rel="stylesheet" href="../css/login.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/index.js"></script>
	</head>
	<body>
		<div class="login">
			<?php
			$username = $_GET['username'];
			 
			 
			?>
			<div class="title">
				<h1 style="font-size: 22px;">更改管理员密码</h1>
			</div>
			<form action="change_passwordcheck.php" method="post">
				<input type="hidden" name="username" value="<?php  echo $username ; ?>">
				<div class="password">
					<input type="text" name="password1" placeholder="请输入原密码" id="password1">
				</div>
				<div class="username">
					<input type="text" name="password2" placeholder="请输入新密码" id="username">
				</div>
				<div class="button">
					<input type="submit"  value ="确认更改" name="submit">
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