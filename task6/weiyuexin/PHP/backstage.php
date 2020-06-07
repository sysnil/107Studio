<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../images/校徽.jpg" type="image/gif" >
		<title>后台管理</title>
		<link rel="stylesheet" href="../css/login.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/index.js"></script>
	</head>
	<body style="width: 100%;min-width: 1200px;background:url(../images/back.jpg)  no-repeat center center;
    background-size:cover;background-attachment:fixed;background-color:green;">
		<div class="addnews">
		 	<h1 style="margin-left: 40%;width: 40%">后台管理界面</h1>
		 	<br><br>
		 	<p style="width: 200px;margin: 0 auto;font-size: 25px;">管理普通管理员</p>
			 	<table border="1" width="500">
			 		 <tr>
			 		 	<td>id</td>
			 		 	<td>username</td>
			 		 	<td>操作</td>
			 		 </tr>
			 		 <?php
			 		 		//从数据库获取用户信息
			 		 		//1、连接数据库
							 include('conn.php');

							//2、执行信息查询
							$sql = "select id,username from register";
							$result = mysqli_query($conn,$sql);

							//3、解析结果集
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>{$row['id']}</td>";	
								echo "<td>{$row['username']}</td>";
								echo "<td> 
								<a href='delete_usercheck.php?id={$row['id']}'>删除</a>      
								<a href='change_admin_message.php?id={$row['id']}'>编辑</a>
								</td>";
								echo "</tr>";
							}

							//4、释放结果集，关闭数据库
							mysqli_close($conn);

			 		 ?>
			 	</table>
			 	<br><br>
			 	<p style="width: 100px;margin: 0 auto;font-size: 25px;">新闻速递</p>
			 	<p style="width: 70px;margin-left: 81.5%;margin-top: -20px;color: red;border:2px solid red;border-radius: 5px;">
			 		<a href="../PHP/add_news.php">发布新闻</a>
			 	</p>
			 	<table border="1" width="1000">
			 		 <tr>
			 		 	<td>序号</td>
			 		 	<td>主题</td>
			 		 	<td>添加时间</td>
			 		 	<td>作者</td>
			 		 	<td>操作</td>
			 		 </tr>
			 		 <?php
			 		 		//从数据库获取用户信息
			 		 		//1、连接数据库
							 include('conn.php');

							//2、执行信息查询
							$sql = "select * from news ORDER BY flag DESC,addtime DESC";
							$result = mysqli_query($conn,$sql);

							//3、解析结果集
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>{$row['id']}</td>";	
								echo "<td>{$row['title']}</td>";
								echo "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";
								echo "<td>{$row['writer']}</td>";
								echo "<td> 
								<a href='delete_newscheck.php?id={$row['id']}'>删除</a>      
								<a href='change_news.php?id={$row['id']}'>编辑</a>
								<a href='istop_news_super.php?id={$row['id']}'>置顶</a>
								<a href='unstick_news_super.php?id={$row['id']}'>取消置顶</a>
								</td>";
								echo "</tr>";
							}

							//4、释放结果集，关闭数据库
							mysqli_close($conn);

			 		 ?>
			 	</table>
			 	<br><br>
			 	<p style="width: 100px;margin: 0 auto;font-size: 25px;">理论学习</p>
			 	<p style="width: 100px;margin-left: 87%;margin-top: -20px;color: red;border:2px solid red;border-radius: 5px;">
			 		<a href="../PHP/add_theory.php">发布理论学习</a>
			 	</p>
			 	<table border="1" width="1200">
			 		 <tr>
			 		 	<td>序号</td>
			 		 	<td>主题</td>
			 		 	<td>添加时间</td>
			 		 	<td>作者</td>
			 		 	<td>操作</td>
			 		 </tr>
			 		 <?php
			 		 		//从数据库获取用户信息
			 		 		//1、连接数据库
							 include('conn.php');

							//2、执行信息查询
							$sql = "select * from theory ORDER BY flag DESC,addtime DESC";
							$result = mysqli_query($conn,$sql);

							//3、解析结果集
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>{$row['id']}</td>";	
								echo "<td>{$row['title']}</td>";
								echo "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";
								echo "<td>{$row['writer']}</td>";
								echo "<td> 
								<a href='delete_theorycheck.php?id={$row['id']}'>删除</a>      
								<a href='change_theory.php?id={$row['id']}'>编辑</a>
								<a href='istop_theory_super.php?id={$row['id']}'>置顶</a>
								<a href='unstick_theory_super.php?id={$row['id']}'>取消置顶</a>
								</td>";
								echo "</tr>";
							}
							//4、释放结果集，关闭数据库
							mysqli_close($conn);
			 		 ?>
			 	</table>
		</div>
		<div class="footer">
			<br><br><br>
			<p>Copyright © 2019 河南大学党委统战部 技术支持<span>河南大学 </span><span>107网站工作室</span><span> 管理后台</span></p>
			<p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
		</div>
	</body>
</html>