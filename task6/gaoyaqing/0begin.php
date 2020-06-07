<?php
header('content-type:text/html;charset=utf-8');
$link=mysqli_connect('localhost','root','123456','user');
//print_r($mysqli);
//打开指定数据库
if(mysqli_connect_errno()){
	exit(mysql_connect_error());
}
mysqli_set_charset($link, 'utf8');
//选择特定的数据库
mysqli_select_db($link, 'user');


//公共信息配置

//数据库配置信息
define("HOST","localhost");	//主机名
define("USER","root");		//账号
define("PASS","root");		//密码
define("DBNAME","newsdb");	//数据库名


?>





