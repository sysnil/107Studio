<?php
$arr1=array_merge(range('a','z'),range(0,9),range('A','Z'));
shuffle($arr1);
$arr2=array_rand($arr1,4);
$str="";
foreach($arr2 as $index)
{
    $str.=$arr1[$index];
}


session_start();
$_SESSION['captcha']=strtolower($str);



$width=70;
$height=22;
$img=imagecreatetruecolor(70,22);







$color1=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
imagefilledrectangle($img,0,0,$width,$height,$color1);



for($i=1;$i<=100;$i++)
{
    $color2=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
    imagesetpixel($img,mt_rand(0,$width),mt_rand(0,$height),$color2);
}


for($i=1;$i<=50;$i++)
{
    $color3=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
    imageline($img,mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width),mt_rand(0,$height),$color3);
}

$fontfile="D:\phptool\www-107\yaheiFont_CHS\msyh.ttf";
$color4=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
imagettftext($img,18,0,5,20,$color4,$fontfile,$str);




header("content-type:image/png");
imagepng($img);
imagedestroy($img);






