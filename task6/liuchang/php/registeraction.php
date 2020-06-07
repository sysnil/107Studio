<?php
$grade = isset($_POST['grade']) ? $_POST['grade'] : "";
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : "";
$sex = isset($_POST['sex']) ? $_POST['sex'] : "";
$qq = isset($_POST['qq']) ? $_POST['qq'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$phone = isset($_POST['phone']) ? $_POST['phone'] : "";
$address = isset($_POST['address']) ? $_POST['address'] : "";
if($grade == superuser)
{
    if ($password == $repassword) { //建立连接
    $conn = mysqli_connect("localhost", "root", "", "user"); //准备SQL语句,查询用户名
    $sql_select = "SELECT username FROM superuser WHERE username = '$username'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($ret); //判断用户名是否已存在
    if ($username == $row['username']) { //用户名已存在，显示提示信息
        header("Location:register.php?err=1");
    } else { //用户名不存在，插入数据 //准备SQL语句
        $sql_insert = "INSERT INTO superuser(grade,username,password,sex,qq,email,phone,address) 
VALUES('$grade','$username','$password','$sex','$qq','$email','$phone','$address')"; //执行SQL语句
        mysqli_query($conn, $sql_insert);
        header("Location:register.php?err=3");
    } //关闭数据库
    mysqli_close($conn);
} else {
    header("Location:register.php?err=2");
} 
}else{
    if ($password == $repassword) { //建立连接
    $conn = mysqli_connect("localhost", "root", "", "user"); //准备SQL语句,查询用户名
    $sql_select = "SELECT username FROM usertext WHERE username = '$username'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($ret); //判断用户名是否已存在
    if ($username == $row['username']) { //用户名已存在，显示提示信息
        header("Location:register.php?err=1");
    } else { //用户名不存在，插入数据 //准备SQL语句
        $sql_insert = "INSERT INTO usertext(grade,username,password,sex,qq,email,phone,address) 
VALUES('$grade','$username','$password','$sex','$qq','$email','$phone','$address')"; //执行SQL语句
        mysqli_query($conn, $sql_insert);
        header("Location:register.php?err=3");
    } //关闭数据库
    mysqli_close($conn);
} else {
    header("Location:register.php?err=2");
} 
}
?>
