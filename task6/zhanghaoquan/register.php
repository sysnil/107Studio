<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/bitbug_favicon.ico" rel="SHORTCUT ICON">
    <script src="js/jquery-3.4.1.js"></script>
    <title>Henu统战部登录系统</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<header>
    <div class="top">
        <img src="images/Henu.jpg" alt="">
        <p>河南大学党委统战部登录系统</p>
    </div>
</header>
<section>
    <div class="background">
        <img src="images/banner1.jpg" alt="">
    </div>
    <div class="logo">
        <img src="images/henu.png" alt="NO FOUND">
        <p>地址：中国 河南 开封.明伦街/金明大道</p>
        <p>邮编：475001/475004 总机号码：0371—22868833</p>
    </div>
    <div class="login">
        <form class="main" method="post" action="regcheck.php">
            <div class="head">
                <h2>Henu注册</h2>
            </div>
            <div class="input">
                <div class="user">
                    <img src="images/user.png" alt="NO FOUND"><input type="text" placeholder="用户名" name="username">
                </div>
                <div class="user">
                    <img src="images/lock.png" alt="NO FOUND"><input type="password" placeholder="密码" id="word" name="password">
                </div>
                <div class="user">
                    <img src="images/lock.png" alt="NO FOUND"><input type="password" placeholder="确认密码" id="word" name="re_password">
                </div>
            </div>
            <div class="sub">
                <input type="submit" name="subr" value="注册" /> 
            </div>
        </form>
    </div>
</section>
<footer>
    <div class="end">
        <p>Copyright © 2019 河南大学党委统战部 技术支持河南大学 107网站工作室 管理后台</p>
        <p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
    </div>
</footer>
</body>
</html>