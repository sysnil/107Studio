<?php
session_start();
$mysqli=new mysqli('localhost','root','','news');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$id=$_GET['id'];
$sql="SELECT id,title,content,releasetime,istop FROM news2 WHERE id=".$id;
$mysqli_result=$mysqli->query($sql);
if($mysqli_result){
$row=$mysqli_result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>修改</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: #cceeff;
			font-family: kaiti;
			color: #0066ff;
		}
		table{
			border: thin solid #5599ff;
			margin-top: 50px;
			cursor: pointer;
			text-align: center;
			border-radius: 6px;
		}
		td{
			border:thin solid #5599ff;
		}
		img{
			width: 100%;
			height: 150px;
		}
		a{
			text-decoration: none;
		}
		#button{
			background: #5599ff;
			border: thin solid #5599ff;
			border-radius: 6px;
		}
		input{
			background: #cceeff;
			border: thin solid #cceeff;
			border-radius: 6px;
		}
	</style>
</head>
<body>
	<img src="../images/top-bj2.gif">
	<a href="updatenews2.php">返回管理页面</a>
<center>	
<form action="update2news.php?action=superuser&id=<?php echo $id;?>" method="post">
	<table>
		 
		        <tr>
					<td>置顶：</td>
					<td colspan="3" align="center">
						<input type="radio" name="istop" value="1">是
						<input type="radio" name="istop" value="0" checked="checked">否
					</td>
				</tr>
		        <tr>
					<td>标题：</td>
					<td><input type="text" name="title" required="required" value="<?php echo $row['title']?>" id="title"></td>
				</tr>
				<tr>
					<td>内容：</td>
					<td><input type="content" name="content" required="required" id="content" value="<?php echo $row['content']?>"></td>
				</tr>
				<tr>
					<td>发布时间：</td>
					<td><input type="text" name="releasetime" required="required" value="<?php echo $row['releasetime']?>" id="qq"></td>
				</tr>
				<tr>
			        <td colspan="2"><input type="submit" value="update" name="button" id="button"></td>
		        </tr>

	</table>
</form>
</center>
</body>
</html>