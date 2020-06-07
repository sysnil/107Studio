<?php
session_start();
$mysqli=new mysqli('localhost','root','','user');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$id=$_GET['id'];
$sql="SELECT id,username,password,sex,qq,email,phone,address FROM usertext WHERE id=".$id;
$mysqli_result=$mysqli->query($sql);
if($mysqli_result){
$row=$mysqli_result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>修改</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: #cceeff;
			font-family: kaiti;
			color: #0066ff;
		}
		table{
			border: thin solid #5599ff;
			margin-top: 50px;
			cursor: pointer;
			text-align: center;
			border-radius: 6px;
		}
		td{
			border:thin solid #5599ff;
		}
		img{
			width: 100%;
			height: 150px;
		}
		a{
			text-decoration: none;
		}
		#button{
			background: #5599ff;
			border: thin solid #5599ff;
			border-radius: 6px;
		}
		input{
			background: #cceeff;
			border: thin solid #cceeff;
			border-radius: 6px;
		}
	</style>
</head>
<body>
	<img src="../images/top-bj2.gif">
	<a href="domanage1.php">返回管理页面</a>
<center>	
<form action="update1.php?action=superuser&id=<?php echo $id;?>" method="post">
	<table>
		 
		        <tr>
					<td>用户名：</td>
					<td><input type="text" name="username" required="required" value="<?php echo $row['username']?>" id="username"></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input type="password" name="password" required="required" id="password" value="<?php echo $row['password']?>"></td>
				</tr>
				<tr>
					<td>性别：</td>
					<td>
						<input type="radio" name="sex" id="sex" value="man" readonly>男
						<input type="radio" name="sex" value="woman" readonly>女
					</td>
				</tr>
				<tr>
					<td>qq：</td>
					<td><input type="text" name="qq" required="required" value="<?php echo $row['qq']?>" id="qq"></td>
				</tr>
				<tr>
					<td>email：</td>
					<td><input type="email" name="email" required="required" value="<?php echo $row['email']?>" id="email"></td>
				</tr>
				<tr>
					<td>电话：</td>
					<td><input type="text" name="phone" required="required" value="<?php echo $row['phone']?>" id="phone"></td>
				</tr>
				<tr>
					<td>地址：</td>
					<td><input type="text" name="address" required="required" value="<?php echo $row['address']?>" id="address"></td>
				</tr>
				<tr>
			        <td colspan="2"><input type="submit" value="update" name="button" id="button"></td>
		        </tr>

	</table>
</form>
</center>
</body>
</html>