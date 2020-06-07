<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<TITLE>管理员登陆系统</TITLE>
<h1>管理员登陆</h1>
<form action="loginProcess.php" method="post">
    <table>
        <tr><td>用户id</td><td><input type="text" name="id" value="<?php echo $_GET['id'];?>"/></td></tr>
        <tr><td>密&nbsp;码</td><td><input type="password" name="password" value="<?php echo $_GET['password'];?>"/></td></tr>
        <tr><td><input type="submit" value="用户登录"/></td>
            <td><input type="reset" vallue="重新填写"/></td>
        </tr>
    </table>
</form>

<?php 
    //接受错误信息
    if (!empty($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 1) {
            echo "<font color='red' size='3'>您的用户名或者密码错误!</font>";
        }
    }
?>
</head>
</html>