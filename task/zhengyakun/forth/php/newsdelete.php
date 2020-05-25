<?php
require_once("./link1.php");
$id=$_GET['id'];
$sql="delete from newslist where id=$id;";
$sql.=" 
ALTER TABLE `newslist` DROP `id`;";
$sql.=" 
 
ALTER TABLE `newslist` ADD `id` int NOT
NULL FIRST;";
$sql.=" 
ALTER TABLE `newslist` MODIFY COLUMN `id` int NOT NULL AUTO_INCREMENT,ADD PRIMARY KEY(id);";


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