<div class="modal fade" id="mdlPlantas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-flash"></span> Gesti&oacute;n de plantas</h4>
                </div> 
                <form class="form-horizontal" id="DatosPlant">
                    <div class="modal-body">

                        <script src="js/map/maplant.js"></script>
                        <div id="markerStatusSuc"><i>De clic en el marcador y arrastrelo al lugar que desee.</i></div> 
                        <div id="map-canvas" style="width: 100%; height: 250px;"></div>
                        <div id="infoSuc"></div>  
                        <div id="diraprox"></div>
                        <br> 
                        <div class="form-group" align="center">
                            <button type="button" id="btnSavePlanta" class="btn btn-primary disabled" data-dismiss=""><span class="fa fa-check"></span></button>
                            <button type="button" id="btnUpdatePlanta" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTablePlanta" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemovePlanta" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelPlanta" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                        </div>
                        <div id="messages-plant"></div> 
                        <fieldset> 
                            <div class="panel-group" id="pnlAccordionPlanta" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="pnlheadingOnePlanta">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#pnlAccordionPlanta" href="#pnlcollapseOnePlanta" aria-expanded="true" aria-controls="pnlcollapseOnePlanta">
                                                Ubicación
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="pnlcollapseOnePlanta" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pnlheadingOnePlanta">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="txtLatitud" class="col-lg-2 control-label">Latitud</label>
                                                <div class="col-lg-10">
                                                    <input id="txtLatitud" type="text" value="" class="form-control" required="" readonly="" />
                                                </div> 
                                            </div>
                                            <div class="form-group">
                                                <label for="txtLongitud" class="col-lg-2 control-label">Longitud</label>
                                                <div class="col-lg-10"> 
                                                    <input id="txtLongitud" type="text" value="" class="form-control" required="" readonly="" />
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="pnlheadingTwoPlanta">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#pnlAccordionPlanta" href="#pnlcollapseTwoPlanta" aria-expanded="false" aria-controls="pnlcollapseTwoPlanta">
                                                Datos de la planta
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="pnlcollapseTwoPlanta" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pnlheadingTwoPlanta">
                                        <div class="panel-body">
                                            <div class="form-group ">
                                                <label for="txtNombrePlanta" class="col-lg-2 control-label">Nombre Planta</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtNombrePlanta" name="txtNombrePlanta" value="Planta X" required="" onkeyup="onCheckPlanta(this.value);"
                                                           placeholder="Nombre de la planta">
                                                </div>  
                                            </div> 
                                            <div class="form-group ">
                                                <label for="txtFirmware" class="col-lg-2 control-label">Firmware</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtFirmware" name="txtFirmware" required="" value="3.0" placeholder="Introduce versión de firmware">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label for="txtAplication" class="col-lg-2 control-label">Aplication</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtAplication"  name="txtAplication" required="" value="2.0" placeholder="App">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label for="txtAppVer" class="col-lg-2 control-label">App Versi&oacute;n</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtAppVer"  name="txtAppVer" required="" placeholder="1.0" value="1.0">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="txtNoSerie" class="col-lg-2 control-label">Número de serie</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtNoSerie"  name="txtNoSerie" required="" placeholder="Ej: RM345Z4GNRY">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="txtPotencia" class="col-lg-2 control-label">Potencia</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtPotencia"  name="txtPotencia" required="" placeholder="Ej: 5v o 3v">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="pnlheadingThreePlanta">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#pnlAccordionPlanta" href="#pnlcollapseThreePlanta" aria-expanded="false" aria-controls="pnlcollapseThreePlanta">
                                                Micro y Estatus
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="pnlcollapseThreePlanta" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pnlheadingThreePlanta">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="cmbMicros" class="col-lg-2 control-label">Micro</label>
                                                <div class="col-lg-10">
                                                    <select id="cmbMicros" name="cmbMicros" class="form-control" onchange="">
                                                    </select> 
                                                </div>
                                            </div> 
                                            <div class="form-group hide">
                                                <label for="txtMicros" class="col-lg-2 control-label">Micros</label>
                                                <div class="col-lg-10">
                                                    <div class="input-group">
                                                        <input type="text" id="txtMicros" class="form-control" value="" placeholder="Micro X" readonly=""/>
                                                    </div><!-- /input-group -->
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cmbEstatusPlant" class="col-lg-2 control-label">Estatus</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control" autofocus="" name="cmbEstatusPlant" id="cmbEstatusPlant">
                                                        <option>Disponible</option> 
                                                        <option>Apagada</option> 
                                                        <option>Encendida</option>  
                                                        <option>Peligro</option>  
                                                        <option>En Uso</option>  
                                                        <option>Precauci&oacute;n</option>  
                                                    </select> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </fieldset>
                        <div id="DataPlantas"></div>
                    </div>
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div> 
                </form>   
            </div>
        </div>
    </div>

<div class="modal fade" id="mdlMyPlants" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-flash"></span> Mis plantas</h4>
                </div> 
                <form class="form-horizontal" id="DatosPlantas">
                    <div class="modal-body">
  
                        <div class="form-group" align="center">
                            <button type="button" id="btnUpdateMyPlant" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTableMyPlant" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemoveMyPlant" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelMyPlant" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                        </div>
                        <div id="messages-of-my-plant"></div>  
                        <div id="DataMisPlantas"></div>
                    </div>
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div> 
                </form>   
            </div>
        </div>
    </div>