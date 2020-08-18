<?php /** file:index.php 登录系统的首页*/
	/*如果用户没有通过身份验证，页面跳转至登录页面*/	
header("Content-Type:text/html;charset=utf-8"); 
	$username=$_COOKIE['user'];
	
	include "conn.php";

	$sql_1 = "select * from datadata WHERE Uname = '$username'";
	$mysqli_result1 =mysqli_query($conn,$sql_1);
	if ($mysqli_result1 && $mysqli_result1->num_rows>0) {
		$row0=$mysqli_result1->fetch_row();//mysql_fetch_row() 函数从结果集中取得一行作为数字数组。
		$row1[]=$row0;
	}
	// print_r($row1);
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>主页</title>
	<link rel="stylesheet" href="zhuyestyle.css" />
</head>
<body>
<div id="container">
  <div id="header">
    <div id="logo">
      <img src="images/i3.png">
    </div>
    <ul id="daohang">
        <li><a href="xiugai.php">修改密码</a></li>
        <!-- <li><a href="xiugai.php">换肤</a></li> -->
        <li><a href="denglu.php">注销</a></li>
    </ul> 
  </div>

  <div id="main"> 
  	<div class="person">
  		    <p><label>姓名:</label>
					<input type="text" placeholder="  <?php 
  		            foreach($row1 as $k => $v)
  		            {
  		            	foreach($v as $key=>$val)
  		            	{
  		            		$arr1[]=$val;
  		            	}
  		            }
  		            echo ($arr1[3]);
				?>" disabled=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>性别:</label>
          <input type="text" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[4]);
        ?>" disabled=""/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>年龄:</label>
          <input type="text" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[5]);
        ?>" disabled=""/> </p>
         <p><label>班级:</label>
          <input type="text" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[6]);
        ?>" disabled=""/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label>学号:</label>
          <input type="text" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[7]);
        ?>" disabled=""/> </p>
        <p> <label>左眼视力:</label>
          <input type="text" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[8]);
        ?>" disabled=""/> 
				<label>左眼散光:</label>
					<input type="text" placeholder="  <?php 
  		            foreach($row1 as $k => $v)
  		            {
  		            	foreach($v as $key=>$val)
  		            	{
  		            		$arr1[]=$val;
  		            	}
  		            }
  		            echo ($arr1[9]);
				?>" disabled=""/>
        <label for="nickname">左眼散光轴位:</label>
          <input type="text" name="nick" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[10]);
        ?>" disabled=""/> 
        </p>
				
				<p><label for="nickname">右眼视力:</label>
					<input type="text" name="nick" placeholder="  <?php 
  		            foreach($row1 as $k => $v)
  		            {
  		            	foreach($v as $key=>$val)
  		            	{
  		            		$arr1[]=$val;
  		            	}
  		            }
  		            echo ($arr1[11]);
				?>" disabled=""/>
        <label for="nickname">右眼散光:</label>
          <input type="text" name="nick" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[12]);
        ?>" disabled=""/>
         <label for="nickname">右眼散光轴位:</label>
          <input type="text" name="nick" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[13]);
        ?>" disabled=""/></p>
        <p><label for="nickname">SE:</label>
          <input type="text" name="nick" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[14]);
        ?>" disabled=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="nickname">瞳距:</label>
          <input type="text" name="nick" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[15]);
        ?>" disabled=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="nickname">色盲:</label>
          <input type="text" name="nick" placeholder="  <?php 
                  foreach($row1 as $k => $v)
                  {
                    foreach($v as $key=>$val)
                    {
                      $arr1[]=$val;
                    }
                  }
                  echo ($arr1[16]);
        ?>" disabled=""/> </p>
	</div>
  		         
  </div>

  <div id="footer">
  </div>
</div>

</body>
</html>


