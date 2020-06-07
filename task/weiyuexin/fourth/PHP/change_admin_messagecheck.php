<?php
//连接数据库
header("Content-Type: text/html;charset=utf-8");
include ('conn.php');
 

//获取要更改的用户名
$username = $_POST['username'];
$id=$_POST['id'];
 
//修改管理员信息
//$sql2 = "update register set username='{$username}' where id={$_GET['id']}";
$sql="update register set username='$username' where id='$id'";
$result=mysqli_query($conn,$sql);
echo "<script>aleat('管理员信息更新成功！！！')</script>";
header("Location:backstage.php");
if($result){
	echo "<script>aleat('管理员信息更新成功！！！');location= 'manage_admins.php'</script>";
}
//关闭数据库
mysqli_close($conn);
?>