<?php
$mysqli=new mysqli('localhost','root','','admins');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$id=$_GET['id'];
$sql="SELECT id,title,addtime,content,flag FROM news1 WHERE id='$id'";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result){
$row=$mysqli_result->fetch_assoc();
}
?>

<html>
	<head>
		<title>编辑新闻</title>
	</head>
	<body>
			<h3>编辑新闻</h3>
			<form action="doAction.php?act=editnew" method="post">
				<table width="600" border="0">
					<tr>
						<td align="right">id:</td>
						<td><input type="number" name="id" value="<?php echo $row['id'];?>" /></td>
					</tr>
					<tr>
						<td align="right">标题:</td>
						<td><input type="text" name="title" value="<?php echo $row['title'];?>" /></td>
					</tr>
					<tr>
						<td align="right" valign="top">内容:</td>
						<td><textarea cols="25" rows="5" name="content"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="修改"/>&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
	</body>
</html>