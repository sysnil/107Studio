<?php
$mysqli = @new mysqli('localhost','root','sc100124','user');
if($mysqli->errno){
    die('Connect Error:'.$mysqli->error);
}else{
    $mysqli->set_charset('utf8');
}