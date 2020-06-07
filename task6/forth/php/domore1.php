<?php
session_start();
header('content-type:text/html;charset=utf-8');
//接受页面
$mysqli=new mysqli('localhost','root','','admins');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$id=$_GET['id'];
$id=$_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$addtime = time();