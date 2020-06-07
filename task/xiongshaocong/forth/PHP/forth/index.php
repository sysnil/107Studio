<?php
require_once 'connect_mysql.php';
$sql="select * from news order by content desc,date asc;";
$result = mysqli_query($sql);
$arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);

header('content-type:text/html;charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>107lab第三次考核作业</title>
<link rel="stylesheet" href="./css/index.css">
<script src="jquery-3.4.1.js"></script>

</head>

<body>
<!-- Header Start -->
<div class="Header">
<img class="headimg" src="images/top-bj2.gif">
<div class="head_tip">
<a><span style="color: white; cursor: pointer;">设为主页&nbsp</span></a>
<span>&nbsp&nbsp|&nbsp&nbsp</span>
<a><span style="color: white; cursor: pointer;">&nbsp加入收藏</span></a>
</div>
<div class="head_search">
<input class="ipt" placeholder="请输入搜索关键字">
<button class="btn">搜索</button>
</div>

<div class="header_nav">
<ul>
<li id="navli"><a href="index.html">首页</a></li>
<li>
<a href="javascript:void(0);">部门介绍</a>
<ul>
<li>工作职责</li>
<li>机构及人员</li>
<li>领导小组</li>
</ul>
</li>
<li>
<a href="javascript:void(0);">党派团体</a>
<ul>
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
</ul>
</li>
<li>
<a href="javascript:void(0);">人大政协</a>
<ul>
<li>人大政协</li>
</ul>
</li>
<li>
<a href="javascript:void(0);">建言献策</a>
<ul>
<li>建言献策</li>
</ul>
</li>
<li>
<a href="javascript:void(0);">政策法规</a>
<ul>
<li>理论经纬</li>
<li>学习资料</li>
<li>会议纪要</li>
<li>工作记事</li>
</ul>
</li>
<li>
<a href="javascript:void(0);">民族宗教</a>
<ul>
<li>民族工作</li>
<li>宗教工作</li>
</ul>
</li>
<li>
<a href="javascript:void(0);">下载专区</a>
<ul>
<li><a href="contentindex1.html" style="width: 180px; height: 30px;line-height: 30px;">资料下载</a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);">联系我们</a>
<ul>
<li><a href="contentindex4.html" style="width: 180px; height: 30px;line-height: 30px; text-align: center;">
留言板</a></li>
<li>微博</li>
<li>联系方式</li>
</ul>
</li>
</ul>
</div>
<div>
<img class="headimg2" src="images/headNew.gif">
<span class="headimgtext">培养当代大学生的家国情怀和国际视野</span>
</div>
</div>
<!-- Header End   -->

<!--  banner start  -->
<div class="bannerbackgroud">
<div class="wrap">
<ul>
<li>
<div>
<img src="images/wrap1.jpg">
<span>我校荣获“河南省民族团结进步创建示范...</span>
</div>
</li>
<li>
<div>
<img src="images/wrap2.jpg">
<span>我校在全省高校统一战线开展庆祝新中国...</span>
</div>
</li>
<li>
<div>
<img src="images/wrap3.jpg">
<span>省委常委、统战部部长孙守刚出席“2019...</span>
</div>
</li>
</ul>
<ol>
<li class="current">1</li>
<li>2</li>
<li>3</li>
</ol>
</div>
<div class="news_1">
<div class="news_1_title">
<a href="#"> -理论学习-</a>
<span class="span_1"><a href="contentindex2.html" style="color: rgb(153, 152, 152);">more</a></span><span class="span_2">>></span>
</div>
<div class="news_1_content">
<ul>
<li><i></i><a style="color: red;" href="contentindex3.html">培养当代大学生的家国情怀和国际视野</a><span style="color: red;">04月09日</span></li>
			<?php
                foreach ($arrs as $arr) {
                ?>                    
                    <li><a href="contentindex3.html"><?php echo $arr['news_title'];?></a>
                        
                        <span><?php echo $arr['date'];?></span>
                    </li>
                }
            <?php endforeach; ?>
</ul>
</div>
</div>
<div class="news_2">
<div class="news_2_title">
<a href="#"> -通知公告-</a>
<span class="span_3">more</span><span class="span_4">>></span>
</div>
<div class="news_2_content">
<ul>
<li><i></i><a>转发《关于开展征文活动的通知》</a><span>04月07日</span></li>
<li><i></i><a>党委统战部近期值班安排（3.1—3.15）</a><span>03月01日</span></li>
<li><i></i><a>延迟开学期间统战部值班安排</a><span>02月13日</span></li>
<li><i></i><a>党委统战部2020年寒假值班安排表</a><span>01月14日</span></li>
<li><i></i><a>同心大讲堂：黄河流域生态保护和高质量发展</a><span>12月17日</span></li>
<li><i></i><a>颁奖通知-"河南大学统一战线庆祝新中国成立70周年征文比赛"</a><span>12月09日</span></li>
</ul>
</div>
</div>
<div class="news_3">
<div class="news_3_title">
<img src="images/tzb_sign1.gif" class="news_3_titlt_img1">
<a href="#">新闻速递</a>
<span class="span_5">more</span><span class="span_6">>></span>
<img src="images/tzb_sign2.gif" class="news_3_titlt_img2">
</div>

<div class="news_3_content">
<ul>
<li><i></i><a>赵勇教授课题组在Angew. Chem. Int. Ed.报道锂金属电池新进展</a><span>04月16日</span></li>
<li><i></i><a>在灾难大考中坚定报国力行的使命担当</a><span>04月08日</span></li>
<li><i></i><a>河南大学统一战线抗疫情系列报道：风雨同舟</a><span>04月03日</span></li>
<li><i></i><a>我校2名党外知识分子获殊荣</a><span>04月02日</span></li>
<li><i></i><a>辛永芬、段亚广获得“中国语言资源保护奖”</a><span>04月02日</span></li>
<li><i></i><a>河南大学统一战线抗疫情系列报道：加油抗疫</a><span>04月02日</span></li>
</ul>
</div>
</div>
<div class="news_4">
<div class="news_4_title">
<img src="images/tzb_sign1.gif" class="news_4_titlt_img1">
<a href="#">统战忆往</a>
<span class="span_7">more</span><span class="span_8">>></span>
<img src="images/tzb_sign2.gif" class="news_4_titlt_img2">
</div>

<div class="news_4_content">
<ul>
<li style="color: red;"><i></i><a>心系祖国和平统一大业的爱国将领侯镜如</a><span>03月25日</span></li>
<li><i></i><a>我与河大台联</a><span>12月27日</span></li>
<li><i></i><a>河南大学统战工作与海外学子</a><span>12月27日</span></li>
<li><i></i><a>难忘的记忆</a><span>12月27日</span></li>
<li><i></i><a>我的回忆</a><span>12月27日</span></li>
<li><i></i><a>风雨同舟 无怨无悔</a><span>12月19日</span></li>
</ul>
</div>
</div>
<div class="news_5">
<div class="news_5_title">
<img src="images/tzb_sign1.gif" class="news_5_titlt_img1">
<a href="#">人物采风</a>
<span class="span_9">more</span><span class="span_10">>></span>
<img src="images/tzb_sign2.gif" class="news_5_titlt_img2">
</div>

<div class="news_5_content">
<ul>
<li><i></i><a>丁中一：心中所爱，始终如一</a><span>04月09日</span></li>
<li><i></i><a>张祎捷：医者仁心  止于至善</a><span>03月10日</span></li>
<li><i></i><a>杜祖亮：仰望星空 脚踏实地</a><span>12月12日</span></li>
<li><i></i><a>专属秦奋的勤奋之道</a><span>11月25日</span></li>
<li><i></i><a>师冰洋：那些年在铁塔下</a><span>11月15日</span></li>
<li><i></i><a>师之楷模 德之典范――怀念黄魁吾教授</a><span>10月08日</span></li>
</ul>
</div>
</div>
<div class="more_link">
<div class="QRcode_1">
<img src="images/ecode_left.jpg" class="QRcode_img_1">
<span>"河大统战"公众号</span>
</div>
<div class="foot_middle">
<div class="foot_middle_link">
<span><a href="#" style="color: white;">-相关链接-</a></span>
</div>
<div class="foot_content_img">
<ul>
<li><img src="images/pc1.gif"></li>
<li><img src="images/pc2.jpg"></li>
<li><img src="images/pc8.gif"></li>
<li><img src="images/pc9.gif"></li>
<li><img src="images/pc33.gif"></li>
</ul>
</div>
</div>
<div class="QRcode_2">
<img src="images/ecode_right.jpg" class="QRcode_img_2">
<span>"统战新语"公众号</span>
</div>
</div>
</div>
<div class="footer">
<div class="foot_1"></div>
<div class="foot_2">
<p> Copyright © 2019 河南大学党委统战部 技术支持"
                <a href="http://www.henu.edu.cn/" target="blank">河南大学</a>
                <a href="#"> 107网站工作室</a>
                <a href="#"> 管理后台</a>
                <br> 地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428
                </p>
                </div>
                </div>
                <img src="images/backtop.png" id="mback" οnclick="backTop()">

                <!-- 浮动窗口 -->

                <div id="ad_window">
                <h2>我乱飘，来抓我呀！</h2>
                </div>
                </body>
                <script src="./js/index.js"></script>

