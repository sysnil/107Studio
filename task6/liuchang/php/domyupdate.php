<?php

$conn=mysqli_connect('localhost','root','','user') or die("error connecting") ; //连接数据库
    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $qq = $_POST['qq'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql1="update usertext set username= '"."$username' where id = $id";
    $sql2="update usertext set password= '"."$password' where id = $id";
    $sql3="update usertext set sex= '"."$sex' where id = $id";
    $sql4="update usertext set qq= '"."$qq' where id = $id";
    $sql5="update usertext set email= '"."$email' where id = $id";
    $sql6="update usertext set phone= '"."$phone' where id = $id";
    $sql7="update usertext set address= '"."$address' where id = $id";
    $result1= mysqli_query($conn,$sql1);
    $result2= mysqli_query($conn,$sql2);
    $result3= mysqli_query($conn,$sql3);
    $result4= mysqli_query($conn,$sql4);
    $result5= mysqli_query($conn,$sql5);
    $result6= mysqli_query($conn,$sql6);
    $result7= mysqli_query($conn,$sql7);
    if($result1&&$result2&&$result3&&$result4&&$result5&&$result6){
        exit("<script>
            alert('修改成功');
            location.href='loginsucc.php'
        </script>");
    }else{
        exit("<script>
            alert('修改失败');
            location.href='loginsucc.php';
        </script>");
    }
?>