<?php
header('content-type:text/html;charset=utf-8');
$mysqli=@new mysqli('localhost','root','','news');
if($mysqli->connect_errno){
    die('Connect Error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$id=$_GET['id'];
//支持变量的语法
$sql="SELECT content FROM news1 WHERE id='{$id}';";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
    $row=$mysqli_result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>正文-统战部</title>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<link rel="stylesheet" type="text/css" href="../css/download.css">
	<script type="text/javascript" src="https://www.imooc.com/static/lib/jquery/1.9.1/jquery.js"></script>
	<script type="text/javascript" src="../js/download-contact.js"></script>
</head>
<body>
<!--头部-->
<div class="header">
	<img src="../images/top-bj2.gif">
	<div class="set">
		<span class="homepage">设为首页</span>
		<span>|</span>
		<span class="collect">加入收藏</span>
		<form>
		<input type="text" name="输入框" placeholder="请输入搜索关键字" class="input-1">
		<input type="button" name="搜索" value="搜索" class="input-2">
	    </form>
	</div>
</div>
<!--导航栏-->
<div class="nav">
	<ul>
		<li class="nav-show"><a href="loginsucc.php" class="dropbtn">首页</a></li>
		<li class="nav-show"><a href="department.php" class="dropbtn">部门介绍</a>
			<ol>
				<li><a href="department.php">工作职责</a></li>
				<li><a href="department.php">机构及人员</a></li>
				<li><a href="department.php">领导小组</a></li>
			</ol>
		</li>
		<li class="nav-show"><a href="dangpai.php" class="dropbtn">党派团体</a>
			<ol>
				<li><a href="dangpai.php">民革河南大学支部</a></li>
				<li><a href="dangpai.php">民盟河南大学委员会</a></li>
				<li><a href="dangpai.php">民进河南大学总支委员会</a></li>
				<li><a href="dangpai.php">民建河南大学总支委员会</a></li>
				<li><a href="dangpai.php">农工党河南大学委员会</a></li>
				<li><a href="dangpai.php">九三学社河南大学委员会</a></li>
				<li><a href="dangpai.php">河南大学台联</a></li>
				<li><a href="dangpai.php">河南大学侨联</a></li>
				<li><a href="dangpai.php">河南大学知联会</a></li>
				<li><a href="dangpai.php">河南大学留联会</a></li>
			</ol>
		</li>
		<li class="nav-show"><a href="zhengxie.php" class="dropbtn">人大政协</a>
			<ol>
				<li><a href="zhengxie.php">人大政协</a></li>
			</ol>
		</li>
		<li class="nav-show"><a href="advice.php" class="dropbtn">建言献策</a>
			<ol>
			    <li><a href="advice.php">建言献策</a></li>			
		    </ol>
	    </li>
		<li class="nav-show"><a href="fagui.php" class="dropbtn">政策法规</a>
			<ol>
				<li><a href="fagui.php">理论经纬</a></li>
				<li><a href="fagui.php">学习资料</a></li>
				<li><a href="fagui.php">会议纪要</a></li>
				<li><a href="fagui.php">工作记事</a></li>
			</ol>
		</li>
		<li class="nav-show"><a href="religion.php" class="dropbtn">民族宗教</a>
			<ol>
				<li><a href="religion.php">民族工作</a></li>
				<li><a href="religion.php">宗教工作</a></li>
			</ol>
		</li>
		<li class="nav-show"><a href="download.php" class="dropbtn">下载专区</a>
			<ol>
				<li><a href="download.php">资料下载</a></li>
			</ol>
		</li>
		<li class="nav-show"><a href="contact.php" class="dropbtn">联系我们</a>
			<ol>
				<li><a href="contact.php">留言板</a></li>
				<li><a href="contact.php">微博</a></li>
				<li><a href="contact.php">联系方式</a></li>
			</ol>
		</li>
	</ul>
</div>
<!--主体-->
<div class="main">
<!--左侧-->
	<div class="main-left">
		<h2>下载专区</h2>
		<p>资料下载</p>
		<h2>校园风光</h2>
		<div class="main-left-pc">
			<ul>
				<li><img src="../images/nature2.jpg"></li>
				<li><img src="../images/nature3.jpg"></li>
				<li><img src="../images/nature4.jpg"></li>
			</ul>
			<ol>
				<li class="current"></li>
				<li></li>
				<li></li>
			</ol>
		</div>
		<h2>相关链接</h2>
		<p>中共中央统一战线工作部</p>
        <p>中共河南省委统战部</p>
        <p>开封市委统战部</p>
        <p>河南大学</p>
        <p>"河大统战"杂志</p>
	</div>
	<!--右侧-->
	<div class="main-right">
		<div class="main-right-top">
			<div class="main-right-top-1"><a href="loginsucc.php"><img src="../images/icon-index.png"></a></div>
			<div class="main-right-top-2">正文</div>
		</div>
		<div class="main-right-bottom">
			<p><?php echo $row['content'];?></p>
		</div>
	</div>
</div>
<!--页脚-->
<div class="footer">
	<div class="footer-top"></div>
	<div class="footer-bottom">
		<p>Copyright © 2019 河南大学党委统战部 技术支持河南大学 107网站工作室 管理后台</p>
        <p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
	</div>
</div>
</body>
</html>