<?php 
    header("Content-Type:text/html;charset=utf-8");
    $link = @mysqli_connect('localhost','root','123456');
    if($link){
        $select = mysqli_select_db($link,"user_login");
        if(isset($_POST["subr"])){
            $user = $_POST["username"];
            $password = $_POST["password"];
            $re_pass =$_POST["re_password"];

            if(($user == '')||($password == '')){
                echo "用户名或密码不能为空，请重新输入!";
                exit;
            }
            if($password==$re_pass){
                mysqli_set_charset($link,'utf8');
                $sql_select = "select username from user where username = '$user'";
                $result=mysqli_query($link,$sql_select);
                $num = mysqli_num_rows($result);
                if($user)
                if($num){
                    echo "用户名已经存在!";
                    exit;
                }else{
                    $sql_insert = "insert into user(username,password,autho) values('$user','$password','0')";
                    $ret = mysqli_query($link,$sql_insert);
                    $row = mysqli_fetch_array($ret);
                    header("location:regisucc.php");
                }
            }else{
                echo '两次密码输入不一致!';
                exit;
            }
        }mysqli_close($link);
    }else{
        die();
    }
?>