<?php  
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * Helpers class
 * 
 * 
 * This class, have some functions for to make 
 * maps, markers, validate if a request is a geniune ajax
 * @author Mario Giovanni Guerrero Flores
 * 
 * @package WEnergy
 */
class Helpers {

    function is_ajax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }
    function is_post() {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }
    
    function getMarker($sts) {
        return strtoupper($sts) == "ENCENDIDA" ? "success" : strtoupper($sts) == "DISPONIBLE" ? "success" : strtoupper($sts) == "EN USO" ? "success" : "danger";
    }

    function getMap($datamap) {
        $map = '<button type="button" id="btnRefreshMap" onclick="getMapByUsr()" class="btn btn-sm btn-success addMap"> <span class="fa fa-refresh fa-spin"></span></button>';
        $map.='<div id="map" style="width: 100%; height: 350px; border: none; color: #fff !important;" ></div> 
                        <script>
                            var myMarkers = {"markers": [ ';
        for ($index = 0; $index <= (count($datamap) - 1); $index++) {
            if ($index == (count($datamap) - 1)) {
                $map .="{\"latitude\": \"" . $datamap[$index][0] . "\"," .
                        "\"longitude\": \"" . $datamap[$index][1] . "\"," .
                        '"icon": "img/pointer/' . $this->getMarker($datamap[$index][3]) . '.png",' .
                        '"baloon_text": "' . $datamap[$index][2] . '"}';
            } else {
                $map .="{\"latitude\": \"" . $datamap[$index][0] . "\"," .
                        "\"longitude\": \"" . $datamap[$index][1] . "\"," .
                        '"icon": "img/pointer/' . $this->getMarker($datamap[$index][3]) . '.png",' .
                        '"baloon_text": "' . $datamap[$index][2] . '"}';
                $map .=",";
            }
        }
        $map .="]};";
        $map .='$("#map").mapmarker({
                            zoom: 5,
                            center: "20.8720687,-103.0214674",
                            markers: myMarkers 
                            });</script>';
        return $map;
    }

    function getCharts($options) {
        $howmanychart = $options[0];
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
            if ($index < $howmanychart) {
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
    }
}