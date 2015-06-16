
<script src="js/jquery-1.11.1.min.js"></script>   
<script>

    function getDataJSON() {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            dataType: "JSON",
            data: {
                IdProcess: 44
            }
        }).done(function (data) {  
            $("#result-json").html(getTable("tblMicros",data));
        });
    }
    
function getTable(tblname, data) {
    var i =0;
    var columns=[];
    for (var key in data[i]) {  
         columns.push(key);
        i++;
    }  
    var div = "<div class=\"table-responsive\">";
    div = "<table id=\"" + tblname + "\" class=\"table table-bordered table-striped table-hover display\" cellspacing=\"0\" width=\"100%\">";
    div += "<thead>";
    div += "<tr class=\"info\">";
    for (var index = 0; index < columns.length; index++) {
        div += "<th>" + columns[index] + "</th>";
    } 
    div += "</tr></thead>";
    div += "<tbody>";
    $.each(data, function (key, value) {
        div += "<tr>";
        $.each(value, function (key, value) {
            div += "<td>" + value + "</td>";
        });
        div += "</tr>";
    });
    div += "</tbody>";
    div += "</table>";
    div += "</div>";
    return div;
}
</script>
<button id="btnOk" onclick="getDataJSON()">Cargar</button>
<div id="result-json">Aqui va un resultado hecho con json</div>