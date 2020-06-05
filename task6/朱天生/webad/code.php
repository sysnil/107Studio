<?php
  session_start();//开启session。session功能保存验证码内容用于验证输入验证码是否正确

  $image = imagecreatetruecolor(100,30);//生成一个100*30px的真彩色图像
  $bgcolor = imagecolorallocate($image,255,255,255);//白色
  imagefill($image,0,0,$bgcolor);//将$image完全填充为白色，即白色底图
$captch_code = '';//保存验证码字符串，后面存入session用于session验证
//验证码随机四个数字
for ($i=0;$i<4;$i++){
    $fontsize = 6;//使用字体
    $fontcolor = imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));//数字颜色，因为底图为白色，所以四个数字随机区域为深色区域
    $fontcontent = rand(0,9);//0-9随机数字
    $captch_code .= $fontcontent;//字符串拼接到$captch_code

    $x=($i*100/4) + rand(5,10);//数字在底图上的x坐标，利用变量$i使数字保持间距
    $y=rand(5,10);//y坐标
    
    imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);//将数字$fontcontent以颜色$fontcolor、字体大小$fontsize画到$image的$x,$y处
}
$_SESSION['authcode'] = $captch_code;//保存验证信息，等待校验
//干扰元素(线)
for ($i=0;$i<3;$i++){
    $linecolor = imagecolorallocate($image,rand(80,200),rand(80,200),rand(80,200));
    imageline($image,rand(1,99),rand(1,29),rand(1,99),rand(1,29),$linecolor);
}
//增加干扰元素(点)，干扰点不可太少也不应太多，200适中
for ($i=0;$i<200;$i++){
    $pointcolor = imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));//干扰点的颜色不应该干扰用户正常阅读验证码内容，所以随机浅色区域
    imagesetpixel($image,rand(1,99),rand(1,29),$pointcolor);
}
header('content-type:image/png');//输出前添加文件头信息
imagepng($image);
//end 资源销毁
imagedestroy($image);