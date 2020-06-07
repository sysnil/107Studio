<?php
//连接数据库
header("Content-Type: text/html;charset=utf-8");
include ('conn.php');
 

//获取要更改的用户名
$username  = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
 
//验证管理员
$sql1 = "select * from register where username = '$username'";
$result1=mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($result1);

if($password1==$row['password']){
	$sql2="update register set password='$password2' where username='$username'";
    $result2=mysqli_query($conn,$sql2);
    echo "<script>alert('密码更改成功,请重新登录！！！');location= 'login.php'</script>";
}else{
	echo "<script>alert('原密码不正确，请重新输入！！！');location= 'change_password.php?username =$username'</script>";
}
//修改管理员信息
//$sql2 = "update register set username='{$username}' where id={$_GET['id']}";
/*$sql2="update register set password='$password2' where username='$username'";
$result2=mysqli_query($conn,$sql2);*/

//header("Location:../index.php");
//关闭数据库
mysqli_close($conn);
?>