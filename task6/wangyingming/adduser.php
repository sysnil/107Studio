
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>document</title>
	</head>
	<body>
		<h2>添加用户</h2>
		<form action="operation.php?act=adduser" method='post'>
			<table border="5" cellpadding="5" bgcolor="#abcdef" width="80%">
				<tr>
					<td>用户名</td>
					<td><input type="text" name="username" id="" placeholder="请输入合法用户名" required="required"></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="password" name="password" id="" placeholder="请输入合法密码" required="required"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="添加用户"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
