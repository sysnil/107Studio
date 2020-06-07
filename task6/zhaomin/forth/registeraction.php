<?php
    $username = isset($_POST['username'])?$_POST['username']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
    $re_password = isset($_POST['re_password'])?$_POST['re_password']:"";

if(!empty($username)&&!empty($password)){
   if($_GET["action"]==user){
			    if($password == $re_password) {
			        //建立连接
			        $link =@new mysqli('localhost','root','','HRM');
			        $link->set_charset('utf8mb4');
			        if($link->connect_errno){
			          die('CONNECT_ERROR:'.$link->connect_errno);
			        }
			        //准备SQL语句,查询用户名
			        $sql_select="SELECT username FROM User WHERE username = '$username'";
			        //执行SQL语句
			        $res=$link->query($sql_select);
			  	    if($link->affected_rows>0)
			          {
			            //用户名已存在，显示提示信息
			            header("Location:register.php?err=1");
			        } else {
			
			            $sql_insert = "INSERT INTO User VALUES(null,'$username','$password')";
			            //执行SQL语句
			            if($link->query($sql_insert)===true){
			            header("Location:register.php?err=3");
			            }else {
			                  echo "Error: " . $sql_insert . "<br>" . $link->error;
			             }
			
			        }
			        //关闭数据库
			        mysqli_close($link);
			    } else {
			        header("Location:register.php?err=2");
         }
      }
   }else{
       header("Location:register.php?err=4");
  }
   
if(!empty($username)&&!empty($password)){
   if($_GET["action"]==superuser){
			    if($password == $re_password) {
			        //建立连接
			        $link =@new mysqli('localhost','root','','HRM');
			        $link->set_charset('utf8mb4');
			        if($link->connect_errno){
			          die('CONNECT_ERROR:'.$link->connect_errno);
			        }
			        //准备SQL语句,查询用户名
			        $sql_select="SELECT SuperUser FROM SuperUser WHERE SuperUser = '$username'";
			        //执行SQL语句
			        $res=$link->query($sql_select);
			  	    if($link->affected_rows>0)
			          {
			            //用户名已存在，显示提示信息
			            header("Location:register2.php?err=1");
			        } else {
			
			            $sql_insert = "INSERT INTO SuperUser VALUES(null,'$username','$password')";
			            //执行SQL语句
			            if($link->query($sql_insert)===true){
			            header("Location:register2.php?err=3");
			            }else {
			                  echo "Error: " . $sql_insert . "<br>" . $link->error;
			             }
			
			        }
			        //关闭数据库
			        mysqli_close($link);
			    } else {
			        header("Location:register2.php?err=2");
         }
     }
  }else{
       header("Location:register.php?err=4");
  }
    
 ?>