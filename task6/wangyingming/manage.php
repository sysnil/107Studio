<?php
header('content-type:text/html;charset=utf-8');
$link=new mysqli('localhost','root','','test');
if($link->connect_errno)
{
	die("连接失败，哈哈哈哈哈2333".$mysqli->connect_errno);
}
$link->set_charset('utf8');
$sql="select * from user";
$res=$link->query($sql);
if($res)
{
	while($row=$res->fetch_assoc()){
		$rows[]=$row;
	}
}
//print_r($rows);
//var_dump($rows);
$res->free();
//释放结果集
$link->close();
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>document</title>
		<style type="text/css">
			a{
				text-decoration: none;
				color: blue;
			}
		</style>
	</head>
	<body>
		<h2>管理员管理用户列表-<a href="adduser.php">管理之增加用户</a></h2>
		<table  border="1" width="80%" cellpadding="0" bgcolor="#abcdef" >
			<tr>
				<td>编号</td>
				<td>用户名</td>
				<td>密码</td>
				<td>操作</td>
			</tr>
			<?php $i=1;foreach($rows as $row):?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['username'];?></td>
				<td><?php echo $row['password'];?></td>
				<td><a href="edituser.php?id=<?php echo $row['id'];?>">更新用户</a>|<a href="operation.php?act=deluser&id=<?php echo $row['id'];?>">删除用户</a></td>
			</tr>
			<?php $i++;endforeach;?>
		</table>
	</body>
</html>