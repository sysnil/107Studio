<?php
session_start();
$_SESSION['token'] = uniqid();
header('content-type:text/html;charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>登陆</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        html {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        
        #loginDiv {
            width: 33%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            background-color: rgb(209, 212, 219);
            box-shadow: 7px 7px 17px rgb(209, 212, 219);
            border-radius: 5px;
        }
        
        p {
            margin-top: 30px;
            color: azure;
        }
        
        input {
            margin-left: 15px;
            border-radius: 5px;
            border-style: hidden;
            height: 30px;
            width: 200px;
            background-color: rgb(173, 161, 173);
            outline: none;
            color: #f0edf3;
            padding-left: 10px;
            float: right;
        }
        
        .button_1 {
            margin-left: 30px;
            margin-top: 12px;
            padding: 0;
            border-color: cornsilk;
            background-color: rgba(13, 250, 132, 0.7);
            color: aliceblue;
            border-style: hidden;
            border-radius: 5px;
            width: 100px;
            height: 45px;
            font-size: 20px;
            text-align: center;
            line-height: 45px;
        }
        
        .button_2 {
            margin-left: -25px;
            margin-top: 12px;
            padding: 0;
            border-color: cornsilk;
            background-color: rgba(61, 129, 255, 0.7);
            color: aliceblue;
            border-style: hidden;
            border-radius: 5px;
            width: 100px;
            height: 45px;
            font-size: 20px;
            text-align: center;
            line-height: 45px;
        }
    </style>
</head>

<body>
    <div id="loginDiv">
        <form action="loginSave.php" id="form" method="post">
            <h1 style="text-align: center;color: white;">登陆</h1>
            <p>用户名:<input id="username" type="text" name="username"> <label id="name_trip"></label></p>

            <p>密 &nbsp;&nbsp;码: <input id="password" type="password" name="password"><label id="password_trip"></label></p>
            <div style="text-align: center;margin-top: 30px;">
                <input type="submit" class="button_1" value="登录">
                <input type="hidden" name="token" value="<?php echo $_SESSION['token']?>">
                <input type="reset" class="button_2" value="注册">
            </div>
        </form>
    </div>


</body>

</html>