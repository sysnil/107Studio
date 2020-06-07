<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>管理我的信息</title>
	</head>
<style type="text/css">
	h3{
		text-align: center;
	}
   table
        {
        	font-family: "宋体";
            border-collapse: collapse;
            margin: 0 auto;
            text-align: center;
        }
        table td, table th
        {
            border: 1px solid #cad9ea;
            color: #666;
            height: 30px;
        }
        table thead th
        {
            background-color: #CCE8EB;
            width: 100px;
        }
        table tr:nth-child(odd)
        {
            background: #fff;
        }
        table tr:nth-child(even)
        {
            background: #F5FAFA;
        }
</style>
	<body>
		<h3>管理我的信息</h3>
		<table  border="1" with="500">
			<tr><th>用户名</th>
				<th>用户密码</th>
				<th>操作</th>
			</tr>
		<?php
		 $myname=$_GET['myname'];
     $link =@new mysqli('localhost','root','','HRM');
			        $link->set_charset('utf8');
			        if($link->connect_errno){
			        die('CONNECT_ERROR:'.$link->connect_errno);
			        }
    $sql_select_1="SELECT *FROM User WHERE username='$myname'";    
    $res_1 = $link->query($sql_select_1);  
    $row_1= mysqli_fetch_assoc($res_1);
     error_reporting(E_ALL^E_NOTICE);
    if($myname==$row_1['username']){
      		echo "<tr>";
      		echo "<td>{$row_1['username']}</td>";
      		echo "<td>{$row_1['password']}</td>";
      		echo "<td><a href='manage_action.php?action=user_del&id={$row_1['id']}'>删除</a>  
      			<a href='data_update.php?id={$row_1['id']}&name={$row_1['username']}&add_type=1'>修改</a></td>";
      		echo "</tr>";
	      	echo "</table>";
    }else{
    	$sql_select_2="SELECT *FROM SuperUser WHERE SuperUsername='$myname'";    
	    $res_2 = $link->query($sql_select_2);  
	    $row_2= mysqli_fetch_assoc($res_2);
	    if($myname==$row_2['SuperUsername']){
	      		echo "<tr>";
	      		echo "<td>{$row_2['SuperUsername']}</td>";
	      		echo "<td>{$row_2['password']}</td>";
	      		echo "<td><a href='manage_action.php?action=superuser_del&id={$row_2['id']}'>删除</a>  
	      			<a href='data_update.php?id={$row_2['id']}&name={$row_2['SuperUsername']}&add_type=3'>修改</a>
	      			<a href='manage_action.php?action=superuser_add'>添加管理员</a></td>";
	      		echo "</tr>";
	      		echo "</table>";
	    $sql="select *from User";
	    $res=$link->query($sql);
	            echo "<h3>管理普通管理员</h3>";
	            echo "<table border=\"1\" with=\"500\">";
			    echo  "<tr><th>用户名</th>";
				echo "<th>用户密码</th>";
				echo "<th>操作</th>";
			echo "</tr>";
	    while($row=mysqli_fetch_assoc($res)){
	    	    echo "<tr>";
	      		echo "<td>{$row['username']}</td>";
	      		echo "<td>{$row['password']}</td>";
	      		echo "<td><a href='manage_action.php?action=user_del&id={$row['id']}'>删除</a>  
	      			<a href='data_update.php?id={$row['id']}&name={$row['username']}&add_type=2'>修改</a></td>";
	      		echo "</tr>";
	        }
	        echo "</table>";
	    }
    }
    ?>
   
	</body>
</html>