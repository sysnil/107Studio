<?php
$conn=mysqli_connect('localhost','root','','user') or die("error connecting") ; //连接数据库
session_start(); //声明变量
$username = isset($_SESSION['user']) ? $_SESSION['user'] : ""; 
$sql1 ="select * from usertext where username='$username' ;"; //SQL语句
$sql2 ="select * from superuser where username='$username' ;";
$result1 = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);
 //查询

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人信息</title>
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
	<a href="login.php">返回登录页面</a>
	<center>
<div class="container">
    <table class="data" >
        <tr>
            <td>序号</td>
            <td>用户名</td>
            <td>密码</td>
            <td>性别</td>
            <td>qq</td>
            <td>邮箱</td>
            <td>电话</td>
            <td>地址</td>
            <td>操作</td>
        </tr>
            <?php
                while($row = mysqli_fetch_array($result1))
                {
                    if($username==$row['username'])
                    {
                    echo "<tr>" ;
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "<td>".$row['sex']."</td>";
                    echo "<td>".$row['qq']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['phone']."</td>";
                    echo "<td>".$row['address']."</td>";
                    $id=$row['id'];
                    echo "<td><a href=myupdate1.php?id=$id>修改</a></td>";
                    echo " </tr>";
                    }
                }
                 while($row = mysqli_fetch_array($result2))
                {
                    
                    if($username==$row['username'])
                    {
                    echo "<tr>" ;
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "<td>".$row['sex']."</td>";
                    echo "<td>".$row['qq']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['phone']."</td>";
                    echo "<td>".$row['address']."</td>";
                    $id=$row['id'];
                    echo "<td><a href=myupdate1.php?id=$id>修改</a></td>";
                    echo " </tr>";
                    }
                }
            ?>


    </table>
</div>
</center>
</body>
</html>