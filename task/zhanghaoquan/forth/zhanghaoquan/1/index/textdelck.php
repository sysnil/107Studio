<?php
    header("Content-Type: text/html;charset=utf-8");
    $link =mysqli_connect('localhost','root','123456');
    if($link){
        $select=mysqli_select_db($link,'text');
        mysqli_set_charset($link,'utf8');
        if(isset($_POST['del'])){
            $num=$_POST['num'];
            $text_url="delete from main where title = '$num';";
            $result=mysqli_query($link,$text_url);
            header("location:llxx.php");
            
        }
        
    }
?>