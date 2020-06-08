<!DOCTYPE html>
<html>
	<head>
		<title>登录失败！</title>
		<meta name="content-type"; charset="UTF-8">
    </head>
    <script>
        alert("登录失败！点击确定后页面将自动跳转！");
    </script>
</html>
<?php
    header('refresh:1; url=login.php');
?>