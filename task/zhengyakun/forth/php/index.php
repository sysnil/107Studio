<?php
require_once("./link1.php");
session_start();
$sql = "select * from user order by id asc";
$newssql = "select * from newslist  order by flag desc,date asc,id asc;";
$result = mysqli_query($mysqli, $sql);
$newsresult = mysqli_query($mysqli, $newssql);
$arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);
$newsarrs = mysqli_fetch_all($newsresult, MYSQLI_ASSOC);
$records = mysqli_num_rows($result);

?>
<?php

if (isset($_POST['newstype'])) {
    $newstype = $_POST['newstype'];
    $newstitle = $_POST['newstitle'];
    $newscontent = $_POST['newscontent'];
    $content_url = $_POST['content_url'];
    $sql = "insert into newslist values(null,'$newstype','$newstitle','$newscontent','$content_url',now(),0);";
    if (mysqli_query($mysqli, $sql)) {
        echo "<script>alert('提交成功');</script>";
        header("refresh:1;url=./index.php");
    } else {
        echo "<script>alert('提交失败，请检查再试')</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理页面</title>
    <script src="../js/jquery.js"></script>
    <script src="../js/index.js"></script>

    <style>
        
        body {
            background: url(../image/wall1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .left {
            float: left;
            width: 10%;
            height: auto;
            background: url(../image/leftwall.jpg);
            background-size: 100% 100%;
            border-radius: 10px;


        }

        .right {
            float: left;
            width: 90%;
            text-align: center;
            padding-bottom: 10px;
        }

        #exit {
            position: fixed;
            top: 10px;

            right: 50px;
        }



        .top {
            text-align: center;
            border-bottom: 1px solid black;




        }

        .left>li {
            height: 100px;
            font-size: 20px;
            margin: 20px 0;
        }

       
        .newsstyle {
            display: block;
            margin: 0 auto;
        }

        .addnews {
            display: none;
        }

        #controll {
            display: none;
        }

        .addnews_1 {
            border: 1px solid #000;
            width: 500px;
            height: auto;
            margin: 0 auto;

        }

        .addnews td {
            border: none;
        }

      

        .left #con {
            margin-top: 50px;
        }

        .newfixed {
            position: fixed;
            top: 20%;
            right: 100px;
            border: 3px solid greenyellow;
        }
        .choice li {
            height:40px;
            

            
        }

        
        .testno{
            table-layout: fixed;
            width:1000px;
            margin: 0 auto;
            display:none;
            
            
        }
        .testno td{
            height: 50px;
           
         
        
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
       .thtable{
           margin: 0 auto;
           width:1000px;
           table-layout: fixed;
           display: table !important;
       }
       .testfirst{
           display:table;
       }
     
     
     
    </style>






    
    <script>
        function newsfixed(n) {
            if (window.confirm("你真的要重置id吗?")) {
                location.href = "./newfixed.php";
            }
        }


        function confirmdel(id) {
            if (window.confirm("你真的要删除吗?")) {
                location.href = "./delete.php?id=" + id;
            }
        }

        function confirmch(id) {
            if (window.confirm("你真的要修改吗?")) {
                location.href = "./change.php?id=" + id;
            }
        }

        function newsconfirmdel(id) {
            if (window.confirm("你真的要删除吗?")) {
                location.href = "./newsdelete.php?id=" + id;
            }
        }

        function newsconfirmch(id) {
            if (window.confirm("你真的要修改吗?")) {
                location.href = "./newschange.php?id=" + id;
            }
        }

        function istop(id) {
            location.href = "./istop.php?id=" + id;
        }

        function nistop(id) {
            location.href = "./nistop.php?id=" + id;
        }
    </script>
</head>

<body>
    <h1 class="top">107实验结尾篇后台管理系统</h1>
    <a href="./login01.php" id="exit">退出</a>
    <div class="left">
    <ul >
   

            <li class="leftm">
                <a href="javascript:void(0)"> 账号:<?php echo  $_SESSION['username']; ?></a>
            </li>
            <li class="leftm">
                <a href="javascript:void(0)">新闻管理</a>
                <ul class="choice">
                    <li> <a href="javascript:void(0)">河大理论学习</a></li>
                    <li><a href="javascript:void(0)">通知公告</a></li>
                    <li><a href="javascript:void(0)">新闻速递</a></li>
                    <li><a href="javascript:void(0)">任务风采</a></li>
                </ul>
           
                    
            </li>
            <li class="leftm">
                <a href="javascript:void(0)">发布新闻</a>
            </li>
        </ul>
























    </div>
    <div class="right">


        <div id="controll">
            <h2>成员管理列表</h2>
            <?php
            $username = $_SESSION['username'];
            $usersql = "select id from user where username='$username';";
            if (mysqli_query($mysqli, $usersql)) {
                $userresult = mysqli_query($mysqli, $usersql);
                $userid = mysqli_fetch_assoc($userresult);
                if ($userid['id'] == 1) {


            ?>

                    <a href="./register.php">添加管理成员</a>
                    共有<font color=red><?php echo $records; ?></font>个成员
            <?php }
            }
            ?>
            <table width="800" border="1" align="center" rules="all" cellpadding="5">
                <tr bgcolor="#ccc">
                    <th>id</th>
                    <th>管理成员</th>
                    <th>邮箱</th>
                    <th>操作选项</th>
                </tr>
                <?php
                $username = $_SESSION['username'];
                $usersql = "select id from user where username='$username';";

                if (mysqli_query($mysqli, $usersql)) {
                    $userresult = mysqli_query($mysqli, $usersql);
                    $userid = mysqli_fetch_assoc($userresult);
                    if ($userid['id'] == 1) {


                ?>

                        <?php
                        foreach ($arrs as $arr) {
                        ?>
                            <tr>
                                <td><?php echo $arr['id'] ?></td>
                                <td><?php echo $arr['username'] ?></td>

                                <td><?php echo $arr['email'] ?></td>
                                <td>
                                    <a href="#" onclick="confirmch(<?php echo $arr['id'] ?>)">修改</a>|
                                    <a href="#" onclick="confirmdel(<?php echo $arr['id'] ?>)">删除</a>
                                </td>
                            </tr>

                        <?php } ?>
                    <?php } else {
                        $orsql = "select * from user where username='$username';";
                        $orresult = mysqli_query($mysqli, $orsql);
                        $orarr = mysqli_fetch_assoc($orresult);
                    ?>
                        <tr>
                            <td><?php echo $orarr['id'] ?></td>
                            <td><?php echo $orarr['username'] ?></td>
                            <td><?php echo $orarr['password'] ?></td>
                            <td><?php echo $orarr['email'] ?></td>
                            <td>
                                <a href="#" onclick="confirmch(<?php echo $orarr['id'] ?>)">修改</a>|
                                <a href="#" onclick="confirmdel(<?php echo $orarr['id'] ?>)">删除</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>

            </table>
        </div>
        <div class="newsstyle">

            <table width="800" class="thtable">
                <tr>
                    <th>id</th>
                    <th>新闻类型</th>
                    <th>新闻标题</th>
                    <th>新闻内容</th>
                    <th>内容链接</th>
                    <th>日期</th>
                    <th>操作</th>
                    <th>是否置顶</th>
                </tr>
                <table class="testno testfirst" >
                <?php
                    foreach($newsarrs as $newsarr){
              
                if($newsarr['newstype']=='河大理论学习')
                {
                ?>
           
           

                
                    <tr>
                        <td width="100px"><?php echo $newsarr['id'] ?></td>
                        <td><a href=""><?php echo $newsarr['newstype'] ?></a></td>
                        <td><a href="http://www.107test01.com:5556/index/list.php"><?php echo $newsarr['newstitle'] ?></a></td>
                        <td><a href="http://www.107test01.com:5556/index/content.html"><?php echo $newsarr['newscontent'] ?></a></td>
                        <td><a href=""><?php echo $newsarr['content_url'] ?></a></td>
                        <td><a href=""><?php echo $newsarr['date'] ?></a></td>
                        <td>
                            <a href="#" onclick="newsconfirmch(<?php echo $newsarr['id'] ?>)">修改</a>|
                            <a href="#" onclick="newsconfirmdel(<?php echo $newsarr['id'] ?>)">删除</a>
                        </td>
                        <td class="center" id="toptd"> <a href="JavaScript:void(0);" onclick="istop(<?php echo $newsarr['id'] ?>)"><?php
                                                                                                                                    $dd = $newsarr['id'];
                                                                                                                                    $sqltop = "select flag from newslist where id=$dd;";
                                                                                                                                    $resulttop = mysqli_query($mysqli, $sqltop);

                                                                                                                                    $idtop = mysqli_fetch_assoc($resulttop);

                                                                                                                                    if ($idtop['flag'] == 1) {
                                                                                                                                        echo "<font color='blue'>是</font>";
                                                                                                                                    } else {
                                                                                                                                        echo "是";
                                                                                                                                    }

                                                                                                                                    ?>
                            </a>
                            | <a href="javascript:void(0);" onclick="nistop(<?php echo $newsarr['id'] ?>)">否</a></td>
                    </tr> 
                  <?php }
                  }?>
               </table>
               <table class="testno">
               <?php
                    foreach ($newsarrs as $newsarr){
              

                if($newsarr['newstype']=='通知公告')
                {
                ?> 

                
                    <tr>
                        <td><?php echo $newsarr['id'] ?></td>
                        <td><a href=""><?php echo $newsarr['newstype'] ?></a></td>
                        <td><a href="http://www.107test01.com:5556/index/list.php"><?php echo $newsarr['newstitle'] ?></a></td>
                        <td><a href="http://www.107test01.com:5556/index/content.html"><?php echo $newsarr['newscontent'] ?></a></td>
                        <td><a href=""><?php echo $newsarr['content_url'] ?></a></td>
                        <td><a href=""><?php echo $newsarr['date'] ?></a></td>
                        <td>
                            <a href="#" onclick="newsconfirmch(<?php echo $newsarr['id'] ?>)">修改</a>|
                            <a href="#" onclick="newsconfirmdel(<?php echo $newsarr['id'] ?>)">删除</a>
                        </td>
                        <td class="center" id="toptd"> <a href="JavaScript:void(0);" onclick="istop(<?php echo $newsarr['id'] ?>)"><?php
                                                                                                                                    $dd = $newsarr['id'];
                                                                                                                                    $sqltop = "select flag from newslist where id=$dd;";
                                                                                                                                    $resulttop = mysqli_query($mysqli, $sqltop);

                                                                                                                                    $idtop = mysqli_fetch_assoc($resulttop);

                                                                                                                                    if ($idtop['flag'] == 1) {
                                                                                                                                        echo "<font color='blue'>是</font>";
                                                                                                                                    } else {
                                                                                                                                        echo "是";
                                                                                                                                    }

                                                                                                                                    ?>
                            </a>
                            | <a href="javascript:void(0);" onclick="nistop(<?php echo $newsarr['id'] ?>)">否</a></td>
                    </tr>
                   <?php }
                   }?>
                </table>
                <table class="testno">
                <?php
                    foreach ($newsarrs as $newsarr){
              

                if($newsarr['newstype']=='新闻速递')
                {
                ?> 

                
                    <tr>
                        <td><?php echo $newsarr['id'] ?></td>
                        <td><a href=""><?php echo $newsarr['newstype'] ?></a></td>
                        <td><a href="http://www.107test01.com:5556/index/list.php"><?php echo $newsarr['newstitle'] ?></a></td>
                        <td><a href="http://www.107test01.com:5556/index/content.html"><?php echo $newsarr['newscontent'] ?></a></td>
                        <td><a href=""><?php echo $newsarr['content_url'] ?></a></td>
                        <td><a href=""><?php echo $newsarr['date'] ?></a></td>
                        <td>
                            <a href="#" onclick="newsconfirmch(<?php echo $newsarr['id'] ?>)">修改</a>|
                            <a href="#" onclick="newsconfirmdel(<?php echo $newsarr['id'] ?>)">删除</a>
                        </td>
                        <td class="center" id="toptd"> <a href="JavaScript:void(0);" onclick="istop(<?php echo $newsarr['id'] ?>)">
                        <?php
                                                                                                                                    $dd = $newsarr['id'];
                                                                                                                                    $sqltop = "select flag from newslist where id=$dd;";
                                                                                                                                    $resulttop = mysqli_query($mysqli, $sqltop);

                                                                                                                                    $idtop = mysqli_fetch_assoc($resulttop);

                                                                                                                                    if ($idtop['flag'] == 1) {
                                                                                                                                        echo "<font color='blue'>是</font>";
                                                                                                                                    } else {
                                                                                                                                        echo "是";
                                                                                                                                    }

                                                                                                                                    ?>
                            </a>
                            | <a href="javascript:void(0);" onclick="nistop(<?php echo $newsarr['id'] ?>)">否</a></td>
                           </tr>
                      <?php } 
                      }?>
                </table>
                <table class="testno">
                <?php
                    foreach ($newsarrs as $newsarr){
              
              
                if($newsarr['newstype']=='人物风采')
                {
                ?> 

                
                    <tr >
                        <td><?php echo $newsarr['id'] ?></td>
                        <td><a href=""><?php echo $newsarr['newstype'] ?></a></td>
                        <td><a href="http://www.107test01.com:5556/index/list.php"><?php echo $newsarr['newstitle'] ?></a></td>
                        <td><a href="http://www.107test01.com:5556/index/content.html"><?php echo $newsarr['newscontent'] ?></a></td>
                        <td><a href=""><?php echo $newsarr['content_url'] ?></a></td>
                        <td><a href=""><?php echo $newsarr['date'] ?></a></td>
                        <td>
                            <a href="#" onclick="newsconfirmch(<?php echo $newsarr['id'] ?>)">修改</a>|
                            <a href="#" onclick="newsconfirmdel(<?php echo $newsarr['id'] ?>)">删除</a>
                        </td>
                        <td class="center" id="toptd"> <a href="JavaScript:void(0);" onclick="istop(<?php echo $newsarr['id'] ?>)"><?php
                                                                                                                                    $dd = $newsarr['id'];
                                                                                                                                    $sqltop = "select flag from newslist where id=$dd;";
                                                                                                                                    $resulttop = mysqli_query($mysqli, $sqltop);

                                                                                                                                    $idtop = mysqli_fetch_assoc($resulttop);

                                                                                                                                    if ($idtop['flag'] == 1) {
                                                                                                                                        echo "<font color='blue'>是</font>";
                                                                                                                                    } else {
                                                                                                                                        echo "是";
                                                                                                                                    }

                                                                                                                                    ?>
                            </a>
                            | <a href="javascript:void(0);" onclick="nistop(<?php echo $newsarr['id'] ?>)">否</a></td>
                    </tr>  
                <?php } 
                }?>
                   </table>
            </table>
             



        </div>
        <div class="addnews">
            <h2 align="center">发布文章</h2>
            <form action="" method="post">

                <table align="center" class="addnews_1">
                    <tr>
                        <td>文章类型:</td>
                        <td>
                            <select name="newstype" id="">
                                <option value="河大理论学习">河大理论学习</option>
                                <option value="通知公告">通知公告</option>
                                <option value="新闻速递">新闻速递</option>
                                <option value="人物风采">人物风采</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>文章题目:</td>
                        <td><input type="text" name="newstitle"></td>
                    </tr>
                    <tr>
                        <td>文章的内容:</td>
                        <td><textarea name="newscontent" id="" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>文章的链接:</td>
                        <td><input type="text" name="content_url"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="发布新闻" onclick="modechange()"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="reset" value="重置"></td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
</body>
</html>