<?php
$mysqli=@new mysqli('47.95.147.4','kaohe','107');
if($mysqli->connect_errno){
    die('connect error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');