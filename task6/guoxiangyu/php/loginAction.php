<?php 
header('content-type:text/html;charset=utf-8');
$mysqli=@new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('Connect Error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
//验证登录
//接收用户名
$login_name=$_POST['login_name'];
//接收密码
$login_pw=$_POST['login_pw'];
//接收权限，判断是普通管理员还是超级管理员，普通管理员是0，超级管理员是1
if($login_name=='admin123'){
    $login_right=1;
    $update="UPDATE users SET Rights=1 WHERE username='admin123';";
    $mysqli->query($update);
}else{
    $login_right=0;
}
session_start();
$_SESSION['login_name']=$login_name;
//判断用户名和密码是否匹配
$login_pw=md5($login_pw);   //由于注册是加密了密码所以此时要先加密才能判断是否匹配
$check="SELECT * FROM users WHERE username='{$login_name}' and password='{$login_pw}' and Rights='{$login_right}';";
$res=$mysqli->query($check);
if($res->num_rows>0 && $login_right==0){
    echo "恭喜您登陆成功！<br/>";
    $data=mysqli_fetch_assoc($res);
    $_SESSION['manage']['username']=$data['username'];
    $_SESSION['manage']['password']=sha1($data['password']);
    $_SESSION['manage']['Rights']=$data['Rights'];
    $userInfo=<<<EOF
<table border="1" cellspacing="0" width="70%">
    <tr>
         <td>用户名</td>
         <td>密码</td>
         <td>属性</td>
         <td>操作</td>
    </tr>
    <tr>
         <td>{$login_name}</td>
         <td>{$login_pw}</td>
         <td>普通管理员</td>
         <td><a href="editUser1.php">修改信息</a>|<a href="manageAction.php">后台管理</a></td>
    </tr>
</table>
EOF;
    echo $userInfo;
}else if($res->num_rows>0 && $login_right==1){
    echo "恭喜您登陆成功！<br/>";
    $data=mysqli_fetch_assoc($res);
    $_SESSION['manage']['username']=$data['username'];
    $_SESSION['manage']['password']=sha1($data['password']);
    $_SESSION['manage']['Rights']=$data['Rights'];
$userInfo=<<<EOF
<h2>您是超级管理员admin123有权管理用户列表</h2>
<table border="1" cellspacing="0" width="70%">
     <tr>
         <td>用户名</td>
         <td>密码</td>
         <td>属性</td>
         <td>操作</td>
    </tr>
    <tr>
         <td>{$login_name}</td>
         <td>{$login_pw}</td>
         <td>超级管理员</td>
         <td><a href="userlist.php">管理用户列表</a>|<a href="manageAction.php">后台管理</a></td>
    </tr>
</table>
EOF;
    echo $userInfo;
}else{
    echo "用户名或密码错误<br/>".'<a href="login.php">请重新登录</a>';
}
mysqli_close($mysqli);
?>