<?php
require_once("./link1.php");
session_start();
$outusername=$_SESSION['username'];
if(isset($_POST['email']))
{
    $id=$_GET['id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $username=$_POST['username'];
    $sql="update user set email='$email' where id=$id;";
    $sql.="update user set username='$username' where id=$id;";
    $sql.="update user set password='$password' where id=$id;";
    if(mysqli_multi_query($mysqli,$sql))
    {
        echo "<script>alert('修改成功!')</script>";
        header("refresh:2;url=./index.php");
        die();
    }else{
        echo "<script>alert('修改失败!请重新书写！')</script>";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理成员修改</title>
    <style>
         * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 0;
            font: 16px/20px microsft yahei;
            background: url(./image/change.jpg);
            background-size: 100% 100%;
         
         }
        .container {
            width: 60%;
            margin: 0 auto;
            margin-top:5%;
        }
        .container h1 {
            text-align: center;
            color: #FFFFFF;
            font-weight: 500;
        }
        .container input {
            width: 320px;
            display: block;
            height: 36px;
            border: 0;
            outline: 0;
            padding: 6px 10px;
            line-height: 24px;
            margin: 32px auto;
            -webkit-transition: all 0s ease-in 0.1ms;
            -moz-transition: all 0s ease-in 0.1ms;
            transition: all 0s ease-in 0.1ms;
        }
        .container input[type="text"] , .container input[type="password"]  {
            background-color: #FFFFFF;
            font-size: 16px;
            color: #50a3a2;
        }
        .container input[type='submit'] {
            font-size: 16px;
            letter-spacing: 2px;
            color: #666666;
            background-color: #FFFFFF;
        }
        .container input:focus {
            width: 400px;
        }
        .container input[type='submit']:hover {
            cursor: pointer;
            width: 400px;
        }
        .to_login{
            color: #a7c4c9;
        }
        .text{
            color: #e2dfe4;
        }
    
     
    </style>
</head>
<body>
    <?php
    $outsql="select * from  user where username='$outusername';";
    $outresult=mysqli_query($mysqli,$outsql);
    $outarr=mysqli_fetch_assoc($outresult);
    ?>
   
<div class="container">
        <h1 style="color: white; margin: 0; text-align: center">管理成员修改</h1>
        <form action="" method="post">
        <label><input type="text"  id="userNname" name="username" placeholder=" <?php
    echo $outarr['username'];
    ?>" /></label>
        <label><input type="email"   id="email" name="email" placeholder=" <?php
    echo $outarr['email'];
    ?>"/></label>
        <label><input type="password" id="password" name="password" placeholder="密码
   
    " /></label>
            <input type="submit" onblur="checkForm()"  value="提交修改"/>
            <input type="reset" value="重置">

                       <p class="change_link" style="text-align: center">
                <span class="text">请记好你的密码!</span>
                <a href="index.php" class="to_login">返回</a>
            </p>
        </form>
    </div>
</body>
<script type="text/javascript">
 function checkForm() {
     

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

      
        //校验邮箱:/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/
        var inputEmail = document.getElementById("email");
        var uEmail = inputEmail.value;
        if (!/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/.test(uEmail)) {
            trip("emil_trip", "邮箱不合法!!");
            return false;
        } else {
            trip("emil_trip", "OK!!");
        }

      
       
    }

    </script>
</html>