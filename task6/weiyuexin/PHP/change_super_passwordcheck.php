<?php
//连接数据库
header("Content-Type: text/html;charset=utf-8");
include ('conn.php');
 

//获取要更改的用户名
$username = $_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
 
//验证管理员
$sql1 = "select * from super_register where username = '$username'";
$result1=mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($result1);
if($password1==$row['password']){
	$sql2="update super_register set password='$password2' where username='$username'";
    $result2=mysqli_query($conn,$sql2);
    echo "<script>alert('密码更改成功,请重新登录！！！');location= 'super_login.php'</script>";
}

//修改管理员信息
//$sql2 = "update register set username='{$username}' where id={$_GET['id']}";
/*$sql="update super_register set password='$password2' pwd='$password2' where username='$username'";
$result=mysqli_query($conn,$sql);

header("Location:../index.php");
if($result){
	echo "<script>aleat('管理员信息更新成功！！！');location= 'manage_admins.php'</script>";
}*/
//关闭数据库
mysqli_close($conn);
?>