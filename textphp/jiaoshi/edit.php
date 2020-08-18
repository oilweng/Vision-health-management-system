<!DOCTYPE html>
<html>
<head>
	<title>学生信息管理</title>
</head>
<body>
	<center>
		<?php include("menu.php");
		try{
		    $pdo = new PDO("mysql:host=localhost;dbname=mydatabase;","root","m123456");
		}catch(PDOException $e){
		die("数据库连接失败".$e->getMessage());
		}

		$sql = "select * from datadata where UID=".$_GET['UID'];
		$stmt = $pdo->query($sql);
		if($stmt->rowCount() > 0){
			$stu = $stmt->fetch(PDO::FETCH_ASSOC);//解析数据,关联数组形式
		}else{
			die("没有要修改的数据");
		}?>
		<h3>修改学生</h3>
		<form action="action.php?action=edit" method="post">
			<input type="hidden" name="UID" value="<?php echo $stu['UID']?>" />
			<table>
				<tr>
					<td>账号</td>
					<td><input type="text" name="user" value="<?php echo $stu['Uname']?>" /></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="text" name="pass" value="<?php echo $stu['Upassword']?>" /></td>
				</tr>
				<tr>
					<td>姓名</td>
					<td><input type="text" name="name" value="<?php echo $stu['name']?>" /></td>
				</tr>
				<tr>
					<td>性别</td>
					<td>
						<input type="radio" name="sex" value="男" <?php echo ($stu['sex'] == "男") ?> "checked" : "" /> 男
						<input type="radio" name="sex" value="女" <?php echo ($stu['sex'] == "女") ?> "checked" : "" /> 女
					</td>
				</tr>
				<tr>
					<td>年龄</td>
					<td><input type="text" name="age" value="<?php echo $stu['age']?>" /></td>
				</tr>
				<tr>
					<td>班级</td>
					<td><input type="text" name="banji" value="<?php echo $stu['banji']?>" /></td>
				</tr>
				<tr>
					<td>学号</td>
					<td><input type="text" name="xuehao" value="<?php echo $stu['xuehao']?>" /></td>
				</tr>
				<tr>
					<td>左眼视力</td>
					<td><input type="text" name="leftsl" value="<?php echo $stu['leftsl']?>" /></td>
				</tr>
				<tr>
					<td>左眼散光</td>
					<td><input type="text" name="leftsg" value="<?php echo $stu['leftsg']?>" /></td>
				</tr>
				<tr>
					<td>左眼散光轴位</td>
					<td><input type="text" name="leftzw" value="<?php echo $stu['leftzw']?>" /></td>
				</tr>
				<tr>
					<td>右眼视力</td>
					<td><input type="text" name="rightsl" value="<?php echo $stu['rightsl']?>" /></td>
				</tr>
				<tr>
					<td>右眼散光</td>
					<td><input type="text" name="rightsg" value="<?php echo $stu['rightsg']?>" /></td>
				</tr>
				<tr>
					<td>右眼轴位</td>
					<td><input type="text" name="rightzw" value="<?php echo $stu['rightzw']?>" /></td>
				</tr>
				<tr>
					<td>SE</td>
					<td><input type="text" name="SE" value="<?php echo $stu['SE']?>" /></td>
				</tr>
				<tr>
					<td>瞳距</td>
					<td><input type="text" name="tongju" value="<?php echo $stu['tongju']?>" /></td>
				</tr>
				<tr>
					<td>色觉情况</td>
					<td><input type="text" name="semang" value="<?php echo $stu['semang']?>" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" value="修改" />
						<input type="reset" value="重置" />
					</td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>