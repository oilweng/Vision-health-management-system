<!DOCTYPE html>
<html>
<head>
	<title>学生信息管理</title>
</head>
<script>
	function doDel(UID){
		if (confirm("确定要删除吗？")) {
			window.location='action.php?action=del&UID='+UID;
		}
		
	}
</script>
<body>
	<center>
		<?php include ("menu.php");?>
		<h3>浏览学生信息</h3>
		<table width="1080" border="1"> 
			<tr>
				<th>UID</th>
				<th>账号</th>
				<th>密码</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
				<th>班级</th>
				<th>学号</th>
				<th>左眼视力</th>
				<th>左眼散光</th>
				<th>左眼散光轴位</th>
				<th>右眼视力</th>
				<th>右眼散光</th>
				<th>右眼散光轴位</th>
				<th>SE</th>
				<th>瞳距</th>
				<th>色觉情况</th>
				<th>操作</th>
		    </tr>
		    <?php
		        try{
		        	$pdo = new PDO("mysql:host=localhost;dbname=mydatabase;","root","m123456");
		        }catch(PDOException $e){
		        	die("数据库连接失败".$e->getMessage());
		        }
		        $sql ="select * from datadata";
		        foreach ($pdo->query($sql) as $row) {
		        	echo "<tr>";
		        	echo "<td>{$row['UID']}</td>";
		        	echo "<td>{$row['Uname']}</td>";
		        	echo "<td>{$row['Upassword']}</td>";
		        	echo "<td>{$row['name']}</td>";
		        	echo "<td>{$row['sex']}</td>";
		        	echo "<td>{$row['age']}</td>";
		        	echo "<td>{$row['banji']}</td>";
		        	echo "<td>{$row['xuehao']}</td>";
		        	echo "<td>{$row['leftsl']}</td>";
		        	echo "<td>{$row['leftsg']}</td>";
		        	echo "<td>{$row['leftzw']}</td>";
		        	echo "<td>{$row['rightsl']}</td>";
		        	echo "<td>{$row['rightsg']}</td>";
		        	echo "<td>{$row['rightzw']}</td>";
		        	echo "<td>{$row['SE']}</td>";
		        	echo "<td>{$row['tongju']}</td>";
		        	echo "<td>{$row['semang']}</td>";
		        	echo "<td>
		        	    <a href='javascript:doDel({$row['UID']})'>删除</a>
		        	    <a href='edit.php?UID={$row['UID']}'>修改</a>
		        	</td>";
		        	echo "</tr>";
		        }
		    ?>    
	    </table>
	</center>

</body>
</html>