<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>addUser</title>
</head>
<body>
<?php
header('content-type:text/html;charset=GB2312');?>
	<h2>����û�</h2>
	<form action="doAction.php?act=addUser&in=-1" method='post'>
		<table border='1' cellpadding='0' cellspacing='0' bgcolor='#ABCDEF' width='80%'>
			<tr>
				<td>�û���</td>
				<td><input type="text" name="username" id=""  placeholder='������Ϸ��û���' required='required'/></td>
			</tr>
			<tr>
				<td>����</td>
				<td><input type="password" name="password" id=""  placeholder='����������' required='required'/></td>
			</tr>
			<tr>
				<td colspan='2'><input type="submit" value="����û�" /></td>
			</tr>
		</table>
	</form>



</body>
</html>