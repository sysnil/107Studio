<?php 
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
include_once 'tool.inc.php';
$link=connect();
//验证是否登录
include_once 'is_manage_login.php';
$sql="SELECT username,password FROM users";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
    while($row=$mysqli_result->fetch_assoc()){
        $rows[]=$row;
    }
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
    <h2>用户列表-<a href="addUser.php">添加用户</a></h2>
    <table border='1' cellspacing='0' cellpadding='0' width="80%" bgcolor="#ABCDEFG">
       <tr>
           <td>编号</td>
           <td>用户名</td>
           <td>密码</td>
           <td>操作</td>
       </tr>
       <?php $i=1; foreach($rows as $row):?>
       <tr>
           <td><?php echo $i;?></td>
           <td><?php echo $row['username'];?></td>
           <td><?php echo $row['password'];?></td>
           <td><a href="editUser.php?name=<?php echo $row['username'];?>">修改</a>|<a href="addAction.php?act=delUser&name=<?php echo $row['username'];?>">删除</a></td>
       </tr>
       <?php $i++; endforeach;?>
    </table>
</body>