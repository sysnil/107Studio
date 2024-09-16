<?php
session_start();
$mysqli=new mysqli('localhost','root','','admins');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$id=$_GET['id'];
$sql="SELECT id,adname,psd,phonenumber FROM aduser1 WHERE id=".$id;
$mysqli_result=$mysqli->query($sql);
if($mysqli_result){
$row=$mysqli_result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>document</title>
</head>
<body>
<h2>编辑用户</h2>
<form action="doAction.php?act=editUser&id=<?php echo $id;?>"method='post'>
	<table border="1" cellpadding="0" cellspacing="0"  width="80%">
		<tr>
			<td>用户名</td>
			<td><input type="text" name="adname" value="<?php echo $row['adname'];?>" required="required"></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type="password" name="psd" placeholder="请输入密码" required="required"></td>
		</tr>
		<tr>
			<td>电话号码</td>
			<td><input type="number" name="phonenumber"  value="<?php echo $row['phonenumber'];?>" required="required"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="更新数据" name=""></td>
		</tr>
	</table>
</form>
</body>
</html>