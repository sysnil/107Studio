<?php require_once("./link1.php");
$id=$_GET['id'];
$news="select * from newslist where id=$id;";
$result=mysqli_query($mysqli,$news);
$arrs=mysqli_fetch_assoc($result);
if(isset($_POST['newstype']))
{
    $newstype=$_POST['newstype'];
    $newstitle=$_POST['newstitle'];
    $newscontent=$_POST['newscontent'];
    $content_url=$_POST['content_url'];
    $date=$_POST['date'];
    $sql="update newslist set newstype='$newstype' where id=$id;";
    $sql.="update newslist set newstitle='$newstitle' where id=$id;";
    $sql.="update newslist set newscontent='$newscontent' where id=$id;";
    $sql.="update newslist set content_url='$content_url' where id=$id;";
    $sql.="update newslist set date='$date' where id=$id;";
    if(mysqli_multi_query($mysqli,$sql)){
        echo "<script>alert('修改成功!')</script>";
        header("refresh:2;url=./index.php");
        die();
    }else{
        echo "<script>alert('修改失败!请重新书写！')</script>";
    }

}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
     
        body{
            background:url(./image/changewall.jpg);
            background-size: cover;    
            background-repeat: no-repeat;
        }
        table{
           

            border: 1px solid #000;
            border-radius:5px;
            margin: 0 auto;
         margin-top:100px;
 
        }
        table td{
            border:none;
        }
        tr{
            height:50px;
        }
        #location{
            position:fixed;
            top:10px;
            right:50px;
        }
        a{
            text-decoration:none;
        }
      

    </style>
</head>
<body>
    <a id="location" href="./index.php">返回</a>
    <form action="" method="post">
        <h1 align="center">文章内容的修改</h1>
        <table align="center">
            <tr>
                <td>文章类型:</td>
                <td><input type="text" name="newstype" value="<?php echo $arrs['newstype'];?>"></td>
            </tr>
            <tr>
                <td>文章题目:</td>
                <td><input type="text" name="newstitle" value="<?php echo $arrs['newstitle'];?>"></td>
            </tr>
            <tr>
                <td>文章的内容:</td>
                <td><textarea name="newscontent" id="" cols="30" rows="10" ><?php echo $arrs['newscontent'];?></textarea></td>
            </tr>
            <tr>
                <td>文章的链接:</td>
                <td><input type="text" name="content_url" value="<?php echo $arrs['content_url'];?>"></td>
            </tr>
            <tr>
                <td>文章的日期:</td>
                <td><input type="text" name="date" value="<?php echo $arrs['date'];?>"></td>
            </tr>
            <tr><td colspan="2" align="center" ><input type="submit" value="提交修改"></td></tr>
          <tr><td colspan="2" align="center"><input type="reset" value="重置"></td></tr>
        </table>
        
    </form>
</body>
</html>
