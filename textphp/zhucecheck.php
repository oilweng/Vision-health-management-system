<?php //注册信息验证
include 'conn.php';
session_start();
if($_SESSION["validcode"] != $_POST['codeNum'])
{
	echo"<script>alert('验证码错误，注册失败!');history.go(-1);</script>";
}
else
{
	@$user=$_POST['user'];
	@$pass=$_POST['pass'];
	@$confirm=$_POST['confirm'];
	$userlen= mb_strlen($user,'UTF8');//判断字符长度
	$che="select * from datadata where Uname='$user'";
	$result_user=mysqli_query($conn,$che);//执行对数据库的查询
	$rows=mysqli_num_rows($result_user);
    if($rows > 0){
    	echo "<script>alert('用户名已存在，请重新确认！'); history.go(-1);</script>";
    }
    elseif ($pass!=$confirm) {
    	echo "<script>alert('两次输入密码不一致，请重新确认！'); history.go(-1);</script>";
    }
    elseif ($userlen>12||$userlen<2) {
    	echo "<script>alert('用户名长度应在4到7个字符之间！'); history.go(-1);</script>";
    }
    else
	{
    $sql = "insert into datadata(Uname,Upassword) values('$user','$pass')";
    @$result = mysqli_query($conn,$sql);
    echo "注册成功";
	}
}
?>





