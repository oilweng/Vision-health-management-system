<?php
header("Content-Type:text/html;charset=utf-8");//防止页面出现乱码
$conn=mysqli_connect("localhost","root","m123456","mydatabase");//localhost 主机地址
mysqli_query($conn,"set names utf8");
if(!$conn)
{
echo "连接失败";
die("error:".mysqli_connect_error());
}
?>