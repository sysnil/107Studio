<?php
	$link =@new mysqli('localhost','root','','HRM');
			        $link->set_charset('utf8');
			        if($link->connect_errno){
			        die('CONNECT_ERROR:'.$link->connect_errno);
			        }
    switch($_GET["action"]){
        case "user_del":
             $id=$_GET['id'];
             $sql="delete from User where id=$id";
             $link->query($sql);
             $myname = $_COOKIE['myname'];
             if(empty($myname)){
              header("Location:index.php");
             }else{
              header("Location:user_manage.php?myname=$myname");
             }
            break;
        case "superuser_del":
             $id=$_GET['id'];
             $sql="delete from SuperUser where id=$id";
             $link->query($sql);
             header("Location:index.php");
            break;
        case "superuser_add":
            header("Location:register.php?add=1");
          break;
        case "update":
             session_start();
             $name =$_SESSION['name'];
             $id=$_SESSION['id'];
             $add_type=$_SESSION['add_type'];
             $username = isset($_POST['username'])?$_POST['username']:$name;
			 $password = isset($_POST['password'])?$_POST['password']:"";
			 $re_password = isset($_POST['re_password'])?$_POST['re_password']:"";
			 if($password==$re_password){
			     if($add_type==1){
			          setcookie('myname',$username);
			         $sql="update User set username='$username',password='$password' where id='$id'";
			         $link->query($sql);
			         header("Location:user_manage.php?myname=$username");
			     }
			     else if($add_type==2){
			         $myname = $_COOKIE['myname'];
			         $sql="update User set username='$username',password='$password' where id='$id'";
			         $link->query($sql);
			        header("Location:user_manage.php?myname=$myname");
			     }
			     else{
			          $myname =$username;
			          setcookie('myname',$username);
			     	 $sql="update SuperUser set SuperUsername='$username',password='$password' where id='$id'";
			         $link->query($sql);
			         header("Location:user_manage.php?myname=$myname");
			     }
			 }else{
			      header("Location:data_update.php?err=2");
			 }
    }
    mysqli_close($link);
    ?>