<?php 
$mysqli=new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
include_once 'tool.inc.php';
$link=connect();
//验证是否登录
include_once 'is_manage_login.php';
$name=$_GET['name']; //原来的用户名
//echo $name;
$sql="SELECT username,password FROM users WHERE username='{$name}';";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result>0){
    $row=$mysqli_result->fetch_assoc();
}
//print_r($row);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>用户列表管理</title>
	</head>
<body>
    <h2>修改用户</h2>
    <form action="addAction.php?act=editUser&name1=<?php echo $row['username']?>" method="post">
         <table border="1" cellpadding="0" cellspacing="0" bgcolor="#ABCDEF" width="50%">
             <tr>
                 <td>用户名</td>
                 <td><input type="text" name="username" id="" value="<?php echo $row['username'];?>" required="required"/></td>
             </tr>
             <tr>
                 <td>密码</td>
                 <td><input type="password" name="password" id="" placeholder="请输入密码" required="required"/></td>
             </tr>
             <tr>
                 <td colspan="2"><input type="submit" value="编辑用户"/></td>
             </tr>
         </table>
    </form>
</body>