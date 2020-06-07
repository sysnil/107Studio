<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../images/校徽.jpg" type="image/gif" >
		<title>删除管理员</title>
		<link rel="stylesheet" href="../css/login.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/index.js"></script>
	</head>
	<body>
		<div class="login">
			<div class="title">
				<h1>后台管理系统</h1>
			</div>
			<form action="delete_usercheck.php" method="post">
				<div class="password" style="border: none;margin: 0 auto;">
					<h2 style="text-align: center;">删除管理员</h2>
				</div>
				<div class="username">
					<input type="text" name="username" placeholder="请输入要删除的管理员名" id="username">
				</div>
				<div class="button">
					<input type="submit"  value ="删除该管理员" name="submit">
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