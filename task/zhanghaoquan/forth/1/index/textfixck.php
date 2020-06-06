<?php
    header("Content-Type: text/html;charset=utf-8");
    $link = mysqli_connect('localhost','root','123456');
    if($link){
        $select = mysqli_select_db($link,'text');
        mysqli_set_charset($link,'utf8');
        if(isset($_POST['update'])){
            $pasttitle = $_POST['pasttitle'];
            $newtitle = $_POST['update'];
            $newdate = $_POST['date'];
            $sql_select = "select title from main where title = '$newtitle';";
            $result=mysqli_query($link,$sql_select);
            $num = mysqli_num_rows($result);
            $sql_select2 = "select title from main";
            $result2=mysqli_query($link,$sql_select2);
            $num2 = mysqli_num_rows($result2);
            echo $pasttitle;
            echo $newtitle;
            echo $newdate;
            if(($newtitle=='')||($newdate=='')||($pasttitle=='')){
                echo "用户名或密码不能为空!";
                exit;
            }
            if(!$num2){
                echo "所要修改的标题不存在!";
                exit;
            }
            if($num){
                echo "标题已经存在!";
                exit;
            }else{
                $sql_update = "update main set title='$newtitle' where title='$pasttitle';";
                $pw_update = "update main set time='$newdate' where title='$newtitle';";
                $ret = mysqli_query($link,$sql_update);
                $ret2 = mysqli_query($link,$pw_update);
                header("location:llxx.php");
            }
        }
    }else{
        die();
    }
?>