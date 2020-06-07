<?php
    $link = @mysqli_connect('localhost','root','123456');
    if($link){
        $select = mysqli_select_db($link,'text');
        if(isset($_POST['save'])){
            $title = $_POST['title'];
            $time = $_POST['time'];
            $sql_select = "select title from main2 where title = '$title';";
            $result=mysqli_query($link,$sql_select);
            $num = mysqli_num_rows($result);
            mysqli_set_charset($link,'utf8');
            if(($title=='')||($time=='')){
                echo "文章标题或日期不能为空!";
                exit;
            }
            if($num){
                echo "文章标题已经存在!";
                exit;
            }else{
                $sql_insert = "insert into main2(title,time,id) values('$title','$time','0')";
                $ret = mysqli_query($link,$sql_insert);
                $row = mysqli_fetch_array($ret);
                header("location:index.php");
            }
        }
        mysqli_close($link);
    }else{
        die();
    }
?>