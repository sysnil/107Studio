<?php
session_start();
$link=new mysqli('localhost','root','','test');
if($link->connect_errno)
{
	die('连接失败'.$link->connect_error);
}
$link->set_charset('utf8');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>document</title>
	</head>
	<body>
		<h2>编辑用户</h2>
		<form action="operation.php?act=personedit" method='post'>
			<table border="5" cellpadding="5" bgcolor="#abcdef" width="80%">
				<tr>
					<td>新用户名</td>
					<td><input type="text" name="username" value="<?php echo $_SESSION['username'];?>"></td>
				</tr>
				<tr>
					<td>新密码</td>
					<td><input type="text" name="password" value="<?php echo $_SESSION['password'];?>" ></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="编辑提交"></td>
				</tr>
			</table>
		</form>
	</body>
</html>