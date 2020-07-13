<?php 
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','news');
if($mysqli->connect_errno){
	die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$istop=$_GET['istop'];
//实现置顶操作的模块
if($istop == '1'){
    
    $id=$_GET['id'];

    $sql="UPDATE news1 SET istop=1 WHERE id=$id;";
    $res=$mysqli->query($sql);
    if($res){
        $mes="置顶成功";
    }else{
        $mes="置顶失败";
    }
    $url="updatenews1.php";
    echo "<script type='text/javascript'>
    alert('{$mes}');
    location.href='{$url}';
    </script>";
}
if($istop == '0'){
    //取消置顶
    $id=$_GET['id'];
    $sql="UPDATE news1 SET istop=0 WHERE id=$id;";
    $res=$mysqli->query($sql);
    if($res){
        $mes="取消置顶成功";
    }else{
        $mes="取消置顶失败";
    }
    $url="updatenews1.php";
    echo "<script type='text/javascript'>
    alert('{$mes}');
    location.href='{$url}';
    </script>";
}


if($istop == '1'){
    
    $id=$_GET['id'];

    $sql="UPDATE news2 SET istop=1 WHERE id=$id;";
    $res=$mysqli->query($sql);
    if($res){
        $mes="置顶成功";
    }else{
        $mes="置顶失败";
    }
    $url="updatenews2.php";
    echo "<script type='text/javascript'>
    alert('{$mes}');
    location.href='{$url}';
    </script>";
}
if($istop == '0'){
    //取消置顶
    $id=$_GET['id'];
    $sql="UPDATE news2 SET istop=0 WHERE id=$id;";
    $res=$mysqli->query($sql);
    if($res){
        $mes="取消置顶成功";
    }else{
        $mes="取消置顶失败";
    }
    $url="updatenews2.php";
    echo "<script type='text/javascript'>
    alert('{$mes}');
    location.href='{$url}';
    </script>";
}

?>