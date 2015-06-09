$(document).ready(function () {
    /**
     * Esta funcion permite crear un formato para los campos de tipo fecha con el plugin de datepicker
     * **/
    $.fn.datepicker.defaults.format = "yyyy-mm-dd";
    /*******************************************************************************
     * Funciones para aplicar la busqueda sobre una etiqueta select
     *******************************************************************************/
    
    $("select").select2({
        width: "100%"
    });
     $("div.toolbar").html("<button type=\"button\" id=\"btnRemoveProveedor\" class=\"btn btn-default disabled\" data-dismiss=\"\"> <span class=\"fa fa-minus-circle\"></span> </button>");
    /*******************************************************************************
     * Fin de funciones de busqueda por etiqueta select
     *******************************************************************************/

    /*******************************************************************************
     * Eventos Click 
     *******************************************************************************/

    /*******************************************************************************
     * Eventos Click Proveedor
     *******************************************************************************/
    $("#btnSaveProveedor").click(function () {
        onSaveSupplier();
        getDataSuppliers();
        setTimeout(
                function () {
                    getDataUsers();
                }, 1000);
    });
    $("#btnUpdateProveedor").click(function () {
        onUpdateSupplier();
        getDataSuppliers();
        setTimeout(
                function () {
                    getDataUsers();
                }, 1000);
    });
    $("#btnUpdateProveedorTable").click(function () {
        getDataSuppliers();
    });
    $("#btnCancelProveedor").click(function () {
        onCancelProveedor();
    });
    var onCancelProveedor = function (){
        $("#txtProveedor").val("");
        $("#btnSaveProveedor").addClass("disabled").fadeIn("slow");
        $("#btnUpdateProveedor").addClass("disabled").fadeIn("slow");
        $("#btnRemoveProveedor").addClass("disabled").fadeIn("slow");
        $("#tblDataSupplier tbody").find("tr").removeClass("warning");
    }
    $("#btnRemoveProveedor").click(function () {
        $("#messages-supplier").html("<p class=\"text-danger\">Eliminando...</p>").fadeIn("slow").delay(5500).fadeToggle("slow", "linear");;
    });
    /*******************************************************************************
     * Eventos Click Usuario
     *******************************************************************************/
    $("#btnSaveUsr").click(function () {
        onSaveUser();
        getDataUsers();
    });
    $("#btnUpdateUsr").click(function () {
        onUpdateUser();
        getDataUsers();
    });
    $("#btnUpdateTableUsr").click(function () {
        getDataUsers();
    });
    $("#btnCancelUsr").click(function () {
        $("#DatosUsuario")[0].reset();
        $("#btnSaveUsr").addClass("disabled");
        $("#btnUpdateUsr").addClass("disabled");
        $("#txtContrasenia").removeAttr('disabled');
        $("#txtContraseniaCon").removeAttr('disabled');
        $("#DatosUsuario")[0].reset();
        $("#tblDataUsr tbody").find("tr").removeClass("warning");
    });

    /*******************************************************************************
     * Eventos Click Micro
     *******************************************************************************/
    $("#btnSaveMicro").click(function () {
        onSaveMicro();
    });
    $("#btnUpdateMicro").click(function () {
        onUpdateMicro();
        getMicrosByEstatus();
        getDataMicros();
    });
    $("#btnUpdateMicroTable").click(function () {
        getDataMicros();
    });
    $("#btnCancelMicro").click(function () {
        getMicrosByEstatus();
        $("#DatosMicro")[0].reset();
        $("#btnSaveMicro").addClass("disabled");
        $("#btnUpdateMicro").addClass("disabled");
    });
    /*******************************************************************************
     * Eventos Click Sucursal
     *******************************************************************************/
    $("#btnSaveSucursal").click(function () {
        onSaveSucursal();
    });
    $("#btnUpdateSucursal").click(function () {
        getDataSucursales();
    });
    $("#btnUpdateTableSucursal").click(function () {
        getDataSucursales();
    });
    $("#btnCancelSucursal").click(function () {
        onCancelSucursal();
    });

    /*******************************************************************************
     * Eventos Click Planta
     *******************************************************************************/
    $("#btnSavePlanta").click(function () {
        onSavePlant();
    });
    $("#btnUpdatePlanta").click(function () {
        onUpdatePlanta();
        getDataSucursales();
    });
    $("#btnUpdateTablePlanta").click(function () {
        getDataPlantas();
        getPlantasByEstatus();
    });
    $("#btnCancelPlanta").click(function () {
        $("#DatosPlant")[0].reset();
        $("#btnUpdatePlanta").addClass("disabled");
        $("#cmbMicros").select2("enable", true);
    });
    /*******************************************************************************
     * Eventos Click Zona
     *******************************************************************************/
    $("#btnSaveZone").click(function () {
        onSaveZone();
    });
    $("#btnUpdateZone").click(function () {
        onUpdateZone();
        getDataZones();
    });
    $("#btnUpdateTableZone").click(function () {
        getDataZones();
    });
    $("#btnCancelZone").click(function () {
        onCancelZone();
    });
    /*******************************************************************************
     * Eventos Click UXS
     *******************************************************************************/
    $("#btnSaveUxS").click(function () {
        onSaveUxS();
    });
    $("#btnUpdateUxS").click(function () {
        onUpdateUxS();
        getDataUxS();
    });
    $("#btnUpdateTableUxS").click(function () {
        getDataUxS();
    });
    $("#btnCancelUxS").click(function () {
        onCancelUxS();
    });
    /*******************************************************************************
     * Eventos Click Graficas
     *******************************************************************************/
    $("#btnCharts").click(function () {
        $("#chart-container").load("test/charts.php");
    });
    /*******************************************************************************
     * Fin de Eventos Click
     *******************************************************************************/
    $('#mdlUsuarios').on('shown.bs.modal', function () {
        getDataUsers();
        getSuppliers();
    });
    $('#mdlPlantas').on('shown.bs.modal', function () {
        getDataPlantas();
    });
    $('#mdlZonas').on('shown.bs.modal', function () {
        getDataZones();
    });
    $('#mdlProveedores').on('shown.bs.modal', function () {
        getDataSuppliers(); 
    });
    $('#mdlSucursales').on('shown.bs.modal', function () {
        getDataSucursales();
        getPlantasByEstatus();
        getZones();
    });
    $('#mdlMicros').on('shown.bs.modal', function () {
        getDataMicros();
    });

    $('#mdlUsuariosXSucursal').on('shown.bs.modal', function () {
        getDataUxS();
        getUserXS();
        getUXSucursal(); 
    });

    $('#mdlUserAccount').on('shown.bs.modal', function () {
        getCountPlantByUser();
    });

    $("#mdlMicrosToggle").on('shown.bs.modal', function () {
        getDataMicroToggle();
    });
    $("#btnRefreshMap").click(function () {
        getMapByUsr();
    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function () {
        getHistory(current_plant);
        getFOBChart();
    });
    /*******************************************************************************
     * Eventos via callback
     *******************************************************************************/
    /*******************************************************************************
     * @type @exp;$@call;Callbacks
     *******************************************************************************/
    var call = $.Callbacks();
    call.add(getMapByUsr());
    call.add(getMicrosByEstatus());
    call.add(getEstatusPlanta());
    call.fire();

});

//Variable para datos temporales
var temp = 0;
//Variable global para llamar via callback
var call = $.Callbacks();

/*******************************************************************************
 * Procesos de History
 * @author Giovanni Flores
 * @function getHistory
 * @param {object} pl Nombre de la planta
 * ****************************************************************************/

function getHistory(pl) {
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 2,
            txtPlanta: pl
        }
    }).done(function (data) {
        $("#history-data").html("<div align=\"center\">" +
                "<fieldset>" +
                "<legend>Filtrado por fecha</legend>" +
                "<div style=\"display: inline-block\"  class=\"form-group has-success\">" +
                "<label class=\"col-lg-2 control-label\" for=\"txtStartDate\">De</label>" +
                "<div class=\"col-lg-10\">" +
                "<input data-provide=\"datepicker\" id=\"txtStartDate\" class=\"form-control\" placeholder=\"Fecha Inicio\"  readonly=\"\" >" +
                "</div>" +
                "</div>" +
                "<div style=\"display: inline-block\"  class=\"form-group has-success\">" +
                "<label class=\"col-lg-2 control-label\" for=\"txtEndDate\">hasta</label>" +
                "<div class=\"col-lg-10\">" +
                "<input data-provide=\"datepicker\" id=\"txtEndDate\" class=\"form-control\" placeholder=\"Fecha Termina\" readonly=\"\" >" +
                "</div>" +
                "</div>" +
                "<div style=\"display: inline-block\"  class=\"form-group has-success\">" +
                "<div class=\"col-lg-10\">" +
                "<button id=\"btnSearchHistory\" onclick=\"onFilterByDateHistory($('#txtStartDate').val(),$('#txtEndDate').val())\" class=\"btn btn-primary\"><span class=\"fa fa-search\"></span></button>" +
                "</div>" +
                "</div>" +
                "</fieldset>" +
                "<div id='messages-filter-history'>" +
                "</div>" +
                "</div>" +
                "<br>" + data);
        $('#tblDataHistory').DataTable(tableOptions);
        $('#tblDataHistory tbody').on('click', 'tr', function () {
            $("#tblDataHistory").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).addClass('warning');
        });
    });
}

function onFilterByDateHistory(datestart, datend) {
    var rdate = /^(\d{4})-(\d{1,2})-(\d{1,2})$/;
    if (rdate.test(datestart) && rdate.test(datestart)) {
        $("#messages-filter-history").html("<p class=\"text-success\">Buscando...</p>");
    } else {
        $("#messages-filter-history").html("Campo de fecha invalidos. Fecha inicio: " + datestart + ", Fecha fin:" + datend + " ");
    }
}
/*******************************************************************************
 * Procesos de History
 * @author Giovanni Flores
 * @function fillHistory
 * @description Crea una tabla con herramientas de paginación, filtro por columna y busqueda por criterio
 * ****************************************************************************/
function fillHistory()
{
}


var resizeDataTableToFitContainer = function ($table, $dataTable) {
    var $table = $(table);
    var $dataTable = $table.dataTable();
    $dataTable.fnAdjustColumnSizing(false);

    // TableTools
    if (typeof (TableTools) !== "undefined") {
        var tableTools = TableTools.fnGetInstance(table);
        if (tableTools !== null && tableTools.fnResizeRequired()) {
            tableTools.fnResizeButtons();
        }
    }
    //

    var $dataTableWrapper = $table.closest(".dataTables_wrapper");
    var panelHeight = $dataTableWrapper.parent().height();
    var toolbarHeights = 0;
    $dataTableWrapper.find(".fg-toolbar").each(function (i, obj) {
        toolbarHeights = toolbarHeights + $(obj).height();
    });

    var scrollHeadHeight = $dataTableWrapper.find(".dataTables_scrollHead").height();
    var height = panelHeight - toolbarHeights - scrollHeadHeight;
    $dataTableWrapper.find(".dataTables_scrollBody").height(height - 24);

    $dataTable._fnScrollDraw();

};

/*******************************************************************************
 * Fin de procesos de History
 * ****************************************************************************/
/*******************************************************************************
 * Procesos de Micro
 * Ultima modificación: 2014-12-27
 * ****************************************************************************/


/*******************************************************************************
 * Procesos de Micro
 * @author Giovanni Flores
 * @function checkMicro 
 * @param {object} m Micro que será verificado en el sistema
 * ****************************************************************************/
function checkMicro(m)
{
    if (/^[a-zA-Záéíóúñ0-9\s]{3,20}$/.test(m)) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 10,
                txtField: m
            }
        }).done(function (data) {
            if (data === '0')
            {
                $("#btnSaveMicro").removeClass("disabled");
                $("#messages-micro").html("");
            } else {
                $("#btnSaveMicro").addClass("disabled");
                $("#messages-micro").html(
                        "<br><div class=\"alert alert-dismissable alert-warning\">" +
                        "<h4>Atenci&oacute;n!</h4>" +
                        "<p>El nombre para el micro ya existe y se encuentra en uso. Agregue un prefijo o un nombre diferente.</p>" +
                        "</div>");
            }
        });
    } else {
        $("#btnSaveMicro").addClass("disabled");
    }
}

/*******************************************************************************
 * Procesos de Micro
 * @author Giovanni Flores
 * @function onSaveMicro   
 * @description Guarda un micro, pero antes de guardarlo, es validado según una expresion regular
 * ****************************************************************************/
var regexmicro = /^[a-zA-Záéíóúñ0-9\s]{3,20}$/;
function onSaveMicro() {
    if (regexmicro.test($("#txtMicro").val())) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 12,
                txtMicro: $("#txtMicro").val()
            }
        }).done(function (data) {
            if (data === '1') {
                $("#messages-micro").html(
                        "<br><div class=\"alert alert-dismissable alert-success\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>" + $("#txtMicro").val() + " regsitrado correctamente!</h4>" +
                        "</div>");
                $("#txtMicroId").val("");
            } else {
                $("#messages-micro").html(
                        "<div class=\"alert alert-dismissable alert-danger\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>No hemos podido procesar su solicitud.</h4>" +
                        "</div>");
            }
            $("#btnSaveMicro").addClass("disabled");
            $("#messages-micro").fadeIn("slow").delay(5500).fadeToggle("slow", "linear");
            setInterval(getDataMicros(), 1500);
            getMicrosByEstatus();
        });
    } else {
        $("#messages-micro").html(
                "<div class=\"alert alert-dismissable alert-danger\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                "<h4>El nombre para el micro es invalido.</h4>" +
                "</div>");
    }
}

function onUpdateMicro() {
    if (regexmicro.test($("#txtMicro").val())) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 27,
                IdMicro: temp,
                txtMicro: $("#txtMicro").val(),
                txtEstatus: $("#cmbEstatusMicro").val()
            }
        }).done(function (data) {

            if (data === '1') {
                $("#messages-micro").html(
                        "<br><div class=\"alert alert-dismissable alert-info\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>" + $("#txtMicro").val() + " actualizado correctamente!</h4>" +
                        "</div>");
            } else {
                $("#messages-micro").html(
                        "<div class=\"alert alert-dismissable alert-danger\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>No hemos podido procesar su solicitud.</h4>" +
                        "</div>");
            }
            $("#messages-micro").fadeIn("slow").delay(5500).fadeToggle("slow", "linear");
            $("#btnSaveMicro").addClass("disabled");
            $("#btnUpdateMicro").addClass("disabled");
            setInterval(function () {
                getDataMicros();
                getMicrosByEstatus();
            }
            , 1500);

        });
    } else {
        $("#messages-micro").html(
                "<div class=\"alert alert-dismissable alert-danger\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                "<h4>El nombre para el micro es invalido.</h4>" +
                "</div>");
    }
}


/*******************************************************************************
 * Procesos de Micro
 * @author Giovanni Flores
 * @function getDataMicros   
 * @description Obtiene todos los micros, mostrandolos en una tabla
 * ****************************************************************************/
function getDataMicros()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 25
        }
    }).done(function (data) {
        $("#DataMicro").html(data);
        var tblDataMicro = $("#tblDataMicros").DataTable(tableOptions);
        //Get Row from supplier table
        $('#tblDataMicros tbody').on('click', 'tr', function () { 
            $("#tblDataMicros").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).toggleClass('warning');
            var dtm = tblDataMicro.row(this).data();
            temp = dtm[0];
            $("#txtMicro").val(dtm[1]);
            $("#cmbEstatusMicro").select2("val", dtm[2]);
            $("#btnUpdateMicro").removeClass("disabled");
            $("#btnSaveMicro").addClass("disabled");
        });

    });
}
/*******************************************************************************
 * Procesos de Micro
 * @author Giovanni Flores
 * @function getMicrosByEstatus 
 * @description Obtiene los micros por un estatus "Disponible"
 * ****************************************************************************/
function getMicrosByEstatus()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 5,
            txtEstatus: "Disponible"
        }
    }).done(function (data) {
        $("#cmbMicros").html(data);

    });
}
/*******************************************************************************
 * Fin de procesos de Micro 
 * ****************************************************************************/


/*******************************************************************************
 * Procesos de Plantas
 * Ultima modificación: 2014-12-29
 * ****************************************************************************/

/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function onSavePlant 
 * @description Guarda una planta en el sistema
 * ****************************************************************************/
var plantname = /^[a-zA-Z0-9_-\s]{3,16}$/;
var firm = /^[0-9.]{2,5}$/;
var micro = "";
function onSavePlant() {
    if (plantname.test($("#txtNombrePlanta").val())) {
        if ($("#cmbMicros").val() === '') {
            $("#messages-plant").html(
                    "<div class=\"alert alert-dismissable alert-success\">" +
                    "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                    "<h4>Atención! El micro no puede quedar vacio.</h4>" +
                    "</div>");
        } else {
            if ($("#txtLatitud").val().length > 2 && $("#txtLongitud").val().length > 2) {
                $.ajax({
                    url: "abd/Data.php",
                    type: "POST",
                    cache: false,
                    data: {
                        IdProcess: 6,
                        txtNombrePlanta: $("#txtNombrePlanta").val(),
                        txtFirmware: $("#txtFirmware").val(),
                        txtAplication: $("#txtAplication").val(),
                        txtAppVer: $("#txtAppVer").val(),
                        txtNoSerie: $("#txtNoSerie").val(),
                        txtPotencia: $("#txtPotencia").val(),
                        txtImei: $("#cmbMicros").val(),
                        txtEstatus: $("#cmbEstatusPlant").val(),
                        txtLatitud: $("#txtLatitud").val(),
                        txtLongitud: $("#txtLongitud").val()
                    }
                }).done(function (data) {
                    if (data === '1') {
                        $("#messages-plant").html(
                                "<div class=\"alert alert-dismissable alert-success\">" +
                                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                                "<h4>" + $("#txtNombrePlanta").val() + " registrada correctamente!</h4>" +
                                "</div>");
                        onCancelPlanta();
                        $("#messages-plant").fadeIn("slow").delay(5500).fadeToggle("slow", "linear");
                        getMicrosByEstatus();
                        getDataPlantas();
                    } else {
                        $("#messages-plant").html(
                                "<div class=\"alert alert-dismissable alert-danger\">" +
                                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                                "<h4>Error!</h4>" + "<p>No hemos podido procesar, su solicitud.</p>" +
                                "</div>");
                    }
                    getDataPlantas();
                });
            } else {
                $("#messages-plant").html(
                        "<div class=\"alert alert-dismissable alert-danger\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>Las coordenadas son incorrectas.</h4>" +
                        "</div>");
            }
        }
    } else {
        $("#messages-plant").html(
                "<div class=\"alert alert-dismissable alert-danger\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                "<h4>El nombre para la planta, es inv&aacute;lido.</h4>" +
                "</div>");
    }
}

/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function onUpdatePlanta 
 * @description Actualiza una planta en el sistema
 * ****************************************************************************/
function onUpdatePlanta() {
    if (plantname.test($("#txtNombrePlanta").val())) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 31,
                IdPlanta: temp,
                txtNombrePlanta: $("#txtNombrePlanta").val(),
                txtFirmware: $("#txtFirmware").val(),
                txtAplication: $("#txtAplication").val(),
                txtAppVer: $("#txtAppVer").val(),
                txtNoSerie: $("#txtNoSerie").val(),
                txtPotencia: $("#txtPotencia").val(),
                txtImei: $("#txtMicros").val(),
                txtEstatus: $("#cmbEstatusPlant").val(),
                txtLatitud: $("#txtLatitud").val(),
                txtLongitud: $("#txtLongitud").val()
            }
        }).done(function (data) {
            if (data === '1') {
                $("#messages-plant").html(
                        "<br><div class=\"alert alert-dismissable alert-info\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>" + $("#txtNombrePlanta").val() + ", actualizada correctamente!</h4>" +
                        "</div>");
                onCancelPlanta();
            } else {
                $("#messages-plant").html(
                        "<div class=\"alert alert-dismissable alert-danger\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>No hemos podido procesar su solicitud.</h4>" +
                        "</div>");
                $("#messages-plant").append(data);
            }
            $("#messages-plant").fadeIn("slow").delay(3500).fadeToggle("slow", "linear");
            $("#btnSaveMicro").addClass("disabled");
            $("#btnUpdateMicro").addClass("disabled");
            getMapByUsr();
            getDataMicros();
            getMicrosByEstatus();
            getDataPlantas();
            getPlantasByEstatus();
            onCancelPlanta();
        });
    } else {
        $("#messages-plant").html(
                "<div class=\"alert alert-dismissable alert-danger\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                "<h4>El nombre para la planta, es inv&aacute;lido.</h4>" +
                "</div>");
    }
}

/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function onClickPlant
 * @param {object} plant Nombre de la planta
 * @description Muestra los valores de la planta en formato JSON
 * ****************************************************************************/
var datafob = [];
function onClickPlant(plant)
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        dataType: "JSON",
        data: {
            IdProcess: 7,
            txtPlanta: plant
        }
    }).done(function (data) {
        $("#data-from-plant").removeClass("hide");
        $("#plant-name").html('<h2 >' + data[0] + '</h2><hr>');
        getGauge(plant);
        getHistory(data[0]);
        getFOBChart();
        var dataplanta = '<ul class="list-group">'
                + '<li class="list-group-item">'
                + '<span class="badge">' + data[1] + '</span>'
                + 'Firmware'
                + '</li>'
                + '<li class="list-group-item">'
                + '<span class="badge">' + data[2] + '</span>'
                + 'Aplication'
                + '</li>'
                + '<li class="list-group-item">'
                + '<span class="badge">' + data[3] + '</span>'
                + 'Fecha y hora'
                + '</li>'
                + '<li class="list-group-item">'
                + '<span class="badge">' + data[4] + '</span>'
                + 'App Version'
                + '</li>'
                + '<li class="list-group-item">'
                + '<span class="badge">' + data[5] + '</span>'
                + 'Serial Number'
                + '</li>'
                + '<li class="list-group-item">'
                + '<span class="badge">' + data[6] + '</span>'
                + 'Potency'
                + '</li>'
                + '<li class="list-group-item">'
                + '<span class="badge">' + data[7] + '</span>'
                + 'Sucursal'
                + '</li>'
                + '<li class="list-group-item">'
                + '  <span class="badge">' + data[8] + '</span>'
                + 'Micro'
                + '</li>'
                + '<li class="list-group-item">'
                + '  <span class="badge">' + data[9] + '</span>'
                + 'Estatus'
                + '</li>'
                + '</ul>';
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            dataType: "JSON",
            data: {
                IdProcess: 24,
                txtPlanta: plant
            }
        }).done(function (data) {
            dataplanta += '<h2>Niveles</h2><hr>'
                    + '<h2>Combustible</h2>'
                    + '<div class="progress progress-striped active"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="' + data[0] + '" aria-valuemin="0" aria-valuemax="100" style="width: ' + data[0] + '%"></div></div>'
                    + '<h2>Aceite</h2>'
                    + '<div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: ' + parseInt(data[1]) + '%"></div></div>'
                    + '<h2>Bateria</h2>'
                    + '<div class="progress progress-striped active"><div class="progress-bar progress-bar-warning" style="width: ' + parseInt(data[2]) + '%"></div></div>';
            $("#list-data").html(dataplanta);
//            $("#list-data").html(data);
        });
    });
}

/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function getFOBChart 
 * @description Muestra las gráficas
 * ****************************************************************************/
function getFOBChart() {
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 30,
            txtPlanta: current_plant
        }
    }).done(function (data) {
        $("#result-graph").html(data);
//        $("#result-graph").load("test/charts.php");
    });
}

/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function getEstatusPlanta 
 * @description Rellena el combo de estatus de la planta
 * ****************************************************************************/
function getEstatusPlanta()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 13
        }
    }).done(function (data) {
//                $("#cmbEstatusPlant").html(data);
        $("#cmbEstatusPro").html(data);

    });
}

/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function checkPlantByName
 * @param {object} txtPlant  
 * @description Verifica si la planta ingresada ya se encuentra en el sistema
 * ****************************************************************************/
function onCheckPlanta(txtPlant)
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 9,
            txtField: txtPlant
        }
    }).done(function (data) {
        if (data === '0')
        {
            if ($("#btnSavePlanta").hasClass("disabled")) {
                if ($("#btnUpdatePlanta").hasClass("disabled")) {
                    $("#btnSavePlanta").removeClass("disabled");
                }
            }
            $("#messages-plant").html("");
        } else {
            if ($("#btnUpdatePlanta").hasClass("disabled")) {
                $("#btnSavePlanta").removeClass("disabled");
            } else {
                $("#btnSavePlanta").addClass("disabled");
            }
            $("#messages-plant").html(
                    "<div class=\"alert alert-dismissable alert-warning\">" +
                    "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                    "<h4>Atenci&oacute;n!</h4>" +
                    "<p>El nombre para la planta ya existe y se encuentra en uso. Agregue un prefijo o un nombre diferente.</p>" +
                    "</div>");
        }
    });
}


/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function getDataPlantas 
 * @description Obtiene todas las plantas, mostrandolas en una tabla con herramientas
 * ****************************************************************************/
function getDataPlantas()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 26
        }
    }).done(function (data) {
        $("#DataPlantas").html(data);
        var tblDataPlantas = $("#tblDataPlantas").DataTable(tableOptions);
        //Get Row from supplier table
        $('#tblDataPlantas tbody').on('click', 'tr', function () {
            $("#tblDataPlantas").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).toggleClass('warning');
            var dtm = tblDataPlantas.row(this).data();
            temp = dtm[0];
            $("#txtNombrePlanta").val(dtm[1]);
            $("#txtFirmware").val(dtm[2]);
            $("#txtAplication").val(dtm[3]);
            $("#txtAppVer").val(dtm[4]);
            $("#txtNoSerie").val(dtm[5]);
            $("#txtPotencia").val(dtm[6]);
            micro = dtm[7];
            $("#cmbEstatusPlant").select2("val", dtm[8]);
            $("#txtLatitud").val(dtm[9]);
            $("#txtLongitud").val(dtm[10]);
            getMicrosByEstatus();
            $("#cmbMicros").append($('<option>', {value: dtm[7], text: dtm[7]}));
            $("#cmbMicros").select2("val", dtm[7]);
            $("#txtMicros").val(dtm[7]);
            $("#btnUpdatePlanta").removeClass("disabled");
            $("#btnSavePlanta").addClass("disabled");
        });
    });

}

/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function getPlantasByEstatus 
 * @description Obtiene las plantas con el estatus "Disponible"
 * ****************************************************************************/
function getPlantasByEstatus()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 15,
            txtEstatus: "Disponible"}
    }).done(function (data) {
        $("#cmbPlantas").html(data);
    });
}

/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function onCancelPlanta 
 * @description Cancela la operacion en curso
 * ****************************************************************************/
function onCancelPlanta()
{
    $("#DatosPlant")[0].reset();
    $("#btnSavePlanta").addClass("disabled");
    $("#btnUpdatePlanta").addClass("disabled");
    $("#cmbMicros").select2("val", "");
}
/*******************************************************************************
 * Procesos de Plantas
 * @author Giovanni Flores
 * @function getMarker 
 * @param {object} data Marca la cual sera devuelto un estatus
 * ****************************************************************************/
function getMarker(data)
{
    return (data[9].toString() === 'Encendida' ? 'success' : 'danger');
}
/*******************************************************************************
 * Fin de procesos de Plantas 
 * ****************************************************************************/
/*******************************************************************************
 * Procesos de Usuarios
 * Ultima modificación: 2014-12-29
 * ****************************************************************************/

/*******************************************************************************
 * Procesos de Usuarios
 * @author Giovanni Flores
 * @function onSaveUser 
 * @description Guarda un usuario en el sistema
 ******************************************************************************/
function onSaveUser()
{
    if (/^[a-zA-Z0-9_]{3,16}$/.test($("#txtUser").val()) && $("#txtContrasenia").val().length > 5) {
        var tofu = $("#cmbTipoUsuario").val();
        $.ajax({
            type: "POST",
            url: "abd/Data.php",
            data: {
                IdProcess: 3,
                txtClave: ($("#txtClave").val() === '') ? getRadomValue() : $("#txtClave").val(),
                txtUsr: $("#txtUser").val(),
                txtPwd: $("#txtContrasenia").val(),
                txtEstatusUsr: $("#cmbEstatusUsr").val(),
                cmbProveedor: $("#cmbProveedor").val(),
                rTipoUser: (tofu === 'Usuario') ? 3 : (tofu === 'Supervisor') ? 2 : 1
            }
        }).done(function (data) {
            if (data === '0')
            {
                $("#messages-usr").html('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Ha ocurrido algún problema al insertar el registro</div>');
            } else {
                $("#messages-usr").html('<div id="AlertRegistro" class="alert alert-dismissable alert-success">\n\
                    <button type="button" class="close" data-dismiss="alert">×\n\
                    </button>El usuario ' + $("#txtUser").val() + ' ha sido insertado correctamente</div>');
                $("#DatosUsuario")[0].reset();
                setTimeout(
                        function () {
                            getDataUsers();
                        }, 1000);
                $("#btnSaveUsr").addClass("disabled");
                $("#messages-usr").fadeIn("slow").delay(5500).fadeToggle("slow", "linear");
            }
        });
    } else {
        $("#messages-usr").html('<div id="AlertRegistro" class="alert alert-dismissable alert-success">\n\
                    <button type="button" class="close" data-dismiss="alert">×\n\
                    </button>Es necesario escribir un usuario(separado por guiones bajos y sin espacios) y una contraseña válida, no menor a 5 caracteres. ' + $("#txtUser").val() + '</div>');
    }
}

function getCountPlantByUser() {
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 50
        }
    }).done(function (data) {

    });
}
/*******************************************************************************
 * Procesos de Usuarios
 * @author Giovanni Flores
 * @function onUpdateUser 
 * @description Actualiza un usuario en el sistema
 ******************************************************************************/
function onUpdateUser()
{
    if (/^[a-zA-Z0-9_]{3,16}$/.test($("#txtUser").val())) {
        var tofu = $("#cmbTipoUsuario").val();
        $.ajax({
            type: "POST",
            url: "abd/Data.php",
            data: {
                IdProcess: 23,
                IdUsr: temp,
                txtClave: $("#txtClave").val(),
                txtUsr: $("#txtUser").val(),
                txtEstatusUsr: $("#cmbEstatusUsr").val(),
                cmbProveedor: $("#cmbProveedor").val(),
                rTipoUser: (tofu === 'Usuario') ? 3 : (tofu === 'Supervisor') ? 2 : 1
            }
        }).done(function (data) {
            if (data === '0')
            {
                $("#messages-usr").html('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Ha ocurrido algún problema al insertar el registro</div>');
            } else {
                $("#messages-usr").html('<div id="AlertRegistro" class="alert alert-dismissable alert-info">\n\
                    <button type="button" class="close" data-dismiss="alert">×\n\
                    </button>El usuario ' + $("#txtUser").val() + ' ha sido actualizado correctamente</div>');
                $("#DatosUsuario")[0].reset();
                setTimeout(
                        function () {
                            getDataUsers();
                        }, 1500);
                $("#btnUpdateUsr").addClass("disabled");
            }
        });
        $("#messages-usr").fadeIn("slow").delay(5500).fadeToggle("slow", "linear");
    } else {
        $("#messages-usr").html('<div id="AlertRegistro" class="alert alert-dismissable alert-success">\n\
                    <button type="button" class="close" data-dismiss="alert">×\n\
                    </button>Es necesario escribir un usuario(separado por guiones bajos y sin espaciosespacios) y una contraseña válida, no menor a 5 caracteres. ' + $("#txtUser").val() + '</div>');
    }
}

var pwd = "";
/*******************************************************************************
 * Procesos de Usuarios
 * @author Giovanni Flores
 * @function CheckPass
 * @param {object} pwdc Contraseña a verificar 
 * @description Verifica si las contraseñas coinciden
 ******************************************************************************/
function CheckPass(pwdc) {
    if (getPwd() === pwdc)
    {
        if ($("#btnSaveUsr").hasClass("disabled")) {
            if ($("#btnUpdateUsr").hasClass("disabled")) {
                $("#btnSaveUsr").removeClass("disabled");
            }
        }
        $("#messages-usr").html("");
    } else {
        $("#btnSaveUsr").addClass("disabled");
        $("#messages-usr").html(
                "<br><div class=\"alert alert-dismissable alert-warning\">" +
                "<h4>Atenci&oacute;n!</h4>" +
                "<p>Las contraseñas, no coinciden.</p>" +
                "</div>");
    }
}
function getPwd()
{
    return pwd;
}
var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
function setPwd(pwds) {
    if (ck_password.test(pwds)) {
        pwd = pwds;
        $("#messages-usr").html("");
    } else {
        $("#messages-usr").html(
                "<br><div class=\"alert alert-dismissable alert-warning\">" +
                "<h4>Atenci&oacute;n!</h4>" +
                "<p>Contrase&ntilde;a inv&aacute;lida.</p>" +
                "</div>");
    }
}

/*******************************************************************************
 * Procesos de Usuarios
 * @author Giovanni Flores
 * @function getMapByUsr 
 * @description Realiza una peticion al servidor, para devolver un mapa segun el usuario logueado
 * ****************************************************************************/
function getMapByUsr()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 8
        }
    }).done(function (data) {
        $("#map-result").html(data);
    });
}

/*******************************************************************************
 * Procesos de Usuarios
 * @author Giovanni Flores
 * @function getDataUsers 
 * @description Obtiene todos los usuarios, mostrandolos en una tabla con herramientas
 * ****************************************************************************/
function getDataUsers()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 18
        }
    }).done(function (data) {
        $("#DataUser").html(data);
        var tblDataUser = $("#tblDataUsers").DataTable(tableOptions);
        //Get Row from supplier table
        $('#tblDataUsers tbody').on('click', 'tr', function () {
            $("#tblDataUsers").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).toggleClass('warning');
            var dtm = tblDataUser.row(this).data();
            temp = dtm[0];
            $("#txtClave").val(dtm[1]);
            $("#txtUser").val(dtm[2]);
            $("#cmbProveedor").select2("val", dtm[3]);
            $("#cmbTipoUsuario").select2("val", dtm[4]);
            $("#cmbEstatusUsr").select2("val", dtm[5]);
            $("#btnUpdateUsr").removeClass("disabled");
            $("#btnSaveUsr").addClass('disabled=""');
            $("#txtContrasenia").attr('disabled', true);
            $("#txtContraseniaCon").attr('disabled', true);
        });
    });
}

/*******************************************************************************
 * Procesos de Usuarios
 * @author Giovanni Flores
 * @function checkUser
 * @param {object} usr Usuario a checar en el sistema 
 * @description Obtiene todos los usuarios, mostrandolos en una tabla con herramientas
 * ****************************************************************************/
function onCheckUser(usr)
{
    if (/^[a-zA-Z0-9_-]{5,16}$/.test(usr)) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 22,
                txtUser: $("#txtUser").val()
            }
        }).done(function (data) {
            if (data === '0')
            {
                if ($("#btnSaveUsr").hasClass("disabled")) {
                    if ($("#btnUpdateUsr").hasClass("disabled")) {
                        $("#btnSaveUsr").removeClass("disabled");
                    }
                }
                $("#messages-usr").html("");
            } else {
                $("#btnSaveUsr").addClass("disabled");
                $("#messages-usr").html(
                        "<br><div class=\"alert alert-dismissable alert-warning\">" +
                        "<h4>Atenci&oacute;n!</h4>" +
                        "<p>El nombre para el usuario ya existe y se encuentra en uso. Agregue un prefijo o un nombre diferente mayor o igual a 5 caracteres.</p>" +
                        "</div>");
            }
        });
    } else {
        $("#btnSaveUsr").addClass("disabled");
        $("#messages-usr").html("<div class=\"alert alert-dismissable alert-danger\">El nombre de usuario no debe de contener espacios o caracteres especiales.</div>");
    }
}
/*******************************************************************************
 * Fin de procesos de Usuarios 
 * ****************************************************************************/

/*******************************************************************************
 * Procesos de Proveedores
 * Ultima modificación: 2015-01-02
 * ****************************************************************************/

/*******************************************************************************
 * Procesos de Proveedores
 * @author Giovanni Flores
 * @function getDataSuppliers 
 * @description Obtiene todos los proveedores, mostrandolos en una tabla con herramientas
 * ****************************************************************************/
function getDataSuppliers()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 17
        }
    }).done(function (data) {
        $("#DataSupplier").html(data);

        var tblSupplier = $("#tblDataSupplier").DataTable(tableOptions);
        //Get Row from supplier table
        $('#tblDataSupplier tbody').on('click', 'tr', function () {
            $("#tblDataSupplier").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).toggleClass('warning');
            var dtm = tblSupplier.row(this).data();
            temp = parseInt(dtm[0]);
            $("#txtProveedor").val(dtm[1]);
            $("#cmbEstatusPro").select2("val", dtm[2]);
            $("#btnUpdateProveedor").removeClass("disabled");
            $("#btnSaveProveedor").addClass("disabled");
            $("#btnRemoveProveedor").removeClass("disabled");
            
        });
    });
}

/*******************************************************************************
 * Procesos de Proveedores
 * @author Giovanni Flores
 * @function checkSupplier 
 * @param {object} sup Nombre del proveedor
 * @description Verifica si el proveedor existe en el sistema o no
 * ****************************************************************************/
function onCheckSupplier(sup)
{
    if (sup === '') {
        $("#btnSaveProveedor").addClass("disabled");

    } else {
        if (/^[a-zA-Záéíóúñ0-9\s]{2,45}$/.test(sup)) {
            $.ajax({
                url: "abd/Data.php",
                type: "POST",
                data: {
                    IdProcess: 14,
                    txtProveedor: sup
                }
            }).done(function (data) {
                if (data === '0')
                {
                    if ($("#btnSaveProveedor").hasClass("disabled")) {
                        if ($("#btnUpdateProveedor").hasClass("disabled")) {
                            $("#btnSaveProveedor").removeClass("disabled");
                        }
                    }
                    $("#messages-supplier").html("");
                } else {
                    if ($("#btnUpdateProveedor").hasClass("disabled")) {
                        $("#btnSaveProveedor").removeClass("disabled");
                    } else {
                        $("#btnSaveProveedor").addClass("disabled");
                    }
                    $("#messages-supplier").html(
                            "<br><div class=\"alert alert-dismissable alert-warning\">" +
                            "<h4>Atenci&oacute;n!</h4>" +
                            "<p>El nombre para el proveedor ya existe y se encuentra en uso. Agregue un prefijo o un nombre diferente.</p>" +
                            "</div>");
                }
            });
        } else {

        }
    }
}
/*******************************************************************************
 * Procesos de Proveedores
 * @author Giovanni Flores
 * @function onSaveSupplier 
 * @description Guarda un proveedor en el sistema
 * ****************************************************************************/
function onSaveSupplier()
{
    if (/^[a-zA-Záéíóúñ0-9\s.]{2,45}$/.test($("#txtProveedor").val())) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            cache: false,
            data: {
                IdProcess: 16,
                txtProveedor: $("#txtProveedor").val(),
                txtEstatus: $("#cmbEstatusPro").val()
            }
        }).done(function (data) {
            if (data === '1') {
                $("#btnSaveProveedor").addClass("disabled");
                $("#messages-supplier").html(
                        "<div class=\"alert alert-dismissable alert-success\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>" + $("#txtProveedor").val() + " registrado correctamente <span class=\"fa fa-check\"></span> !</h4>" +
                        "</div>");
                $("#DataProveedor")[0].reset();
            } else {
                $("#messages-supplier").html(
                        "<div class=\"alert alert-dismissable alert-danger\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>Error!</h4>" + "<p>No hemos podido procesar, su solicitud.</p>" +
                        "</div>");
            }
        });
        setTimeout(
                function () {
                    getSuppliers();
                    getDataSuppliers();
                }, 1500);
    } else {
        $("#messages-supplier").html(
                "<div class=\"alert alert-dismissable alert-danger\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                "<h4>Error!</h4>" + "<p>Todos los campos son requeridos.</p>" +
                "</div>");
    }
}


/*******************************************************************************
 * Procesos de Proveedores
 * @author Giovanni Flores
 * @function onUpdateSupplier 
 * @description Actualizar el proveedor seleccionado
 * ****************************************************************************/
function onUpdateSupplier()
{
    if (/^[a-zA-Záéíóúñ0-9\s.]{2,45}$/.test($("#txtProveedor").val())) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 19,
                IdPro: temp,
                txtProveedor: $("#txtProveedor").val(),
                txtEstatus: $("#cmbEstatusPro").val()}
        }).done(function (data) {
            if (parseInt(data) === 1) {
                $("#messages-supplier").html("<div class=\"alert alert-dismissable alert-info\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "Registro " + temp + ", actualizado correctamente</div>");
                $("#btnSaveProveedor").addClass("disabled");
                $("#btnUpdateProveedor").addClass("disabled");
            }
            setTimeout(
                    function () {
                        getSuppliers();
                        getDataSuppliers();
                    }, 1500);
        });
    }
}
/*******************************************************************************
 * Procesos de Proveedores
 * @author Giovanni Flores
 * @function getSuppliers 
 * @description Obtiene todos los proveedores, mostrandolos en una tabla con herramientas
 * ****************************************************************************/
function getSuppliers() {
    $.ajax({
        url: "abd/Data.php",
        type: "POST", data: {
            IdProcess: 4,
            txtEstatus: "Activo"
        }
    }).done(function (data) {
        $("#cmbProveedor").html(data);
    });
}

/*******************************************************************************
 * Fin de procesos de Proveedores 
 * ****************************************************************************/

/*******************************************************************************
 * Procesos de Zonas
 * Ultima modificación: 2015-01-02
 * ****************************************************************************/
/*******************************************************************************
 * Procesos de Zonas
 * @author Giovanni Flores
 * @function getDataZones 
 * @description Obtiene todas las zonas, mostrandolas en una tabla con herramientas
 * ****************************************************************************/
function getDataZones()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 20
        }
    }).done(function (data) {
        $("#DataZones").html(data);
        var tblZones = $("#tblDataZones").DataTable(tableOptions);

        //Get Row from supplier table
        $('#tblDataZones tbody').on('click', 'tr', function () {
            $("#tblDataZones").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).toggleClass('warning');
            var dtm = tblZones.row(this).data();
            temp = parseInt(dtm[0]);
            $("#txtZona").val(dtm[1]);
            $("#txtZonaLatitud").val(dtm[2]);
            $("#txtZonaLongitud").val(dtm[3]);
            $("#btnUpdateZone").removeClass("disabled");
            $("#btnSaveZona").addClass("disabled");
        });
    });
}

/*******************************************************************************
 * Procesos de Zonas
 * @author Giovanni Flores
 * @function onCheckZona 
 * @description Verifica si la Zona existe o no en el sistema
 * ****************************************************************************/
function onCheckZona() {
    if (/^[a-zA-Záéíóúñ0-9\s.]{2,45}$/.test($("#txtZona").val())) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 32,
                txtZona: $("#txtZona").val()
            }
        }).done(function (data) {
            if (data === '0')
            {
                if ($("#btnSaveZone").hasClass("disabled") && $("#btnUpdateZone").hasClass("disabled")) {
                    $("#btnSaveZone").removeClass("disabled");
                }
                $("#messages-zones").html("");
            } else {
                if ($("#btnUpdateZone").hasClass("disabled")) {
                    $("#btnUpdateZone").removeClass("disabled");
                } else {
                    $("#btnSaveZone").addClass("disabled");
                }
                $("#messages-zones").html(
                        "<br><div class=\"alert alert-dismissable alert-warning\">" +
                        "<h4>Atenci&oacute;n!</h4>" +
                        "<p>El nombre para la zona, ya existe y se encuentra en uso. Agregue un prefijo o un nombre diferente.</p>" +
                        "</div>");
            }
        });
    } else {
        $("#btnSaveZone").addClass("disabled");
        $("#messages-zones").html(
                "<div class=\"alert alert-dismissable alert-warning\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                "<h4>Atención!</h4>" + "<p> El nombre de la Zona es inválido.</p>" +
                "</div>");
    }
}
/*******************************************************************************
 * Procesos de Zonas
 * @author Giovanni Flores
 * @function onSaveZone 
 * @description Guarda una Zona en el sistema
 * ****************************************************************************/
function onSaveZone()
{
    if (/^[a-zA-Záéíóúñ0-9\s.]{2,45}$/.test($("#txtZona").val())) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            cache: false,
            data: {
                IdProcess: 21,
                txtZona: $("#txtZona").val(),
                txtLat: $("#txtZonaLatitud").val(),
                txtLon: $("#txtZonaLongitud").val()
            }
        }).done(function (data) {
            if (data === '1') {
                $("#btnSaveZone").addClass("disabled");
                $("#messages-zones").html(
                        "<div class=\"alert alert-dismissable alert-success\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>" + $("#txtZona").val() + " registrada correctamente <span class=\"fa fa-check\"></span> !</h4>" +
                        "</div>");
                $("#register-zone")[0].reset();
            } else {
                $("#messages-zones").html(
                        "<div class=\"alert alert-dismissable alert-danger\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>Error!</h4>" + "<p>No hemos podido procesar, su solicitud.</p>" +
                        "</div>");
            }
        });
        setTimeout(function () {
            getDataZones();
        }, 1500);
    } else {
        $("#messages-zones").html(
                "<div class=\"alert alert-dismissable alert-warning\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                "<h4>Atención!</h4>" + "<p> El nombre de la Zona es inválido.</p>" +
                "</div>");
    }
}

/*******************************************************************************
 * Procesos de Zonas
 * @author Giovanni Flores
 * @function onUpdateZone 
 * @description Actualiza la Zona seleccionada
 * ****************************************************************************/
function onUpdateZone()
{
    if (/^[a-zA-Záéíóúñ0-9\s.]{2,45}$/.test($("#txtZona").val())) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            cache: false,
            data: {
                IdProcess: 29,
                IdZone: temp,
                txtZona: $("#txtZona").val(),
                txtLat: $("#txtZonaLatitud").val(),
                txtLon: $("#txtZonaLongitud").val()
            }
        }).done(function (data) {
            if (data === '1') {
                $("#messages-zones").html(
                        "<div class=\"alert alert-dismissable alert-info\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>" + $("#txtZona").val() + " actualizada correctamente  <span class=\"fa fa-check\"></span> </h4>" +
                        "</div>");
                $("#btnUpdateZone").addClass("disabled");
                $("#register-zone")[0].reset();
            } else {
                $("#messages-zones").html(
                        "<div class=\"alert alert-dismissable alert-danger\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>Error!</h4>" + "<p>No hemos podido procesar, su solicitud.</p>" +
                        "</div>");
                $("#messages-zones").append(data);
            }
        });
        setTimeout(function () {
            getDataZones();
        }, 950);
    } else {
        $("#messages-zones").html(
                "<div class=\"alert alert-dismissable alert-warning\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                "<h4>Atención!</h4>" + "<p> El nombre de la Zona es inválido.</p>" +
                "</div>");
    }
}
/*******************************************************************************
 * Procesos de Zonas
 * @author Giovanni Flores
 * @function onCancelZone 
 * @description Cancela el proceso actual en la ventana modal de zonas
 * ****************************************************************************/
function getZones()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 39
        }
    }).done(function (data) {
        $("#cmbZonas").html(data);
    });
}

/*******************************************************************************
 * Procesos de Zonas
 * @author Giovanni Flores
 * @function onCancelZone 
 * @description Cancela el proceso actual en la ventana modal de zonas
 * ****************************************************************************/
function onCancelZone()
{
    $("#txtZona").val("");
    $("#btnSaveZone").addClass("disabled");
    $("#btnUpdateZone").addClass("disabled");
}

/*******************************************************************************
 * Fin de procesos de Zonas 
 * ****************************************************************************/

/*******************************************************************************
 * Procesos de Sucursales
 * Ultima modificación: 2015-01-02
 * ****************************************************************************/

/*******************************************************************************
 * @author Giovanni Flores
 * @function getDataSucursales 
 * ****************************************************************************/
function getDataSucursales()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 28}
    }).done(function (data) {
        $("#DataSucursal").html(data);
        var tblSucursales = $("#tblDataSucursales").DataTable(tableOptions);
        //Get Row from supplier table
        $('#tblDataSucursales tbody').on('click', 'tr', function () {
            $("#tblDataSucursales").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).toggleClass('warning');
            var dtm = tblSucursales.row(this).data();
            temp = parseInt(dtm[0]);
            $("#txtNombreSucursal").val(dtm[1]);
            $("#txtTelefono").val(dtm[9]);
            getPlantasByEstatus();
            $("#cmbPlantas").append($('<option>', {value: dtm[8], text: dtm[8]}));
            $("#cmbPlantas").select2("val", dtm[8]);
            $("#txtDireccionAprox").val(dtm[2]);
            $("#cmbPais").select2("val", dtm[6]);
            $("#txtColonia").val(dtm[3]);
            $("#cmbMunicipioSuc").val(dtm[4]);
            $("#cmbEstado").select2("val", dtm[5]);
            $("#txtCodigoPostal").val(dtm[7]);
            $("#cmbEstatusSucursal").select2("val", dtm[10]);
            $("#cmbZonas").select2("val", dtm[11]);
            $("#btnUpdateSucursal").removeClass("disabled");
            $("#btnSaveSucursal").addClass("disabled");
        });
    });
}

/*******************************************************************************
 * @author Giovanni Flores
 * @function onCheckSucursal 
 * @param {object} suc Nombre de la sucursal
 * ****************************************************************************/
var sucname = /^[a-zA-Z0-9_-\s]{3,16}$/;
function onCheckSucursal(suc)
{
    if (sucname.test(suc)) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 33,
                txtNombreSucursal: $("#txtNombreSucursal").val()
            }
        }).done(function (data) {
            if (data === '0')
            {
                if ($("#btnSaveSucursal").hasClass("disabled")) {
                    if ($("#btnUpdateSucursal").hasClass("disabled")) {
                        $("#btnSaveSucursal").removeClass("disabled");
                    }
                }
                $("#messages-sucursal").html("");
            } else {

                if ($("#btnUpdateSucursal").hasClass("disabled")) {
                    $("#btnSaveSucursal").removeClass("disabled");
                } else {
                    $("#btnSaveSucursal").addClass("disabled");
                }
                $("#messages-sucursal").html(
                        "<br><div class=\"alert alert-dismissable alert-warning\">" +
                        "<h4>Atenci&oacute;n!</h4>" +
                        "<p>El nombre para la sucursal, ya existe y se encuentra en uso. Agregue un prefijo o un nombre diferente.</p>" +
                        "</div>");
            }
        });
    } else {
        $("#messages-sucursal").html(
                "<div class=\"alert alert-dismissable alert-warning\">" +
                "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                "<h4>Atención!</h4>" + "<p> El nombre de la Sucursal es inválido.</p>" +
                "</div>");
    }
}
/*******************************************************************************
 * @author Giovanni Flores
 * @function onSaveSucursal 
 * ****************************************************************************/
function onSaveSucursal()
{
    if (/^[a-záéíóúA-Z0-9_-\s]{3,16}$/.test($("#txtNombreSucursal").val())
            && /^[a-záéíóúA-Z0-9_-\s,]{3,125}$/.test($("#txtDireccionAprox").val())
            && /^[a-zA-Z0-9_-\s]{3,16}$/.test($("#cmbMunicipio").val())
            && /^[a-záéíóúA-Z0-9_-\s]{3,45}$/.test($("#txtColonia").val())
            && /^[a-zA-Z0-9-\s]{3,45}$/.test($("#cmbEstado").val())
            && /^[a-záéíóúA-Z0-9-\s]{3,45}$/.test($("#cmbPais").val())
            && /^[0-9]{3,45}$/.test($("#txtCodigoPostal").val())
            && /^[0-9\s]{3,45}$/.test($("#txtTelefono").val())
            && /^[a-zA-Z0-9_-\s]{3,45}$/.test($("#cmbPlantas").val())
            && /^[a-zA-Z0-9_-\s]{3,45}$/.test($("#cmbZonas").val())
            ) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 34,
                txtNombreSucursal: $("#txtNombreSucursal").val(),
                txtDireccionAprox: $("#txtDireccionAprox").val(),
                cmbMunicipio: $("#cmbMunicipioSuc").val(),
                txtColonia: $("#txtColonia").val(),
                cmbEstado: $("#cmbEstado").val(),
                cmbPais: $("#cmbPais").val(),
                txtCodigoPostal: $("#txtCodigoPostal").val(),
                txtTelefono: $("#txtTelefono").val(),
                cmbPlantas: $("#cmbPlantas").val(),
                cmbZonas: $("#cmbZonas").val()
            }
        }).done(function (data) {
            if (data === '1') {
                $("#btnSaveSucursal").addClass("disabled");
                $("#messages-sucursal").html("<div class=\"alert alert-dismissable alert-success\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>" + $("#txtNombreSucursal").val() + " registrada correctamente <span class=\"fa fa-check\"></span> </h4>" +
                        "</div>").fadeIn("slow").delay(4500).fadeToggle("slow", "linear");
                ;
                $("#DatosSucursal")[0].reset();
                onCancelSucursal();
            } else {
                $("#messages-sucursal").html("<div class=\"alert alert-dismissable alert-danger\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>Error!</h4>" + "<p>No hemos podido procesar, su solicitud.</p>" +
                        "</div>").fadeIn("slow").delay(3500).fadeToggle("slow", "linear");
            }
        });
    } else {
        $("#messages-sucursal").html("<div class=\"alert alert-dismissable alert-danger\"><h3>Revise que todos sus datos sean correctos y que no queden en blanco!<h3></div>").fadeIn("slow").delay(2500).fadeToggle("slow", "linear");
        ;
    }
}
/*******************************************************************************
 * @author Giovanni Flores
 * @function onUpdateSucursal 
 * ****************************************************************************/
function onUpdateSucursal()
{
    if (/^[a-záéíóúA-Z0-9_-\s]{3,16}$/.test($("#txtNombreSucursal").val())
            && /^[a-záéíóúA-Z0-9_-\s,]{3,125}$/.test($("#txtDireccionAprox").val())
            && /^[a-zA-Z0-9_-\s]{3,16}$/.test($("#cmbMunicipio").val())
            && /^[a-záéíóúA-Z0-9_-\s]{3,45}$/.test($("#txtColonia").val())
            && /^[a-zA-Z0-9-\s]{3,45}$/.test($("#cmbEstado").val())
            && /^[a-záéíóúA-Z0-9-\s]{3,45}$/.test($("#cmbPais").val())
            && /^[0-9]{3,45}$/.test($("#txtCodigoPostal").val())
            && /^[0-9\s]{3,45}$/.test($("#txtTelefono").val())
            && /^[a-zA-Z0-9_-\s]{3,45}$/.test($("#cmbPlantas").val())
            && /^[a-zA-Z0-9_-\s]{3,45}$/.test($("#cmbZonas").val())
            ) {
        $.ajax({
            url: "abd/Data.php",
            type: "POST",
            data: {
                IdProcess: 41,
                IdSucursal: temp,
                txtNombreSucursal: $("#txtNombreSucursal").val(),
                txtDireccionAprox: $("#txtDireccionAprox").val(),
                cmbMunicipio: $("#cmbMunicipioSuc").val(),
                txtColonia: $("#txtColonia").val(),
                cmbEstado: $("#cmbEstado").val(),
                cmbPais: $("#cmbPais").val(),
                txtCodigoPostal: $("#txtCodigoPostal").val(),
                txtTelefono: $("#txtTelefono").val(),
                cmbPlantas: $("#cmbPlantas").val(),
                cmbZonas: $("#cmbZonas").val()
            }
        }).done(function (data) {
            if (data === '1') {
                $("#btnSaveSucursal").addClass("disabled");
                $("#messages-sucursal").html("<div class=\"alert alert-dismissable alert-success\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>Sucursal registrada con exito!</h4>" +
                        "</div>").fadeIn("slow").delay(4500).fadeToggle("slow", "linear");
                ;
                $("#DatosSucursal")[0].reset();
                onCancelSucursal();
            } else {
                $("#messages-sucursal").html("<div class=\"alert alert-dismissable alert-danger\">" +
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                        "<h4>Error!</h4>" + "<p>No hemos podido procesar, su solicitud.</p>" +
                        "</div>").fadeIn("slow").delay(3500).fadeToggle("slow", "linear");
            }
        });
    } else {
        $("#messages-sucursal").html("<div class=\"alert alert-dismissable alert-danger\"><h3>Revise que todos sus datos sean correctos y que no queden en blanco!<h3></div>").fadeIn("slow").delay(2500).fadeToggle("slow", "linear");
        ;
    }
}
/*******************************************************************************
 * @author Giovanni Flores
 * @function onCancelSucursal 
 * @description Resetea el formulario, a su vez deshabilita las acciones principales
 * ****************************************************************************/
function onCancelSucursal()
{
    $("#DatosSucursal")[0].reset();
    $("#btnSaveSucursal").addClass("disabled");
    $("#btnUpdateSucursal").addClass("disabled");
    $("#cmbPlantas").select2("enable", true);
    $("#cmbPlantas").select2("val", "");
    getPlantasByEstatus();
    getDataSucursales();
}

/*******************************************************************************
 * Fin de procesos de Sucursales 
 * ****************************************************************************/


/*******************************************************************************
 * Procesos de UxS
 * Ultima modificación: 2015-01-02
 * ****************************************************************************/

/*******************************************************************************
 * @author Giovanni Flores
 * @function getDataUxS 
 * ****************************************************************************/
function getDataUxS()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 36
        }
    }).done(function (data) {
        $("#DataUxS").html(data);
        var tblSupplier = $("#tblDataUxS").DataTable(tableOptions);
        //Get Row from supplier table
        $('#tblDataUxS tbody').on('click', 'tr', function () {
            $("#tblDataUxS").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).toggleClass('warning');
            var dtm = tblSupplier.row(this).data();
            temp = parseInt(dtm[0]);

            $("#txtUxSucursal").val(dtm[1]).fadeIn("slow");
            $("#txtUsuarioxS").val(dtm[2]);
            $("#txtCurrentUserUXS").removeClass("hide").delay(1500).fadeIn("slow");
            $("#txtCurrentSucursalUXS").removeClass("hide").delay(1500).fadeIn("slow");

            $("#btnUpdateUxS").removeClass("disabled");
            $("#btnSaveUxS").addClass("disabled");
        });
    });
}

/*******************************************************************************
 * @author Giovanni Flores
 * @function getUserXS 
 * ****************************************************************************/
function getUserXS()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 37
        }
    }).done(function (data) {
        $("#cmbUserxSucursal").html(data);
    });
}


/*******************************************************************************
 * @author Giovanni Flores
 * @function getUXSucursal 
 * ****************************************************************************/
function getUXSucursal()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 38
        }
    }).done(function (data) {
        $("#cmbSucursalesxUser").html(data);
    });
}

/*******************************************************************************
 * @author Giovanni Flores
 * @function onCheckUxS 
 * ****************************************************************************/
function onCheckUxS()
{
    if (/^[a-zA-Záéíóúñ0-9\s.]{2,45}$/.test($("#cmbUserxSucursal").val())) {
        if (/^[a-zA-Záéíóúñ0-9\s.]{2,45}$/.test($("#cmbSucursalesxUser").val()))
        {
            $("#txtCurrentUserUXS").val($("#cmbUserxSucursal").val());
            $("#txtCurrentSucursalUXS").val($("#cmbSucursalesxUser").val());
            if ($("#btnUpdateUxS").hasClass("disabled")) {
                $("#btnSaveUxS").removeClass("disabled");
            } else {
                $("#btnSaveUxS").addClass("disabled");
            }
        }
    } else {
        $("#btnSaveUxS").addClass("disabled");
    }
}
/*******************************************************************************
 * @author Giovanni Flores
 * @function onSaveUxS 
 * ****************************************************************************/
function onSaveUxS()
{
    var usr = $("#cmbUserxSucursal").val();
    var suc = $("#cmbSucursalesxUser").val();
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 35,
            cmbUserxSucursal: $("#cmbUserxSucursal").val(),
            cmbSucursalesxUser: $("#cmbSucursalesxUser").val()
        }
    }).done(function (data) {
        if (data === '1') {
            $("#btnSaveUxS").addClass("disabled");
            $("#messages-uxs").html('<div class="alert alert-dismissable alert-success">Usuario: '
                    + usr + ' asignado a la sucursal ' + suc + ' </div>').fadeIn("slow").delay(3500).fadeToggle("slow", "linear");
            ;
            $("#register-uxs")[0].reset();
            onCancelUxS();
        } else {
            $("#messages-uxs").html("<div class=\"alert alert-dismissable alert-danger\">" +
                    "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>" +
                    "<h4>Error!</h4>" + "<p>No hemos podido procesar, su solicitud.</p>" +
                    "</div>").fadeIn("slow").delay(3500).fadeToggle("slow", "linear");
        }
        getDataUxS();
        getMapByUsr();
        getUXSucursal();
    });
}
/*******************************************************************************
 * @author Giovanni Flores
 * @function onUpdateUxS 
 * ****************************************************************************/
function onUpdateUxS()
{
    if (/^[a-zA-Záéíóúñ0-9\s.]{2,45}$/.test($("#cmbUserxSucursal").val())) {
        if (/^[a-zA-Záéíóúñ0-9\s.]{2,45}$/.test($("#cmbSucursalesxUser").val()))
        {
            $("#messages-uxs").html('<div class="alert alert-dismissable alert-info">Usuario: '
                    + $("#cmbUserxSucursal").val() + ' asignado a la sucursal ' + $("#cmbSucursalesxUser").val() + '</div>');
            $("#messages-uxs").fadeIn("slow").delay(5500).fadeToggle("slow", "linear");
        }
    }
    onCancelUxS();
    getDataUxS();
    getUserXS();
    getUXSucursal();
}
/*******************************************************************************
 * @author Giovanni Flores
 * @function onCancelUxS 
 * ****************************************************************************/
function onCancelUxS()
{
    
    $("#btnSaveUxS").addClass("disabled");
    $("#btnUpdateUxS").addClass("disabled");
    $("#register-uxs")[0].reset();
    $("#cmbUserxSucursal").select2("val", "");
    $("#cmbSucursalesxUser").select2("val", "");
    $("#txtCurrentUserUXS").addClass("hide");
    $("#txtCurrentSucursalUXS").addClass("hide");
}

/*******************************************************************************
 * Fin de procesos de UxS 
 * ****************************************************************************/

/*******************************************************************************
 * Otros Procesos
 * ****************************************************************************/

/*******************************************************************************
 * Procesos de Otros
 * @author Giovanni Flores
 * @function drawChart
 * @param {object} planta Nombre de la planta
 * @description Dibula los graficos de tipo "Gauge" de google charts API v3 
 * ****************************************************************************/

function getGauge(planta) {
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        dataType: "JSON",
        data: {
            IdProcess: 24,
            txtPlanta: planta
        }
    }).done(function (data) {
        datafob = [];
        datafob.push(data[0]);
        datafob.push(data[1]);
        datafob.push(data[2]);

        var datagauge = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['Fuel', parseInt(data[0])],
            ['Oil', parseInt(data[1])],
            ['BAT', parseInt(data[2])]
        ]);

        var options = {
            width: 400, height: 120,
            redFrom: 90, redTo: 100,
            yellowFrom: 75, yellowTo: 90,
            minorTicks: 5
        };
        var chart = new google.visualization.Gauge(document.getElementById('data-gauge'));
        chart.draw(datagauge, options);
    });
}

/*******************************************************************************
 * Procesos de Otros
 * @author Giovanni Flores
 * @function getRadomValue
 * @description Retorna un valor aleatorio(Solo es para pruebas)
 * ****************************************************************************/
function getRadomValue() {
    return Math.floor((Math.random() * 100) + 1);
}
/*******************************************************************************
 * Procesos de Otros
 * @author Giovanni Flores
 * @function goOut 
 * @description Metodo para cerrar sesión
 * ****************************************************************************/
function goOut()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 0
        }
    }).done(function (data) {
        location.href = 'index.php';
    });
}

/***
 * Toggles Micro
 * 
 */
/*******************************************************************************
 * Procesos de Micros Toggles
 * @author Giovanni Flores
 * @function getDataMicroToggle 
 * @description Metodo obtener los micros disponibles
 * ****************************************************************************/

function getDataMicroToggle()
{
    $.ajax({
        url: "abd/Data.php",
        type: "POST",
        data: {
            IdProcess: 40
        }
    }).done(function (data) {
        $("#DataMicroToggle").html(data);
        var tblDataMicro = $("#tblDataMicrosToggle").DataTable(tableOptionsToggle);
        //Get Row from supplier table
        $('#tblDataMicrosToggle tbody').on('click', 'tr', function () {
            $("#tblDataMicrosToggle").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).toggleClass('warning');
            var dtm = tblDataMicro.row(this).data();
            temp = dtm[0];
            $("#tblDataMicrosToggle").val(dtm[1]);
        });

    });
}

/**
 * Options
 * **/

var selected = [];
var tableOptions = {
    language: {
        processing: "Proceso en curso...",
        search: "Buscar:",
        lengthMenu: "Mostrar _MENU_ elementos",
        info: "Mostrando  _START_ de _END_ , de un total de _TOTAL_ elementos.",
        infoEmpty: "Mostrando 0 de 0 a 0 elementos.",
        infoFiltered: "(Filtrando un total de _MAX_ elementos. )",
        infoPostFix: "",
        loadingRecords: "Procesando los datos...",
        zeroRecords: "No s&eacute; encontro nada.",
        emptyTable: "No existen datos en la tabla.",
        paginate: {
            first: "Primero",
            previous: "Anterior",
            next: "Siguiente",
            last: "&Uacute;ltimo"
        },
        aria: {
            sortAscending: ": Habilitado para ordenar la columna en orden ascendente",
            sortDescending: ": Habilitado para ordenar la columna en orden descendente"
        }
    },
    "rowCallback": function (row, data) {
        if ($.inArray(data.DT_RowId, selected) !== -1) {
            $(row).addClass('warning');
        }
    },
    "deferRender": true,
    "autoWidth": true, "scrollY": 400,
    "scrollX": true,
    "scrollCollapse": true,
    "aaSorting": [[0, 'desc']]
};

var tableOptionsToggle = {
    responsive: true,
    language: {
        processing: "Proceso en curso...",
        search: "Buscar:",
        lengthMenu: "Mostrar _MENU_ elementos",
        info: "Mostrando  _START_ de _END_ , de un total de _TOTAL_ elementos.",
        infoEmpty: "Mostrando 0 de 0 a 0 elementos.",
        infoFiltered: "(Filtrando un total de _MAX_ elementos. )",
        infoPostFix: "",
        loadingRecords: "Procesando los datos...",
        zeroRecords: "No s&eacute; encontro nada.",
        emptyTable: "No existen datos en la tabla.",
        paginate: {
            first: "Primero",
            previous: "Anterior",
            next: "Siguiente",
            last: "&Uacute;ltimo"
        },
        aria: {
            sortAscending: ": Habilitado para ordenar la columna en orden ascendente",
            sortDescending: ": Habilitado para ordenar la columna en orden descendente"
        }
    },
    "rowCallback": function (row, data) {
        if ($.inArray(data.DT_RowId, selected) !== -1) {
            $(row).addClass('warning');
        }
    },
    "deferRender": true,
    "autoWidth": true, "scrollY": 150,
    "scrollX": true,
    "scrollCollapse": true,
    "aaSorting": [[0, 'desc']]
};