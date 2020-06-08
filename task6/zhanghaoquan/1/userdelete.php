<?php
    /* header("Content-type:text/html;charset=UTF-8");
    $link = mysqli_connect('localhost','root','123456');
    $select = mysqli_select_db($link,'user_login');
    mysqli_set_charset($link,'utf8');
    $sql = "select * from user";
    $result = mysqli_query($link,$sql);
    $rows = array();
    while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }
    if($link){
        if(isset($_POST['delete'])){
            $delete = "delete from user where username = ''";
            foreach($rows as $key => $v) {
                echo $_POST['delete'];
            }
        }
    }else{
        die();
    } */
?>