<?php 
session_start();
//验证后台管理员是否登录
function connect(){
    $mysqli=@new mysqli('localhost','root','air0729.','test');
    if($mysqli->connect_errno){
        die('Connect Error:'.$mysqli->connect_error);
    }
    mysqli_set_charset($mysqli,'utf8');
    return $mysqli;
}
function is_manage_login($mysqli){
    if(isset($_SESSION['manage']['username']) && isset($_SESSION['manage']['password'])){
        $check="SELECT * FROM users WHERE username='{$_SESSION['manage']['username']}' and sha1(password)='{$_SESSION['manage']['password']}';";
        $res=$mysqli->query($check);
        if(mysqli_num_rows($res)){
            return true;
        }else{
            return false;        }
    }else{
        return false;
    }
}
?>