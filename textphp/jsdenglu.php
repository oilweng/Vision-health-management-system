<?php
session_start();
header("Content-Type:text/html;charset=utf-8");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>教师端登录登陆</title>
		<link href="C.css" rel="stylesheet" type="text/css" />
	</head>
	<script>
		function change1(){

    document.getElementById('code').src="mzy.php?"+Math.random();
    // document.getElementById 根据id得到对象
    // Math.random() 生成不同参数是URL不一致，实现重新发出请求

} 
	</script>
 <body>
 	    <div id="dltop">
            <ul id="topdao">
        	    <!-- <li><a href="zhanzhang.php">联系站长</a></li> -->
           <!-- <li><a href="xiugai.php">换肤</a></li> -->
                <li><a href="help.php">帮助</a></li>
            </ul> 
        </div>
		<div class="box"> 
		<h2>Login</h2>
		<form action="jsdenglucheck.php" method="post" enctype="multipart/form-data">
			<div class="inputBox"><input type="text" name="user" value="" required="required"placeholder=   "           请输入您的用户名"><label>用户名</label></div>
			<div class="inputBox"><input type="password" name="pass" value=""required="required"placeholder="           请输入您的密码"><label>密码</label></div>
			<div class="inputBox"><input type="text" width="100px" value="" name="codeNum" required="required"placeholder="           请输入验证码"><label>验证码</label></div>
			<input type="submit" name="submit" value="登录">
			<script>
				function jump2(){
					window.location.href="denglu.php";
				}
			</script>
			<input type="button" value="学生端登录" onclick="javascrtpt:jump2()">
			<img src="mzy.php" style="width:100px;height:25px;" onclick="change1();" id="code"/>
		</form>
		</div>
	</body>
</html>