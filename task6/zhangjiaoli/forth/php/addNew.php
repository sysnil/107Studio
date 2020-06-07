<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','air0729.','test');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
include_once 'tool.inc.php';
$link=connect();
//验证是否登录
include_once 'is_manage_login.php';
?>
<!DOCTYPE>
<html>
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <title>文章添加</title>
   </head>
<body>
   <h2>添加文章</h2>
   <form action="newAction.php?act=addNew" method="post">
      <label style="background-color: #abcdef;width:80%;height:50px;margin-top: 1%;display: inline-block;">
      <input style="width:99.5%;height:50px;" type="text" name="titleName" value=""/></label>
      <label style="background-color: #abcdef;width:80%;height:300px;margin-top: 1%;display: inline-block;">
      <textarea rows="100" cols="100" style="width:99.5%;height:300px;" name="newContent"></textarea></label>
      <br/>
      <span>发布时间：</span>
      <label><input height="20px" width="20%" type="text" name="month"/>月<input height="20px" width="20%" type="text" name="day"/>日</label>
	  <span style="display:inline-block;width:30%;height:20px;margin-top: 5px;">
	  <input height="20px" width="100%" type="submit" value="确定"/></span>
   </form>
</body>
</html>