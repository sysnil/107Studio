<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli("localhost","root","","test");
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset("utf8");
$username=$_POST['username'];
$password=$_POST['password'];
$psw=$_POST['psw'];
$act=$_GET['act'];
$id=$_GET['id'];
//echo "success run";


switch ($act) {
	case 'register':
		echo "注册操作";
		if($password!=$psw){
		echo "<script type='text/javascript'>
			     alert('注册失败。两次输入的密码不一致，请重新输入');
			     location.href='register.php';
		  </script>";
		exit;
		}
		$sql="SELECT username FROM try WHERE username='{$username}'";
		$mysqli_result=$mysqli->query($sql);
		if($mysqli_result && $mysqli_result->num_rows>0){
		echo "<script type='text/javascript'>
			     alert('用户名已存在，请重新输入');
			     location.href='register.php';
		 	 </script>";
		exit;
		}
		$sql="INSERT try(username,password) VALUES('{$username}','{$password}')";
		$res=$mysqli->query($sql);
		$insert_id=$mysqli->insert_id;
		if($res){
			echo "<script type='text/javascript'>
			     alert('注册成功，网站的第{$insert_id}位用户');
			     location.href='login.php';
			     </script>";
		}else{
			echo "<script type='text/javascript'>
			     alert('注册失败，重新注册');
			     location.href='register.php';
			     </script>";
		}
		break;
	case 'delete':
		//echo "删除记录".$id;
		$sql="DELETE FROM try WHERE id=".$id;
		$res=$mysqli->query($sql);
		if($res){
			$mes='删除成功';
		}else{
			$mes='删除失败';
		}
		$url='user_list.php';
		echo "<script type='text/javascript'>
			     alert('{$mes}');
			     location.href='{$url}';
			  </script>";
		break;

	case 'editUser':
		$sql="UPDATE try SET username='{$username}',password='{$password}' WHERE id=".$id;
		$res=$mysqli->query($sql);
		if($res){
			$mes='更新成功';
		}else{
			$mes='更新失败';
		}
		$url='user_list.php';
		echo "<script type='text/javascript'>
			     alert('{$mes}');
			     location.href='{$url}';
			  </script>";
		break;
	case 'check':
	 	session_start();
		 $sql = "SELECT * FROM try WHERE (username='$username') AND ( password='$password')";
		 //执行上面的sql语句并将结果集赋给result。
		 $result = $mysqli->query($sql);
		 //判断结果集的记录数是否大于0
		 if ($result->num_rows > 0) {
		  $_SESSION['user_name'] = $username;
		  // 输出每行数据
		  echo "<script type='text/javascript'>
			     location.href='index.php';
			  </script>";
		 } else {
		  echo "<script type='text/javascript'>
			     alert('用户名或密码错误');
			     location.href='login.php';
			  </script>";
		 }
		break;
}			

?>