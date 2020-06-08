
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>第三次作业</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/public.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
	<script type="text/javascript" src="../js/public.js"></script>
</head>
<body>
	<div class="header" name="top">
		<div class="headerContent">
			<div class="logo">
				<img src="../images/top-bj2.gif">
			</div>
			<div class="headerRight">
				<div class="headerButton">
					<a href="javascript:;">设为首页</a>
					<span>|</span>
					<a href="javascript:;">加入收藏</a>
				</div>
				<div class="searchInput">
					<input type="text" name="searchInput" placeholder="请输入搜索关键字" >
					<button>搜索</button>
				</div>
				
			</div>

			<div class="Login">
				<div class="loginHead">
					<img src="../images/head_protrait.jpg">
					
				</div>
				<div class="userInfo">
					<?php
					  session_start();
					  // isset(xx) 测试xx是否设置了
					  if(isset($_SESSION['user_name'])){

					  echo "<p class='user_n'>你好,{$_SESSION['user_name']}</p>";
					  if($_SESSION['user_name']=='super1'||$_SESSION['user_name']=='super2'){
					  		echo "<p class='super'>超级管理员,您好"."</br>"."<a href='user_list.php'>点击此处</a>管理用户列表</p>";

					  	}
					  echo "<a href='editUser.php' class='edit'>修改个人信息</a>";
					  echo "<a href='' class='news'>修改新闻列表</a>";
					  echo "<a href='login.php' class='exit'>退出</a>";
					  }
					  else{
					  echo "游客"."</br>"."</br>"."<a href='login.php'>登录</a>"."/"."<a href='register.php'>注册</a>";
					  }
					  //$conn->close();
					 ?>	
				</div>
				
					
			</div>

		</div>
	</div>



	<div class="nav">
		<ul class="navContent">
			<li><a href="index.html"></a>首页</li>
			<li><a href=" "></a>部门介绍
				<ol>
					<li><a href=" "></a>工作职责</li>
					<li><a href=" "></a>机构及人员</li>
					<li><a href=" "></a>领导小组</li>
				</ol>
			</li>
			<li><a href=" "></a>党派团体
				<ol>
					<li><a href=" "></a>民革河南大学支部</li>
					<li><a href=" "></a>民盟河南大学委员会</li>
					<li><a href=" "></a>民进河南大学总支委员会</li>
					<li><a href=" "></a>民建河南大学总支委员会</li>
					<li><a href=" "></a>农工党河南大学委员会</li>
					<li><a href=" "></a>九三学社河南大学委员会</li>
					<li><a href=" "></a>河南大学台联</li>
					<li><a href=" "></a>河南大学侨联</li>
					<li><a href=" "></a>河南大学知联会</li>
					<li><a href=" "></a>河南大学留联会</li>
				</ol>
			</li>
			<li><a href=" "></a>人大政协
				<ol>
					<li><a href=" "></a>人大政协</li>
				</ol>
			</li>
			<li><a href=" "></a>建言献策
				<ol>
					<li><a href=" "></a>建言献策</li>
				</ol>
			</li>
			<li><a href=" "></a>政策法规
				<ol>
					<li><a href=" "></a>理论经纬</li>
					<li><a href=" "></a>学习资料</li>
					<li><a href=" "></a>会议纪要</li>
					<li><a href=" "></a>工作记事</li>
				</ol>
			</li>
			<li><a href=" "></a>民族宗教
				<ol>
					<li><a href=" "></a>民族工作</li>
					<li><a href=" "></a>宗教工作</li>
				</ol>
			</li>
			<li><a href="xzzq.html"></a>下载专区
				<ol>
					<li><a href="xzzq.html"></a>资料下载</li>
				</ol>
			</li>
			<li><a href="lxwm.html"></a>联系我们
				<ol>
					<li><a href="lxwm.html"></a>留言板</li>
					<li><a href="wb.html"></a>微博</li>
					<li><a href="lxfs.html"></a>联系方式</li>
				</ol>
			</li>
		</ul>
	</div>


	<div class="main">

		<div class="headNew">
			<img src="../images/headNew.gif">
			<a href="#">培养当代大学生的家国情怀和国际视野</a>
		</div>

		<div class="mainContent">

			<div class="focusPicture">
				<div class="preNext">
					<div class="prev"><img src="../images/prev.png"></div>
					<div class="next"><img src="../images/next.png"></div>
				</div>
				<ul>
					<li>
						<a href="">我校荣获“河南省民族团结进步创建示范单位”称号</a>
						<a href=" "><img src="../images/focus1.jpg"></a>
					</li>
					<li>
						<a href="">我校在全省高校统一战线开展庆祝新中国成立70周年系列活动中喜获佳绩</a>
						<a href=" "><img src="../images/focus2.jpg"></a>
					</li>
					<li>
						<a href="">省委常委、统战部部长孙守刚出席“2019河南省两岸青年交流月” 活动启动仪式并观看我校统战工作展</a>
						<a href=" "><img src="../images/focus3.jpg"></a>
					</li>
				</ul>
			</div>

			
			<div class="report">
				<div class="links_title">
					<a href="llxx.html" class="title"> - 理论学习 - </a>

					<a href="llxx.html" class="more"><span>more</span>&nbsp;>>&nbsp;</a>

					<div class="dots"></div>
				</div>
				<div class="reportContent">
					<ul>
						<li id="special">
							<span>04月09日</span>
							<a href="llxxzw1.html">培养当代大学生的家国情怀和国际视野</a>
						</li>
						<li>
							<span>04月03日</span>
							<a href=" ">防控新冠肺炎疫情给我们带来的启示</a>
						</li>
						<li>
							<span>03月25日</span>
							<a href=" ">学习贯彻•部长说 河南：发挥统战优势 展现担当作为 在大战大考中写好河南统战答卷</a>
						</li>
						<li>
							<span>03月18日</span>
							<a href=" ">全省统战工作会议召开</a>
						</li>
						<li>
							<span>03月18日</span>
							<a href=" ">王国生在党外人士座谈会上指出 发挥优势凝聚发展正能量 同心协力推动发展高质量</a>
						</li>
						<li>
							<span>03月14日</span>
							<a href=" ">习近平在湖北省考察新冠肺炎疫情防控工作</a>
						</li>
						<li>
							<span>03月07日</span>
							<a href=" ">习近平在决战决胜脱贫攻坚座谈会上强调 坚决克服新冠肺炎疫情影响 坚决夺取脱贫攻坚战全面胜利</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="report report2">
				<div class="links_title links_title2">
					<a href="" class="title"> - 通知公告 - </a>

					<a href="" class="more"><span>more</span>&nbsp;>>&nbsp;</a>

					<div class="dots"></div>
				</div>
				<div class="reportContent reportContent2">
					<ul>
						<li>
							<span>04月07日</span>
							<a href=" ">转发《关于开展征文活动的通知》</a>
						</li>
						<li>
							<span>03月01日</span>
							<a href=" ">党委统战部近期值班安排（3.1—3.15）</a>
						</li>
						<li>
							<span>02月13日</span>
							<a href=" ">延迟开学期间统战部值班安排</a>
						</li>
						<li>
							<span>01月14日</span>
							<a href=" ">党委统战部2020年寒假值班安排表</a>
						</li>
						<li>
							<span>12月17日</span>
							<a href=" ">同心大讲堂：黄河流域生态保护和高质量发展</a>
						</li>
						<li>
							<span>12月09日</span>
							<a href=" ">颁奖通知-"河南大学统一战线庆祝新中国成立70周年征文比赛"</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="news_menu">
				<div class="news_list">
					<img src="../images/tzb_sign1.gif">
					<a href="" class="news_list_title">新闻速递</a>
					<a href="" class="more"><span>more</span>&nbsp;>>&nbsp;</a>
					<div class="dots"></div>
				</div>

				<img src="../images/tzb_sign2.gif" class="bottom_img">

				<ul class="news_main">
					<li>
						<span>04月08日</span>
						<a href="#">在灾难大考中坚定报国力行的使命担当</a>
					</li>
					<li>
						<span>04月03日</span>
						<a href="#">河南大学统一战线抗疫情系列报道：风雨同舟，共克时艰</a>
					</li>
					<li>
						<span>04月02日</span>
						<a href="#">我校2名党外知识分子获殊荣</a>
					</li>
					<li>
						<span>04月02日</span>
						<a href="#">辛永芬、段亚广获得“中国语言资源保护奖”先进个人称号</a>
					</li>
					<li>
						<span>04月02日</span>
						<a href="#">河南大学统一战线抗疫情系列报道：加油抗疫，当好职工的“娘家人”</a>
					</li>
					<li>
						<span>04月02日</span>
						<a href="#">河南大学统一战线抗疫情系列报道：凯旋归来话战“疫”</a>
					</li>
				</ul>
			</div>


			<div class="news_menu">
				<div class="news_list">
					<img src="../images/tzb_sign1.gif">
					<a href="" class="news_list_title">统战忆往</a>
					<a href="" class="more"><span>more</span>&nbsp;>>&nbsp;</a>
					<div class="dots"></div>
				</div>

				<img src="../images/tzb_sign2.gif" class="bottom_img">

				<ul class="news_main font_color_span">
					<li id="special">
						<span>03月25日</span>
						<a href="#">心系祖国和平统一大业的爱国将领</a>
					</li>
					<li>
						<span>12月27日</span>
						<a href="#">我与河大台联</a>
					</li>
					<li>
						<span>12月27日</span>
						<a href="#">河南大学统战工作与海外学子</a>
					</li>
					<li>
						<span>12月27日</span>
						<a href="#">难忘的记忆</a>
					</li>
					<li>
						<span>12月27日</span>
						<a href="#">我的回忆</a>
					</li>
					<li>
						<span>12月19日</span>
						<a href="#">风雨同舟 无怨无悔</a>
					</li>
				</ul>
			</div>


			<div class="news_menu">
				<div class="news_list">
					<img src="../images/tzb_sign1.gif">
					<a href="" class="news_list_title">人物采风</a>
					<a href="" class="more"><span>more</span>&nbsp;>>&nbsp;</a>
					<div class="dots"></div>
				</div>

				<img src="../images/tzb_sign2.gif" class="bottom_img">

				<ul class="news_main font_color_span">
					<li>
						<span>04月09日</span>
						<a href="#">丁中一：心中所爱，始终如一</a>
					</li>
					<li>
						<span>03月10日</span>
						<a href="#">张祎捷：医者仁心 止于至善</a>
					</li>
					<li>
						<span>12月12日</span>
						<a href="#">杜祖亮：仰望星空 脚踏实地</a>
					</li>
					<li>
						<span>12月25日</span>
						<a href="#">专属秦奋的勤奋之道</a>
					</li>
					<li>
						<span>11月15日</span>
						<a href="#">师冰洋：那些年在铁塔下</a>	
					</li>
					<li>
						<span>10月08日</span>
						<a href="#">师之楷模 德之典范-怀念黄魁吾教授</a>
					</li>
				</ul>
			</div>


			<div class="main_foot">
				<div class="code_img">
					<img src="../images/ecode_left.jpg">
					<p>“河大统战”公众号</p>
				</div>

				<div class="main_foot_middle">
					<div class="m_f_m_tittle">
						<a href="" class="title"> - 相关链接 - </a>
					</div>
					<div class="img_border">
						<a href="http://www.zytzb.gov.cn"><img src="../images/pc1.gif"></a>
						<a href="http://www.rootinhenan.gov.cn/sitesources/rootinhenan/page_pc"><img src="../images/pc2.jpg"></a>
						<a href="http://kf.rootinhenan.gov.cn/sitesources/kf/page_pc"><img src="../images/pc8.gif"></a>
						<a href="http://www.henu.edu.cn/"><img src="../images/pc33.gif"></a>
						<a href="hdtzzz.html"><img src="../images/pc9.gif"></a>				
					</div>
				</div>

				<div class="code_img">
					<img src="../images/ecode_right.jpg">
					<p>“统战新语”公众号</p>
				</div>
			</div>
		</div>  <!-- mainContent end -->
	</div>


	<!-- 页脚部分 -->
	<div class="foot">
		<div class="foot1"></div>
		<div class="foot2">
			<p>Copyright © 2019 河南大学党委统战部 技术支持<a href=" ">河南大学</a> <a href=" ">107网站工作室</a> <a href=" ">管理后台</a></p>
			<p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428 </p>
		</div>
	</div>


	<!-- 回到顶部按钮 -->
	<a href="#top" class="top_button">
		<img src="../images/top_button.jpg">
	</a>


	<!-- 下面实现浮动层效果 -->
	<div class="float">
		<div class="fl_content">
			<img src="../images/fight.jpg">
			<span>众志成城</span>
			<span>抗击疫情</span>
			<p>点击查看更多</p>
		</div>
	</div>


	<!-- 下面是点击浮动层会出现的弹出层效果 -->
	<div class="dialog">
		<div class="diaContent">
			<img src="../images/close.png" id="close">
			<h1>众志成城&nbsp;&nbsp;&nbsp;&nbsp;共抗疫情</h1>
			<img src="../images/fight3.jpg">
			<h1>最美的逆行者</h1>
			<img src="../images/fight4.jpg">				
		</div>
	</div>

	<!-- 点击浮动层会出现的白色盒子 -->
	<div class="flash"></div>
</body>
</html>