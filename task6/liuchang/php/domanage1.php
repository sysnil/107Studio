
<?php
session_start();
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','user');
if($mysqli->connect_errno){
	die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$sql="SELECT id,username,password,sex,qq,email,phone,address FROM usertext";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
	while($row=$mysqli_result->fetch_assoc()){
		$rows[]=$row;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>用户信息</title>
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
	</style>
</head>
<body>
	<img src="../images/top-bj2.gif">
	<a href="login.php">返回登录页面</a>
	<center>
<form>
	<table>
		<tr>
			<td>序号</td>
			<td>用户名</td>
			<td>密码</td>
			<td>性别</td>
			<td>qq</td>
			<td>邮箱</td>
			<td>电话</td>
			<td>地址</td>
			<td>操作</td>
		</tr>
		<?php $i=1; foreach($rows as $row):?>
			<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['sex'];?></td>
			<td><?php echo $row['qq'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><a href="delete.php?action=deleteuser&id=<?php echo $row['id'];?>">删除</a>|<a href="update.php?id=<?php echo $row['id'];?>">修改</a></td>
		</tr>
		<?php $i++; endforeach;?>
		<a href="insert.php">添加新用户</a>
	</table>
</form>
</center>
</body>
</html>