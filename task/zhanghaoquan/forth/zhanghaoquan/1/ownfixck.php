<?php
    $link = @mysqli_connect('localhost','root','123456');
    session_start();
    $user=$_SESSION['user'];
    if($link){
        $select = mysqli_select_db($link,'user_login');
        if(isset($_POST['update'])){
            $pastword = $_POST['pastword'];
            $newname = $_POST['newname'];
            $newword = $_POST['newword'];
            $sql_select = "select username from user where username = '$newname'";
            $pw_url="select password from user where username = '$user';";
            $pw_sql=mysqli_query($link,$pw_url);
            $pw=mysqli_fetch_row($pw_sql);
            $result=mysqli_query($link,$sql_select);
            $num = mysqli_num_rows($result);
            if(($newname=='')||($newword=='')||($pastword=='')){
                echo "用户名或密码不能为空!";
                exit;
            }
            if($num){
                echo "用户名已经存在!";
                exit;
            }
            else if($pw[0]!=$pastword){
                echo "旧密码输入错误!";
                exit;
            }
            else{
                $sql_update = "update user set username='$newname' where username='$user';";
                $pw_update = "update user set password='$newword' where username='$newname';";
                $ret = mysqli_query($link,$sql_update);
                $ret2 = mysqli_query($link,$pw_update);
                $_SESSION['user']=$newname;
                header("location:admin.php");
            }
        }
        mysqli_close($link);
    }else{
        die();
    }
?>