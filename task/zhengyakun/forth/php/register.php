<?php
session_start();
$_SESSION['token'] = uniqid();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="register/html; charset=gb2312">
    <title>注册</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
            width: 100%;
            overflow: hidden;
            margin: 0;
            padding: 0;
            background: url(../image/beijing.jpg) no-repeat 0px 0px;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            -moz-background-size: 100% 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        #loginDiv {
            width: 37%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 650px;
            background-color: rgba(75, 81, 95, 0.3);
            box-shadow: 7px 7px 17px rgba(52, 56, 66, 0.5);
            border-radius: 5px;
        }

        #name_trip {
            margin-left: 50px;
            color: red;
        }

        p,
        .sexDiv {
            margin-top: 10px;
            margin-left: 20px;
            color: azure;
        }

        .sexDiv>input,
        .hobby>input {
            width: 30px;
            height: 17px;
        }

        input,
        select {
            margin-left: 15px;
            border-radius: 5px;
            border-style: hidden;
            height: 30px;
            width: 140px;
            background-color: rgba(216, 191, 216, 0.5);
            outline: none;
            color: #f0edf3;
            padding-left: 10px;
        }

        .button {
            border-color: cornsilk;
            background-color: rgba(100, 149, 237, .7);
            color: aliceblue;
            border-style: hidden;
            border-radius: 5px;
            width: 100px;
            height: 31px;
            font-size: 16px;
        }

        .introduce {
            margin-left: 110px;
        }

        .introduce>textarea {
            background-color: rgba(216, 191, 216, 0.5);
            border-style: hidden;
            outline: none;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 20px;
            color: #f0edf3;
        }

        b {
            margin-left: 50px;
            color: #FFEB3B;
            font-size: 10px;
            font-weight: initial;
        }

        #loginDiv p img {
            border-radius: 5px;
            position: relative;
            top: 5px;
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <div id="loginDiv">
        <form action="registerSave.php" method="post">
            <h1>注册</h1>
            <p>用户姓名:<input id="userNname" type="text" name="username" autofocus required><label id="name_trip"></label></p>

            <p>用户密码:<input id="password" type="password" name="password" required><label id="password_trip"></label></p>

            <p>确认密码:<input id="surePassword" type="password" required><label id="surePassword_trip"></label></p>
            <p>验证码: &nbsp;&nbsp;<input id="" type="text" name="verify"><img src="./captcha.php" onClick="this.src='./captcha.php?'+Math.random()"></p>

            <p>
                电子邮件:
                <input id="email" type="email" name="email" required>
                <label id="emil_trip"></label>
            </p>
            <p style="text-align: center;">
                <input type="submit" class="button" onblur="checkForm()" value="提交">
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?>">
                <input type="reset" class="button" value="重置">
            </p>
        </form>
    </div>

</body>
<script type="text/javascript">
    function trip(obj, trip) {
        document.getElementById(obj).innerHTML = "<b>" + trip + "</b>";
    }

    function checkSex() {
        var sexNum = document.getElementsByName("sex");
        var sex = "";
        for (let i = 0; i < sexNum.length; ++i) {
            if (sexNum[i].checked) {
                sex = sexNum[i];
            }

        }
        if (sex == "") {
            trip("sex_trip", "ERROR!!");
            return false;
        } else {
            trip("sex_trip", "OK!!");
        }
    }

    function checkHobby() {
        var hobbyNum = document.getElementsByName("hobby");
        var hobby = "";
        for (let i = 0; i < hobbyNum.length; ++i) {
            if (hobbyNum[i].checked) {
                hobby = hobbyNum[i];
            }
        }
        if (hobby == "") {
            trip("hobby_trip", "ERROR!!");
            return false;
        } else {
            trip("hobby_trip", "OK!!");

        }
    }

    function checkSelect() {
        var myselect = document.getElementById("userType");
        var index = myselect.selectedIndex;
        var checkValue = myselect.options[index].value;
        if (checkValue == 0) {
            trip("type_trip", "请选择!!");
            return false;
        } else {
            trip("type_trip", "OK!!");
        }
    }

    function checkForm() {
        checkSelect();
        checkHobby();
        checkSex();

        var trip = document.getElementsByName("em");
        var tripV = trip.innerHTML();
        //获取用户名输入项
        var userNname = document.getElementById("userNname");
        var uName = userNname.value;
        if (uName.length < 1 || uName.length > 10) {
            trip("name_trip", "账号长度为1-10位!!");
            return false;
        } else {
            trip("name_trip", "OK!!");

        }

        //密码长度大于6 和确认必须一致 
        var password = document.getElementById("password");
        var userPass = password.value;
        if (userPass.length < 6) {
            trip("password_trip", "密码要>6位!!");
            return false;
        } else {
            trip("password_trip", "OK!!");
        }

        //获取确认密码框的值 var
        var surePassword = document.getElementById("surePassword");
        var surePass = surePassword.value;
        if (userPass != surePass) {
            trip("surePassword_trip", "两次密码不一致!!");
            return false;
        }

        //校验邮箱:/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/
        var inputEmail = document.getElementById("email");
        var uEmail = inputEmail.value;
        if (!/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/.test(uEmail)) {
            trip("emil_trip", "邮箱不合法!!");
            return false;
        } else {
            trip("emil_trip", "OK!!");
        }

        // 校验自我介绍
        var introduceText = document.getElementById("introduceText");
        var introduce = introduceText.value;
        if (introduce.length < 3 || uName.length > 60) {
            trip("introduce_trip", "长度为3-50字!!");
            return false;
        } else {
            trip("introduce_trip", "OK!!");
        }

        return true;
    }

    function submitT() {
        if (checkForm()) {
            return true;
        } else {
            return false;
        }
    }
</script>

</html>