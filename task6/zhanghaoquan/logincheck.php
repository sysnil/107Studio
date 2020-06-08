<?php
header("Content-Type: text/html;charset=utf-8");

session_start();
$link = mysqli_connect('localhost','root','123456');
if($link){
    $select = mysqli_select_db($link,'user_login');
    if($select){
        if(isset($_POST['login'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $_SESSION['user']=$user;
            if(($user == '')||($pass=='')){
                echo "用户名或密码输入为空，请重新输入！";
                exit;
            }
            $sql_select = "select username,password from user where username = '$user'";
            mysqli_query($link,'SET NAMES UTF8');
            $ret = mysqli_query($link,$sql_select);
            $row = mysqli_fetch_array($ret); 
            if($user == $row['username']&&$pass == $row['password']){
                header("location:loginsucc.php");
            }else{
                header("location:loginfatal.php");
            }
        }
    }
    mysqli_close($link);
}else{
    die();
}

?>
