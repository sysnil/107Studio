<?php
    //接受用户的数据
    //1.id
    $id = $_POST['id'];
    //2.密码
    $password = $_POST['password'];
    //3.简单验证
    if ($id == "1000" && $password == "123") {
        //合法，跳转到erpManager.php
        header("Location: erpManager.php");
        exit();
    }else{
        //非法
        header("Location: login.php?error=1&id=$id&password=$password");
        exit();
    }
?>