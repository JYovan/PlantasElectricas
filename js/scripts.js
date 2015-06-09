$(document).ready(function () {

//    $("table>thead>tr>th").addClass("cursorhand");
    $("input").addClass("fig");
    $("button").addClass("fig");
    $("h4").addClass("fig");
    $("select").css({
        color: "#000"
    });  
    $("fieldset").find("div").addClass("has-success"); 
    $("#tblData_filter").addClass("has-success"); 
    $("fieldset").find("div").addClass("has-success"); 
    $("#body").css({"font-family":"sans-serif"}); 
    $("ul.dropdown-menu").find("li").find("a").addClass("cursorhand");
    $(".navbar-default .navbar-nav>li>a").addClass("cursorhand");
    $(".table-bordered>tfoot>tr>td").addClass("cursorhand");
});
var offset = 1;
function plot() {
    var sin = [], cos = [];
    for (var i = 0; i < 144; i += 1.5) {
        sin.push([i, Math.sin(i + offset)]);
        cos.push([i, Math.cos(i + offset)]);
    }

    var options = {
        series: {
            lines: {
                show: true,
                fill: true
            },
            points: {radius: 3,
                show: true
            }
        },
        shadowSize: 3,
        highlightColor: 2
        ,
        grid: {
            hoverable: true, //IMPORTANT! this is needed for tooltip to work
            backgroundColor: {colors: ["#555", "#000"]}
            , clickable: true
        },
        yaxis: {
            min: 0,
            max: 1.2,
            color: "#FFF"
        },
        xaxis: {
            color: "#FFF"
        },
        legend: {
            show: true
        },
        color: "#fff"
        ,
        colors: ["#A3D900", "#5bc0de", "#CC0000"],
        tooltip: true,
        tooltipOpts: {
            content: "<div style='color:#000;'>'%s' of %x.1 is %y.4</div>",
            shifts: {
                x: 0,
                y: 25
            }, onHover: function (flotItem, $tooltipEl) {
                // console.log(flotItem, $tooltipEl);

            }

        }
    };

    $.plot($("#graphLine"), [{
            data: sin,
            label: "sin(x)"
        }, {
            data: cos,
            label: "cos(x)"
        }],
            options);
    $.plot($("#graphLine1"), [{
            data: sin,
            label: "sin(x)"
        }, {
            data: cos,
            label: "cos(x)"
        }],
            options);

    $.plot($("div#graphLine2"), [{
            data: sin,
            label: "sin(x)"
        }, {
            data: cos,
            label: "cos(x)"
        }],
            options);

    $.plot($("div#graphLine3"), [{
            data: sin,
            label: "sin(x)"
        }, {
            data: cos,
            label: "cos(x)"
        }],
            options);
    $.plot($("div#graphLine4"), [{
            data: sin,
            label: "sin(x)"
        }, {
            data: cos,
            label: "cos(x)"
        }],
            options);
} 