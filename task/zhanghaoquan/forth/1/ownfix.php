<?php
    header("Content-type:text/html;charset=UTF-8");
    session_start();
    $user= $_SESSION['user'];
    $link = mysqli_connect('localhost','root','123456');
    $select = mysqli_select_db($link,'user_login');
    mysqli_set_charset($link,'utf8');
    if($link){
        $sql = "select * from user";
        $result = mysqli_query($link,$sql);
        $rows = array();
        while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
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
    <link rel="stylesheet" href="css/public.css">
    <link rel="stylesheet" href="css/del.css">
    <link rel="stylesheet" href="css/user.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/user.js"></script>
    <script type="text/javascript" src="js/moreleft.js"></script>
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
    <section>
        <div class="menu">
            <ul class="menupart">
                <a href="index.php"><li>首页</li></a>
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
        <div class="Content">
            <div class="left">
                <div class="left1">
                    <li class="title">联系我们
                        <li><a href="">留言板</a></li>
                        <li><a href="">微博</a></li>
                        <li><a href="">联系方式</a></li>
                    </li>
                </div>
                <div class="left3">
                    <li class="title">校园风光</li>
                    <div class="leftpic">
                        <img src="images/nature2.jpg" alt="NO FOUND">
                        <img src="images/nature3.jpg" alt="NO FOUND">
                        <img src="images/nature4.jpg" alt="NO FOUND">
                    </div> 
                </div>
                <div class="left2">
                    <li class="title">相关链接
                        <li><a href="">中共中央统一战线工作部</a></li>
                        <li><a href="">中共河南省委统战部</a></li>
                        <li><a href="">开封市委统战部</a></li>
                        <li><a href="">河南大学</a></li>
                        <li><a href="">"河大统战"杂志</a></li>
                    </li>
                </div>
            </div>
            <div class="right">
                <div class="righttitle">
                    <img src="images/icon-index.png" alt="NO FOUND">
                    <p>当前位置：</p>
                    <a href="index.php"><p>首页 </p></a>
                    <p>><a> 管理员界面 </a></p>
                    <p> ></p>
                </div>
                <form class="table" action="ownfixck.php" method="post">
                    <table class="au">
                        <tr>
                            <th>用户名</th>
                            <th style="width: 800px;"></th>
                            <th>权限</th>
                        </tr>
                        <?php foreach($rows as $key => $v) {?>
                            <tr>
                            <td><?php 
                            $key1 = $key+1;
                            if($v['username']==$user){
                                echo "<font color='red'>{$v['username']}</font>";
                            }else{
                                echo "{$v['username']}";
                            }?></td>
                            <td></td>
                            <td><?php 
                            if($v['autho']==1){
                                echo '超级管理员';
                            }else if($v['autho']==0){
                                echo '普通管理员';
                            }else{
                                echo '游客';
                            }
                            ?>
                        <?php };?>
                    </table>
                    <br/>
                    <table class="au2">
                    <form action="ownfixck.php" method="post">
                        <tr>
                            <td>用户名</td>
                            <td><input type="text" name="newname" placeholder="输入新用户名" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td>密码</td>
                            <td><input type="text" name="pastword" placeholder="请输入旧密码" autocomplete="off"></td>
                            <td><input type="text" name="newword" placeholder="请输入新密码" autocomplete="off"></td>
                        </tr>
                    </form>
                    </table>
                    <div class="savebtn"><input type="submit" name="update" class="delete" value="确定">
                    <a href="admin.php"><input class="delete" type="button" value="返回"></a></div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="footertitle"></div>
            <div class="footerp">
                <p>Copyright © 2019 河南大学党委统战部 技术支持河南大学 107网站工作室 管理后台</p>
                <p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
            </div>
        </div>
    </footer>
    <div class="admin">
        <img src="images/user.png" alt="NO FOUND">
    </div>
    <div class="adminmain">
        <div class="aduser">
            <img src="images/user.png" alt="NO FOUND">
            <p id="user_name"><?php
            echo $user;
            ?></p>
        </div>
        <div class="adacount">
            <img src="images/sub_account.png" alt="NO FOUND">
            <p>管理员界面</p>
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
    <div class="function">
        <a href="#top"><img src="images/dian.png" alt="NO FOUND"></a>
    </div>
</body>
</html>