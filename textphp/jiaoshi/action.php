<?php
try{
	$pdo = new PDO("mysql:host=localhost;dbname=mydatabase;","root","m123456");
}catch(PDOException $e){
	die("数据库连接失败".$e->getMessage());
}

switch ($_GET['action']) {
	case 'add'://增加操作
	$Uname = $_POST['user'];
	$Upassword = $_POST['pass'];
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$banji = $_POST['banji'];
	$xuehao = $_POST['xuehao'];
	$leftsl = $_POST['leftsl'];
	$leftsg = $_POST['leftsg'];
	$leftzw = $_POST['leftzw'];
	$rightsl = $_POST['rightsl'];
	$rightsg = $_POST['rightsg'];
	$rightzw = $_POST['rightzw'];
	$SE = $_POST['SE'];
	$tongju = $_POST['tongju'];
	$semang = $_POST['semang'];
	$sql = "insert into datadata values(null,'{$Uname}','{$Upassword}','{$name}','{$sex}','{$age}','{$banji}','{$xuehao}','{$leftsl}','{$leftsg}','{$leftzw}','{$rightsl}','{$rightsg}','{$rightzw}','{$SE}','{$tongju}','{$semang}')";
	$rw = $pdo->exec($sql);
	if ($rw > 0) {
		echo "<script>alert('增加成功');window.location='index.php'</script>";
	}else{
		echo "<script>alert('增加失败');window.history.back();</script>";
	}
	break;

	case "del";//删除操作
	$UID = $_GET['UID'];//删除的是主键
	$sql = "delete from datadata where UID={$UID}";
	$pdo->exec($sql);
	header("Location:index.php");
	break;

	case 'edit':
	$Uname = $_POST['user'];
	$Upassword = $_POST['pass'];
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$banji = $_POST['banji'];
	$xuehao = $_POST['xuehao'];
	$leftsl = $_POST['leftsl'];
	$leftsg = $_POST['leftsg'];
	$leftzw = $_POST['leftzw'];
	$rightsl = $_POST['rightsl'];
	$rightsg = $_POST['rightsg'];
	$rightzw = $_POST['rightzw'];
	$SE = $_POST['SE'];
	$tongju = $_POST['tongju'];
	$semang = $_POST['semang'];
	$UID = $_POST['UID'];
	$sql = "update datadata set Uname='{$Uname}',Upassword='{$Upassword}',name='{$name}',sex='{$sex}',age='{$age}',banji='{$banji}',xuehao='{$xuehao}',leftsl='{$leftsl}',leftsg='{$leftsg}',leftzw='{$leftzw}',rightsl='{$rightsl}',rightsg='{$rightsg}',rightzw='{$rightzw}',SE='{$SE}',tongju='{$tongju}',semang='{$semang}'where UID={$UID}";
	$rw = $pdo->exec($sql);
	if($rw>0){
		echo "<script>alert('修改成功');window.location='index.php'</script>";
	}else{
		echo "<script>alert('修改失败');window.history.back();</script>";
	}
	break;
}
