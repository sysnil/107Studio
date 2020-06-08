<?php
$mysqli=new mysqli("localhost","root","","test");
if($mysqli->connect_errno){
	die("CONNECT ERROR:".$mysqli->connect_error);
}
$sql="SELECT id,username FROM try";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
	while($row=$mysqli_result->fetch_assoc()){
		$rows[]=$row;
	}
}
//print_r($rows);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户信息表</title>
</head>
<body>
	<h2>用户列表-管理用户</h2>
	<table border="1" cellpadding="0" cellspacing="0" width="80%" bgcolor="#ABCDEF">
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>操作</td>
		</tr>

	<?php $i=1; foreach($rows as $row): ?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $row['username'];?></td>
		<td><a href="editUser.php?id=<?php echo $row['id'];?>">更新</a><a href="doAction.php?act=delete&id=<?php echo $row['id'];?>">删除</a></td>
	</tr>

	<?php $i++;endforeach; ?>

	</table>


</body>
</html>