<?php
$link=new mysqli('localhost','root','','newsdb');
if($link->connect_errno)
{
	die("连接失败，哈哈哈哈哈2333".$mysqli->connect_errno);
}
$link->set_charset('utf8');
$get=$_GET['act'];

switch ($get) {
	case 'addnews':
		$title=$_POST['title'];
		$author=$_POST['author'];
		$addtime=$_POST['addtime'];
		$content=$_POST['content'];
		$title=$link->escape_string($title);
		$author=$link->escape_string($author);
		$content=$link->escape_string($content);
		$url='newslist.php';
		$sql="insert newsboard(title,author,addtime,content) values ('$title','$author','$addtime','$content');";
		$res=$link->query($sql);
		if($res)
		{
			$mes='成功添加到数据库';
		}
		else
		{
			 $mes='没有添加到数据库';
			// echo 'error'.$link->errno.":".$link->error;
		}
		echo "<script type='text/javascript'>
			 alert('{$mes}');
			location.href='{$url}';
			 </script>";
		break;
	case 'delnews':
		$id=$_GET['id'];
		$url="newslist.php";
		$sql="delete from newsboard where id=".$id;
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
		break;
}