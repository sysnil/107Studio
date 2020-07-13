<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','news');
if($mysqli->connect_errno){
	die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$sql = "select * from news2 order by istop desc,releasetime desc";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result&&$mysqli_result->num_rows>0){
	while($row=$mysqli_result->fetch_assoc()){
		$rows[]=$row;
	}
}
$sql1 = "select * from news1 order by istop desc,releasetime desc";
$mysqli_result1=$mysqli->query($sql1);
if($mysqli_result1&&$mysqli_result1->num_rows>0){
	while($row1=$mysqli_result1->fetch_assoc()){
		$rows1[]=$row1;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>统战部</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript" src="https://www.imooc.com/static/lib/jquery/1.9.1/jquery.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
	<!--图片浮动-->
	<div class="photo">
		<img src="../images/photo.png">
	</div>
	<!--回到顶部-->
	<div class="up">
		<img src="../images/up.jpg">
	</div>
<!--头部-->	
<div class="header">
	<img src="../images/top-bj2.gif">
	<div class="set">
		<span><a href="manage.php" style="color: white;">管理</a></span>
		<span>|</span>
		<span><a href="login.php" style="color: white;">退出</a></span>
		<span>|</span>
		<span><a href="register.php" style="color: white;">注册</a></span>
		<span>|</span>
		<span><a href="login.php" style="color: white;">登录</a></span>
		<span>|</span>
		<span class="homepage">设为首页</span>
		<span>|</span>
		<span class="collect">加入收藏</span>
		<span>|</span>
		<form>
		<input type="text" name="输入框" placeholder="请输入搜索关键字" class="input-1">
		<input type="button" name="搜索" value="搜索" class="input-2">
	    </form>
	    	<span style="float: right;">
			<?php
session_start(); //声明变量
$username = isset($_SESSION['user']) ? $_SESSION['user'] : ""; //判断session是否为空
if (!empty($username)) { ?> 

<?php
    echo $username; ?> 
<?php
} else { //未登录，无权访问
     ?>
 <h1>你无权访问！！！</h1> 
<?php
} ?> 
		</span>
		<a href="myupdate.php" style="float: right; font-family: kaiti;color: #ffffff;">用户个人信息</a>
		<a href="updatenews2.php" style="float: right; font-family: kaiti;color: #ffffff;">理论管理|</a>
		<a href="updatenews1.php" style="float: right; font-family: kaiti;color: #ffffff;">新闻管理|</a>
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
	<div class="main-top">
		<img src="../images/headNew.gif">
		<p>培养当代大学生的家国情怀和国际视野</p>
	</div>
	<div class="main-bottom">
		<div class="section-1 line">
			<ul>
				<li><img src="../images/picture.jpg" class="picture">
					<p class="p1" title="我校荣获“河南省民族团结进步创建示范单位”称号">我校荣获“河南省民族团结进步创建示范...</p></li>
				<li><img src="../images/picture1.jpg" class="picture1">
					<p class="p2" title="我校在全省高校统一战线开展庆祝新中国成立70周年系列活动中喜获佳绩">我校在全省高校统一战线开展庆祝新中国...</p></li>
				<li><img src="../images/picture2.jpg" class="picture2">
					<p class="p3" title="省委常委、统战部部长孙守刚出席“2019河南省两岸青年交流月” 活动启动仪式并观看我校统战工作展">省委常委、统战部部长孙守刚出席“2019...</p></li>
			</ul>
			<ol>
				<li class="current">1</li>
				<li>2</li>
				<li>3</li>
			</ol>
		</div>
		<div class="section-2 line">
			<div class="section-2-top">
				<div class="arrowhead top-1">>></div>
				<div class="more top-1"><a href="more1.php">more</a></div>
				<div class="title top-1">-理论学习-</div>	
			</div>
			<div class="section-2-bottom">
				
				<ul>
					<?php $i=1;foreach($rows as $row):?>

	                        <li><a href="content-1.php?id=<?php echo $row['id'];?>" style="color: black;"> <?php echo $row['title']?><span><?php echo $row['releasetime']?></span></a> </li>
                    <?php $i++; endforeach;?>
				</ul>
			</div>			
		</div>
		<div class="section-3 line">
			<div class="section-3-top">
				<div class="arrowhead top-1">>></div>
				<div class="more top-1"><a href="more2.php">more</a></div>
				<div class="title top-1">-通知公告-</div>	
			</div>
			<div class="section-3-bottom">
				<ul>
					<li title="转发《关于开展征文活动的通知》"><a href="content-2.php"><p>转发《关于开展征文活动的通知》<span>04月07日</span></p></a></li>
					<li title="党委统战部近期值班安排（3.1—3.15）"><a href="content-2.php"><p>党委统战部近期值班安排（3.1—3.1...<span>03月01日</span></p></a></li>
					<li title="延迟开学期间统战部值班安排"><a href="content-2.php"><p>延迟开学期间统战部值班安排<span>02月13日</span></p></a></li>
					<li title="党委统战部2020年寒假值班安排表"><a href="content-2.php"><p>党委统战部2020年寒假值班安排表<span>01月14日</span></p></a></li>
					<li title="同心大讲堂：黄河流域生态保护和高质量发展"><a href="content-2.php"><p>同心大讲堂：黄河流域生态保护和高...<span>12月17日</span></p></a></li>
					<li title="颁奖通知-'河南大学统一战线庆祝新中国成立70周年征文比赛'"><a href="content-2.php"><p>颁奖通知-"河南大学统一战线庆祝新...<span>12月09日</span></p></a></li>
				</ul>
			</div>
		</div>
		<div class="section-4 line">
			<div class="section-4-top">
				<div class="arrowhead top-1">>></div>
				<div class="more top-1"><a href="more3.php">more</a></div>
				<div class="title top-1">新闻速递</div>
				<div class="pc1 top-1"><img src="../images/tzb_sign1.gif"></div>	
				<div class="pc2"><img src="../images/tzb_sign2.gif"></div>
			</div>
			<div class="section-4-bottom">
				<ul>

					<?php $i=1;foreach($rows1 as $row1):?>

	                        <li><a href="content-3.php?id=<?php echo $row1['id'];?>" style="color: black;"><?php echo $row1['title']?><span><?php echo $row1['releasetime']?></span></a> </li>
                    <?php $i++; endforeach;?>
				</ul>
			</div>
		</div>
		<div class="section-5 line">
			<div class="section-5-top">
				<div class="arrowhead top-1">>></div>
				<div class="more top-1"><a href="more4.php">more</a></div>
				<div class="title top-1">统战忆往</div>
				<div class="pc1 top-1"><img src="../images/tzb_sign1.gif"></div>	
				<div class="pc2"><img src="../images/tzb_sign2.gif"></div>
			</div>
			<div class="section-5-bottom">
				<ul>
					<li title="心系祖国和平统一大业的爱国将领侯如镜" class="li-2"><a href="content-4.php">心系祖国和平统一大业的爱国将领<span>03月25日</span></a></li>
					<li title="我与河大台联"><a href="content-4.php">我与河大台联<span>12月27日</span></a></li>
					<li title="河南大学统战工作与海外学子"><a href="content-4.php">河南大学统战工作与海外学子<span>12月27日</span></a></li>
					<li title="难忘的记忆"><a href="content-4.php">难忘的记忆<span>12月27日</span></a></li>
					<li title="我的回忆"><a href="content-4.php">我的回忆<span>12月27日</span></a></li>
					<li title="风雨同舟 无怨无悔"><a href="content-4.php">风雨同舟 无怨无悔<span>12月19日</span></a></li>
				</ul>
			</div>
		</div>
		<div class="section-6 line">
			<div class="section-6-top">
				<div class="arrowhead top-1">>></div>
				<div class="more top-1"><a href="more5.php">more</a></div>
				<div class="title top-1">人物采风</div>
				<div class="pc1 top-1"><img src="../images/tzb_sign1.gif"></div>	
				<div class="pc2"><img src="../images/tzb_sign2.gif"></div>
			</div>
			<div class="section-6-bottom">
				<ul>
					<li title="丁中一：心中所爱，始终如一"><a href="content-5.php">丁中一：心中所爱，始终如一<span>04月09日</span></a></li>
					<li title="张祎捷：医者仁心 止于至善"><a href="content-5.php">张祎捷：医者仁心 止于至善<span>03月10日</span></a></li>
					<li title="杜祖亮：仰望星空 脚踏实地"><a href="content-5.php">杜祖亮：仰望星空 脚踏实地<span>12月12日</span></a></li>
					<li title="专属秦奋的勤奋之道"><a href="content-5.php">专属秦奋的勤奋之道<span>11月25日</span></a></li>
					<li title="师冰洋：那些年在铁塔下"><a href="content-5.php">师冰洋：那些年在铁塔下<span>11月15日</span></a></li>
					<li title="师之楷模 德之典范――怀念黄魁吾教授"><a href="content-5.php">师之楷模 德之典范――怀念黄魁吾教授<span>10月08日</span></a></li>
				</ul>
			</div>
		</div>
		<div class="section-7 line">
			<div class="left line-1">
				<img src="../images/ecode_left.jpg">
				<p>"河大统战"公众号</p>
			</div>
			<div class="middle line-1">
				<div class="middle-top">
					<div>-相关链接-</div>
				</div>
				<div class="middle-bottom">
					<div><img src="../images/pc1.gif"></div>
					<div><img src="../images/pc2.jpg"></div>
					<div><img src="../images/pc8.gif"></div>
					<div><img src="../images/pc33.gif"></div>
					<div><img src="../images/pc9.gif"></div>
				</div>
			</div>
			<div class="right line-1">
				<img src="../images/ecode_right.jpg">
				<p>"统战新语"公众号</p>
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