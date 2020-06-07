<?php
header("Content-Type: text/html;charset=utf-8");
include('conn.php');

$title = $_POST['title'];
$writer  = $_POST['writer'];
$text  = $_POST['text'];
$addtime = time();

$sql = "INSERT INTO news(title,main,writer,addtime,flag) VALUES('$title','$text','$writer','$addtime','0')";
$result=mysqli_query($conn,$sql);

	if($result){
		echo "<script>alert('发布成功！');location= 'add_news.php'</script>";
	}else{
		//echo("错误描述: " . mysqli_error($conn));
		echo "<script>alert('对不起，发布失败！');location= 'add_news.php'</script>";
	}
mysqli_close($conn);

?>