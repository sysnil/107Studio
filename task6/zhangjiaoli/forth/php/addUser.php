<?php 
include_once 'tool.inc.php';
$link=connect();
//验证是否登录
include_once 'is_manage_login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>用户列表管理</title>
	</head>
<body>
    <h2>添加用户</h2>
    <form action="addAction.php?act=addUser" method="post">
         <table border="1" cellpadding="0" cellspacing="0" bgcolor="#ABCDEF" width="50%">
             <tr>
                 <td>用户名</td>
                 <td><input type="text" name="username" id="" placeholder="请输入合法用户名" required="required"/></td>
             </tr>
             <tr>
                 <td>密码</td>
                 <td><input type="password" name="password" id="" placeholder="请输入密码" required="required"/></td>
             </tr>
             <tr>
                 <td colspan="2"><input type="submit" value="添加用户"/></td>
             </tr>
         </table>
    </form>
</body>