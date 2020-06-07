<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../images/校徽.jpg" type="image/gif" >
		<title>统战部</title>
		<link rel="stylesheet" href="../css/public.css">
		<link rel="stylesheet" href="../css/index.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/index.js"></script>
	</head>

	<body>
		<div class="body">

			<!-- Top Start -->
			<div class="top">
				<img src="../images/top-bj2.gif">
				<div class="topright">
					<ul>
						<li id="li1">
							<?php
							$username=$_GET['username'];

							echo "<a href='../PHP/usermessage.php?username=$username'>";
							echo "$username";
						?>
						</a></li>
						<li>|</li>
						<li>普通管理员</li>
						<input type="text" class="search" placeholder="请输入搜索关键字">
						<input type="button" value="搜索" class="button">
					</ul>
				</div>
			</div>
			<!-- Top End -->	

			<!-- Header Start -->
			<div class="header">
				<ul>
					<a href="indexadmin.php"><li>首页</li></a>
					<li class="li2">
						<a href="../HTML/duties.html">部门介绍</a>
						<ol>
							<a href="../HTML/duties.html"><li>工作职责</li></a>
							<a href="../HTML/personnel.html"><li>机构及人员</li></a>
							<a href="../HTML/leader.html"><li>领导人员</li></a>
						</ol>
					</li>
					<li class="li3">
						<a href="../HTML/minge.html">党派团体</a>
						<ol>
							<a href="../HTML/minge.html"><li>民革河南大学支部</li></a>
							<a href="../HTML/minmeng.html"><li>民盟河南大学委员会</li></a>
							<a href="../HTML/minjin.html"><li>民进河南大学总支委员会</li></a>
							<a href="../HTML/minjian.html"><li>民建河南大学总支委员会</li></a>
							<a href="../HTML/nonggongdang.html"><li>农工党河南大学委员会</li></a>
							<a href="../HTML/jiusan.html"><li>九三学社河南大学委员会</li></a>
							<a href="../HTML/tailian.html"><li>河南大学台联</li></a>
							<a href="../HTML/qiaolian.html"><li>河南大学侨联</li></a>
							<a href="../HTML/zhilianhui.html"><li>河南大学知联会</li></a>
							<a href="../HTML/liulianhui.html"><li>河南大学留联会</li></a>
						</ol>
					</li>
					<li class="li4">
						<a href="../HTML/NCP.html"><span>人大政协</span></a>
						<ol>
							<a href="../HTML/NCP.html"><li>人大政协</li></a>
						</ol>
					</li>
					<li class="li5">
						<a href="../HTML/advice.html">建言献策</a>
						<ol>
							<a href="../HTML/advice.html"><li>建言献策</li></a>
						</ol>
					</li>
					<li class="li6">
						<a href="../HTML/policies1.html">政策法规</a>
						<ol>
							<a href="../HTML/policies1.html"><li>理论经纬</li></a>
							<a href="../HTML/policies2.html"><li>学习资料</li></a>
							<a href="../HTML/policies3.html"><li>会议纪要</li></a>
							<a href="../HTML/policies4.html"><li>工作记事</li></a>
						</ol>
					</li>
					<li class="li7">
						<a href="../HTML/nation1.html">民族宗教</a>
						<ol>
							<a href="../HTML/nation1.html"><li>民族工作</li></a>
							<a href="../HTML/nation2.html"><li>宗教工作</li></a>
						</ol>
					</li>
					<li class="li8">
						<a href="../HTML/download.html">下载专区</a>
						<ol>
							<a href="../HTML/download.html"><li>资料下载</li></a>
						</ol>
					</li>
					<li class="li9">
						<a href="../HTML/message_board.html">联系我们</a>
						<ol>
							<a href="../HTML/message_board.html"><li>留言板</li></a>
							<a href="../HTML/blog.html"><li>微博</li></a>
							<a href="../HTML/contact_way.html"><li>联系方式</li></a>
						</ol>
					</li>
				</ul>
			</div>

			<div class="header2">
				<img src="../images/headNew.gif">
				<div><h>培养当代大学生的国家情怀和国际视野</h></div>
			</div>
			<!-- Header End -->		

			<!-- Content Start -->
			<div class="content">
				<div class="div1">
					<div class="div11">
						<div class="silder">
							<ul>
								<a href="#"><li>
									<img src="../images/img1.jpg">
									<p>我校荣获“河南省民族团结进步创建示范...</p>
								</li></a>
								<a href="#"><li>
									<img src="../images/img2.jpg">
									<p>我校在全省高校统一战线开展庆祝新中国...</p>
								</li></a>
								<a href="#"><li>
									<img src="../images/img3.jpg">
									<p>省委常委、统战部部长孙守刚出席“2019...</p>
								</li></a>
							</ul>
							<div class="button">
								<ol>
									<li class="point">1</li>
									<li>2</li>
									<li>3</li>
								</ol>
							</div>
						</div>
					</div>	
					<div class="div12">
						<div class="div12-top">
							<div class="div121">
								<h>-理论学习-</h>
							</div>
							<a href="../HTML/theory.php">
								<div class="div122">
									<h>more</h>
									<div>>></div>
								</div>
							</a>
						</div>
						<div class="div12_content">
								<!-- <ul>
									<a href="../HTML/theory_1.html"><li id="li1">&nbsp&nbsp<img src="../images/links_title.gif">培养当代大学生的家国情怀和国际视野<span>04月09日</span></li></a>

									<a href="../HTML/theory_2.html"><li>&nbsp&nbsp<img src="../images/links_title.gif">防控新冠肺炎疫情给我们带来的启示<span>04月03日</span></li></a>

									<a href="../HTML/theory_3.html"><li>&nbsp&nbsp<img src="../images/links_title.gif">学习贯彻•部长说 河南：发挥统战优势 展现...<span>03月25日</span></li></a>

									<a href="../HTML/theory_4.html"><li>&nbsp&nbsp<img src="../images/links_title.gif">全省统战工作会议召开<span>03月18日</span></li></a>

									<a href="../HTML/theory_5.html"><li>&nbsp&nbsp<img src="../images/links_title.gif">王国生在党外人士座谈会上指出 发挥优势凝...<span>03月18日</span></li></a>

									<a href="../HTML/theory_6.html"><li>&nbsp&nbsp<img src="../images/links_title.gif">习近平在湖北省考察新冠肺炎疫情防控工作<span>03月14日</span></li></a>

									<a href="../HTML/theory_7.html"><li>&nbsp&nbsp<img src="../images/links_title.gif">习近平在决战决胜脱贫攻坚座谈会上强调 坚...<span>03月07日</span></li></a>
								</ul> -->
						<ul>
							<table   width="450">
			 			<?php
			 		 		//从数据库获取用户信息
			 		 		//1、连接数据库
							 include('../PHP/conn.php');

							//2、执行信息查询
							$sql = "select * from theory ORDER BY flag DESC,addtime DESC";
							$result = mysqli_query($conn,$sql);

							//3、解析结果集
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr height='30'>";
								echo "<td align='left'>
									<img src='../images/links_title.gif'>
									<a href='../HTML/showtheory.php?id={$row['id']}'>
									{$row['title']}</a>
									</td>";	
								echo "<td align='left' width='70'>".date("m月d日",$row['addtime'])."</td>";
								echo "<td>  </td>";
								echo "</tr>";
							}

							//4、释放结果集，关闭数据库
							mysqli_close($conn);
			 		 ?> 
			 		 </table>
			 		 </ul>
						</div>
					</div>
					<div class="div13">
						<div class="div13-top">
							<div class="div131">
								<h>-通知公告-</h>
							</div>
							<a href="../HTML/notice.html">
								<div class="div132">
									<h>more</h>
									<div>>></div>
								</div>
							</a>
						</div>
						<div class="div13_content">
							<ul>
								<a href="../HTML/notice1.html"><li id="li1">&nbsp&nbsp&nbsp<div></div>转发《关于开展征文活动的通知》<span>04月07日</span></li></a>

								<a href="../HTML/notice2.html"><li>&nbsp&nbsp&nbsp<div></div>党委统战部近期值班安排（3.1—3...<span>03月01日</span></li></a>

								<a href="../HTML/notice3.html"><li>&nbsp&nbsp&nbsp<div></div>延迟开学期间统战部值班安排<span>02月13日</span></li></a>

								<a href="../HTML/notice4.html"><li>&nbsp&nbsp&nbsp<div></div>党委统战部2020年寒假值班安排表<span>01月14日</span></li></a>

								<a href="../HTML/notice5.html"><li>&nbsp&nbsp&nbsp<div></div>同心大讲堂：黄河流域生态保护和高...<span>12月17日</span></li></a>

								<a href="../HTML/notice6.html"><li>&nbsp&nbsp&nbsp<div></div>颁奖通知-"河南大学统一战线庆祝新...<span>12月19日</span></li></a>
							</ul>
						</div>
					</div>
				</div>
				<div class="div2">
					<div class="div21">
						<div class="div21_top">
							<img src="../images/tzb_sign1.gif" id="imgleft">
							<h id="h1">新闻速递</h>
							<div><img src="../images/tzb_sign3.png" id="imgbuttom"></div>
							<a href="../HTML/news.php">
								<div class="div212">
									<h>more</h>
									<div>>></div>
								</div>
							</a>
						</div>
						<div class="content">
							<!-- <ul>
								<a href="../HTML/news_1.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp在灾难大考中坚定报国力行的使命担当  <span>04月08日</span></li></a>

								<a href="../HTML/news_2.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp河南大学统一战线抗疫情系列报道：...  <span>04月03日</span></li></a>

								<a href="../HTML/news_3.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp我校2名党外知识分子获殊荣  <span>04月02日</span></li></a>

								<a href="../HTML/news_4.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp辛永芬、段亚广获得“中国语言资源 ...  <span>04月02日</span></li></a>

								<a href="../HTML/news_5.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp河南大学统一战线抗疫情系列报道: ...  <span>04月02日</span></li></a>

								<a href="../HTML/news_6.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp河南大学统一战线抗疫情系列报道：...  <span>04月02日</span></li></a>
							</ul> -->
						<ul>
						<table   width="400">
			 			<?php
			 		 		//从数据库获取用户信息
			 		 		//1、连接数据库
							 include('../PHP/conn.php');

							//2、执行信息查询
							$sql = "select * from news ORDER BY flag DESC,addtime DESC";
							$result = mysqli_query($conn,$sql);

							//3、解析结果集
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr height='35'>";
								echo "<td align='left'>
									<img src='../images/jiantou.png'>
									<a href='../HTML/shownews.php?id={$row['id']}'>
									{$row['title']}</a>
									</td>";	
								echo "<td align='left' width='70'>".date("m月d日",$row['addtime'])."</td>";
								echo "<td>  </td>";
								echo "</tr>";
							}

							//4、释放结果集，关闭数据库
							mysqli_close($conn);
			 		 ?> 
			 		 </table>
			 		 </ul>
						</div>
					</div>	
					<div class="div22">
						<div class="div22_top">
							<img src="../images/tzb_sign1.gif" id="imgleft">
							<h id="h1">统战忆往</h>
							<div><img src="../images/tzb_sign3.png" id="imgbuttom"></div>
							<a href="../HTML/memory.html">
								<div class="div222">
									<h>more</h>
									<div>>></div>
								</div>
							</a>
						</div>
						<div class="content">
							<ul>
								<a href="../HTML/memory1.html"><li id="li1">&nbsp<img src="../images/jiantou.png">&nbsp&nbsp心系祖国和平统一大业的爱国将领  <span>03月25日</span></li></a>

								<a href="../HTML/memory2.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp我与河大台联  <span>12月27日</span></li></a>

								<a href="../HTML/memory3.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp河南大学统战工作与海外学子  <span>12月27日</span></li></a>

								<a href="../HTML/memory4.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp难忘的记忆 <span>12月27日</span></li></a>

								<a href="../HTML/memory5.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp我的回忆 <span>12月27日</span></li></a>

								<a href="../HTML/memory6.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp风雨同舟 无怨无悔 <span>12月19日</span></li>
							</a></ul>
						</div>
					</div>
					<div class="div23">
						<div class="div23_top">
							<img src="../images/tzb_sign1.gif" id="imgleft">
							<h id="h1">人物采风</h>
							<div><img src="../images/tzb_sign3.png" id="imgbuttom"></div>
							<a href="../HTML/figure.html">
								<div class="div232">
									<h>more</h>
									<div>>></div>
								</div>
							</a>
						</div>
						<div class="content">
							<ul>
								<a href="../HTML/figure1.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp丁中一：心中所爱，始终如一  <span>04月09日</span></li></a>

								<a href="../HTML/figure2.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp张祎捷：医者仁心 止于至善 <span>03月10日</span></li></a>

								<a href="../HTML/figure3.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp杜祖亮：仰望星空 脚踏实地 <span>12月12日</span></li></a>

								<a href="../HTML/figure4.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp专属秦奋的勤奋之道  <span>11月25日</span></li></a>

								<a href="../HTML/figure5.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp师冰洋：那些年在铁塔下 <span>11月15日</span></li></a>

								<a href="../HTML/figure6.html"><li>&nbsp<img src="../images/jiantou.png">&nbsp&nbsp师之楷模 德之典范――怀念黄魁吾教授  <span>10月08日</span></li></a>
							</ul>
						</div>
					</div>
				</div>
				<div class="div3">
					<div class="left">
						<img src="../images/ecode_left.jpg">
						<p>“河大统战”公众号</p>
					</div>
					<div class="link1">
						<div class="link11">
							<p>-相关链接-</p>
						</div>
					</div>
					<div class="link2">
						<ul>
							<li id="li1"><a herf=""><img src="../images/pc1.gif"></a></li>
							<li><a herf=""><img src="../images/pc2.jpg"></a></li>
							<li><a herf=""><img src="../images/pc8.gif"></a></li>
							<li><a herf=""><img src="../images/pc33.gif"></a></li>
							<li><a herf=""><img src="../images/pc9.gif"></a></li>
						</ul>
					</div>
					<div class="right">
						<img src="../images/ecode_right.jpg">
						<p>“统战新语”公众号</p>
					</div>
				</div>	
			</div>
			<!-- Content End -->		

			<!-- Footer Start -->
			<div class="footer">
				<div class="div"></div>
				<br/>
				<p>Copyright © 2019 河南大学党委统战部 技术支持<span>河南大学 </span><span class="lab">107网站工作室</span><span> 管理后台</span></p>
				<p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>

				<div class="goToTop">
					<img src="../images/goToTop.jpg">
				</div>
			</div>
			<!-- Footer End -->
			
			<!-- Float Start -->
			<div class="float">
				<img src="../images/浮动窗口.jpg">
			</div>
			<!-- Float End -->
		</div>
	</body>
</html>