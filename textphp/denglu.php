<?php
// session_start();
header("Content-Type:text/html;charset=utf-8");//防止页面出现乱码
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>学生端登录登陆</title>
		<link href="C.css" rel="stylesheet" type="text/css" /><!-- rel 定义一个外部加载的样式表 --><!-- type 表示这是一个样式单,也就是css样式 -->
	</head>
	<script>
		function change1(){

    document.getElementById('code').src="mzy.php?"+Math.random();
    // document.getElementById 根据id得到对象
    // Math.random() 生成不同参数是URL不一致，实现重新发出请求

} 
	</script>
 <body> 
 	<div class="big"><!-- id出现一次，class重复使用 -->
        <div id="dltop">
            <ul id="topdao">
        	    <!-- <li><a href="zhanzhang.php">联系站长</a></li> -->
           <!-- <li><a href="xiugai.php">换肤</a></li> -->
                <li><a href="help.php">帮助</a></li>
            </ul> 
        </div>
		<div class="box"> 
		<h2>欢迎登录</h2>
		<form action="denglucheck.php" method="post" enctype="multipart/form-data"> <!-- action:提交表单向何处发送数据 --><!-- enctype:发送到服务器前不对数据编码 -->
			<div class="inputBox"><input type="text" name="user" required="required"placeholder=   "           请输入您的用户名"><label>用户名</label></div>
			<div class="inputBox"><input type="password" name="pass" required="required"placeholder="           请输入您的密码"><label>密码</label></div>
			<div class="inputBox"><input type="text" value="" name="codeNum" required="required"placeholder="           请输入验证码"><label>验证码</label></div>
			<input type="submit" name="submit" value="登录">
			<script>
				function jump(){
					window.location.href="zhuce.php";
				}
			</script>
			<input type="button" value="注册" onclick="javascrtpt:jump()">
			<script>
				function jump1(){
					window.location.href="jsdenglu.php";
				}
			</script>
			<input type="button" value="教师端登录" onclick="javascrtpt:jump1()">
			<img src="mzy.php" onclick="change1();" style="width:100px;height:25px;" id="code"/>
		</form>
		</div>
	</div>	
 </body>
</html>