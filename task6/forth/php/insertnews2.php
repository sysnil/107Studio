<!DOCTYPE html>
<html>
<head>
	<title>添加</title>
	<meta charset="utf-8" http-equiv="content-type">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: #cceeff;
			font-family: kaiti;
		}
		img{
			width: 100%;
			height: 150px;
		}
		.content{
			height: 520px;
			width: 300px;
			border: thin solid #00bbff;
			border-radius: 8px;
			margin:30px auto;
		}
		.middle form table tr td{
			padding-top: 15px;
		}
		#register{
			border: thin solid #00bbff;
			border-radius: 6px;
			height: 30px;
			width: 40px;
			background: #00bbff;
			color: white;
		}
		#reset{
			border: thin solid #00bbff;
			border-radius: 6px;
			height: 30px;
			width: 40px;
			background: #00bbff;
			color: white;
		}
		input{
			border-radius: 6px;
			border:thin solid #00bbff;
		}
	</style>
</head>
<body>
	<img src="../images/top-bj2.gif">
	<div class="content" align="center">
		<div class="header">
			<h2>添加</h2>
		</div>
		<div class="middle">
			<form action="doinsertnews2.php" method="post">
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
					<td><input type="text" name="title" required="required" placeholder="请输入标题" id="title"></td>
				</tr>
				<tr>
					<td>内容：</td>
					<td><input type="text" name="content" required="required" placeholder="请输入内容" id="content"></td>
				</tr>
				<tr>
					<td>发布时间：</td>
					<td><input type="text" name="releasetime" required="required" placeholder="请输入发布时间" id="releasetime"></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" name="register" id="register" value="添加">
						<input type="reset" name="reset" id="reset" value="重置">
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2"><a href="updatenews2.php">管理界面</a></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
<img src="../images/top-bj2.gif">
</body>
</html>