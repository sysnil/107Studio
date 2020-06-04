<html>
	<head>
		<title>新闻管理系统</title>
	</head>
	<body>
		<div align=center>
			<?php
				include("menu.php"); //导入导航栏
				//1. 导入配置文件
				require("dbconfig.php");
				require("common.php");
				header('content-type:text/html;charset=gb2312');
				$mysqli->set_charset('gbk');
				//2. 连接MySQL、选择数据库

				//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
				$id=$_GET['id'];
				$k=$_GET['k'];
				if($k>0){
				    $sql = "select * from news where id=$id";
					$result=$mysqli->query($sql);
				}else{
				    $sql = "select * from xwsd where id=$id";
				    $result=$mysqli->query($sql);
                }


				//4. 判断是否获取到了要修改的信息
					if($result && $result->num_rows>0){
						$news = $result->fetch_assoc();
					}else{
						die("没有找到要修改的信息！");
					}
			?>

			<h3>编辑新闻</h3>
			<form action="action.php?action=update&k=<?php echo $k;?>" method="post">
				<input type="hidden" name="id" value="<?php echo $news['id']; ?>"/>
				<table style="width:320px border:0">
					<tr>
						<td align="right">标题:</td>
						<td><input type="text" style="width:700" name="title" value="<?php echo $news['title']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" >关键字:</td>
						<td><input type="text" style="width:700" name="keywords" value="<?php echo $news['keywords']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" >作者:</td>
						<td><input type="text" style="width:100" name="author" value="<?php echo $news['author']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">内容:</td>
						<td><textarea cols="100" rows="70" name="content"><?php echo $news['content']; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="编辑"/>&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>