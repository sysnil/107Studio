<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','news');
if($mysqli->connect_errno){
	die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$sql = "select * from news1 order by releasetime desc";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result&&$mysqli_result->num_rows>0){
	while($row=$mysqli_result->fetch_assoc()){
		$rows[]=$row;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>理论学习-统战部</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
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
		<li class="nav-show"><a href="#" class="dropbtn">部门介绍</a>
			<ol>
				<li>工作职责</li>
				<li>机构及人员</li>
				<li>领导小组</li>
			</ol>
		</li>
		<li class="nav-show"><a href="#" class="dropbtn">党派团体</a>
			<ol>
				<li>民革河南大学支部</li>
				<li>民盟河南大学委员会</li>
				<li>民进河南大学总支委员会</li>
				<li>民建河南大学总支委员会</li>
				<li>农工党河南大学委员会</li>
				<li>九三学社河南大学委员会</li>
				<li>河南大学台联</li>
				<li>河南大学侨联</li>
				<li>河南大学知联会</li>
				<li>河南大学留联会</li>
			</ol>
		</li>
		<li class="nav-show"><a href="#" class="dropbtn">人大政协</a>
			<ol>
				<li>人大政协</li>
			</ol>
		</li>
		<li class="nav-show"><a href="#" class="dropbtn">建言献策</a>
			<ol>
			    <li>建言献策</li>			
		    </ol>
	    </li>
		<li class="nav-show"><a href="#" class="dropbtn">政策法规</a>
			<ol>
				<li>理论经纬</li>
				<li>学习资料</li>
				<li>会议纪要</li>
				<li>工作记事</li>
			</ol>
		</li>
		<li class="nav-show"><a href="#" class="dropbtn">民族宗教</a>
			<ol>
				<li>民族工作</li>
				<li>宗教工作</li>
			</ol>
		</li>
		<li class="nav-show"><a href="download.html" class="dropbtn">下载专区</a>
			<ol>
				<li>资料下载</li>
			</ol>
		</li>
		<li class="nav-show"><a href="contact.html" class="dropbtn">联系我们</a>
			<ol>
				<li>留言板</li>
				<li>微博</li>
				<li>联系方式</li>
			</ol>
		</li>
	</ul>
</div>
<!--主体-->
<div class="main">
	<div class="main-left">
		<h2>理论学习</h2>
		<p>理论学习</p>
		<p>通知公告</p>
		<p>新闻速递</p>
		<p>统战忆往</p>
		<p>人物采风</p>
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
	<div class="main-right">
		<div class="main-right-top">
			<div class="main-right-top-1"><a href="loginsucc.php"><img src="../images/icon-index.png"></a></div>
			<div class="main-right-top-2">当前位置：<a href="loginsucc.php">首页</a>>新闻速递></div>
		</div>
		<div class="main-right-bottom">
		 
				<ul>
					<?php $i=1;foreach($rows as $row):?>

	                        <li><a href="content-3.php?id=<?php echo $row['id'];?>" style="color: black;"> <?php echo $row['title']?><span><?php echo $row['releasetime']?></span></a> </li>
                    <?php $i++; endforeach;?>
				</ul>
			
			<div class="yema">
				<div class="yema-1">共7条</div>
				<div class="yema-1">1/1</div>
				<div>首页</div>
				<div>上页</div>
				<div>下页</div>
				<div>尾页</div>
				<div style="border: 0;"><input type="submit" value="转到" style="width: 30px; height: 20px; font-size: 10px;
				background: #a7ccea;"></div>
				<div style="border: 0;"><input type="text" name="yema" style="width: 20px; height: 12px; color: black;">页</div>
			</div>
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