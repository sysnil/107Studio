<?php

//��1���� ���������ļ�
	require("dbconfig.php");

//��2��������MySQL����ѡ�����ݿ�
	require("common.php");
	$mysqli->set_charset('gb2312');
	header('content-type:text/html;charset=gb2312');
//��3����������Ҫactionֵ�����ж�����������ִ�ж�Ӧ�Ĵ���
	switch($_GET["action"]){
		case "add": //ִ����Ӳ���
			//1. ��ȡҪ��ӵ���Ϣ��������������Ϣ
				$title = $_POST["title"];
				$keywords = $_POST["keywords"];
				$author = $_POST["author"];
				$content = $_POST["content"];
				$k = $_GET["k"];
				$addtime = time();
				header('content-type:text/html;charset=gbk');
				$mysqli->set_charset('gbk');
			//2. ����Ϣ���ˣ�ʡ�ԣ�
			//3. ƴװ���SQL��䣬��ִ����Ӳ���
        		if($k==1||$k==-1){
        		    $sql0 = "insert into news(title,keywords,author,content) values('{$title}','{$keywords}','{$author}','{$content}');";
        		}else{
        		    $sql0 = "insert into xwsd(title,keywords,author,content) values('{$title}','{$keywords}','{$author}','{$content}');";
        		}
        		$mysqli->query($sql0);
			//4. �ж��Ƿ�ɹ�
				$id = mysqli_insert_id($mysqli);//��ȡ�ո������Ϣ������id��ֵ
				if($id>0){
					echo "<h3>������Ϣ��ӳɹ���</h3>";
				}
				echo "<a href='javascript:window.history.back();'>����</a>&nbsp;&nbsp;";
				echo "<a href='../cuser.php'>�������</a>";
				if($k>0)
				    header("Location:../cuser.php");
				else{
				    header("Location:../userList.php");
				}
				break;

		case "del": //ִ��ɾ������
				//1. ��ȡҪɾ����id��
				$id=$_GET['id'];
				$k = $_GET["k"];
				//2. ƴװɾ��sql��䣬��ִ��ɾ������
				if($k>0){
				    $sql = "delete from news where id={$id}";
				}else{
				    $sql = "delete from xwsd where id={$id}";
				}
				$mysqli->query($sql);
				//3. �Զ���ת��������Ž���
				header("Location:../cuser.php");
			break;

		case "update": //ִ���޸Ĳ���
				//1. ��ȡҪ�޸ĵ���Ϣ

				$title = $_POST["title"];
				$keywords = $_POST["keywords"];
				$author = $_POST["author"];
				$content = $_POST["content"];
				$id = $_POST['id'];
				$k= $_GET['k'];
				//2. ����Ҫ�޸ĵ���Ϣ��ʡ�ԣ�
				//3. ƴװ�޸�sql��䣬��ִ���޸Ĳ���
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
				//4. ��ת���������
				header("Location:../cuser.php");
			break;

	}

//��4�����ر���������
	$mysqli->close();?>
