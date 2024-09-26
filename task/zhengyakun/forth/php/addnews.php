<?php
require_once("./link1.php");
$newstype=$_POST['newstype'];
$newstitle=$_POST['newstitle'];
$newscontent=$_POST['newscontent'];
$content_url=$_POST['content_url'];
$sql="insert into newslist values(null,$newstype,$newstitle,$newscontent,$content_url,now());";
if(mysqli_query($mysqli,$sql))
{
    echo "<script>alert('提交成功');</script>";
    header("refresh:2;url=./index.php");
}else{
    echo"<script>alert('提交失败，请检查再试')</script>";

}

?>