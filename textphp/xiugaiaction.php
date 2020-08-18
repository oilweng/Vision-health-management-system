<?php
try{
	$pdo = new PDO("mysql:host=localhost;dbname=mydatabase;","root","m123456");
}catch(PDOException $e){
	die("数据库连接失败".$e->getMessage());
}
    @$pass=$_POST['pass'];
    @$repass=$_POST['repass'];
	if($pass!=$repass)
	{    
		echo "<script>alert('两次输入密码不一致，请重新确认！'); history.go(-1);</script>";
	}
	else
	{
        switch ($_GET['action']) {
	    case 'edit':
	    $Uname = $_POST['user'];
	    $Upassword = $_POST['pass'];
	    $UID = $_POST['UID'];
	    $sql = "update datadata set Upassword='{$Upassword}' where UID={$UID}";
	    $rw = $pdo->exec($sql);
	    if($rw>0){
	    	echo "<script>alert('修改成功,请重新登录');window.location='denglu.php'</script>";
	    }
	    else{
	    	echo "<script>alert('修改失败');window.history.back();</script>";
	    }
	    break;
        }    
	}
