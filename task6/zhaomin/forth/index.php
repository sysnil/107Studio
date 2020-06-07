<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>统战部</title>
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/public.css">
        <script src="./js/jquery-3.3.1.min.js"></script>
        <script src="./js/index.js"></script>
        
	</head>
	<body> 
		
		<div class="top">
			<?php
				$err=isset($_GET["err"])?$_GET["err"]:"";
				if($err==3){
					$myname = $_COOKIE['myname'];
					echo "</br>";
     				echo '&emsp;欢迎你! '.$myname;
     				echo "&emsp;|&emsp;<a href='user_manage.php?myname=$myname'>账号管理</a>";
     				echo "&emsp;|&emsp;<a href='login.php'>退出</a>";
				}else{
				    echo "</br>";
					echo  "&emsp;<a href=\"login.php\">登录</a>&emsp;|&emsp;<a href=\"register.php\">注册</a>";
				}
			?>
			<div class="header_search">
				<div class="mask1"></div>
                    <input class="search" placeholder="请输入搜索关键字" type="text" >
                    <input class="button" type="button" value="搜索">
            </div>
			<a  class="lo" href="">加入收藏 </a>
			<a  class="lo" href="">|</a>
			<a  class="lo" href="">设为首页</a>
			
		</div>
		<div class="nav_1">
			<div class="nav">
			<ul>
				<li><a href="index.php">首页</a></li>
				<li class="nav_list"><a href="">部门介绍</a>
					<ol class="nav_list_child">
                                <li><a href="">工作职责</a></li>
                                <li><a href="">机构及人员</a></li>
                                <li><a href="">领导小组</a></li>
                                
                    </ol>
				</li>
				<li class="nav_list"><a href="">党派团体</a>
					<ol class="nav_list_child">
                                <li><a href="">民革河南大学支部</a></li>
                                <li><a href="">民盟河南大学委员会</a></li>
                                <li><a href="">民建河南大学总支委员会</a></li>
                                <li><a href="">民进河南大学总支委员会</a></li>
                                <li><a href="">农工党河南大学委员会</a></li>
                                <li><a href="">九三学社河南大学委员会</a></li>
                                <li><a href="">河南大学台联</a></li>
                                <li><a href="">河南大学侨联</a></li>
                                <li><a href="">河南大学知联会</a></li>
                                <li><a href="">河南大学留联会</a></li>
                                
                    </ol>
				</li>
				<li class="nav_list"><a href="">人大政协</a>
					<ol class="nav_list_child">
                                <li><a href="">人大政协</a></li>
                    </ol>
				</li>
				<li class="nav_list"><a href="">建言献策</a>
					<ol class="nav_list_child">
                                <li><a href="">建言献策</a></li>
                    </ol>
				</li>
				<li class="nav_list"><a href="">政策法规</a>
					<ol class="nav_list_child">
                                <li><a href="">理论经纬</a></li>
                                <li><a href="">学习资料</a></li>
                                <li><a href="">会议纪要</a></li>
                                <li><a href="">工作记事</a></li>
                    </ol>
				</li>
				<li class="nav_list"><a href="">民族宗教</a>
					<ol class="nav_list_child">
                                <li><a href="">民族工作</a></li>
                                <li><a href="">宗教工作</a></li>
                    </ol>
				</li>
				<li class="nav_list"><a href="html/download.html">下载专区</a>
					<ol class="nav_list_child">
                                <li><a href="html/download.html">资料下载</a></li>
                    </ol>
				</li>
				<li class="nav_list"><a href="html/message.html">联系我们</a>
					<ol class="nav_list_child">
                                <li><a href="html/message.html">留言板</a></li>
                                <li><a href="">微博</a></li>
                                <li><a href="">联系方式</a></li>
                    </ol>
				</li>
			</ul>
		</div>
		</div>
		
        <div class="th">
        	<div class="center-1"><a href="">培养当代大学生的家国情怀和国际视野</a></div>
        	<div class="center-2">
        		<div class="box1">
        			<div class="box2">
        				<ul>
        					<li>1</li>
        					<li>2</li>
        					<li>3</li>
        				</ul>
        			</div>
        		    <ul class="tab1">
					     <li><img  src="img/nature2.jpg" class="img1" /></li>
					     <li><img  src="img/nature3.jpg" class="img1" /></li>
					     <li><img  src="img/nature4.jpg" class="img1" /></li>
					     <li><img  src="img/nature2.jpg" class="img1"  /></li>
				    </ul>
				    <ul class="tab2">
				    	<li class="w"><a href="" title="我校荣获“河南省民族团结进步创建示范...">我校荣获“河南省民族团结进步创建示范...</a></li>
				    	<li class="w"><a href="" title="我校在全省高校统一战线开展庆祝新中国...">我校在全省高校统一战线开展庆祝新中国...</a></li>
				    	<li class="w"><a href="" title="省委常委、统战部部长孙守刚出席“2019...">省委常委、统战部部长孙守刚出席“2019...</a></li>
				    </ul>
        		</div>
        		<div class="tab3">
        			<div class="tab3_1">
        				<a href="html/more_1.html" class="box5">- 理论学习 -</a>
        				<a href="html/more_1.html" class="box4">>></a>
        				<a href="html/more_1.html" class="box3" >more</a>	
        			</div>
        			<ul class="tab3_2">
        				<?php
        					$link =@new mysqli('localhost','root','','HRM');
					        $link->set_charset('utf8');
					        $sql="select *from Theory";
						    $res=$link->query($sql);
						    $num=1;
						    while($num<8&$row=mysqli_fetch_assoc($res)){
						    	    $time=$row['createtime'];
  									$nowtime = date('m-d', strtotime($time)); 
						    	    echo "<li><a href=\"\" class=\"other\">&emsp;<img src=\"img/links_title.gif\" class=\"img2\"/>&emsp;{$row['content']}</a>
						    	    	  <span>$nowtime</span>
						    	    	  <a class=\"set_top\" style=\"width:30px;height:20px;display:inline-block; cursor: pointer;\">置顶</a>
						    	    </li>";
						    	    $num++;
						        }
                            mysqli_close($link);
        					?>
        			</ul>
        		</div>
        		<div class="tab4">
        			<div class="tab4_1">
        				<a href="html/more_2.html" class="box5">- 通知公告 -</a>
        				<a href="html/more_2.html" class="box4">>></a>
        				<a href="html/more_2.html" class="box3" >more</a>	
        			</div>
        			<ul class="tab3_2" id="tab4_2">
        				<li><a href="" class="other">&emsp;<img src="img/squer.png" class="img3"/>&emsp;培养当代大学生的家国情怀和国际视野</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/squer.png" class="img3"/>&emsp;防控新冠肺炎疫情给我们带来的启示</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/squer.png" class="img3"/>&emsp;学习贯彻•部长说 河南：发挥统战优势 展现担当作为 在大战大考中写好河南统战答卷</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/squer.png" class="img3"/>&emsp;全省统战工作会议召开</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/squer.png" class="img3"/>&emsp;王国生在党外人士座谈会上指出 发挥优势凝聚发展正能量 同心协力推动发展高质量</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/squer.png" class="img3"/>&emsp;习近平在湖北省考察新冠肺炎疫情防控工作</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/squer.png" class="img3"/>&emsp;习近平在决战决胜脱贫攻坚座谈会上强调 坚决克服新冠肺炎疫情影响 坚决夺取脱贫攻坚战全面胜利</a><span>12月27日</span></li>
        			</ul>
        		</div>
        		<div class="new1">
        			<div class="new1_header" style="color: #902f1c;font: 20px 微软雅黑;">
        				<a href="html/more_3.html" class="box6">>></a>
        				<a href="html/more_3.html" class="box7">more&emsp;</a>
        				<img src="img/tzb_sign1.gif" style="width: 10px;height: 20px;"/>
        				        <a href="index.php">&emsp;新闻速递</a>
        			</div>
        			<img src="img/tzb_sign2.gif"/ style="width: 378px;height: 2px;">
        			<ul class="new1_2">
        				<?php
        					$link =@new mysqli('localhost','root','','HRM');
					        $link->set_charset('utf8');
					        $sql="select *from News";
						    $res=$link->query($sql);
						    $num=1;
						    while($num<8&$row=mysqli_fetch_assoc($res)){
						    	    $time=$row['createtime'];
  									$nowtime = date('m-d', strtotime($time)); 
						    	    echo "<li><a href=\"\" class=\"other\">&emsp;<img src=\"img/jiantou.png\" />&emsp;{$row['content']}</a>
						    	    	  <span>$nowtime</span>
						    	    	   <a class=\"set_top\" style=\"width:30px;height:20px ;display:inline-block;cursor: pointer;\">置顶</a>
						    	    </li>";
						    	    $num++;
						        }
                            mysqli_close($link);
        					?>
        				
        			</ul>
        		</div>
        		<div class="new1" id="haha1">
        			<div class="new1_header" style="color: #902f1c;font: 20px 微软雅黑;">
        				<a href="html/more_4.html" class="box6">>></a>
        				<a href="html/more_4.html" class="box7">more&emsp;</a>
        				<img src="img/tzb_sign1.gif" style="width: 10px;height: 20px;"/>
        				      <a href="index.php">&emsp;统战忆往</a>
        			</div>
        			<img src="img/tzb_sign2.gif"/ style="width: 378px;height: 2px;">
        			<ul class="new1_2">
        				<li class="intro"><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;培养当代大学生的家国情怀和国际视野</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;防控新冠肺炎疫情给我们带来的启示</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;学习贯彻•部长说 河南：发挥统战优势 展现担当作为 在大战大考中写好河南统战答卷</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;全省统战工作会议召开</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;王国生在党外人士座谈会上指出 发挥优势凝聚发展正能量 同心协力推动发展高质量</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;习近平在湖北省考察新冠肺炎疫情防控工作</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;习近平在决战决胜脱贫攻坚座谈会上强调 坚决克服新冠肺炎疫情影响 坚决夺取脱贫攻坚战全面胜利</a><span>12月27日</span></li>
        			</ul>
        		</div>
        		<div class="new1" id="haha2">
        			<div class="new1_header" style="color:#902f1c;font:20px 微软雅黑;">
        				<a href="#" class="box6">>></a>
        				<a href="#" class="box7">more&emsp;</a>
        				<img src="img/tzb_sign1.gif" style="width: 10px;height: 20px;"/>
        				<a href="index.php">&emsp;人物采风</a>
        			</div>
        			<img src="img/tzb_sign2.gif"/ style="width: 378px;height: 2px;">
        			<ul class="new1_2">
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;培养当代大学生的家国情怀和国际视野</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;防控新冠肺炎疫情给我们带来的启示</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;学习贯彻•部长说 河南：发挥统战优势 展现担当作为 在大战大考中写好河南统战答卷</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;全省统战工作会议召开</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;王国生在党外人士座谈会上指出 发挥优势凝聚发展正能量 同心协力推动发展高质量</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;习近平在湖北省考察新冠肺炎疫情防控工作</a><span>12月27日</span></li>
        				<li><a href="" class="other">&emsp;<img src="img/jiantou.png" />&emsp;习近平在决战决胜脱贫攻坚座谈会上强调 坚决克服新冠肺炎疫情影响 坚决夺取脱贫攻坚战全面胜利</a><span>12月27日</span></li>
        			</ul>
        		</div>
        	</div>
        	<div class="center-3">
        		<div class="code1"><img src="img/ecode_left.jpg" style="width: 100px;"/><div></div>"河大统战"公众号</div>
        		<div class="code2">
        			<div class="code2-head"><a href="">&emsp;-相关链接-&emsp;</a></div>
        			<div class="code2-body">
        				<a href="" style="background-image: url(img/pc1.gif);background-size:100% 100% ;"></a>
        				<a href="" style="background-image: url(img/pc2.jpg);background-size:100% 100% ;"></a>
        				<a href="" style="background-image: url(img/pc33.gif);background-size:100% 100% ;"></a>
        				<a href="" style="background-image: url(img/pc8.gif);background-size:100% 100% ;"></a>
        				<a href="" style="background-image: url(img/pc9.gif);background-size:100% 100% ;"></a>        			
        			</div>
        		</div>
        		<div class="code1"><img src="img/ecode_left.jpg" style="width: 100px;"/><div></div>"统战新语"公众号</div>
        	</div>
        	<div class="center-4" ></div>
        	<p class="h2">Copyright © 2019 河南大学党委统战部 技术支持<a href="http://www.henu.edu.cn/">河南大学</a> <a href="">107网站工作室</a> <a href="">管理后台</a> </p>
        	<p class="h2">地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
        </div>
        <img src="img/float.jpg" class="img5"/>
        <button class="return"></button>
	</body>
</html>

