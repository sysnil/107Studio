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
		<div>
			<?php include("menu.php"); //���뵼����  ?>

			<h3>�������</h3>
			<table width="880" border="1">
				<tr>
					<th>����id</th><th>���ű���</th><th>�ؼ���</th>
					<th>����</th><th>����ʱ��</th><th>��������</th>
					<th>����</th>
				</tr>
				<?php
					//1.���������ļ�
						require("dbconfig.php");

					//2.����MySQL��ѡ�����ݿ�
						$link = @mysql_connect(HOST,USER,PASS) or die("���ݿ�����ʧ�ܣ�");
						mysql_select_db(DBNAME,$link);

					//3. ִ�в�ѯ�������ؽ����
						$sql = "select * from news order by addtime desc";
						$result = mysql_query($sql,$link);

					//4. ���������,���������
						while($row = mysql_fetch_assoc($result)){
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['title']}</td>";
							echo "<td>{$row['keywords']}</td>";
							echo "<td>{$row['author']}</td>";
							echo "<td>".date("Y-m-d",$row['addtime'])."</td>";
							echo "<td>{$row['content']}</td>";
							echo "<td>
								<a href='javascript:dodel({$row['id']})'>ɾ��</a>
								<a href='edit.php?id={$row['id']}'>�޸�</a></td>";
							echo "</tr>";
						}
					//5. �ͷŽ����
						mysql_free_result($result);
						mysql_close($link);
				?>
			</table>
		</div>
	</body>
</html>