<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../images/校徽.jpg" type="image/gif" >
		<title>个人信息</title>
		<link rel="stylesheet" href="../css/login.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/index.js"></script>
		<style type="text/css">
			.content{
				width: 70%;
				height: 500px;
				border: 1px solid #000000;
				border-radius: 10px;
				margin: 0 auto;
				margin-top: 50px;
			}
			.content .manage{
				width: 60%;
				height: 60%;
				//border: 1px solid #000;
				margin: 0 auto;
				margin-top: 50px;
			}	
			.content .manage li{
				margin: 0 auto;
				//width: 250px;
				height: 48px;
				text-align: center;
				padding-top: 18px;
				border: 2px solid #000000;
				margin-top: 30px;
				border-radius: 20px;
				font-size: 25px;
				cursor: pointer;
				//letter-spacing:20px;
			}
			.content .manage li:hover{
				transform: scale(1.1);
			}
			.content .manage p{
				margin: 0 auto;
				width: 100%;
				font-size: 40px;
				font-weight: bolder;
				letter-spacing:20px;
				color: red;
				margin-top: -50px;
				//margin-left: 130px;
			}
		</style>
	</head>
	<body style="width: 100%;min-width: 1200px;background:url(../images/back1.jpg)  no-repeat center center;
    background-size:cover;background-attachment:fixed;background-color:green;">
		<div class="operation">
		 	 <?php
		 	 	//error_reporting(E_ALL ^ E_NOTICE);
		 	 	$username = $_GET['username'];
		 	 	/*$id = $_GET['id'];
		 	 	$sql="select * from register where id = '$id'";
				$result=mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result1);*/
		 	  ?>
		 	 <div class="content">
		 	 	<div class="manage">
		 	 		<p>
		 	 			Welcome<?php  echo $username; ?> 
		 	 		</p>
		 	 		<a href="backstagecommon.php"><li>后台管理</li></a>
		 	 		<?php 
		 	 			echo "<a href='change_name.php?username=$username'><li>修改用户名</li></a>";
		 	 		?>
		 	 		<?php 
		 	 			echo "<a href='change_password.php?username=$username'><li>修改密码</li></a>";
		 	 		?>
		 	 		<a href="../index.php"><li>退出登录</li></a>
		 	 	</div>
		 	 </div>
		</div>
		<div class="footer" style="margin-top: -50px;">
			<br><br><br>
			<p>Copyright © 2019 河南大学党委统战部 技术支持<span>河南大学 </span><span>107网站工作室</span><span> 管理后台</span></p>
			<p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
		</div>
	</body>
</html>