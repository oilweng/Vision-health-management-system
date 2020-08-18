<!DOCTYPE html>
<html>
<head>
    <title>学生视力可视化数据图</title>
    <script type="text/javascript"> 
<!-- 
function MM_jumpMenu(targ,selObj,restore){ //v3.0 
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
if (restore) selObj.selectedIndex=0; 
} 
//--> 
</script> 
</head>
<body>
    <div style="float:left;margin : 10px 15px 15px 5px;">
    <h1>视力数据图</h1>
    <form action="" method="get"> 
    <p><label>学生整体视力情况</label> 
    <select name="jumpMenu" id="jumpMenu"
    onchange="MM_jumpMenu('parent',this,0)"> 
    <option value="#">请选择</option> 
    <option value="chart.php">各年龄段近视情况</option> 
    <option value="chart3.php">近视人数比例</option> 
    <option value="chart4.php">各近视程度比例</option> 
    <option value="chart6.php">学生色盲情况</option> 
    </select> </p>
    <p><label>电信一班视力情况</label> 
    <select name="jumpMenu" id="jumpMenu"
    onchange="MM_jumpMenu('parent',this,0)"> 
    <option value="#">请选择</option> 
    <option value="chart7.php">男女散光情况</option> 
    <option value="chart11.php">电信一班近视人数比例</option> 
    <option value="chart12.php">电信一班近视程度比例</option> 
    </select> </p>
    <a href="index.php">返回教师端主界面</a>
</form> 
</nav>
</div>
<div style="float:left;margin-top: 30px;width: 3px;height: 400px; background: darkgray;"></div> 
</body>
</html>






















