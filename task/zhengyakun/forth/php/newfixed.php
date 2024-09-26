<?php
require_once("./link1.php");
$sql=" 
ALTER TABLE `newslist` DROP `id`;";
$sql.=" 
 
ALTER TABLE `newslist` ADD `id` int NOT
NULL FIRST;";
$sql.=" 
ALTER TABLE `newslist` MODIFY COLUMN `id` int NOT NULL AUTO_INCREMENT,ADD PRIMARY KEY(id);";
if(mysqli_multi_query($mysqli,$sql))
{
    echo "成功了";
}




?>