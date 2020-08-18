<?php
header("Content-Type:text/html;charset=utf-8");//防止页面出现乱码
$conn=mysqli_connect("localhost","root","m123456","mydatabase");//localhost 主机地址
mysqli_query($conn,"set names utf8");
if(!$conn)
{
echo "连接失败";
die("error:".mysqli_connect_error());
}
$aas = 0;
$aas1 = -1.00;
$aas2 = -2.00;
$aas3 = 1;
$sex1 = "男";
$sex2 = "女";
$sql1="select * from datadata where leftsg = '$aas' and sex = '$sex1' and banji =$aas3";
    $result_user1=mysqli_query($conn,$sql1);//执行对数据库的查询
    $rows1=mysqli_num_rows($result_user1);
$sql2="select * from datadata where leftsg = '$aas' and sex = '$sex2' and banji =$aas3";
    $result_user2=mysqli_query($conn,$sql2);//执行对数据库的查询
    $rows2=mysqli_num_rows($result_user2);
$sql3="select * from datadata where leftsg >= '$aas1' and leftsg < '$aas' and sex = '$sex1' and banji =$aas3";
    $result_user3=mysqli_query($conn,$sql3);//执行对数据库的查询
    $rows3=mysqli_num_rows($result_user3);
$sql4="select * from datadata where leftsg >= '$aas1' and leftsg < '$aas' and sex = '$sex2' and banji =$aas3";
    $result_user4=mysqli_query($conn,$sql4);//执行对数据库的查询
    $rows4=mysqli_num_rows($result_user4);
$sql5="select * from datadata where leftsg < '$aas1' and leftsg >= '$aas2' and sex = '$sex1' and banji =$aas3";
    $result_user5=mysqli_query($conn,$sql5);//执行对数据库的查询
    $rows5=mysqli_num_rows($result_user5);
$sql6="select * from datadata where leftsg < '$aas1' and leftsg >= '$aas2' and sex = '$sex2' and banji =$aas3";
    $result_user6=mysqli_query($conn,$sql6);//执行对数据库的查询
    $rows6=mysqli_num_rows($result_user6);
$sql7="select * from datadata where leftsg < '$aas2' and sex = '$sex1' and banji =$aas3";
    $result_user7=mysqli_query($conn,$sql7);//执行对数据库的查询
    $rows7=mysqli_num_rows($result_user7);
$sql8="select * from datadata where leftsg < '$aas2' and sex = '$sex2' and banji =$aas3";
    $result_user8=mysqli_query($conn,$sql8);//执行对数据库的查询
    $rows8=mysqli_num_rows($result_user8);
    // print_r($rows1)
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- 引入 ECharts 文件 -->
    <script src="echarts.min.js"></script>
</head>
</html>
<body>
    <?php include("xiala.php");?>
    <!-- 为 ECharts 准备一个具备大小（宽高）的 DOM -->
    <div id="main" style="float:left;width: 600px;height:400px;"></div>
</body>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>电信一班男、女生左眼散光情况</title>
    <!-- 引入 echarts.js -->
    <script src="echarts.min.js"></script>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));
        var query1 ="<?php echo $rows1?>" ;
        var query2 ="<?php echo $rows2?>" ;
        var query3 ="<?php echo $rows3?>" ;
        var query4 ="<?php echo $rows4?>" ;
        var query5 ="<?php echo $rows5?>" ;
        var query6 ="<?php echo $rows6?>" ;
        var query7 ="<?php echo $rows7?>" ;
        var query8 ="<?php echo $rows8?>" ;
        // alert(query1);
   

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '电信一班男女左眼散光情况'
            },
            legend:{
                data:['男生','女生']
            },
            tooltip: {},
            xAxis: {
                data: ["不散光","低度散光","中度散光","高度散光"]
            },
            yAxis: {
                  min: 0,
                  max: 10},
            series: [{
                name: '男生',
                type: 'bar',
                data: [query1, query3, query5, query7]
                            },
                            {
                name: '女生',
                type: 'bar',
                data: [query2, query4, query6, query8]
                            }]
        };
 
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
</body>
</html>
