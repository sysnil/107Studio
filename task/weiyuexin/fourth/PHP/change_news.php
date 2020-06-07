<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../images/校徽.jpg" type="image/gif" >
		<title>更新新闻</title>
		<link rel="stylesheet" href="../css/login.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/index.js"></script>
	</head>
	<body style="width: 100%;min-width: 1200px;background:url(../images/back.jpg)  no-repeat center center;
    background-size:cover;background-attachment:fixed;background-color:green;">
		<div class="addnews">
		 	<h1 style="margin-left: 42%;">更新新闻</h1>
		 	<br>
		 	<p style="margin: 0 auto;width: 10%;"><a href="../HTML/news.php">查看新闻列表</a></p><br>
		 	<?php
		 	//连接数据库
		 	include('conn.php');
		 	//查询语句
		 	$sql = "select * from news where id={$_GET['id']}";
		 	//执行查询语句
		 	$result=mysqli_query($conn,$sql);
		 	if (!$result) {
    			printf("Error: %s\n", mysqli_error($conn));
   				 exit();
			}
		 	//解析结果集
		 	$row = mysqli_fetch_assoc($result);
		 	//关闭数据库
		 	mysqli_close($conn);
		 	?>
		 	<form action="change_newscheck.php" method="post">
			 	<table border="1" width="400">
			 		<input type="hidden" name="id" value="<?php  echo $row['id'] ; ?>">
			 		<tr>
			 			<td align="right">标题:</td>
			 			<td><input type="text" name="title" value="<?php  echo $row['title'] ; ?>"></td>
			 		</tr>
			 		<tr class="text">
			 			<td align="right">内容:</td>
			 			<td><textarea rows="15" cols="40" name="text" >
			 				<?php  echo $row['main'] ; ?>
			 			</textarea>>
			 			</td>
			 		</tr>
			 		<tr class="sub">
			 			<td colspan="2" align="center">
			 				<input type="submit" name="submit" value="修改">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 				<input type="reset" value="重置">
			 			</td>
			 		</tr>
			 	</table>
			</form>
		</div>
		<div class="footer">
			<br><br><br>
			<p>Copyright © 2019 河南大学党委统战部 技术支持<span>河南大学 </span><span>107网站工作室</span><span> 管理后台</span></p>
			<p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
		</div>
	</body>
</html>