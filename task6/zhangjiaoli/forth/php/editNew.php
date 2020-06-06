<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
include_once 'tool.inc.php';
$link=connect();
//验证是否登录
include_once 'is_manage_login.php';
$id=$_GET['id'];
$sql="SELECT titleName,newContent FROM article WHERE id='{$id}';";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result>0){
    $row=$mysqli_result->fetch_assoc();
}
?>
<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>文章编辑</title>
	</head>
<body>
	<h2>编辑文章</h2>
	<form action="newAction.php?act=editNew&id=<?php echo $id?>" method="post">
	<label style="background-color: #abcdef;width:80%;height:50px;margin-top: 1%;display: inline-block;">
	<input style="width:99.5%;height:50px;" type="text" name="titleName" value="<?php echo $row['titleName']?>"/></label>
	<label style="background-color: #abcdef;width:80%;height:300px;margin-top: 1%;display: inline-block;">
	<textarea rows="100" cols="100" style="width:99.5%;height:300px;" name="newContent"><?php echo $row['newContent']?></textarea></label>
	<span style="display:inline-block;width:30%;height:20px;margin-top: 5px;">
	<input height="20px" width="100%" type="submit" value="确定"/></span>
    </form>
</body>
</html>