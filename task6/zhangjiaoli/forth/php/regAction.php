<?php 
header('content-type:text/html;charset=utf-8');
$mysqli=@new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('Connect Error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
//接收用户名
$username=$_POST['name'];
//接收密码
$password=$_POST['pw'];
//接收第二次输入的密码
$password1=$_POST['confirm_pw'];
//接收验证码
$verify=$_POST['vcode'];
$verify1=$_POST['vcode1'];
$redirectUrl='<a href="register.php">重新注册</a>';
//检测用户名的合法性
$userlen=strlen($username);
if($userlen>12||$userlen<3){
    exit('用户名长度不符合规范<br/>'.$redirectUrl);
}
//检验密码
$pwdlen=strlen($password);
if($pwdlen==0){
    exit('密码不能为空<br/>'.$redirectUrl);
}
if($pwdlen<6||$pwdlen>15){
    exit('用户名长度不符合规范<br/>'.$redirectUrl);
}
//检测密码是否一致
if(strcmp($password,$password1)!==0){
    exit('两次密码不一致<br/>'.$redirectUrl);
}
//检验验证码
if($verify!==$verify1){
    exit('验证码错误<br/>'.$redirectUrl);
}
$password = md5($password); //对密码加密
echo "注册成功！<br/>".'<a href="Login.php">请登录</a>';
$sql="Insert users(username,password) values('{$username}','{$password}');";
$res=$mysqli->query($sql);
if(!($res)){
    echo "ERROR".$mysqli->errno.":".$mysqli->error;
}
mysqli_close($mysqli);
?>