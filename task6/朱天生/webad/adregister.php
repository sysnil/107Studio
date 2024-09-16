<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>超级管理员注册页面</title>
</head>
<body>
<h2>超级管理员注册</h2>
<form action="doAction.php?act=addAdmin"method='post'>
	<table border="1" cellpadding="0" cellspacing="0" bgcolor="#ABCDEF" width="80%">
		<tr>
			<td>用户名</td>
			<td><input type="text" name="adname" placeholder="请输入合法用户名" required="required"></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type="password" name="psd" placeholder="请输入密码" required="required"></td>
		</tr>
		<tr>
			<td>电话号码</td>
			<td><input type="number" name="phonenumber" placeholder="请输入电话号码" required="required"></td>
		</tr>
		<tr>
			<td>
				验证：
			</td>
			<td>
				<input type="text" size="6" name="yanzheng" required="required" />
				<img src="code.php" onclick="this.src='code.php?id='+Math.random()"/> <br/><br/>
			</td>
		</tr>
		<tr>
			<td><input type="submit" value="添加超级管理员" name=""></td>
		</tr>
	</table>
</form>
</body>
</html>