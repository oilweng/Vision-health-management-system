<!DOCTYPE html>
<html>
<head>
	<title>修改密码</title>
</head>
<body>
	<center>
		<?php
		try{
		    $pdo = new PDO("mysql:host=localhost;dbname=mydatabase;","root","m123456");
		}catch(PDOException $e){
		die("数据库连接失败".$e->getMessage());
		}
		$username=$_COOKIE['user'];
	    /*分别从数据库中获取nickname，sex，pic的值*/
	    $sql_1 = "select * from datadata WHERE Uname = '$username'";
		$stmt = $pdo->query($sql_1);
		if($stmt->rowCount() > 0){
			$stu = $stmt->fetch(PDO::FETCH_ASSOC);//解析数据
		}else{
			die("没有要修改的数据");
		}?>
		<h3>修改密码</h3>
		<form action="xiugaiaction.php?action=edit" method="post">
			<input type="hidden" name="UID" value="<?php echo $stu['UID']?>" />
			<table>
				<tr>
					<td>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</td>
					<td><input type="text" name="pass" value="<?php echo $stu['Upassword']?>" /></td>
				</tr>
				<tr>
					<td>确认密码</td>
					<td><input type="text" name="repass" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
			<script>
				function back1(){
					window.location.href="zhuye.php";
				}
			</script>
					<td>
						<input type="submit" value="修改" />
						<input type="reset" value="重置" />
						<input type="button" value="返回主页" onclick="javascrtpt:back1()">
					</td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>