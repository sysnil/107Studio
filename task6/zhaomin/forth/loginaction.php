<?php
    //声明变量
    $username = isset($_POST['username'])?$_POST['username']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
    
 if(!empty($username)&&!empty($password)) {
 	         $link =@new mysqli('localhost','root','','HRM');
			        $link->set_charset('utf8mb4');
			        if($link->connect_errno){
			          die('CONNECT_ERROR:'.$link->connect_errno);
			        }
			        
	$sql_select_1="SELECT username,password FROM User WHERE username='$username' AND password ='$password'";    
    $res_1 = $link->query($sql_select_1);  
    $row_1= mysqli_fetch_array($res_1);
    
    $sql_select_2="SELECT SuperUsername,password FROM SuperUser WHERE SuperUsername='$username' AND password ='$password'";    
    $res_2 = $link->query($sql_select_2);  
    $row_2= mysqli_fetch_array($res_2);
    
    if(($username==$row_1['username']&&$password==$row_1['password'])||($username==$row_2['SuperUsername']&&$password==$row_2['password'])) {
    	 setcookie('myname',$username);
    	 header("Location:index.php?err=3");
    	 
            //关闭数据库
            mysqli_close($link);
        }else {
            //用户名或密码错误，赋值err为1
            header("Location:login.php?err=1");
        }
    }else {
        //用户名或密码为空，赋值err为2
        header("Location:login.php?err=2");
    }
?>