<?php 
include_once 'tool.inc.php';
header('content-type:text/html;charset=utf-8');
$mysqli=@new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('Connect Error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$mysqli=connect();
if(is_manage_login($mysqli)){
    
}else{
    exit();
}
//接收动作
$act=$_GET['act'];
//实现置顶操作的模块
if($act == 'istop'){
    //实现置顶操作
    $id=$_GET['id'];
    //构造sql语句实现置顶操作（level字段为1）
    $sql="UPDATE article SET level=1 WHERE id=$id;";
    $res=$mysqli->query($sql);
    if($res){
        $mes="置顶成功";
    }else{
        $mes="置顶失败";
    }
    $url="manageAction.php";
    echo "<script type='text/javascript'>
    alert('{$mes}');
    location.href='{$url}';
    </script>";
}
if($act == 'cancle'){
    //取消置顶
    $id=$_GET['id'];
    //构造sql语句实现取消置顶操作（level字段为0）
    $sql="UPDATE article SET level=0 WHERE id=$id;";
    $res=$mysqli->query($sql);
    if($res){
        $mes="取消置顶成功";
    }else{
        $mes="取消置顶失败";
    }
    $url="manageAction.php";
    echo "<script type='text/javascript'>
    alert('{$mes}');
    location.href='{$url}';
    </script>";
}
//理论学习置顶操作
if($act == 'istop1'){
    //实现置顶操作
    $id=$_GET['id'];
    //构造sql语句实现置顶操作（level字段为1）
    $sql="UPDATE llxx SET level=1 WHERE id=$id;";
    $res=$mysqli->query($sql);
    if($res){
        $mes="置顶成功";
    }else{
        $mes="置顶失败";
    }
    $url="manageAction.php";
    echo "<script type='text/javascript'>
    alert('{$mes}');
    location.href='{$url}';
    </script>";
}
if($act == 'cancle1'){
    //取消置顶
    $id=$_GET['id'];
    //构造sql语句实现取消置顶操作（level字段为0）
    $sql="UPDATE llxx SET level=0 WHERE id=$id;";
    $res=$mysqli->query($sql);
    if($res){
        $mes="取消置顶成功";
    }else{
        $mes="取消置顶失败";
    }
    $url="manageAction.php";
    echo "<script type='text/javascript'>
    alert('{$mes}');
    location.href='{$url}';
    </script>";
}
?>