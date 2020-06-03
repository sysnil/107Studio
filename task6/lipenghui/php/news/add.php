<html>
	<head>
		<title>新闻管理系统</title>
	</head>
	<body>
		<div align="center">
			<?php include("menu.php"); header('content-type:text/html;charset=gb2312');//导入导航栏 ?>
			<?php $k=$_GET['k'];?>
			<h3>发布新闻</h3>
			<form action="action.php?action=add&k=<?php echo $k;?>" method="post">
				<table style="width:320px border:0">
					<tr>
						<td align="right">标题:</td>
						<td><input type="text" name="title" style="width:500"/></td>
					</tr>
					<tr>
						<td align="right">关键字:</td>
						<td><input type="text" name="keywords" style="width:500"/></td>
					</tr>
					<tr>
						<td align="right">作者:</td>
						<td><input type="text" name="author" style="width:500"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">内容:</td>
						<td><textarea cols="100" rows="50" name="content"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="添加"/>&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>