<?php
$mysqli=@new mysqli('localhost','root','123','php107');
if($mysqli->connect_errno){
    die('connect error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');


