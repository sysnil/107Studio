<?php
header("Content-Type: text/html;charset=utf-8");
include('conn.php');

$title = $_POST['title'];
$text  = $_POST['text'];
$writer =$_POST['writer'];
$addtime = time();

$sql = "INSERT INTO theory(title,main,writer,addtime,flag) VALUES('$title','$text','$writer','$addtime','0')";
//mysqli_query($conn,$sql);
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('发布成功！');location= 'add_theory.php'</script>";
	}else{
		echo "<script>alert('对不起，发布失败！');location= 'add_theory.php'</script>";
	}
mysqli_close($conn);

?>