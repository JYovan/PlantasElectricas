
<!--CHART JS-->
<?php   
$howmanychart = 3;
$chart = "";
$chart .="
<script src='js/ChartJS/Chart.js'></script>
<div '>";
for ($index = 0; $index < $howmanychart; $index++) {
    $chart .= "  
        <div align=\"center\" class=\"alert alert-dismissable alert-warning\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
  <h4>$index</h4>
</div>
    <canvas id='myChart$index' style='display: inline-block; width:100%;height:300px;'></canvas>";
    if($index<$howmanychart)
    {
       $chart .="<hr>";
    }
}
$chart .="
</div>
<script>  
            var randomScalingFactor = function(){ return Math.round(Math.random() * 100)};
            var lineChartData = {";
$array = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto");
$labels = "labels: [";
for ($i = 0; $i <= count($array); $i++) {
    if ($i == count($array)) {
        $labels .="";
    } else {
        $labels .="'" . $array[$i] . "',";
    }
}
$chart .= "$labels],";

$chart .= "datasets : [";
for ($index2 = 0; $index2 < $howmanychart; $index2++) {
    $color = array(rand(50, 255), rand(50, 255), rand(50, 255));
    $chart .="{
                    label: 'My $index2 dataset',
                            fillColor : 'rgba(" . $color[0] . "," . $color[1] . "," . $color[2] . ",0.3)',
                            strokeColor : 'rgba(" . $color[0] . "," . $color[1] . "," . $color[2] . ",1)',
                            pointColor : 'rgba(" . $color[0] . "," . $color[1] . "," . $color[2] . ",1)',
                            pointStrokeColor : '#fff',
                            pointHighlightFill : '#fff',
                            pointHighlightStroke : 'rgba(" . $color[0] . "," . $color[1] . "," . $color[2] . ",1)',
                            data : [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                    }";
    if ($index2 != $howmanychart) {
        $chart.=",";
    }
}
$chart.="                     ]
         }";
$chart .= "
    function create(){";
for ($index1 = 0; $index1 < $howmanychart; $index1++) {
    $chart .="var ctx$index1 = document.getElementById('myChart$index1').getContext('2d');
            window.myLine = new Chart(ctx$index1).Line(lineChartData, {
    responsive: true,
    animateScale : true
    });";
}
$chart.="  }  
    create(); 
</script>";
print $chart; 