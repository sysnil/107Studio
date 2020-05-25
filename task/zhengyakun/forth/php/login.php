<?php
session_start();
$_SESSION['token'] = uniqid();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    body,
    h2,
    form,
    a {
        margin: 0px;
        padding: 0px;
    }

    body {
        font-size: 14px;
        color: #444;
        background-color: #00343f;
    }

    a{
        text-decoration: none;
        color: #444;
    }

    a:hover {
        color: red;
    }

    .box {
        width: 1000px;
        margin: 0px auto;
        background-color: white;
        text-align:center;
    }

    .title {
        text-align: center;
        padding: 10px 0px;
        border-bottom: 2px solid #444;
        background-color: #d0e9ff;
    }

    .title h2 {
        font-size: 36px;
        padding: 10px;
    }

    form {
        padding: 30px;
        height: 400px;
    }

    form td {
        padding: 8px;
    }
</style>

<body>
    <div class="box">
        <h2>用户登录</h2>
        <a href="javascript:void(0)">欢迎光临，请先登录!</a>
    </div>
    <form action="loginSave.php" method="POST">
        <table align="center" width="400">
        <tr>
            <td width="100" align="right">用户名:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
        <td align="right">密&nbsp;&nbsp;&nbsp;码</td>
        <td><input type="password" name="password"></td>
        </tr>
        <tr>
        <td align="right">验证码: </td>
        <td>
            <input type="text" style="float:left;" name="verify" size="4" maxlength="4">
            <img src="" alt="" style="float:left; margin-left:10px;cursor:pointer; height:22px;">
        </td></tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="登录">
                <input type="hidden" name="token" value="<?php $SESSION['token']?>">
                <input type="reset" value="重置">
            </td>
        </tr>
        </table>
    </form>
</body>

</html>