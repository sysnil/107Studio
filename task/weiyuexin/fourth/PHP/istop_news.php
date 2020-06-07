<?php

//连接数据库
include('conn.php');
$id = $_GET['id'];
$sql = "update news set flag=0";
$sql2 = "update news set flag=1 where id = '{$id}'";
$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);

if($result && $result2){
		echo "<script>alert('置顶成功！');location= 'backstagecommon.php'</script>";
	}else{
		echo "<script>alert('对不起，置顶失败！');location= 'backstagecommon.php'</script>";
	}

//关闭数据库
mysqli_close($conn);
?>