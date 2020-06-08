<?php
$mysqli=new mysqli('localhost','root','','test');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$id=$_GET['id'];
$sql="SELECT username,password FROM try WHERE id=".$id;
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result>0){
	$row=$mysqli_result->fetch_assoc();
}
//print_r($row);
echo "success run";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户编辑</title>
</head>
<body>
	<h2>编辑用户</h2>
	<form action="doAction.php?act=editUser&id=<?php echo $id;?>" method="post">	
		<input type="text" name="username" placeholder="请输入新的用户名" value="<?php echo $row['username'];?>" required="required">
		<input type="password" name="password" placeholder="请输入新的密码" required="required">
		<input type="submit" value="编辑完成">
	</form>
</body>
</html>