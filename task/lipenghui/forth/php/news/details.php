<html>
	<head>
		<title>���Ź���ϵͳ</title>
		<script type="text/javascript">
			function dodel(id){
				if(confirm("ȷ��Ҫɾ����")){
					window.location="action.php?action=del&id="+id;
				}
			}

		</script>
	</head>
	<body>
		<div align="center">
			<?php
			include("menu.php"); //���뵼����  ?>

			<h3>�������</h3>
			<table style="width:880" border="1px">
				<tr>
					<th>����id</th><th>���ű���</th><th>�ؼ���</th>
					<th>����</th><th>����ʱ��</th><th>��������</th>
				</tr>
				<?php
					//1.���������ļ�
						require("dbconfig.php");
						require("../common.php");
						header('content-type:text/html;charset=gb2312');
					//2.����MySQL��ѡ�����ݿ�
						$mysqli->set_charset('gbk');
					//3. ִ�в�ѯ�������ؽ����
						$id=$_GET['id'];
						$k=$_GET['k'];
						if($k>0){
						    $sql = "select * from news where id=$id";
						    $result=$mysqli->query($sql);
						}else{
						    $sql = "select * from xwsd where id=$id";
						    $result=$mysqli->query($sql);
						}
						$result=$mysqli->query($sql);

					//4. ���������,���������

					if($result && $result->num_rows>0){
					   $row=$result->fetch_assoc();
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['title']}</td>";
							echo "<td>{$row['keywords']}</td>";
							echo "<td>{$row['author']}</td>";
							echo "<td>{$row['addtime']}</td>";
							echo "<td>{$row['content']}</td>";
							echo "</tr>";
					}

					//5. �ͷŽ����
						$mysqli->close();
				?>
			</table>
		</div>
	</body>
</html>