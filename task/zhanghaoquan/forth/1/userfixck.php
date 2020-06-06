<?php
    $link = @mysqli_connect('localhost','root','123456');
    if($link){
        $select = mysqli_select_db($link,'user_login');
        if(isset($_POST['update'])){
            $pastname = $_POST['pastname'];
            $newname = $_POST['newname'];
            $newword = $_POST['newword'];
            $level = $_POST['autho'];
            $sql_select = "select username from user where username = '$newname'";
            $result=mysqli_query($link,$sql_select);
            $num = mysqli_num_rows($result);
            $sql_select2 = "select username from user where username = '$pastname'";
            $result2=mysqli_query($link,$sql_select2);
            $num2 = mysqli_num_rows($result2);
            if(($newname=='')||($newword=='')||($pastname=='')){
                echo "用户名或密码不能为空!";
                exit;
            }
            if(!$num2){
                echo "所要修改的用户不存在!";
                exit;
            }
            if($num){
                echo "用户名已经存在!";
                exit;
            }else{
                $sql_update = "update user set username='$newname' where username='$pastname';";
                $pw_update = "update user set password='$newword' where username='$pastname';";
                $autho_update="update user set autho='$level' where username='$newname';";
                $ret = mysqli_query($link,$sql_update);
                $ret2 = mysqli_query($link,$pw_update);
                $ret3 = mysqli_query($link,$autho_update);
                $_SESSION['user']=$newname;
                header("location:admin.php");
            }
        }
        mysqli_close($link);
    }else{
        die();
    }
?>