<?php
header("Content-Type: text/html;charset=utf-8");
include('conn.php');

$id    = $_POST['id'];
$title = $_POST['title'];
$text  = $_POST['text'];
$addtime = time();

$sql="update news set title='$title',main='$text' where id={$id}";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert('更新成功！');location= 'backstagecommon.php'</script>";
	}else{
		echo "<script>alert('对不起，更新失败！');location= 'backstagecommon.php'</script>";
	}
mysqli_close($conn);

?>