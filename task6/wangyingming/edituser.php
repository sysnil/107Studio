<?php
$link=new mysqli('localhost','root','','test');
if($link->connect_errno)
{
	die('连接失败'.$link->connect_error);
}
$link->set_charset('utf8');
$id=$_GET['id'];
$sql="select * from user where id=".$id;
$res=$link->query($sql);
if($res){
	$row=$res->fetch_assoc();
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>document</title>
	</head>
	<body>
		<h2>编辑用户</h2>
		<form action="operation.php?act=edituser&id=<?php echo $id;?>" method='post'>
			<table border="5" cellpadding="5" bgcolor="#abcdef" width="80%">
				<tr>
					<td>用户名</td>
					<td><input type="text" name="username" value="<?php echo $row['username'];?>"></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="text" name="password" value="<?php echo$row['password'];?>" ></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="编辑提交"></td>
				</tr>
			</table>
		</form>
	</body>
</html>