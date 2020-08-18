<!DOCTYPE html>
<html>
<head>
	<title>学生信息管理</title>
</head>
<body>
	<center>
		<?php include("menu.php");?>
		<h3>增加学生</h3>
		<form action="action.php?action=add" method="post">
			<table>
				<tr>
					<td>账号</td>
					<td><input type="text" name="user" /></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="text" name="pass" /></td>
				</tr>
				<tr>
					<td>姓名</td>
					<td><input type="text" name="name" /></td>
				</tr>
				<tr>
					<td>性别</td>
					<td>
						<input type="radio" name="sex" value="男" />男
						<input type="radio" name="sex" value="女" />女
					</td>
				</tr>
				<tr>
					<td>年龄</td>
					<td><input type="text" name="age" /></td>
				</tr>
				<tr>
					<td>班级</td>
					<td><input type="text" name="banji" /></td>
				</tr>
				<tr>
					<td>学号</td>
					<td><input type="text" name="xuehao" /></td>
				</tr>
				<tr>
					<td>左眼视力</td>
					<td><input type="text" name="leftsl" /></td>
				</tr>
				<tr>
					<td>左眼散光</td>
					<td><input type="text" name="leftsg" /></td>
				</tr>
				<tr>
					<td>左眼散光轴位</td>
					<td><input type="text" name="leftzw" /></td>
				</tr>
				<tr>
					<td>右眼视力</td>
					<td><input type="text" name="rightsl" /></td>
				</tr>
				<tr>
					<td>右眼散光</td>
					<td><input type="text" name="rightsg" /></td>
				</tr>
				<tr>
					<td>右眼散光轴位</td>
					<td><input type="text" name="rightzw" /></td>
				</tr>
				<tr>
					<td>SE</td>
					<td><input type="text" name="SE" /></td>
				</tr>
				<tr>
					<td>瞳距</td>
					<td><input type="text" name="tongju" /></td>
				</tr>
				<tr>
					<td>色觉情况</td>
					<td><input type="text" name="semang" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" value="增加" />
						<input type="reset" value="重置" />
					</td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>