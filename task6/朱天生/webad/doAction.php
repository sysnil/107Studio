<?php
session_start();
header('content-type:text/html;charset=utf-8');
//接受页面
$mysqli=new mysqli('localhost','root','','admins');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$id=$_GET['id'];
$adname=$_POST['adname'];
$psd=$_POST['psd'];
$phonenumber=$_POST['phonenumber'];
$yanzheng=$_POST['yanzheng'];
$act=$_GET['act'];
$id=$_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$addtime = time();
//根据不同操作完成不同功能
switch ($act) {
	case 'addUser':
		//'添加用户的操作';
	$sql="INSERT aduser1(adname,psd,phonenumber) VALUES('{$adname}','{$psd}','{$phonenumber}')";
	if($_SESSION['authcode']==$yanzheng  ){
		$res=$mysqli->query($sql);
	if($res){
		echo "<script type='text/javascript'>
		alert('注册成功');
		location.href='login.php';
		</script>";
	}else{
		echo "<script type='text/javascript'>
		alert('注册失败，请重新尝试');
		location.href='register.php';
		</script>";
		exit;
	}
	}else{
		echo "<script type='text/javascript'>
		alert('{验证码错误}');
		location.href='register.php';
		</script>";
	}
	break;
	


	case 'addAdmin':
	$sql="INSERT aduser2(adname,psd,phonenumber) VALUES('{$adname}','{$psd}','{$phonenumber}')";
	if($_SESSION['authcode']==$yanzheng  ){
		$res=$mysqli->query($sql);
	if($res){
		echo "<script type='text/javascript'>
		alert('注册成功');
		location.href='login.php';
		</script>";
	}else{
		echo "<script type='text/javascript'>
		alert('注册失败，请重新尝试');
		location.href='adregister.php';
		</script>";
		exit;
	}
	}else{
		echo "<script type='text/javascript'>
		alert('{验证码错误}');
		location.href='adregister.php';
		</script>";
	}

	break;

    



	case 'login':
	$sql="select*from aduser1 where adname=? and psd=?";
	$mysqli_stmt=$mysqli->prepare($sql);
	$mysqli_stmt->bind_param('ss',$adname,$psd);
	if($mysqli_stmt->execute()){
		$mysqli_stmt->store_result();
		if($mysqli_stmt->num_rows>0){
			$_SESSION['adminname']=$adname;
			$_SESSION['login']=1;
			$sql="SELECT id,adname,psd,phonenumber FROM aduser1 WHERE adname=".$adnaem;
			$mysqli_result=$mysqli->query($sql);
			if($mysqli_result){
			$row=$mysqli_result->fetch_assoc();
			}
			$_SESSION['adid']=$row['id'];
			echo "<script type='text/javascript'>
		alert('登录成功');
		location.href='admin.php';
		</script>";
		}else{
			echo "<script type='text/javascript'>
		alert('登录失败，账号或密码错误');
		location.href='login.php';
		</script>";
		exit;
		}
	}
	
	break;




	case 'adlogin':
	$sql="select*from aduser2 where adname=? and psd=?";
	$mysqli_stmt=$mysqli->prepare($sql);
	$mysqli_stmt->bind_param('ss',$adname,$psd);
	if($mysqli_stmt->execute()){
		$mysqli_stmt->store_result();
		if($mysqli_stmt->num_rows>0){
			$_SESSION['senioradminname']=$adname;
			$_SESSION['login']=1;
			echo "<script type='text/javascript'>
		alert('登录成功');
		location.href='senioradmin.php';
		</script>";
		}else{
			echo "<script type='text/javascript'>
		alert('登录失败，账号或密码错误');
		location.href='login.php';
		</script>";
		exit;
		}
	}
	
	break;





	case 'delUser':
	$sql="DELETE FROM aduser1 WHERE id=".$id;
	$res=$mysqli->query($sql);
	if($res){
		$mes='删除成功';
	}else{
		$mes='删除失败';
	}
	$url='senioradmin.php';
	echo "<script type='text/javascript'>
		alert('{$mes}');
		location.href='{$url}';
		</script>";
		exit;
	break;








	case 'editUser':
		$sql="UPDATE aduser1 SET adname='{$adname}',psd='{$psd}',phonenumber='{$phonenumber}' WHERE id=".$id;
		$res=$mysqli->query($sql);
		if($res){
		$mes='修改成功';
	}else{
		$mes='修改失败';
	}
	$url='senioradmin.php';
	echo "<script type='text/javascript'>
		alert('{$mes}');
		location.href='{$url}';
		</script>";
		exit;
		break;





	case 'editUser1':
		$sql="UPDATE aduser1 SET adname='{$adname}',psd='{$psd}',phonenumber='{$phonenumber}' WHERE id=".$id;
		$res=$mysqli->query($sql);
		if($res){
		$mes='修改成功';
	}else{
		$mes='修改失败';
	}
	$url='admin.php';
	echo "<script type='text/javascript'>
		alert('{$mes}');
		location.href='{$url}';
		</script>";
		exit;
		break;








	case 'addnew':
	$flag=0;
	$sql="INSERT news1(title,addtime,content,flag) VALUES('{$title}','{$addtime}','{$content}',0)";
	$res=$mysqli->query($sql);
	if($res){
		$sql="INSERT timehistroy(addtime) VALUES('{$addtime}')";
	    $res=$mysqli->query($sql);

	    if($res){
	    	echo "<script type='text/javascript'>
		alert('添加成功');
		location.href='admin.php';
		</script>";
	    }else{
	    	echo "<script type='text/javascript'>
		alert('添加失败，未备份日期信息');
		location.href='admin.php';
		</script>";
	    }

	}else{
		echo "<script type='text/javascript'>
		alert('添加失败，请重新尝试');
		location.href='addnews.php';
		</script>";
		exit;
	}

		break;






		case 'intop':
		$id=$_GET['id'];
		$sql="UPDATE news1 SET addtime='{$addtime}' WHERE id='$id'";
		$res=$mysqli->query($sql);
	$url='admin.php';
	echo "<script type='text/javascript'>
		location.href='{$url}';
		</script>";
		exit;
		break;


		case 'outtop':
		$id=$_GET['id'];
		$sql="SELECT * FROM timehistroy WHERE id='$id'";
		$res=$mysqli->query($sql);
		$url='admin.php';
		if($res->num_rows>0){
			while ($row=$res->fetch_assoc()) {
				$addtime=$row['addtime'];
			}
			$sql="UPDATE news1 SET addtime='{$addtime}' WHERE id='$id'";
		    $res=$mysqli->query($sql);
		    echo "<script type='text/javascript'>
		location.href='{$url}';
		</script>";
		}

		
		exit;
		break;



	case 'delnew':
	$id=$_GET['id'];
	$sql="DELETE FROM news1 WHERE id=".$id;
	$res=$mysqli->query($sql);
	if($res){
		$sql="DELETE FROM timehistroy WHERE id=".$id;
	    $res=$mysqli->query($sql);
		$mes='删除成功';
	}else{
		$mes='删除失败';
	}
	$url='admin.php';
	echo "<script type='text/javascript'>
		alert('{$mes}');
		location.href='{$url}';
		</script>";
		exit;
	break;



	case 'editnew':
		$sql="UPDATE news1 SET title='{$title}',content='{$content}' WHERE id=".$id;
		$res=$mysqli->query($sql);
		if($res){
		$mes='修改成功';
	}else{
		$mes='修改失败';
	}
	$url='admin.php';
	echo "<script type='text/javascript'>
		alert('{$mes}');
		location.href='{$url}';
		</script>";
		exit;
		break;









}
?>