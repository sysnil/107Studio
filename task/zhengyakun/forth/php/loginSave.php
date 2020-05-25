<?php
$username=$_POST['username'];
require_once("./link1.php");
session_start();
if(isset($_POST['token']) && $_POST['token']==$_SESSION['token'])
{
    $password=md5($_POST['password']);
    $verify=$_POST['verify'];
    if(strtolower($verify)!= $_SESSION['captcha'])
    {
        echo "<script>alert('你输入的验证码不一致')</script>";
        header("refresh:1;url=/login01.php");
        die();
    }





    $sql="SELECT * FROM user WHERE username='$username';";
    $sql_pass="select * from user where password='$password';";
    $sql_id="SELECT id from user where username='$username' and password='$password';";
    $id=mysqli_query($mysqli,$sql_id);
    $idresult=mysqli_fetch_assoc($id);
    $result=mysqli_query($mysqli,$sql);
    $resultpas=mysqli_query($mysqli,$sql_pass);
    $pasrecords=mysqli_num_rows($resultpas);

    $records=mysqli_num_rows($result);
    if($records && $pasrecords)
    {
       
        $_SESSION['username']=$username;
    
      header("location:./index.php");
    }
    else{
        echo"<h2>用户名或密码不正确!</h2>";
        header("refresh:3;url=./login01.php");
        die();
    }
    
    


}
else{
    header("location:./login01.php");
}
?>