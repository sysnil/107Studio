<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','admins');
if($mysqli->connect_errno){
	die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$sql = "select * from news1 order by addtime desc";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
	while($row=$mysqli_result->fetch_assoc()){
		$rows[]=$row;
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>统战部</title>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<script src="jquery-1.12.2.js"></script>
		<script src="js/index.js">
		</script>
	</head>
	<body>
		<form action="" method="">
			<div class="top1">
				<img src="img/top-bj2.gif" >
				<div class="righttop">
					<ul>
						<li id="sheweishouye">设为首页</li>
						<li>加入收藏</li>
					</ul>
						<div class="sousuo">
							<input type="text" id="shurukuang" placeholder="请输入搜索关键字" />
							<input type="submit" id="tijiaokuang" value="搜索"/>
						</div>
				</div>
			</div>
			<div class="header">
				<ul class="menu">
					<li>
						<a href="index.php">首页</a>
					</li>
					<li><a href="menu/bumen.php">部门介绍</a>
					<ul>
						<li><a href="menu/bumen.php">工作职责</a></li>
						<li><a href="menu/bumen.php">机构及人员</a></li>
						<li><a href="menu/bumen.php">领导小组</a></li>
					</ul>
					</li>
					<li><a href="menu/dangpai.php">党派团体</a>
					<ul>
						<li><a href="menu/dangpai.php">民革河南大学支部</a></li>
						<li><a href="menu/dangpai.php">民盟河南大学委员会</a></li>
						<li><a href="menu/dangpai.php">民进河南大学总支委员会</a></li>
						<li><a href="menu/dangpai.php">民建河南大学总支委员会</a></li>
						<li><a href="menu/dangpai.php">民工党河南大学委员会</a></li>
						<li><a href="menu/dangpai.php">九三学社河南大学委员会</a></li>
						<li><a href="menu/dangpai.php">河南大学台联</a></li>
						<li><a href="menu/dangpai.php">河南大学侨联</a></li>
						<li><a href="menu/dangpai.php">河南大学知联会</a></li>
						<li><a href="menu/dangpai.php">河南大学留联会</a></li>
					</ul>
					</li>
					<li><a href="menu/renda.php">人大政协</a>
					<ul>
						<li><a href="menu/renda.php">人大政协</a></li>
					</ul>
					</li>
					<li><a href="menu/jianyan.php">建言献策</a>
					<ul>
						<li><a href="menu/jianyan.php">建言献策</a></li>
					</ul>
					</li>
					<li><a href="menu/zhengce.php">政策法规</a>
					<ul>
						<li><a href="menu/zhengce.php">理论经纬</a></li>
						<li><a href="menu/zhengce.php">学习资料</a></li>
						<li><a href="menu/zhengce.php">会议纪要</a></li>
						<li><a href="menu/zhengce.php">工作记事</a></li> 
					</ul>
					</li>
					<li><a href="menu/minzu.php">民族宗教</a>
					<ul>
						<li><a href="menu/minzu.php">民族工作</a></li> 
						<li><a href="menu/minzu.php">宗教工作</a></li> 
					</ul>
					</li>
					<li><a href="menu/xiazai.php">下载专区</a>
					<ul>
						<li><a href="menu/xiazai.php">资料下载</a></li> 
					</ul>
					</li>
					<li><a href="menu/lianxi.php">联系我们</a>
					<ul>
						<li><a href="menu/lianxi.php">留言板</a></li> 
						<li><a href="menu/lianxi.php">微博</a></li> 
						<li><a href="menu/lianxi.php">联系方式</a></li> 
					</ul></li>
				</ul>
			</div>
			<div class="box1"> 
					培养当代大学生的家国情怀和国际视野
			</div>
			<div class="box2">
				<div class="kuai1">
					<ul class="tupian">
						<li><img src="img/img1.jpg" ></li>
						<li><img src="img/img2.jpg" ></li>
						<li><img src="img/img3.jpg" ></li>
					</ul>
					<ul class="shuzi">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
					<ul class="shuoming">
						<li>我校在全省高校统一战线开展庆祝新中国...</li>
						<li>我校荣获“河南省民族团结进步创建示范...</li>
						<li>省委常委、统战部部长孙守刚出席“2019...</li>
					</ul>
				</div>
				<div class="kuai2">
					<div class="biaoti">
						<a href="menu/more1.php" class="biaoti2">
							<div class="more">
								more
							</div>
							<div class="jiantou">
								>>
							</div>
						</a>
						<div class="biaoti1">
							-理论学习-
						</div>
					</div> 
					
					<ul class="list1" >
						<?php $i=0;foreach($rows as $row):?>

	                        <li><a href="menu\more2.php?id=<?php echo $row['id'];?>" style="color: black;"> <?php echo $row['title']?></a> </li>
                        <?php if($i==6){break;} $i++; endforeach;?>
					</ul>
					<ul class="list2">
						<li>04月09日</li>
						<li>04月03日</li>
						<li>03月25日</li>
						<li>03月18日</li>
						<li>03月18日</li>
						<li>03月14日</li>
						<li>03月07日</li>
					</ul>
				</div>
				<div class="kuai3">
					<div class="biaoti">
						<a href="menu/more1.php" class="biaoti2">
							<div class="more">
								more
							</div>
							<div class="jiantou">
								>>
							</div>
						</a>
						<div class="biaoti1">
							-通知公告-
						</div>
					</div> 
					<ul class="list1">
						<li><div class="huangge"></div>转发《关于开展征文活动的通知》</li>
						<li><div class="huangge"></div>党委统战部近期值班安排（3.1—3.15...</li>
						<li><div class="huangge"></div>延迟开学期间统战部值班安排</li>
						<li><div class="huangge"></div>党委统战部2020年寒假值班安排表</li>
						<li><div class="huangge"></div>同心大讲堂：黄河流域生态保护和...</li>
						<li><div class="huangge"></div>颁奖通知-"河南大学统一战线庆祝新...</li>
					</ul>
					<ul class="list2">
						<li>04月07日</li>
						<li>03月01日</li>
						<li>02月13日</li>
						<li>01月14日</li>
						<li>12月17日</li>
						<li>12月09日</li>
					</ul>
				</div>
				<div class="kuai4">
					<div class="toubu">
						<div class="toubu1">
							<a href="menu/more1.php" class="biaoti2">
								<div class="more">
									more
								</div>
								<div class="jiantou">
									>>
								</div>
							</a>
							<div class="biaoji"><img src="img/toubu1.gif" >新闻速递</div>
						</div>
						<div class="toubu2">
							<img src="img/toubu2.gif" >
						</div>
					</div>
					<ul class="list1">
						<li><img src="img/jiantou.png" >在灾难大考中坚定报国力行的使命担当</li>
						<li><img src="img/jiantou.png" >河南大学统一战线抗疫情系列报道：...</li>
						<li><img src="img/jiantou.png" >我校2名党外知识分子获殊荣</li>
						<li><img src="img/jiantou.png" >辛永芬、段亚广获得“中国语言资源...</li>
						<li><img src="img/jiantou.png" >河南大学统一战线抗疫情系列报道：...</li>
						<li><img src="img/jiantou.png" >河南大学统一战线抗疫情系列报道：...</li>
					</ul>
					<ul class="list2">
						<li>04月08日</li>
						<li>04月03日</li>
						<li>04月02日</li>
						<li>04月02日</li>
						<li>04月02日</li>
						<li>04月02日</li>
					</ul>
				</div>
				<div class="kuai5">
					<div class="toubu">
						<div class="toubu1">
							<a href="menu/more1.php" class="biaoti2">
								<div class="more">
									more
								</div>
								<div class="jiantou">
									>>
								</div>
							</a>
							<div class="biaoji"><img src="img/toubu1.gif" >统战忆往</div>
						</div>
						<div class="toubu2">
							<img src="img/toubu2.gif" >
						</div>
					</div>
					<ul class="list1">
						<li><img src="img/jiantou.png" >心系祖国和平统一大业的爱国将领</li>
						<li><img src="img/jiantou.png" >我与河大台联</li>
						<li><img src="img/jiantou.png" >河南大学统战工作与海外学子</li>
						<li><img src="img/jiantou.png" >难忘的记忆</li>
						<li><img src="img/jiantou.png" >我的回忆</li>
						<li><img src="img/jiantou.png" >风雨同舟 无怨无悔</li>
					</ul>
					<ul class="list2">
						<li>04月08日</li>
						<li>04月03日</li>
						<li>04月02日</li>
						<li>04月02日</li>
						<li>04月02日</li>
						<li>04月02日</li>
					</ul>
				</div>
				<div class="kuai6">
					<div class="toubu">
						<div class="toubu1">
							<a href="menu/more1.php" class="biaoti2">
								<div class="more">
									more
								</div>
								<div class="jiantou">
									>>
								</div>
							</a>
							<div class="biaoji"><img src="img/toubu1.gif" >人物采风</div>
						</div>
						<div class="toubu2">
							<img src="img/toubu2.gif" >
						</div>
					</div>
					<ul class="list1">
						<li><img src="img/jiantou.png" >丁中一：心中所爱，始终如一</li>
						<li><img src="img/jiantou.png" >张祎捷：医者仁心 止于至善</li>
						<li><img src="img/jiantou.png" >杜祖亮：仰望星空 脚踏实地</li>
						<li><img src="img/jiantou.png" >专属秦奋的勤奋之道</li>
						<li><img src="img/jiantou.png" >师冰洋：那些年在铁塔下</li>
						<li><img src="img/jiantou.png" >师之楷模 德之典范――怀念黄魁吾教授</li>
					</ul>
					<ul class="list2">
						<li>04月08日</li>
						<li>04月03日</li>
						<li>04月02日</li>
						<li>04月02日</li>
						<li>04月02日</li>
						<li>04月02日</li>
					</ul>
				</div>
				<div class="kuai7">
					<div class="hezi1">
						<img src="img/ecode_left.jpg" >
						<br>"河大统战”公众号
					</div>
					<div class="hezi2">
						<div class="xiaohe1">
							<div class="xiangguan">
								-相关链接-
							</div>
						</div>
						<div class="xiaohe2">
							<img src="img/pc1.gif" />
							<img src="img/pc2.jpg" />
							<img src="img/pc8.gif" />
							<img src="img/pc9.gif" />
							<img src="img/pc33.gif" />
						</div>
					</div>
					<div class="hezi3">
						<img src="img/ecode_right.jpg" >
						<br>"统战新语”公众号
					</div>
				</div>
			</div>
			<div class="box3"></div>
			<div class="box4">
				<br>
				Copyright © 2019 河南大学党委统战部 技术支持<span id="span1">河南大学</span> 
				<span id="span2">107网站工作室</span> 
				<span id="span3">管理后台</span>
				<br>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428 
			</div>
			<div class="wrap">
				<img src="img/gotop.png" />
				<div class="fanhui">
					返回顶部
				</div>
			</div>
			<div class="float1">
				<img src="img/55555555.jpg" >
			</div>
		</form>
	</body>
</html>
