<?php
$username=$_POST['username'];
require_once("./link1.php");
session_start();
if(isset($_POST['token']) && $_POST['token']==$_SESSION['token'])
{
    $password=md5($_POST['password']);
    $email=$_POST['email'];
    $verify=$_POST['verify'];
    if(strtolower($verify)!= $_SESSION['captcha'])
    {
        echo "<script>alert('你输入的验证码不一致')</script>";
        header("refresh:1;url=/register.php");
        die();
    }
    $sql="insert into user(username,password,email) values('$username','$password','$email');";
    if(mysqli_query($mysqli,$sql))
    {
        echo"<h2>用户添加成功!</h2>";
        header("refresh:2;url=./index.php");
        die();
    }else
    {
        echo"<h2>用户添加失败!</h2>";
        header("refresh:3;url=./index.php");
        die();
    }
}
else{
    header("location:./register.php");
}
