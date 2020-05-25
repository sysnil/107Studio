<?php
require_once("../link1.php");
$sql="select * from newslist order by flag desc,date asc;";
$result = mysqli_query($mysqli, $sql);
$arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/three1.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/three1.js"></script>
</head>
<body>
    <div class="top">

        <div class="search">
            <div class="top_left">
                <a href="#">设为首页</a> | <a href="#">加入收藏</a>
            </div>
            <div class="top_right">
                <input type="text" placeholder="请输入搜索关键字" id="srea">
                <input type="submit" value="搜索" id="srea1">
            </div>
        </div>

    </div>
    <div class="nav">
        <form id="form1">
            <div class="nav_container">
                <ul id="nav_style">
                    <li><a href="#">首页</a></li>

                    <li><a href="#">部门介绍</a>
                        <ul class="nav_style1">
                            <li>
                                <a href="#">工作职责</a>
                            </li>
                            <li>
                                <a href="#">机构及人员</a>
                            </li>
                            <li>
                                <a href="#">领导小组</a>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="#"> 党派团体</a>
                        <ul class="nav_style1">
                            <li>
                                <a href="#">民革河南大学支部</a>
                            </li>
                            <li>
                                <a href="#">民盟河南大学委员会</a>
                            </li>
                            <li>
                                <a href="#">民进河南大学总支委员会</a>
                            </li>
                            <li>
                                <a href="#">民建河南大学总支委员会</a>
                            </li>
                            <li>
                                <a href="#">农工党河南大学委员会</a>
                            </li>
                            <li>
                                <a href="#">九三学社河南大学委员会</a>
                            </li>
                            <li>
                                <a href="#">河南大学台联</a>
                            </li>
                            <li>
                                <a href="#">河南大学侨联</a>
                            </li>
                            <li>
                                <a href="#">河南大学知联会</a>
                            </li>
                            <li>
                                <a href="#">河南大学留联会</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">人大政协</a>
                        <ul class="nav_style1">
                            <li>
                                <a href="#">人大政协</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="#">建言献策</a>
                        <ul class="nav_style1">
                            <li>
                                <a href="#">建言献策</a>

                            </li>

                        </ul>
                    </li>
                    <li><a href="#">政策法规</a>
                        <ul class="nav_style1">
                            <li>
                                <a href="#">理论经纬</a>

                            </li>
                            <li>
                                <a href="#">学习资料</a>
                            </li>
                            <li>
                                <a href="#">
                                    会议纪要
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    工作记事
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">民族宗教</a>
                        <ul class="nav_style1">
                            <li>
                                <a href="#">民族工作</a>

                            </li>
                            <li>
                                <a href="#">宗教工作</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">下载专区</a>
                        <ul class="nav_style1">
                            <li>
                                <a href="#">资料下载</a>

                            </li>

                        </ul>
                    </li>
                    <li><a href="#">联系我们</a>
                        <ul class="nav_style1">
                            <li>
                                <a href="#">留言版</a>

                            </li>
                            <li>
                                <a href="#">微博</a>
                            </li>
                            <li>
                                <a href="#">联系方式</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    <div class="content">
        <div class="right">
            <div class="list_1">
                <p>理论学习</p>
            </div>
            <div class="list_2">
                <ul>
                    <li><a href="#">
                        理论学习</a></li>
                    <li><a href="#">通知公告</a></li>
                    <li><a href="#">新闻速递</a></li>
                    <li><a href="#">统战忆往</a></li>
                    <li><a href="#">人物采风</a></li>
                </ul>
            </div>
            <div class="list_3">
                <div class="list_1">
                    <p>校园风光</p>
                </div>
                <div class="banner">
                    <ul id="banner_style1">
                        <li>
                            <a href="#"><img src="../img/nature2.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="../img/nature3.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="../img/nature4.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="list_4">
                <div class="list_1">
                    <p>相关链接</p>
                </div>
                <ul>
                    <li><a href="#">中共中央统一战线</a></li>
                    <li><a href="#">中共河南省委统战部</a></li>
                    <li><a href="#">开封市委统战部</a></li>
                    <li><a href="#">河南大学</a></li>
                    <li><a href="#">"河大统战"杂志</a></li>
                </ul>
            </div>
        </div>
        <div class="left">
            <h3>
                <i><img src="../img/icon-index.png" alt=""></i>
                <span>当前位置:</span>
                <a href="index.html">首页</a>
                >
                <a href="#">理论学习</a>
                >

            </h3>
            
            <div class="left_bottom">
                <ul>
                <?php
                foreach ($arrs as $arr) {
                ?>

                    
                    <li><img src="../img/dotted.gif" alt=""><a href="content.html"><?php echo $arr['newstitle'];?></a>
                        
                        <span><?php echo $arr['date'];?></span>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="to">
                <span class="to1">共73条&nbsp;&nbsp;1/8&nbsp;</span>
                <span class="to2">首页</span><span class="to2">上页</span>
                
                <span class="to4"><a href="#">下页</a></span><span class="to4"><a href="#">尾页</a></span>
               
                 &nbsp;&nbsp;
                <span class="to7">
                    <input type="button" id="to7_1" value="转到"><input id="to7_2" type="text">页
                    
                   
                </span>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="bottom1"></div>
        <div class="bottom2">
            <p> Copyright © 2019 河南大学党委统战部 技术支持<a href="http://www.henu.edu.cn/">河南大学</a> <a href="#">
                    107网站工作室</a><a href="http://hdcms.henu.edu.cn/system/login.jsp"> 管理后台</a>
                <br>
                地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428 </p>
        </div>
    </div>
</body>
</html>