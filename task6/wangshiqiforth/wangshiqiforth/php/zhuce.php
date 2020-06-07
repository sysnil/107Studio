<?php

require_once("./MysqlData.php");
$name = $_POST["add_name"];
$password = $_POST["add_password"];
$upassword = $_POST["upassword"];
$sex = $_POST["add_sex"];
$age = $_POST["add_age"];
$email = $_POST["add_email"];

//md5加密
$user_password = md5($password);
$zhuce_password = md5($upassword);

$data = new MysqlData;
$sele_sql = "SELECT * FROM users WHERE name = '".$name."';";
$res = $data->sqlRun($sele_sql);
// echo $sele_sql;
//若账号被使用
if ($res->num_rows != 0) {
	//释放res内存
	mysqli_free_result($res);
	//提示用户已经有人使用
	echo "<script type='text/javascript'>";
	echo "alert('此账号已经有人使用');";
	echo "history.back();";
	echo "</script>";
}//若账号没人使用
else{
	//释放$res占用的内存
	mysqli_free_result($res);
	//
	$zhuce_sql = $data->zhuceData($name,$user_password,$sex,$age,$email);
	$res = $data->sqlRun($zhuce_sql);
}
//关闭数据库连接
$data->closeConn();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>注册成功页面</title>
</head>
 <style type="text/css">
 	.wrapper{

         text-align: center;
 		width:1000px;
 	    margin:20px auto;
 	}
 	h2{
 	background-color:#7CCD7C;
 	margin:0px;
 	text-align:center;
     }
     .my{
     	margin:20px auto;
     }
     .my labal{
     	text-align: center;
 		background-color: 	#FFB6C1;
 		color: #fff;
 		margin:20px auto;
     }
 </style>
<body>
<div class="wrapper">
<h2>用户管理系统</h2>
<div class="my">
<labal>我的注册信息</labal>
</div>
<labal>用户名:</labal><input type="text" value="<?php echo $name ?>" readonly="readonly"><br><br>
<labal>性别:</labal>
<input type="radio"value="0" <?php if ($sex == "0") echo "checked"?>>男
<input type="radio"value="1" <?php if ($sex == "1") echo "checked"?>>女

<br><br>
<labal>年龄:</labal><input type="text" value="<?php echo $age ?>" readonly="readonly"><br><br>
<labal>邮箱:</labal><input type="text" value="<?php echo $email ?>" readonly="readonly"><br><br>
<a href="denglu.html">返回登录页面</a>
</div>
</body>
</html>



