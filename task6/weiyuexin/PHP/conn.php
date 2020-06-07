<?php
//连接数据库
$conn = @mysqli_connect("localhost","root","655602");
//检查连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"text") or die("您要选择的数据库不存在");
mysqli_query($conn,"set names utf8");

?>