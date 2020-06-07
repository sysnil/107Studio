<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>发布新闻</h3>
		<form action="actionnews.php?act=addnews" method="post">
			<table border="1" width="30%" cellpadding="10" bgcolor="#abcdef">
				<tr>
					<td>标题</td>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<td>作者</td>
					<td><input type="text" name="author"></td>
				</tr>
				<tr>
					<td>添加时间</td>
					<td><input type="int" name="addtime"></td>
				</tr>
				<tr>
					<td>内容</td>
					<td><textarea cols="30" rows="5" name="content"></textarea></td>
				</tr>
				<tr>
					<td colspan="4">
						<input type="submit" value="添加">
						<input type="reset" name="重置">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>