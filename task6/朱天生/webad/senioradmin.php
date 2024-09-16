
<?php
session_start();
if(!isset($_SESSION['login'])){
	echo "<script type='text/javascript'>
		alert('请登陆后访问！');
		location.href='login.php';
		</script>";
}
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','admins');
if($mysqli->connect_errno){
	die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$sql="SELECT id,adname,psd,phonenumber FROM aduser1";
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
		<meta charset="utf-8">
		<title>超级管理界面</title>
	</head>
	<body>
		<h3>你好,超级管理员<?php echo $_SESSION['senioradminname']?></h3>
	<table border="1" cellspacing="0" cellpadding="0" width="80%">
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>电话号码</td>
			<td>操作</td>
		</tr>
		<?php $i=1; foreach($rows as $row):?>
			<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['adname'];?></td>
			<td><?php echo $row['phonenumber'];?></td>
			<td><a href="doAction.php?act=delUser&id=<?php echo $row['id'];?>">删除</a>|<a href="editAdmin.php?id=<?php echo $row['id'];?>">修改资料</a></td>
		</tr>
		<?php $i++; endforeach;?>
	</table>
		<a href="exit.php">退出登录</a>
	</body>
</html>