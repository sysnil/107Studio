<?php

//（1）、 导入配置文件
	require("dbconfig.php");

//（2）、连接MySQL、并选择数据库
	require("common.php");
	$mysqli->set_charset('gb2312');
	header('content-type:text/html;charset=gb2312');
//（3）、根据需要action值，来判断所属操作，执行对应的代码
	switch($_GET["action"]){
		case "add": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
				$title = $_POST["title"];
				$keywords = $_POST["keywords"];
				$author = $_POST["author"];
				$content = $_POST["content"];
				$k = $_GET["k"];
				$addtime = time();
				header('content-type:text/html;charset=gbk');
				$mysqli->set_charset('gbk');
			//2. 做信息过滤（省略）
			//3. 拼装添加SQL语句，并执行添加操作
        		if($k==1||$k==-1){
        		    $sql0 = "insert into news(title,keywords,author,content) values('{$title}','{$keywords}','{$author}','{$content}');";
        		}else{
        		    $sql0 = "insert into xwsd(title,keywords,author,content) values('{$title}','{$keywords}','{$author}','{$content}');";
        		}
        		$mysqli->query($sql0);
			//4. 判断是否成功
				$id = mysqli_insert_id($mysqli);//获取刚刚添加信息的自增id号值
				if($id>0){
					echo "<h3>新闻信息添加成功！</h3>";
				}
				echo "<a href='javascript:window.history.back();'>返回</a>&nbsp;&nbsp;";
				echo "<a href='../cuser.php'>浏览新闻</a>";
				if($k>0)
				    header("Location:../cuser.php");
				else{
				    header("Location:../userList.php");
				}
				break;

		case "del": //执行删除操作
				//1. 获取要删除的id号
				$id=$_GET['id'];
				$k = $_GET["k"];
				//2. 拼装删除sql语句，并执行删除操作
				if($k>0){
				    $sql = "delete from news where id={$id}";
				}else{
				    $sql = "delete from xwsd where id={$id}";
				}
				$mysqli->query($sql);
				//3. 自动跳转到浏览新闻界面
				header("Location:../cuser.php");
			break;

		case "update": //执行修改操作
				//1. 获取要修改的信息

				$title = $_POST["title"];
				$keywords = $_POST["keywords"];
				$author = $_POST["author"];
				$content = $_POST["content"];
				$id = $_POST['id'];
				$k= $_GET['k'];
				//2. 过滤要修改的信息（省略）
				//3. 拼装修改sql语句，并执行修改操作
				header('content-type:text/html;charset=gbk');
				$mysqli->set_charset('gb2312');
				if($k==1){
				    $sql1="update news set title='{$title}',keywords='{$keywords}',author='{$author}',content='{$content}' where id='{$id}'";
				}else{
				    $sql1="update xwsd set title='{$title}',keywords='{$keywords}',author='{$author}',content={$content} where id='{$id}'";
				}
				echo $sql1;
				echo "<hr>";
				if($mysqli->query($sql1)){
				    echo "y";
				}else{
				    echo "n";
				}
				//4. 跳转回浏览界面
				header("Location:../cuser.php");
			break;

	}

//（4）、关闭数据连接
	$mysqli->close();?>
