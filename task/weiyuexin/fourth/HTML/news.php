<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>新闻速递-统战部</title>
	<link rel="stylesheet" href="../css/public.css">
	<link rel="stylesheet" href="../css/theory.css">
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
				<li id="li1">设为首页</li>
				<li>|</li>
				<li>加入收藏</li>
				<input type="text" class="search" placeholder="请输入搜索关键字">
				<input type="button" value="搜索" class="button">
			</ul>
		</div>
	</div>
	<!-- Top End -->	
	
	<!-- Header Start -->
	<div class="header">
		<ul>
			<a href="../PHP/indexadmin.php"><li>首页</li></a>
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
	<!-- Header End -->			
	
	<!-- Content Start -->
	<div class="content">
		<div class="div1">
			<div class="div11">
				<h>新闻速递</h>
			</div>
			<div class="div12">
				<ul>
					<a href="theory.html"><li>理论学习</li></a>
					<a href="notice.html"><li>通知公告</li></a>
					<a href="news.html"><li>新闻速递</li></a>
					<a href="memory.html"><li>统战忆往</li></a>
					<a href="figure.html"><li>人物采风</li></a>
				</ul>
			</div>
		</div>
		<div class="div2">
			<div class="div21">
				<h>校园风光</h>
			</div>
			<div class="silder">
				<ul>
					<li><img src="../images/nature2.jpg"></li>
					<li><img src="../images/nature4.jpg"></li>
					<li><img src="../images/nature3.jpg"></li>
				</ul>
			</div>
		</div>
		<div class="div3">
			<div class="div31">
				<h>相关链接</h>
			</div>
			<div class="div32">
				<ul>
					<li>中共中央统一战线工作部</li>
					<li>中共河南省委统战部</li>
					<li>开封市统战部</li>
					<li>河南大学</li>
					<li>"河大统战"杂志</li>
				</ul>
			</div>
		</div>
		
		<div class="div4">
			<div class="div4_header">
				<img src="../images/icon-index.png">
				<h>当前位置： &nbsp    <span>首页</span> &gt  <span>新闻速递</span>  &gt   </h>
			</div>
			<div class="div4_content">
				<br/>
				<ul>
					<li> 
						<table   width="900">
			 		 <?php
			 		 		//从数据库获取用户信息
			 		 		//1、连接数据库
							 include('../PHP/conn.php');

							//2、执行信息查询
							$sql = "select * from news ORDER BY flag DESC,addtime DESC";
							$result = mysqli_query($conn,$sql);

							//3、解析结果集
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td align='left' height='35px'>
									<img src='../images/jiantou.png'>
									<a href='shownews.php?id={$row['id']}'>
									{$row['title']}</a>
									</td>";	
								echo "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";
								echo "<td>  </td>";
								echo "</tr>";
							}

							//4、释放结果集，关闭数据库
							mysqli_close($conn);
			 		 ?>
			 	</table>
					</li>
					<li style="margin-top: 500px;">
						<div class="content">共207条  1/21</div> 
						<div class="div"> 
							<div>首页</div> <div>上页</div> <div>下页</div> <div>尾页</div>
							<div class="turn">
								<input type="button" value="转到" class="button">
								<input type="text" class="text">
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Content End -->
			
	<!-- Footer Start -->
	<div class="footer">
		<div class="div"></div>
		<br/>
		<p>Copyright © 2019 河南大学党委统战部 技术支持<span>河南大学 </span><span>107网站工作室</span><span> 管理后台</span></p>
		<p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
		
		<div class="goToTop">
			<img src="../images/goToTop.jpg">
		</div>
	</div>
	<!-- Footer End -->
</div>
</body>
</html>

