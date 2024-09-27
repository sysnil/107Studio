<html>
	<head>
		<title>新闻管理系统</title>
		<script type="text/javascript">
			function dodel(id){
				if(confirm("确定要删除吗？")){
					window.location="action.php?action=del&id="+id;
				}
			}

		</script>
	</head>
	<body>
		<div align="center">
			<?php
			include("menu.php"); //导入导航栏  ?>

			<h3>浏览新闻</h3>
			<table style="width:880" border="1px">
				<tr>
					<th>新闻id</th><th>新闻标题</th><th>关键字</th>
					<th>作者</th><th>发布时间</th><th>新闻内容</th>
				</tr>
				<?php
					//1.导入配置文件
						require("dbconfig.php");
						require("../common.php");
						header('content-type:text/html;charset=gb2312');
					//2.连接MySQL，选择数据库
						$mysqli->set_charset('gbk');
					//3. 执行查询，并返回结果集
						$id=$_GET['id'];
						$k=$_GET['k'];
						if($k>0){
						    $sql = "select * from news where id=$id";
						    $result=$mysqli->query($sql);
						}else{
						    $sql = "select * from xwsd where id=$id";
						    $result=$mysqli->query($sql);
						}
						$result=$mysqli->query($sql);

					//4. 解析结果集,并遍历输出

					if($result && $result->num_rows>0){
					   $row=$result->fetch_assoc();
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['title']}</td>";
							echo "<td>{$row['keywords']}</td>";
							echo "<td>{$row['author']}</td>";
							echo "<td>{$row['addtime']}</td>";
							echo "<td>{$row['content']}</td>";
							echo "</tr>";
					}

					//5. 释放结果集
						$mysqli->close();
				?>
			</table>
		</div>
	</body>
</html>