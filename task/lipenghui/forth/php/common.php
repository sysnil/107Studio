
<?php
header('content-type:text/html;charset=UTF-8');
error_reporting(E_ALL^E_WARNING^E_NOTICE);
$mysqli=new mysqli('localhost','root','lph20020220','test');
if($mysqli->connect_errno){
    die($mysqli->connect_error);
}
$mysqli->set_charset('utf8');
?>