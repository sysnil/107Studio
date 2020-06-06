<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
include_once 'tool.inc.php';
$link=connect();
//验证是否登录
include_once 'is_manage_login.php';
$mysqli->set_charset('utf8');
$id=$_GET['id'];
$act=$_GET['act'];
$titleName=$_POST['titleName'];
$newContent=$_POST['newContent'];
$month=$_POST['month'];
$day=$_POST['day'];
//根据不同操作完成不同功能
switch($act){
    case 'editNew':
        $sql="UPDATE article SET titleName='{$titleName}',newContent='{$newContent}' WHERE id='{$id}';";
        $res=$mysqli->query($sql);
        if($res){
            $mes="修改成功";
        }else{
            $mes="修改失败";
        }
        $url="manageAction.php";
        echo "<script type='text/javascript'>
        alert('{$mes}');
        location.href='{$url}';
        </script>";
        exit;
        break;
    case 'delNew':
        $sql="DELETE FROM article WHERE id='{$id}';";
        $res=$mysqli->query($sql);
        if($res){
            $mes="删除成功";
        }else{
            $mes="删除失败";
        }
        $url="manageAction.php";
        echo "<script type='text/javascript'>
        alert('{$mes}');
        location.href='{$url}';
        </script>";
        exit;
        break;
    case 'addNew':
        $sql="INSERT article(level,id,titleName,newContent,month,day) VALUES(0,4,'{$titleName}','{$newContent}','{$month}','{$day}');";
        $res=$mysqli->query($sql);
        if($res){
            echo "<script type='text/javascript'>
                     alert('添加成功');
                     location.href='manageAction.php';
                   </script>";
            exit;
        }else{
            echo "<script type='text/javascript'>
                     alert('添加失败');
                     location.href='addNew.php';
                   </script>";
            exit;
        }
        break;
}
?>