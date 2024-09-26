<?php
require_once("link1.php");
$id=$_GET['id'];
$sql="select flag from newslist where id=$id";
$result=mysqli_query($mysqli,$sql);
$idtop=mysqli_fetch_assoc($result);
if($idtop['flag']==0){
    echo "<script>alert('已经取消置顶了')</script>";
    header("refresh:1;url=./index.php");
     
}
else{
   $sqltop="update newslist set flag=0 where id=$id";
   if(mysqli_query($mysqli,$sqltop))
   {
       echo "<script>alert('取消置顶成功!')</script>";
    header("refresh:1;url=./index.php");
   }
   else{
    echo "<script>alert('置顶失败!')</script>";
    header("refresh:1;url=./index.php");
   }
    
    
}