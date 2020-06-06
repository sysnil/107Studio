<?php
    $link=mysqli_connect('localhost','root','123456');
    session_start();
    if($link){
        $select=mysqli_select_db($link,'text');
        mysqli_set_charset($link,'utf8');
        $top=$_POST['top'];
        $qx_url="update main set id='1' where title='$top'";
        $success=mysqli_query($link,$qx_url);
        header("location:llxx.php");
    }
?>