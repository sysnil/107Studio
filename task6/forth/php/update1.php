<?php
session_start();
$id=$_GET['id'];
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','user');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf-8');

$username=$_POST['username'];
$password=$_POST['password'];
$sex=$_POST['sex'];
$qq=$_POST['qq'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql="UPDATE usertext SET username='$username',password='$password',sex='$sex',qq='$qq',email='$email',phone='$phone',address='$address' WHERE id=".$id;
		$res=$mysqli->query($sql);
		if($res){
		$mes='修改成功';
	}else{
		$mes='修改失败';
	}
	$url='domanage1.php';
	echo "<script type='text/javascript'>
		alert('{$mes}');
		location.href='{$url}';
		</script>";
		exit;