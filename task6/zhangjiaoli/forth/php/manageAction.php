<?php 
include_once 'tool.inc.php';
header('content-type:text/html;charset=utf-8');
$mysqli=@new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('Connect Error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$sql="SELECT id,titleName,newContent,month,day,level FROM article";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
    while($row=$mysqli_result->fetch_assoc()){
        $rows[]=$row;
    }
}
$sql1="SELECT id,titleName,newContent,month,day,level FROM llxx;";
$mysqli_result1=$mysqli->query($sql1);
if($mysqli_result1 && $mysqli_result1->num_rows>0){
    while($content=$mysqli_result1->fetch_assoc()){
        $contents[]=$content;
    }
}
//检查登录
$mysqli=connect();
if(is_manage_login($mysqli)){
   
}else{
    exit();
}
$login_name=$_SESSION['login_name'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="../css/sheetstyle.css"/>
	<script type = "text/javascript"src="../js/jquery-1.12.4.js"></script>
    <script src="../js/style.js"></script>
	<title>统战部后台</title>
</head>
<body>
     <div height="100px" width="100%" align="right"><a href="index.php">网站首页</a>|管理员：<?php echo $login_name?>|<a href="loginOut.php">注销</a></div>
     <h2>新闻速递-文章列表-<a href="addNew.php">添加文章</a></h2>
    <table border='1' cellspacing='0' cellpadding='0' width="80%" bgcolor="#ABCDEFG">
       <tr>
           <td>编号</td>
           <td>标题</td>
           <td>发布日期</td>
           <td>操作</td>
       </tr>
       <?php foreach($rows as $row):?>
       <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['titleName'];?></td>
           <td><?php echo $row['month']?>月<?php echo $row['day']?>日</td>
           <td><a href="editNew.php?id=<?php echo $row['id'];?>">编辑</a>|
           <!-- 输出置顶的判断 -->
           <?php if($row['level']){
               echo '<a href="topAction.php?act=cancle&id='.$row['id'].'">取消置顶</a>';
           }else{
                   echo '<a href="topAction.php?act=istop&id='.$row['id'].'">置顶</a>';
               }
               ?>
           |<a href="newAction.php?act=delNew&id=<?php echo $row['id'];?>">删除</a></td>
       </tr>
       <?php endforeach;?>
    </table>
    <hr/>
    <h2>理论学习-文章列表</h2>
    <table border='1' cellspacing='0' cellpadding='0' width="80%" bgcolor="#ABCDEFG">
       <tr>
           <td>编号</td>
           <td>标题</td>
           <td>发布日期</td>
           <td>操作</td>
       </tr>
       <?php foreach($contents as $content):?>
       <tr>
           <td><?php echo $content['id'];?></td>
           <td><?php echo $content['titleName'];?></td>
           <td><?php echo $content['month']?>月<?php echo $content['day']?>日</td>
           <td>
           <!-- 输出置顶的判断 -->
           <?php if($content['level']){
               echo '<a href="topAction.php?act=cancle1&id='.$content['id'].'">取消置顶</a>';
           }else{
                   echo '<a href="topAction.php?act=istop1&id='.$content['id'].'">置顶</a>';
               }
               ?></td>
       </tr>
       <?php endforeach;?>
    </table>
</body>
</html>