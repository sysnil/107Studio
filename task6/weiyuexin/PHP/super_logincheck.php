<?php

header("Content-Type: text/html;charset=utf-8");
include('conn.php');

if(!isset($_POST['submit'])){
	exit('非法访问');
}

$username = $_POST['username'];
$password = $_POST['password'];
//检查用户名以及密码是否正确
$che = "select username,password from super_register where username = '$username' and password = '$password'";
$chee = mysqli_query($conn,$che);

if (!$che) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$result = mysqli_fetch_array($chee);
/*print_r($result);*/

if($result){
	//登录成功跳转
	echo "<script>alert('登录成功！！！');location= 'index_super_admin.php?username=$username'</script>";
	//header("Location:index_super_admin.php?username=$username");
}else{
	//header("Location:super_login.php");
	echo "<script>alert('密码错误登录失败！！！');location= 'super_login.php'</script>";
}
//关闭数据库
mysqli_close($conn);


?>