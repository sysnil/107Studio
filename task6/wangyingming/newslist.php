<?php
$host='localhost';
$user='root';
$pwd='';
$dbname='newsdb';

$link=new mysqli($host,$user,$pwd,$dbname);
$link->set_charset('utf8');
if($link->connect_errno)
{
	die('失败'.$link->connect_error);
}
$sql="select * from newsboard;";
$res=$link->query($sql);
// var_dump($res);
if($res)
{
	// echo $res->num_rows;
	//$rows=$res->fetch_all(MYSQLI_NUM);
	//$rows=$res->fetch_all(MYSQLI_BOTH);
	$rows=$res->fetch_all(MYSQLI_ASSOC);
	// print_r($rows);
}
//print_r($rows);
//var_dump($rows);
 $res->free();
//释放结果集
$link->close();
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>document</title>
		<style type="text/css">
			a{
				text-decoration: none;
				color: blue;
			}
		</style>
	</head>
	<body>
		<h2>新闻列表-<a href="addnews.php">添加新闻</a></h2>
		<table  border="1" width="80%" cellpadding="0" bgcolor="#abcdef" >
			<tr>
				<td>编号</td>
				<td>标题</td>
				<td>作者</td>
				<td>添加时间</td>
				<td>内容</td>
				<td>操作</td>
			</tr>
			<?php $i=1;foreach($rows as $row):?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['author'];?></td>
				<td><?php echo $row['addtime'];?></td>
				<td><?php echo $row['content'];?></td>
				<td><a href="actionnews.php?act=delnews&id=<?php echo $row['id'];?>">删除</a></td>
			</tr>
			<?php $i++;endforeach;?>
		</table>
	</body>
</html>