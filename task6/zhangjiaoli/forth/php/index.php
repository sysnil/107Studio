<?php 
header('content-type:text/html;charset=utf-8');
$mysqli=@new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('Connect Error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$sql="SELECT id,titleName,month,day,level FROM article ORDER BY level DESC,month DESC,day DESC;";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
    while($row=$mysqli_result->fetch_assoc()){
        $rows[]=$row;
    }
}
$sql1="SELECT id,titleName,newContent,month,day,level FROM llxx ORDER BY level DESC,month DESC,day DESC;";
$mysqli_result1=$mysqli->query($sql1);
if($mysqli_result1 && $mysqli_result1->num_rows>0){
    while($content=$mysqli_result1->fetch_assoc()){
        $contents[]=$content;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="../css/sheetstyle.css"/>
	<script type = "text/javascript"src="../js/jquery-1.12.4.js"></script>
	<script src="https://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/style.js"></script>
	<title>统战部</title>
</head>
<body id="wrapper">
	<div id="head">
		<div class="logo_img">
		    <img class="topimg" src="../images/top-bj2.gif"/>
		    <div class="vessel">
			    <div class="collect">
                    <span>设为首页</span>
                    <span style="width:35px;height:10px;float:left;"></span>
                    <span>加入收藏</span>
			    </div>
			    <div class="search">
				<form>
				       <input type="text" name="searching" size="20" placeholder="请输入搜索关键字" class="form" /><button class="find">搜索</button>
			    </form>
			    </div>
		    </div>
        </div>
		<div id="nav">
            <ul class="sizeout">
			    <li style="margin-left: 5%"><a href="index.html">首页</a>
			    </li>
		   	    <li>
			        <a href="javascript:void(0);">部门介绍</a>
			        <ul class="sizein">
			         	<li><a href="javascript:void(0);">工作职责</a></li>
			         	<li><a href="javascript:void(0);">机构及人员</a></li>
			         	<li><a href="javascript:void(0);">领导小组</a></li>
			        </ul>
			    </li>
			    <li>
			    	<a href="javascript:void(0);">党派团体</a>
			    	<ul class="sizein">
			    	    <li><a href="javascript:void(0);">民革河南大学支部</a></li>
			    	    <li><a href="javascript:void(0);">民盟河南大学委员会</a></li>
			    	    <li><a href="javascript:void(0);">民进河南大学总支委员会</a></li>
			    	    <li><a href="javascript:void(0);">民建河南大学总支委员会</a></li>
				        <li><a href="javascript:void(0);">农工党河南大学委员会</a></li>
				        <li><a href="javascript:void(0);">九三学社河南大学委员会</a></li>
				        <li><a href="javascript:void(0);">河南大学台联</a></li>
				        <li><a href="javascript:void(0);">河南大学侨联</a></li>
				        <li><a href="javascript:void(0);">河南大学支联会</a></li>
				        <li><a href="javascript:void(0);">河南大学留联会</a></li>
				    </ul>
			    </li>
			    <li>
			        <a href="javascript:void(0);">人大政协</a>
			        <ul class="sizein">
			        	<li><a href="javascript:void(0);">人大政协</a></li>
			        </ul>
			    </li>
			    <li>
				    <a href="javascript:void(0);">建言献策</a>
				    <ul class="sizein">
				        <li><a href="javascript:void(0);">建言献策</a></li>
				    </ul>
			    </li>
			    <li>
				    <a href="javascript:void(0);">政策法规</a>
				    <ul class="sizein">
				        <li><a href="javascript:void(0);">理论经纬</a></li>
				        <li><a href="javascript:void(0);">学习资料</a></li>
				        <li><a href="javascript:void(0);">会议纪要</a></li>
				        <li><a href="javascript:void(0);">工作记事</a></li>
				    </ul>
			    </li>
	    	    <li>
	    		    <a href="javascript:void(0);">民族宗教</a>
	    		    <ul class="sizein">
				        <li><a href="javascript:void(0);">民族工作</a></li>
				        <li><a href="javascript:void(0);">宗教工作</a></li>
				    </ul>
	    	    </li>
	    	    <li>
				    <a href="xzzq.php">下载专区</a>
				    <ul class="sizein">
				        <li><a href="javascript:void(0);">资料下载</a></li>
				    </ul>
			    </li>
			    <li>
				    <a href="message_board.php">联系我们</a>
				    <ul class="sizein">
				        <li><a href="javascript:void(0);">留言版</a></li>
				        <li><a href="javascript:void(0);">微博</a></li>
				        <li><a href="javascript:void(0);">联系方式</a></li>
				    </ul>
			    </li>
	        </ul>
        </div>   
	</div>
	<div id="main">
		<div class="headline">
			<span class="word">在灾难大考中坚定报国力行的使命担当</span>
		</div>
		<div class="underline">
		    <div class="screen">
		        <table height="100%" width="100%">
		            <tr><td>
		                <div class="banner">
			                <div class="img">
                                <a href="javascript:void" title="我校荣获“河南省团结进步创建示范..."><img src="../images/banner1.jpg" /></a>
                                <a href="javascript:void" title="我校在全省高校统一战线开展庆祝新中国..."><img src="../images/banner2.jpg" /></a>
                                <a href="javascript:void" title="省委常委、统战部部长孙守刚出席..."><img src="../images/banner3.jpg" /></a>
                            </div>
                            <div class="num">
                                <a href="javascript:void" class="on">1</a>
                                <a href="javascript:void">2</a>
                                <a href="javascript:void">3</a>
                            </div>
                        </div></td></tr>
                    <tr><td height="30px">
        		        <div class="title">
        			        <a href="javascript:void"><p id="des">我校荣获“河南省团结进步创建示范...”</p></a>
        		        </div></td></tr>
                </table>
            </div>
		    <div class="report">
		  	    <div class="titleclass1"><a href="javascript:void">-理论学习-</a></div>
		  	    <div class="container1">
		  		    <div class="content1">
			            <ul>
			                <?php foreach ($contents as $content):?>
				            <li>
					            <i></i>
					            <?php if($content['level']==1){
					               echo '<a class="A_css" title='.$content['titleName'].' href="llxxinfo.php?id='.$content['id'].'" target="_blank">'.$content['titleName'].'</a><span>'.$content['month'].'月'.$content['day'].'日</span>';
					            }else{
					                echo '<a title='.$content['titleName'].' href="llxxinfo.php?id='.$content['id'].'" target="_blank">'.$content['titleName'].'</a><span>'.$content['month'].'月'.$content['day'].'日</span>';
					            }
					            ?>
				            </li>
		                <?php endforeach; ?>
			            </ul>
		            </div>
		        </div>
		        <div class="more">
		        	<a href="more.php" target="_self">more<span>>></span></a>
		        </div> 
		    </div>
		    <div class="inform">
			    <div class="titleclass1"><a href="javascript:void">-通知公告-</a></div>
			    <div class="container2">
				    <div class="content2">
					    <ul>
						    <li>
							    <i></i>
							    <a title="转发《关于开展征文活动的通知》" href="info.html" target="_self">转发《关于开展征文活动的通知》</a><span>04月07日</span>
						    </li>
						    <li>
							<i></i>
							<a title="党委统战部近期值班安排（3.1——3.15）" href="info.html" target="_self">党委统战部近期值班安排（3.1——3.15）</a><span>03月01日</span>
						    </li>
						    <li>
							    <i></i>
							    <a title="延迟开学期间统战部值班安排" href="info.html" target="_self">延迟开学期间统战部值班安排</a><span>02月13日</span>
						    </li>
						    <li>
							    <i></i>
							    <a title="党委统战部2020年寒假值班安排表" href="info.html" target="_self">党委统战部2020年寒假值班安排表</a><span>01月14日</span>
						    </li>
						    <li>
							    <i></i>
							    <a title="同心大讲堂：黄河流域生态保护和高质量发展" href="info.html" target="_self">同心大讲堂：黄河流域生态保护和高质量发展</a><span>12月17日</span>
						    </li>
						    <li>
							    <i></i>
							    <a title="颁奖通知-河南大学统一战线庆祝新中国成立70周年征文比赛" href="info.html" target="_self">颁奖通知-河南大学统一战线庆祝新中国成立70周年征文比赛</a><span>12月09日</span>
						    </li>
					    </ul>
				    </div>
				</div>
				<div class="more">
		        	<a href="more.php">more<span>>></span></a>
		        </div> 
			</div>
		    <div class="menu">
		    	<div class="line">
		    		<img src="../images/tzb_sign2.gif" width="30%" height="2px"/>
		    	</div>
		    	<div class="titleclass2"><a href="javascript:void">新闻速递</a></div>
		            <ul class="news">
		                <?php foreach ($rows as $row):?>
				            <li>
					            <i></i>
					            <?php if($row['level']==1){
					               echo '<a class="A_css" title='.$row['titleName'].' href="newsinfo.php?id='.$row['id'].'" target="_blank">'.$row['titleName'].'</a><span>'.$row['month'].'月'.$row['day'].'日</span>';
					            }else{
					                echo '<a title='.$row['titleName'].' href="newsinfo.php?id='.$row['id'].'" target="_blank">'.$row['titleName'].'</a><span>'.$row['month'].'月'.$row['day'].'日</span>';
					            }
					            ?>
				            </li>
		                <?php endforeach; ?>
		    		</ul>
		    	<div class="more">
		        	<a href="more.php">more<span>>></span></a>
		        </div>
		        <div class="tzbsign">
		        	<img src="../images/tzb_sign1.gif" width="100%" height=20px/>
		        </div> 
		    </div>
		    <div class="menu">
		    	<div class="line">
		    		<img src="../images/tzb_sign2.gif" width="30%" height="2px"/>
		    	</div>
		    	<div class="titleclass2"><a href="javascript:void">统战忆往</a></div>
		    		<ul class="recall">
		    			<li>
		    				<i></i>
		    				<a title="心系祖国和平统一大业的爱国将领" href="info.html" target="_self">心系祖国和平统一大业的爱国将领</a><span>03月25日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="我与河大台联" href="info.html" target="_self">我与河大台联</a><span>12月27日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="河南大学统战工作与海外学子" href="info.html" target="_self">河南大学统战工作与海外学子</a><span>12月27日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="难忘的记忆" href="info.html" target="_self">难忘的记忆</a><span>12月27日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="我的回忆" href="info.html" target="_self">我的回忆</a><span>12月27日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="风雨同舟 无怨无悔" href="info.html" target="_self">风雨同舟 无怨无悔</a><span>12月19日</span>
		    			</li>
		    		</ul>
		    	<div class="more">
		        	<a href="more.php">more<span>>></span></a>
		        </div>
		        <div class="tzbsign">
		        	<img src="../images/tzb_sign1.gif" width="100%" height=20px/>
		        </div> 
		    </div>
		    <div class="menu">
		    	<div class="line">
		    		<img src="../images/tzb_sign2.gif" width="30%" height="2px"/>
		    	</div>
		    	<div class="titleclass2"><a href="javascript:void">人物采风</a></div>
		    		<ul class="figure">
		    			<li>
		    				<i></i>
		    				<a title="丁中一：心中所爱，始终如一" href="info.html" target="_self">丁中一：心中所爱，始终如一</a><span>04月09日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="张祎捷：医者仁心 止于至善" href="info.html" target="_self">张祎捷：医者仁心 止于至善</a><span>03月10日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="杜祖亮：仰望星空 脚踏实地" href="info.html" target="_self">杜祖亮：仰望星空 脚踏实地</a><span>12月12日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="专属秦奋的勤奋之道" href="info.html" target="_self">专属秦奋的勤奋之道</a><span>11月25日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="师冰洋：那些年在铁塔下" href="info.html" target="_self">师冰洋：那些年在铁塔下</a><span>11月15日</span>
		    			</li>
		    			<li>
		    				<i></i>
		    				<a title="师之楷模 德之典范——怀念黄魁吾教授" href="info.html" target="_self">师之楷模 德之典范——怀念黄魁吾教授</a><span>10月08日</span>
		    			</li>
		    		</ul>
		    	<div class="more">
		        	<a href="more.php">more<span>>></span></a>
		        </div>
		        <div class="tzbsign">
		        	<img src="../images/tzb_sign1.gif" width="100%" height=20px/>
		        </div>  
		    </div>
		    <div class="related_links">
		    	<div class="Official_accounts">
		    		<i class="official"><img src="../images/ecode_left.jpg"/></i>
		    		<p class="official_name">“河大统战”公众号</p>
		    	</div>
		    	<div class="links">
		    		<div class="links_title">
		    			<a href="javascript:void">- 相关链接 -</a>
		    		</div>
		    		<div class="link">
		    			<div class="link_container">
		    				<ul>
		    					<li><a href="" ><img src="../images/pc1.gif"/></a></li>
		    					<li><a href="" ><img src="../images/pc2.jpg"/></a></li>
		    					<li><a href="" ><img src="../images/pc8.gif"/></a></li>
		    					<li><a href="" ><img src="../images/pc33.gif"/></a></li>
		    					<li><a href="" ><img src="../images/pc9.gif"/></a></li>	
		    				</ul>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="Official_accounts">
		    		<i class="official"><img src="../images/ecode_right.jpg"/></i>
		    		<p class="official_name">“统战新语”公众号</p>
		    	</div>
		    </div>
	    </div>
	</div>
	<div id="footer">
		<div class="foot1"></div>
		<div class="foot2">
			<p> Copyright&copy;2019 河南大学党委统战部 技术支持
				<a href="http://hdcms.henu.edu.cn/system/login.jsp">河南大学</a>
				<a href="#">107网站工作室</a>
				<a href="Login.php">管理后台</a>
				<br/>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428 
			</p>
		</div>
	</div>
	<div id="imgDiv" style="position:absolute;left:50px;top:60px;">
        <div id="a" style="width:20px;height:20px;position:absolute;left:160px;background:salmon;text-align: center;">×</div>
        <div style="width:180px;height:180px;background:red;"></div>
    </div>
	<div id="returntop">
		<div class="jump_top">
			<button class="upbtn">up</button>
		</div>
	</div>
</body>
</html>