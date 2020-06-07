<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/17
 * Time: 17:54
 */
$id = $_GET['id'];
$conn=mysqli_connect('localhost','root','','user') or die("error connecting") ; //连接数据库

$sql ="select * from usertext where id= $id ;"; //SQL语句

$result = mysqli_query($conn,$sql); //查询

while($row = mysqli_fetch_array($result))
{
    $username=$row['username'];
    $password=$row['password'];
    $sex=$row['sex'];
    $qq=$row['qq'];
    $email=$row['email'];
    $phone=$row['phone'];
    $address=$row['address'];
}
?>
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>修改页面</title>
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
		input{
			background: #cceeff;
			border: thin solid #cceeff;
			border-radius: 6px;
    </style>
</head>
<body>
	<img src="../images/top-bj2.gif">
	<a href="login.php">返回登录页面</a>
	<center>
<form method="post" action="domyupdate.php?id=<?php echo $id ?>">
<table>
	<tr>
		<td>用户名</td>
		<td><input type="text" name='username' value=<?php echo  $username?>></td>
	</tr>
	<tr>
		<td>密码</td>
		<td><input type="password" name='password' value=<?php echo  $password?>></td>
	</tr>
	<tr>
		<td>性别</td>
		<td><input type="radio" name='sex' value="man">男<input type="radio" name='sex' value="woman">女</td>
	</tr>
	<tr>
		<td>qq</td>
		<td><input type="text" name='qq' value=<?php echo  $qq?>></td>
	</tr>
	<tr>
		<td>邮箱</td>
		<td><input type="email" name='email' value=<?php echo  $email?>></td>
	</tr>
	<tr>
		<td>电话</td>
		<td><input type="text" name='phone' value=<?php echo  $phone?>></td>
	</tr>
	<tr>
		<td>地址</td>
		<td><input type="text" name='address' value=<?php echo  $address?>></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"></td>
	</tr>
</table>
</form>
</center>
</body>
</html>