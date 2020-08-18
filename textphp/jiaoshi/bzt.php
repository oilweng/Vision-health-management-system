<?php
$array = array("北京"=>1925,"上海"=>2016,"广州"=>1256,"深圳"=>980);
$arr_key = array_keys($array);
$color = array();
$im = imagecreatetruecolor(300,300);
for($i=1;$i<=count($array);$i++){
 $color[] = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
}
//创建饼状图，由多个扇形组成
$a1=rand(0,360);
$sum = array_sum($array);
for($j=0;$j<count($arr_key);$j++){
 $a2 = $a1 + $arr_key[$j]/$sum*360;
 imagefilledarc($im,150,150,180,80,$a1,$a2,$color[$j],IMG_ARC_PIE);
 $a1 = $a2;
}

//输出图像
header("content-type: image/png");
imagepng($im);
//关闭
imagedestroy($im);
?>