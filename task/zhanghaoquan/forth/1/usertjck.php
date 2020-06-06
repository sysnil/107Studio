<?php
    $link = @mysqli_connect('localhost','root','123456');
    if($link){
        $select = mysqli_select_db($link,'user_login');
        if(isset($_POST['save'])){
            $name = $_POST['username'];
            $password = $_POST['password'];
            $level = $_POST['autho'];
            $sql_select = "select username from user where username = '$name'";
            $result=mysqli_query($link,$sql_select);
            $num = mysqli_num_rows($result);
            if(($name=='')||($password=='')){
                echo "用户名或密码不能为空!";
                exit;
            }
            if($num){
                echo "用户名已经存在!";
                exit;
            }else{
                $sql_insert = "insert into user(username,password,autho) values('$name','$password','$level')";
                $ret = mysqli_query($link,$sql_insert);
                $row = mysqli_fetch_array($ret);
                header("location:admin.php");
            }
        }
        mysqli_close($link);
    }else{
        die();
    }
?>