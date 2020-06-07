<?php 
include_once 'tool.inc.php';
$link=connect();
//验证是否登录
include_once 'is_manage_login.php';
//接受用户
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$username=$_POST['username'];
$password=md5($_POST['password']);
$act=$_GET['act'];
$name=$_GET['name'];  //原来的用户名
$name1=$_GET['name1']; //原来的用户名
//echo $name1;
//根据不同操作完成不同功能
switch($act){
    case 'addUser':
        //echo "添加用户的操作";
        $sql="INSERT users(username,password,Rights) VALUES('{$username}','{$password}',0);";
        $res=$mysqli->query($sql);
        if($res){
            echo "<script type='text/javascript'>
                     alert('添加成功');
                     location.href='userlist.php';
                   </script>";
            exit;
        }else{
            echo "<script type='text/javascript'>
                     alert('添加失败');
                     location.href='addUser.php';
                   </script>";
            exit;
        }
        break;
     case 'delUser':
         //echo "删除记录".$name;
         $sql="DELETE FROM users WHERE username='{$name}';";
         $res=$mysqli->query($sql);
         if($res){
             $mes="删除成功";
         }else{
             $mes="删除失败";
         }
         $url="userlist.php";
         echo "<script type='text/javascript'>
               alert('{$mes}');
               location.href='{$url}';
               </script>";
         exit;
         break;
     case 'editUser':
         $sql="UPDATE users SET username='{$username}',password='{$password}' WHERE username='{$name1}';";
         $res=$mysqli->query($sql);
         if($res){
             $mes="修改成功";
         }else{
             $mes="修改失败";
         }
         $url="userlist.php";
         echo "<script type='text/javascript'>
         alert('{$mes}');
         location.href='{$url}';
         </script>";
         exit;
         break;
     case 'editUser1':
         $sql="UPDATE users SET username='{$username}',password='{$password}' WHERE username='{$name1}';";
         $res=$mysqli->query($sql);
         if($res){
             $mes="修改成功";
         }else{
             $mes="修改失败";
         }
         $url="login.php";
         echo "<script type='text/javascript'>
         alert('{$mes}');
         location.href='{$url}';
         </script>";
         exit;
         break;
}
?>