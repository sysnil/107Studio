<?php
require_once "common.php";
session_start();
$account = $_GET['username'];
$_SESSION['username'] = $account;
$account=$_SESSION['username'];
$sql="SELECT id,account FROM user where account='{$account}'";
$mysqli_result=$mysqli->query($sql);
$row=$mysqli_result->fetch_assoc();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>cuser</title>
	<style type="">
        a{
        	text-decoration:none;
        	color:black;
        }
    </style>
	<script type="text/javascript">
    </script>
    <script type="text/javascript">
			function dodel(id,k){
				if(confirm("确定要删除吗？")){
					if(k>0){
						window.location="news/action.php?action=del&k=1&id="+id;
					}else{
						window.location="news/action.php?action=del&k=-1&id="+id;
					}
				}
			}
	</script>
</head>
<body style="a:text-decoration:none">
<h2 style="text-align: center">统战部后台-<a style="font-size: 20px" href='login.php'>退出</a></h2>
	<div style="text-align: center" >
	<a href="#.php">返回首页</a>
	</div>
	<hr/ style="width:90%">
	<h2 style="text-align:center;">用户信息</h2>
	<table style="margin:0 auto;" border='1'  width='25%' >
		<tr>
			<td>用户名</td>
			<td>操作</td>
		</tr>
		<tr>
			<td><?php echo $row['account'];?></td>
			<td><a href="editUser.php?id=<?php echo $row['id'];?>&k=-1">更新</a>|<a href='doAction.php?act=delUser&id=<?php echo $row['id'];?>'>注销</a></td>
		</tr>
	</table>
	<div style="margin:0 auto;width:1000px;">
    	<h3 style="text-align:center">理论学习-<a href='news/add.php?k=1'>添加内容</a></h3>
    	<table style="width:80%;margin:0 auto"border="1px" >
    		<?php
    		$sql = "select id,title from news ORDER BY flag DESC,top DESC,addtime DESC";
    		$result=$mysqli->query($sql);

			if($result && $result->num_rows>0){
			    while($row=$result->fetch_assoc()){
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td><a href='news/details.php?id={$row['id']}&k=1'>{$row['title']}</a></td>";
					echo "<td><a href='news/edit.php?id={$row['id']}&k=1'>编辑</a></td>";
					echo "<td><a href='javascript:dodel({$row['id']},1)'>删除</a></td>";
					echo "<td><a href='istop.php?id={$row['id']}&k=1'>置顶</a></td>";
					echo "</tr>";
				}
			}?>
    	</table>
    	<h3 style="text-align:center">新闻速递-<a href='news/add.php?k=2'>添加内容</a></h3>
    	<table style="width:80%;margin:0 auto"border="1px" >
    		<?php
    		$sql = "select id,title from xwsd ORDER BY flag DESC,top DESC,addtime DESC";
    		$result=$mysqli->query($sql);

			if($result && $result->num_rows>0){
			    while($row=$result->fetch_assoc()){
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td><a href='news/details.php?id={$row['id']}&k=-1'>{$row['title']}</a></td>";
					echo "<td><a href='news/edit.php?id={$row['id']}&k=-1'>编辑</a></td>";
					echo "<td><a href='javascript:dodel({$row['id']},-1)'>删除</a></td>";
					echo "<td><a href='istop.php?id={$row['id']}&k=2'>置顶</a></td>";
					echo "</tr>";
				}
			}?>
    	</table>
    </div>
</body>
</html>>