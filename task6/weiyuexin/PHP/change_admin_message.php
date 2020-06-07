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
			<?php
				//连接数据库
				include ('conn.php');

				 //从数据库获取用户信息
				$sql = "select * from register where id={$_GET['id']}";
				$result = mysqli_query($conn,$sql);
				 
				 //判断是否获取用户信息
				if($result){
					$admin=mysqli_fetch_assoc($result);//解析出要修改的信息
				}else{
					die("没有找到该用户！");
				}
			?>
			<div class="title">
				<h1>后台管理系统</h1>
			</div>
			<form action="change_admin_messagecheck.php" method="post">
				<div class="password" style="border: none;margin: 0 auto;">
					<h2 style="text-align: center;">更改管理员昵称</h2>
				</div>
				<input type="hidden" name="id" value="<?php echo $admin['id']?>" >
				<div class="username">
					<input type="text" name="username" placeholder="请输入您想要改成的管理员昵称" id="username">
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