<html>
	<head>
		<title>���Ź���ϵͳ</title>
	</head>
	<body>
		<div align=center>
			<?php
				include("menu.php"); //���뵼����
				//1. ���������ļ�
				require("dbconfig.php");
				require("common.php");
				header('content-type:text/html;charset=gb2312');
				$mysqli->set_charset('gbk');
				//2. ����MySQL��ѡ�����ݿ�

				//3. ��ȡҪ�޸���Ϣ��id�ţ���ƴװ�鿴sql��䣬ִ�в�ѯ����ȡҪ�޸ĵ���Ϣ
				$id=$_GET['id'];
				$k=$_GET['k'];
				if($k>0){
				    $sql = "select * from news where id=$id";
					$result=$mysqli->query($sql);
				}else{
				    $sql = "select * from xwsd where id=$id";
				    $result=$mysqli->query($sql);
                }


				//4. �ж��Ƿ��ȡ����Ҫ�޸ĵ���Ϣ
					if($result && $result->num_rows>0){
						$news = $result->fetch_assoc();
					}else{
						die("û���ҵ�Ҫ�޸ĵ���Ϣ��");
					}
			?>

			<h3>�༭����</h3>
			<form action="action.php?action=update&k=<?php echo $k;?>" method="post">
				<input type="hidden" name="id" value="<?php echo $news['id']; ?>"/>
				<table style="width:320px border:0">
					<tr>
						<td align="right">����:</td>
						<td><input type="text" style="width:700" name="title" value="<?php echo $news['title']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" >�ؼ���:</td>
						<td><input type="text" style="width:700" name="keywords" value="<?php echo $news['keywords']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" >����:</td>
						<td><input type="text" style="width:100" name="author" value="<?php echo $news['author']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">����:</td>
						<td><textarea cols="100" rows="70" name="content"><?php echo $news['content']; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="�༭"/>&nbsp;&nbsp;
							<input type="reset" value="����"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>