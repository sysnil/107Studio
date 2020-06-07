<?php
// session_start();

header('content-type:text/html;charset=utf-8');
$link=new mysqli('localhost','root','','test');
if($link->connect_errno)
{
	die("连接失败，哈哈哈哈哈2333".$mysqli->connect_errno);
}

$link->set_charset('utf8');
$username=$_POST['username'];
$username=$link->escape_string($username);
$password=$_POST['password'];
$password=$link->escape_string($password);
$act=$_GET['act'];

 switch($act){
 	case 'login':
 	$urlr='login.php';
 	$url='start.php';
 	$manage='manage.php';
 		if(empty($username))
 		{
 			$mes='用户名不能为空';
 			echo "<script type='text/javascript'>
			 alert('{$mes}');
			 location.href='{$urlr}';
			 </script>";
			 die();
 		}
 		if (empty($password)) {
 			$mes='密码不能为空';
 			echo "<script type='text/javascript'>
			 alert('{$mes}');
			 location.href='{$urlr}';
			 </script>";
			 die();
 		}

 		if($username=='admin' and $password=='admin')
 		{
 			echo "<script>
 				location.href='{$manage}';
 			</script>";
 			die();
 		}

 		$sql="select * from user where username ='$username' and password ='$password' ";
 		$res=$link->query($sql);
 		$number = mysqli_num_rows($res);
 		if($number)
		{
			// $_SESSION['username']=$_POST['username'];
			// $_SESSION['password']=$_POST['password'];
			echo "<script type='text/javascript'>
			location.href='{$url}';
			 </script>";
		}
		else
		{
			$mes="用户名或密码错误";
			echo "<script type='text/javascript'>
			alert('{$mes}');
			location.href='{$urlr}';
			 </script>" ;
		}
		$res->free();
		$link->close();
 		break;
 	case 'register':
 		$repeat=$_POST['repeat'];
 		$url='login.php';
 		$urll='register.php';
 		if(empty($username))
 		{
 			
 			$mes='用户名不能为空';
 			echo "<script type='text/javascript'>
			 alert('{$mes}');
			 location.href='{$urll}';
			 </script>";
			 die();
 		}
 		if (empty($password)) {
 			$mes='密码不能为空';
 			echo "<script type='text/javascript'>
			 alert('{$mes}');
			 location.href='{$urll}';
			 </script>";
			 die();
 		}

 		if($repeat != $password)
 		{
 			$mes="两次密码不一致，请重新输入";
 			echo "<script type='text/javascript'>
			 alert('{$mes}');
			 location.href='{$urll}';
			 </script>";
			 die();
 		}
 		$sql="insert user(username,password) values ('$username','$password')";
 		$res=$link->query($sql);
 		if($res)
		{
			$mes="注册成功，去登录吧！";
		}
		else
		{
			$mes="注册失败，刷新试试吧！";
		}
		 echo "<script type='text/javascript'>
			 alert('{$mes}');
			location.href='{$url}';
			 </script>";
			 $link->close();
 		break;
}