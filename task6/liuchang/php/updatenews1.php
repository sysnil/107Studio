
<?php
session_start();
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','news');
if($mysqli->connect_errno){
	die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$sql="SELECT id,title,content,releasetime,istop FROM news1";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
	while($row=$mysqli_result->fetch_assoc()){
		$rows[]=$row;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>新闻管理</title>
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
	</style>
</head>
<body>
	<img src="../images/top-bj2.gif">
	<a href="loginsucc.php">返回上一页面</a>
	<center>
<form>
	<table>
		<tr>
			<td>序号</td>
			<td>标题</td>
			<td>内容</td>
			<td>发布时间</td>
			<td>置顶</td>
			<td>操作</td>
		</tr>
		<?php $i=1; foreach($rows as $row):?>
			<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['title'];?></td>
			<td><?php echo $row['content'];?></td>
			<td><?php echo $row['releasetime'];?></td>
			<td>
			<?php if($row['istop']){
               echo '<a href="top.php?istop=0&id='.$row['id'].'">取消</a>';
           }else{
                   echo '<a href="top.php?istop=1&id='.$row['id'].'">置顶</a>';
               }
               ?>
           </td>
			<td><a href="deletenews1.php?action=deletenews&id=<?php echo $row['id'];?>">删除</a>|<a href="doupdatenews1.php?id=<?php echo $row['id'];?>">修改</a></td>
		</tr>
		<?php $i++; endforeach;?>
		<a href="insertnews1.php">添加新闻</a>
	</table>
</form>
</center>
</body>
</html>