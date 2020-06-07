<?php 
include_once 'tool.inc.php';
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$link=connect();
if(!is_manage_login($link)){
    header('Location:Login.php');
}
session_unset(); //Free all session variables;
session_destroy(); //销毁一个会话中的全部数据
setcookie(session_name(),'',time()-3306,'/'); //销毁保存在客户端的卡号（session id）
?>