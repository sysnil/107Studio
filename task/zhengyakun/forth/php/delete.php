<?php
require_once("./link1.php");
$id=$_GET['id'];
$sql="delete from user where id=$id;";
$sql.="ALTER TABLE user AUTO_INCREMENT = 1;";
if(mysqli_multi_query($mysqli,$sql))
{

    echo"<h2>id={$id}的记录删除成功!</h2>";
    header("refresh:2;url=./index.php");
    die();
}else
{
    echo"<h2>id={$id}的记录删除失败!</h2>";
    header("refresh:3;url=./index.php");
    die();
}