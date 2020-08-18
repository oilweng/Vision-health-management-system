<?php  //登陆信息验证
include "conn.php";
session_start();//初始化session

if($_SESSION["validcode"] != $_POST['codeNum'])
{
	echo"<script>alert('验证码错误，登陆失败!');history.go(-1);</script>";
}
else
{   
	$user=$_POST['user'];//$POST  获取method=post 表单的值。
	$pass=$_POST['pass'];
    $check_user="select * from userforp where Uname='$user' and Upassword='$pass'";
    $result_user=mysqli_query($conn,$check_user);//执行对数据库的查询
	$row=mysqli_num_rows($result_user);
    if(!$row)
		{
			
			echo "<script>alert('登陆失败！请正确输入您的账号密码!');history.back();</script>";
		}
		else 
		{
			header("Location:jiaoshi/index.php");//跳转页面，注意路径
		}
		
	}
?>