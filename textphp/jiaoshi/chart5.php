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
$sql1="select * from datadata where leftsl < '$aas' and banji = 1";
    $result_user1=mysqli_query($conn,$sql1);//执行对数据库的查询
    $rows1=mysqli_num_rows($result_user1);
    // print_r($rows1)
$sql2="select * from datadata where leftsl >= '$aas' and banji = 1";
    $result_user2=mysqli_query($conn,$sql2);//执行对数据库的查询
    $rows2=mysqli_num_rows($result_user2);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>第一个 ECharts 实例</title>
    <!-- 引入 echarts.js -->
    <script src="https://cdn.staticfile.org/echarts/4.3.0/echarts.min.js"></script>
</head>
<body>
        <div id="lamp" style="height: 300px;"></div>
        <div id="landscape" style="height: 300px;"></div>
        <div id="saving" style="height: 300px;"></div>
        
        <!-- <script src="echarts.min.js"></script> -->
        <script type="text/javascript">
             var lampOpenCount ="<?php echo $rows1?>" ;;
             var convertCtrlOpen="<?php echo $rows2?>" ;;
             var saveEnergy=1;
             var lampCount=2;
             var convert=2;
             var noIntelLight=4;
             
            drawPieChart('lamp', 1,lampOpenCount,lampCount);
            drawPieChart('landscape', 1,convertCtrlOpen,convert);
            drawPieChart('saving', 2,saveEnergy,noIntelLight);
            
            function drawPieChart(id, type,openCount,count) {
                var myChart = echarts.init(document.getElementById(id));
                var option = {
                    tooltip: {
                        trigger : 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        show: false
                    },
                    
                    series: [{
                        name: '近视人数比例',
                        type: 'pie',
                        radius: '55%',
//                         radius: type === 1 ? ['60%', '80%'] : ['48%', '68%'],
//                         center: ['50%', '50%'],
                        hoverAnimation: false,
                        avoidLabelOverlap: false,

                        label: {
                            normal: {
//                                 position: 'center',
                                textStyle: {
                                    fontSize: '16',
                                    color: '#999'
                                },
                                formatter: "{a} \n {d}%"
                            }
                        },
                        labelLine: {
                            normal: {
                                show: true
                            }
                        },
                        data: [{
                            value: openCount,
                            label: {
                                normal: {
                                    show: true
                                }
                            },
                        },
                            {
                                value: count-openCount,
                                label: {
                                    normal: {
                                        show: true
                                    }
                                },
                            }
                        ]
                    }]
                };;

                if (option && typeof option === "object") {
                    myChart.setOption(option, true);
                }
            }
     
    </script>
</body>
</html>
