<html>
	<head>
		<title>���Ź���ϵͳ</title>
	</head>
	<body>
		<div align="center">
			<?php include("menu.php"); header('content-type:text/html;charset=gb2312');//���뵼���� ?>
			<?php $k=$_GET['k'];?>
			<h3>��������</h3>
			<form action="action.php?action=add&k=<?php echo $k;?>" method="post">
				<table style="width:320px border:0">
					<tr>
						<td align="right">����:</td>
						<td><input type="text" name="title" style="width:500"/></td>
					</tr>
					<tr>
						<td align="right">�ؼ���:</td>
						<td><input type="text" name="keywords" style="width:500"/></td>
					</tr>
					<tr>
						<td align="right">����:</td>
						<td><input type="text" name="author" style="width:500"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">����:</td>
						<td><textarea cols="100" rows="50" name="content"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="���"/>&nbsp;&nbsp;
							<input type="reset" value="����"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>