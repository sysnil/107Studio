<?php
    $link = @mysqli_connect('localhost','root','123456');
    session_start();
    $usernow=$_SESSION['user'];
    if($link){
        $select = mysqli_select_db($link,'user_login');
        if(isset($_POST['delete'])){
            $name = $_POST['username'];
            $sql_select = "select username from user;";
            $result=mysqli_query($link,$sql_select);
            $num = mysqli_num_rows($result);
            if($name==''){
                echo "用户名不能为空!";
                exit;
            }
            else if($name==$usernow){
                echo "你不能删除自己!";
                exit;
            }
            else if($num){
                $sql_insert = "delete from user where username = '$name';";
                $ret = mysqli_query($link,$sql_insert);
                header("location:admin.php");
                
            }else if(!$num){
                echo '用户不存在!请重试!';
                exit;
            }
        }
        mysqli_close($link);
    }else{
        die();
    }
?>