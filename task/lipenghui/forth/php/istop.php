<?php
error_reporting(E_ALL^E_WARNING^E_NOTICE);
//（1）、 导入配置文件
	require("news/dbconfig.php");
//（2）、连接MySQL、并选择数据库
	require("common.php");
	$mysqli->set_charset('utf8');
	header('content-type:text/html;charset=gb2312');
//（3）、根据需要action值，来判断所属操作，执行对应的代码
    $k=$_GET['k'];
    $id=$_GET['id'];
	if($k==1||$k==-1){
	    $sql1="update news set flag=0";
	    $sql2="update news set flag=1 where id='{$id}'";
	}else{
	    $sql1="update xwsd set flag=0";
	    $sql2="update xwsd set flag=1 where id='{$id}'";
	}
	$mysqli->query($sql1);
	$mysqli->query($sql2);
	if($k>0)
	    $url='cuser.php';
	else
	    $url='userList.php';
	echo "<script type='text/javascript'>
            location.href='{$url}';
            </script>";
	$mysqli->close();
?>