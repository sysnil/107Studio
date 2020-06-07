<?php
$link=new mysqli('localhost','root','','test');
if($link->connect_errno)
{
	die('连接失败'.$link->connect_error);
}
$link->set_charset('utf8');
$act=$_GET['act'];
$url='manage.php';

switch ($act) {
	case 'adduser':
		$username=$_POST['username'];
		$username=$link->escape_string($username);
		$password=$_POST['password'];

		$sql="insert user(username,password) values ('$username','$password')";
		$res=$link->query($sql);
		if($res)
		{
			$mes="添加成功";
		}
		else
		{
			$mes="添加失败";
		}
		echo "<script type='text/javascript'>
				alert('{$mes}');
				location.href='{$url}';
			</script>";
		break;
	case 'deluser':
		$id=$_GET['id'];
		$sql="delete from user where id=".$id;
		$res=$link->query($sql);
		if($res)
		{
			$mes='删除成功';
		}
		else
		{
			$mes='删除失败';
		}
		 echo "<script type='text/javascript'>
			 alert('{$mes}');
			location.href='{$url}';
			 </script>";
		break;
	case 'edituser':
		$id=$_GET['id'];
		$username=$_POST['username'];
		$username=$link->escape_string($username);
		$password=$_POST['password'];

		$sql="update user set username='$username',age='$age',content='$password' where id=".$id;
		$res=$link->query($sql);
		if($res)
		{
			$mes='更新成功';
		}
		else
		{
			$mes='更新失败';
		}
		 echo "<script type='text/javascript'>
			 alert('{$mes}');
			location.href='{$url}';
			 </script>";
		break;
	case 'personedit':
		$username=$_POST['username'];
		$username=$link->escape_string($username);
		$password=$_POST['password'];

		$sql=" update user set username='$username',password='$password' where username='$username' and password ='$password' ";
		$res=$link->query($sql);
		if($res)
		{
			$mes='更新成功,重新登录';
		}
		else
		{
			$mes='更新失败';
		}
		$urlr='login.php';
		 echo "<script type='text/javascript'>
			 alert('{$mes}');
			location.href='{$urlr}';
			 </script>";

		break;
	}