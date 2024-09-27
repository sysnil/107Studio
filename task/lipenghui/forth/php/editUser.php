<?php
require_once "common.php";
header('content-type:text/html;charset=GB2312');
$id=$_GET['id'];
$k=$_GET['k'];
$sql="SELECT id,account,password FROM user WHERE id=".$id;
$mysqli_result=$mysqli->query($sql);
if($mysqli_result /* && $mysqli_result->num_rows>0 */){
	$row=$mysqli_result->fetch_assoc();
}
//print_r($row);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<h2 style="text-align: center">编辑用户</h2>
	<form action="doAction.php?act=editUser&id=<?php echo $id;?>" method='post' style="width:600px;margin:0 auto;">
		<?php session_start();$_SESSION['k']=$k;?>
		<table border='1' cellpadding='0' cellspacing='0' bgcolor='#ABCDEF' width="600px">
			<tr>
				<td>用户名</td>
				<td><input style="width:538px" type="text" name="username" id="" value="<?php echo $row['username'];?>" required='required'/></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input style="width:538px" type="password" name="password" id=""  placeholder='请输入密码' required='required'/></td>
			</tr>
			<tr>
				<td colspan='4' ><input style="display:block;margin:0 auto" type="submit" value="编辑用户" /></td>
			</tr>
		</table>
	</form>



</body>
</html>