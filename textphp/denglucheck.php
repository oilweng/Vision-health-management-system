<?php  //登陆信息验证
include "conn.php";
session_start();//初始化session，开启$_SESION,需要在$_SESION使用之前调用

if($_SESSION["validcode"] != $_POST['codeNum'])
{
	echo"<script>alert('验证码错误，登陆失败!');history.go(-1);</script>";
}
else
{   
	$user=$_POST['user'];//$POST  获取method=post 表单的值。
	$pass=$_POST['pass'];
    $check_user="select * from datadata where Uname='$user' and Upassword='$pass'";
    $result_user=mysqli_query($conn,$check_user);//执行对数据库的查询
	$row=mysqli_num_rows($result_user);//返回受影响条数
    if(!$row)
		{			
			echo "<script>alert('请输入正确的账号、密码!');history.back();</script>";
		}
		else 
		{
			setcookie('user',$_POST['user']);
			header("Location:zhuye.php");//跳转页面，注意路径
		}
		
	}
?>