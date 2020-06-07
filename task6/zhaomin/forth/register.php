<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		 <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/public.css">
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/index.js"></script>
<style>
           
.user{
	width: 240px;
	height: 230px;
	background-color:white;
	padding-top:20px;
	margin: auto;
	font-family: "宋体";
	font-size: 15px;
	border:solid 1px gainsboro;
}
.u1{
	width:90% ;
	height:20px ;
	margin: 5px 5%;
	border:solid 1px gainsboro;
	background-color: whitesmoke;
}
h2{
	text-align: center;
}
.button1{
	width: 50%;
	height: 25px;
	margin-top:5px ;
	margin-left: 25%;
	background-color:#AEDD81;
	color: white;
	border: none;
	border-radius:7px 7px 7px 7px ;
}
.button2{
	width: 60%;
	height: 25px;
	margin-top:10px ;
	margin-bottom: 5px;
	margin-left: 20%;
	background-color:#AEDD81;
	color: white;
	border: none;
	border-radius:7px 7px 7px 7px;
}

</style>
	</head>
	<body>
		<form class="user" action="registeraction.php?action=user" method="post">
			<h2>welcome!</h2>
			<br />
			<input class="u1" placeholder="请输入用户名" type="text" name="username">
			
			<br />
			<input class="u1" placeholder="请输入密码" type="password" name="password">
			<br />
			<input class="u1" placeholder="重复你的密码" type="password" name="re_password" >
			<br />
			 <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                $add=isset($_GET["add"])?$_GET["add"]:"";
                                switch($err) {
                                    case 1:
                                    echo "用户名已存在！";
                                    break;
                                    case 2:
                                    echo "密码与重复密码不一致！";
                                    break;
                                    case 3:
                                    echo "注册成功！";
                                    break;
                                    case 4:
                                    echo "密码和用户名不能为空";
                                    break;
                                }
                                $add=isset($_GET["add"])?$_GET["add"]:"";
                                if($add==1){
                                	echo "<input class=\"button1\" type=\"submit\" value=\"添加\" name=\"user\">";
                                }else{
                                	echo "<input class=\"button1\" type=\"submit\" value=\"管理员注册\" name=\"user\">";
                                }
                
                            ?>
		<br />
			<a href="login.php" style='float: right;color: #acd372;font-size: 12px;font-weight:800;'>去登录</a>
			<a href='register2.php' style='float: left;color: #acd372;font-size: 12px;font-weight:800;'>超级管理员注册</a>
		</form>
	</body>
</html>
