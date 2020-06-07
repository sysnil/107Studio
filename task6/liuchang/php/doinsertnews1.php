<?php
$title = isset($_POST['title']) ? $_POST['title'] : "";
$istop = isset($_POST['istop']) ? $_POST['istop'] : 0;
$content = isset($_POST['content']) ? $_POST['content'] : "";
$releasetime = isset($_POST['releasetime']) ? $_POST['releasetime'] : "";
    $conn = mysqli_connect("localhost", "root", "", "news"); //准备SQL语句,查询用户名
        $sql_insert = "INSERT INTO news1(title,content,releasetime,istop) 
VALUES('$title','$content','$releasetime','$istop')"; //执行SQL语句
        $sql_select = "SELECT title FROM news1 WHERE title = '$title'";
        $ret = mysqli_query($conn, $sql_select);
        $row = mysqli_fetch_array($ret); 
        mysqli_query($conn, $sql_insert);
        header("Location:insertnews1.php"); //关闭数据库
    mysqli_close($conn);
?>