<?php
header("Content-Type:text/html;charset=utf-8");//防止页面出现乱码
$conn=mysqli_connect("localhost","root","m123456","mydatabase");//localhost 主机地址
mysqli_query($conn,"set names utf8");
if(!$conn)
{
echo "连接失败";
die("error:".mysqli_connect_error());
}
$aas1 = -0.5;
$aas2 = -3.00;
$aas3 = -6.00;

$sql1="select * from datadata where SE >= '$aas2' and SE < '$aas1' ";
    $result_user1=mysqli_query($conn,$sql1);//执行对数据库的查询
    $rows1=mysqli_num_rows($result_user1);
    // print_r($rows1)
$sql2="select * from datadata where SE >= '$aas3' and SE < '$aas2'";
    $result_user2=mysqli_query($conn,$sql2);//执行对数据库的查询
    $rows2=mysqli_num_rows($result_user2);
$sql3="select * from datadata where SE < '$aas3'";
    $result_user3=mysqli_query($conn,$sql3);//执行对数据库的查询
    $rows3=mysqli_num_rows($result_user3);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>各年龄段近视程度比例</title>
    <!-- 引入 echarts.js -->
    <script src="https://cdn.staticfile.org/echarts/4.3.0/echarts.min.js"></script>
</head>
<body>
    <?php include("xiala.php");?>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="float:left;width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));
        var query1 ="<?php echo $rows1?>" ;
        var query2 ="<?php echo $rows2?>" ;
        var query3 ="<?php echo $rows3?>" ;
 
        myChart.setOption({
            title  :{
                text : '近视程度比例（SE)'

            },
            tooltip : {
                trigger : 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            series : [
                {
                    name: '近视人数',
                    type: 'pie',    // 设置图表类型为饼图

                    radius: '55%',  // 饼图的半径，外半径为可视区尺寸（容器高宽中较小一项）的 55% 长度。
                    data:[          // 数据数组，name 为数据项名称，value 为数据项值
                        {value:query1, name:'低度近视'},
                        {value:query2, name:'中度近视'},
                        {value:query3, name:'高度近视'},
                
                    ]
                }

            ]
        })
    </script>
</body>
</html>
