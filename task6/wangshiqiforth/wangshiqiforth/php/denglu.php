<?php
header('content-type:text/html;charset=utf-8');?>
<?php
$mysqli=mysqli_connect('47.95.147.4','kaohe','107');
if($mysqli->connect_errno){
    die('Connect Error:'.$mysqli->connect_error);
}
$user_name = $_POST['add_name'];
$user_password = $_POST['add_password'];
$password = md5($user_password);
$data = new MysqlData;
class MysqlData{
	MysqlData :: select_user（）
}
$sql = $data->select_user($user_name,$password);
$res = $data->sqlRun($sql);
//若账号密码错误
if ($res->num_rows == 0) {
	//释放$res占用的内存
	mysqli_free_result($res);
	//关闭数据库连接
	$data->closeConn();
	//提示输入正确的账号
	echo "<script type='text/javascript'>";
	echo "alert('账号密码错误，请重新输入');";
	echo "history.back();";
	echo "</script>"; 
}
//若账号密码正确
else{
	//获取id字段
	$id = mysqli_fetch_object($res)->id;
	//释放$res占用的内存
	mysqli_free_result($res);

	//关闭数据库连接
	$data->closeConn();
	//将用户数据加入cookies
	setcookie("id",$id);
	setcookie("password","TRUE");
	header("Location:main.php");
}

$data->closeConn();
?>
