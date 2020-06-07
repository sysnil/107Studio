<?php
include ('conn.php');
if(!isset($_POST['submit'])){
	exit('非法访问');
}
header("Content-Type: text/html;charset=utf-8");
$username = $_POST['username'];
$password = $_POST['password'];
$pwd = $_POST['pwd'];

//注册信息判断
if (!preg_match('/^[\w\x80-\xff]{3,15}$/',$username)) {
	echo "<script>alert('错误：用户名不符合规定。');location= 'register.php' </script>";
	die();

}
/*if (strlen($password<6)) {
	echo "<script>alert('错误：密码长度不符合规定。')</script>";
	exit();
}*/
if($password == $pwd){//检查密码是否相同
	$che = mysqli_query($conn,"select username form register where username= '$username' limit 1");
	//判断用户名是否存在
	if (mysqli_fetch_array($che)) {
		echo "<script>alert('该用户名已存在，请重新输入！');location= 'register.php'</script>";
	}
//写入数据
	$sql = "INSERT INTO register(username,password,pwd) VALUES('$username','$password','$pwd')";
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('注册成功！正在跳转到登录页面。。。');location= 'login.php'</script>";
	}else{
		echo "<script>alert('对不起，注册失败！')</script>";
	}
}else{
	echo "<script>alert('密码不一致，请重试');location= 'register.php';</script>";
}

mysqli_close($conn);

?>