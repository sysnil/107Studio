<html>
	<head>
		<title>添加新闻</title>
	</head>
	<body>
			<h3>添加新闻</h3>
			<form action="doAction.php?act=addnew" method="post">
				<table width="600" border="0">
					<tr>
						<td align="right">标题:</td>
						<td><input type="text" name="title"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">内容:</td>
						<td><textarea cols="25" rows="5" name="content"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="添加"/>&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
	</body>
</html>