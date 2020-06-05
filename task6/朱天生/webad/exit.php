<?php
session_start();
unset($_SESSION['adname']);
unset($_SESSION['login']);
echo "<script type='text/javascript'>
		location.href='login.php';
		</script>";
?>