<?php 
if(!is_manage_login($link)){
    echo "请登录后再做操作！<br/>".'<a href="Login.php">登录</a>';
    exit();
}
?>