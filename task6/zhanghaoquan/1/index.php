<?php
    header("Content-type:text/html;charset=UTF-8");
    session_start();
    $user= $_SESSION['user'];
    if(!$user){
        $user='登录';
    }
    $link = mysqli_connect('localhost','root','123456');
    $select = mysqli_select_db($link,'text');
    mysqli_set_charset($link,'utf8');
    $line = 0;
    $line2 = 0;
    $line3=0;
    $line4=0;
    $line5=0;
    if($link){
        $sql = "select * from main;";
        $result = mysqli_query($link,$sql);
        $rows = array();
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        $sql2 = "select * from main2";
        $result2 = mysqli_query($link,$sql2);
        $rows2 = array();
        while($row2=mysqli_fetch_assoc($result2)){
            $rows2[]=$row2;
        }
    }else{
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>统战部</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/public.css">
    <link rel="stylesheet" href="css/user.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/user.js"></script>
</head>
<body>
    <!-- 页首部分 ↓-->
    <header>
        <div class="logo">
            <a name="top"><img src="images/top-bj2.gif" alt="NO FOUND"></a>
            <div class="headerfunc">
                <p>设为首页</p>
                <p><span>|</span></p>
                <p>加入收藏</p>
            </div>
            <div class="search">
                <div class="searchip">
                    <input type="text" placeholder="请输入搜索关键字">
                </div>
                <div class="searchbt">
                    <button>搜索</button>
                </div>
            </div>
        </div>
    </header>
    <!-- 首页内容 ↓ -->
    <section>
        <!-- 菜单栏 ↓ -->
        <div class="menu">
            <ul class="menupart">
                <a href="index.html"><li>首页</li></a>
                <li><a href="index/bmjs.html">部门介绍</a>
                    <ul class="selected">
                        <li><a href="index/gzzz.html">工作职责</a></li>
                        <li><a href="index/gzzz.html">机构及人员</a></li>
                        <li><a href="index/gzzz.html">领导小组</a></li>
                    </ul>
                </li>
                <li><a href="index/dptt.html">党派团体</a>
                    <ul class="selected">
                        <li>民革河南大学支部</li>
                        <li>民盟河南大学委员会</li>
                        <li>民进河南大学总支委员会</li>
                        <li>民建河南大学总支委员会</li>
                        <li>农工党河南大学委员会</li>
                        <li>九三学社河南大学委员会</li>
                        <li>河南大学侨联</li>
                        <li>河南大学知联会</li>
                        <li>河南大学留联会</li>
                    </ul>
                </li>
                <li><a href="index/rdzx.html">人大政协</a>
                    <ul class="selected">
                        <li>人大政协</li>
                    </ul>
                </li>
                <li><a href="index/jyxc.html">建言献策</a>
                    <ul class="selected">
                        <li><a href="jyxc.html">建言献策</a></li>
                    </ul>
                </li>
                <li><a href="index/zcfg.html">政策法规</a>
                    <ul class="selected">
                        <li>理论经纬</li>
                        <li>学习资料</li>
                        <li>会议纪要</li>
                        <li>工作记事</li>
                    </ul>
                </li>
                <li><a href="index/mzzj.html">民族宗教</a>
                    <ul class="selected">
                        <li>民族工作</li>
                        <li>宗教工作</li>
                    </ul>
                </li>
                <li><a href="index/xzzq.html">下载专区</a>
                    <ul class="selected">
                        <li><a href="zlxz.html">资料下载</a></li>
                    </ul>
                </li>
                <li><a href="index/lxwm.html">联系我们</a>
                    <ul class="selected">
                        <li><a href="index/lyb.html">留言板</a></li>
                        <li>微博</li>
                        <li>联系方式</li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Logo标 ↓ -->
        <div class="logoim">
            <img src="images/headNew.gif" alt="NO FOUND">
            <div class="logoimp">
                <p>培养当代大学生的家国情怀和国际视野</p>
            </div>
        </div>
        <!-- 文字内容 ↓ -->
        <div class="content">
            <div class="section1">
                <!-- 主页轮播图 ↓ -->
                <div class="banner">
                    <div class="bannerimg">
                    <img src="images/banner1.jpg" alt="NO FOUND">
                    <img src="images/banner2.jpg" alt="NO FOUND">
                    <img src="images/banner3.jpg" alt="NO FOUND">
                    </div>
                    <div class="bannerico">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </div>
                    <div class="bannermsg">
                        <p>我校荣获“河南省民族团结进步创建示范...</p>
                        <p>我校在全省高校统一战线开展庆祝新中国...</p>
                        <p>省委常委、统战部部长孙守刚出席“2019...</p>
                    </div>
                </div>
                <!-- 正文部分1 ↓ -->
                <div class="text1">
                    <div class="text1titlep">
                        <a href="index/llxx.php"><p>- 理论学习 -</p></a>
                    </div>
                    <div class="text1next">
                        <p><a href="index/llxx.php">more</a></p>
                        <p><span>>></span></p>
                    </div>
                    <div class="textcontent">
                    <?php foreach($rows as $key => $v) {
                        if($line<7){
                        echo '<li><a href="index/zw01.html"><span>·</span>';
                            echo $v['title'];
                            $line++;
                            echo '</a></li>';
                        }
                    }
                        ?>
                    </div>
                    <div class="textdate">
                    <?php foreach($rows as $key => $v) {
                            if($line2<7){
                        echo '<li>';
                            echo $v['time'];
                            $line2++;
                        echo '</li>';
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- 正文部分2 ↓ -->
                <div class="text2">
                    <div class="text2titlep">
                        <p><a href="index/tzgg.html">- 通知公告 -</a></p>
                    </div>
                    <div class="text1next">
                        <p><a href="index/tzgg.html">more</a></p>
                        <p><span>>></span></p>
                    </div>
                    <div class="special-color">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </div>
                    <div class="text2content">
                        <a href="index/zw02.html"><li>转发《关于开展征文活动的通知》</li></a>
                        <a href="index/zw02.html"><li>党委统战部近期值班安排（3.1—3.1...</li></a>
                        <a href="index/zw02.html"><li>延迟开学期间统战部值班安排</li></a>
                        <a href="index/zw02.html"><li>党委统战部2020年寒假值班安排表</li></a>
                        <a href="index/zw02.html"><li>同心大讲堂：黄河流域生态保护和高...</li></a>
                        <a href="index/zw02.html"><li>颁奖通知-"河南大学统一战线庆祝新...</li></a>
                    </div>
                    <div class="text2date">
                        <li>04月07日</li>
                        <li>03月01日</li>
                        <li>02月13日</li>
                        <li>01月24日</li>
                        <li>12月17日</li>
                        <li>12月09日</li>
                    </div>
                </div>
            </div>
            <div class="section2">
                <!-- 正文部分3*3 ↓ -->
                <div class="text3">
                    <div class="textlist">
                        <img src="images/tzb_sign1.gif" alt="NO FOUND">
                    <h3>新闻速递</h3>
                        <p><a href="index/xwsd.php">more</a></p>
                    <div class="nex">>></div>
                    <div class="line">
                        <img src="images/tzb_sign2.gif" alt="NO FOUND">
                        <hr>
                    </div>
                    </div>
                    <div class="text3cont">
                        <div class="jiantou">
                        <?php foreach($rows2 as $key => $v) {
                            if($line3<7){
                            echo '<img src="images/jiantou.png" alt="">';
                                $line3++;
                                }
                            }
                        ?>
                        </div>
                        <div class="text3part">
                        <?php foreach($rows2 as $key => $v) {
                            if($line4<7){
                            echo '<li><a href="index/zw03.html">';
                                echo $v['title'];
                                $line4++;
                                echo '</a></li>';
                            }
                        }
                        ?>
                        </div>
                        <div class="text3date">
                        <?php foreach($rows2 as $key => $v) {
                            if($line5<7){
                            echo '<li>';
                            echo $v['time'];
                            $line5++;
                            echo '</li>';
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="text3">
                <div class="textlist">
                    <img src="images/tzb_sign1.gif" alt="NO FOUND">
                    <h3>统战忆往</h3>
                    <p><a href="index/tzyw.html">more</a></p>
                    <div class="nex">>></div>
                    <div class="line">
                        <img src="images/tzb_sign2.gif" alt="NO FOUND">
                        <hr>
                    </div>
                </div>
                <div class="text3cont">
                    <div class="jiantou">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                    </div>
                    <div class="text3part">
                        <a href="index/zw04.html"><li>心系祖国和平统一大业的爱国将领</li></a>
                        <a href="index/zw04.html"><li>我与河大台联</li></a>
                        <a href="index/zw04.html"><li>河南大学统战工作与海外学子</li></a>
                        <a href="index/zw04.html"><li>难忘的记忆</li></a>
                        <a href="index/zw04.html"><li>我的回忆</li></a>
                        <a href="index/zw04.html"><li>风雨同舟 无怨无悔</li></a>
                    </div>
                    <div class="text3date">
                        <li>03月25日</li>
                        <li>12月27日</li>
                        <li>12月27日</li>
                        <li>12月27日</li>
                        <li>12月27日</li>
                        <li>12月19日</li>
                    </div>
                </div>
                </div>
                <div class="text3">
                <div class="textlist">
                    <img src="images/tzb_sign1.gif" alt="NO FOUND">
                    <h3>人物采风</h3>
                    <p><a href="index/more.html">more</a></p>
                    <div class="nex">>></div>
                    <div class="line">
                        <img src="images/tzb_sign2.gif" alt="NO FOUND">
                        <hr>
                    </div>
                </div>
                <div class="text3cont">
                    <div class="jiantou">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                        <img src="images/jiantou.png" alt="">
                    </div>
                    <div class="text3part">
                        <li>丁中一：心中所爱，始终如一</li>
                        <li>张祎捷：医者仁心  止于至善</li>
                        <li>杜祖亮：仰望星空 脚踏实地</li>
                        <li>专属秦奋的勤奋之道</li>
                        <li>师冰洋：那些年在铁塔下</li>
                        <li>师之楷模 德之典范――怀念黄魁吾教授</li>
                    </div>
                    <div class="text3date">
                        <li>04月09日</li>
                        <li>03月10日</li>
                        <li>12月12日</li>
                        <li>11月25日</li>
                        <li>11月15日</li>
                        <li>10月08日</li>
                    </div>
                </div>
                </div>
            </div>
            <!-- 正文底部 ↓ -->
            <div class="section3">
                <div class="bottomlogo">
                    <div class="bottomlogim">
                        <img src="images/ecode_left.jpg" alt="NO FOUND">
                    </div>
                    <p>"河大统战"公众号</p>
                </div>
                <div class="bottommain">
                    <div class="bottomtitle">
                        <p>- 相关链接 -</p>
                    </div>
                    <div class="bottompic">
                        <img src="images/pc1.gif" alt="NO FOUND">
                        <img src="images/pc2.jpg" alt="NO FOUND">
                        <img src="images/pc8.gif" alt="NO FOUND">
                        <img src="images/pc33.gif" alt="NO FOUND">
                        <img src="images/pc9.gif" alt="NO FOUND">
                    </div>
                </div>
                <div class="bottomlogo">
                    <div class="bottomlogim">
                        <img src="images/ecode_right.jpg" alt="NO FOUND">
                    </div>
                    <p>"统战新语"公众号</p>
                </div>
            </div>
        </div>
    </section>
    <!-- 首页页尾 ↓ -->
    <footer>
        <div class="footer">
            <div class="footertitle"></div>
            <div class="footerp">
                <p>Copyright © 2019 河南大学党委统战部 技术支持河南大学 107网站工作室 管理后台</p>
                <p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
            </div>
        </div>
    </footer>
    <!-- 锚点图标 ↓ -->
    <div class="function">
        <a href="#top"><img src="images/dian.png" alt="NO FOUND"></a>
    </div>
    <!-- 浮动窗口 ↓ -->
    <div id="window">
        <div id="window-box">
            <div id="windowpic">
                <img src="images/pic.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="admin">
        <img src="images/user.png" alt="NO FOUND">
    </div>
    <div class="adminmain">
        <div class="aduser">
            <img src="images/user.png" alt="NO FOUND">
            <p id="user_name"><?php echo $user;?></p>
        </div>
        <div class="adacount">
            <a href="admin.php">
            <img src="images/sub_account.png" alt="NO FOUND">
            <p>管理员界面</p>
            </a>
        </div>
        <div class="adquit">
            <a href="../login.php">
            <img src="images/info.png" alt="NO FOUND">
            <p>注销</p>
            </a>
        </div>
        <div class="adback">
            <img src="images/up_to_top.png" alt="NO FOUND">
            <p>收回</p>
        </div>
    </div>
</body>
</html>