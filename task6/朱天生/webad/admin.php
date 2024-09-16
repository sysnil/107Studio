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
$adname=$_SESSION['adminname'];
$mysqli->set_charset('utf-8');
$sql="SELECT*FROM aduser1 WHERE adname='$adname'";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result){
$user=$mysqli_result->fetch_assoc();
}

$sql = "select * from news1 order by addtime desc";
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
		<title>管理界面</title>
	</head>
	<body>
		<h3>你好,管理员<?php echo $adname?></h3>
		<a href="editAdmin1.php?id=<?php echo $user['id'];?>">修改用户信息</a>
		<a href="exit.php">退出登录</a>
		<a href="addnews.php">添加新闻</a>
		<table border="1" cellspacing="0" cellpadding="0" width="80%">
		<tr>
			<td>id</td>
			<td>标题</td>
			<td>创建时间</td>
			<td>操作</td>
		</tr>
		<?php foreach($rows as $row):?>
			<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['title'];?></td>
			<td><?php echo date("Y-m-d h:i:s",$row['addtime']);?></td>
			<td><a href="doAction.php?act=intop&id=<?php echo $row['id'];?>">置顶</a>|<a href="doAction.php?act=outtop&id=<?php echo $row['id'];?>">取消置顶</a>|<a href="doAction.php?act=delnew&id=<?php echo $row['id'];?>">删除</a>|<a href="editnew.php?id=<?php echo $row['id'];?>">修改内容</a></td>
		</tr>
		<?php endforeach;?>
	</table>
	</body>
</html>