<div class="modal fade" id="mdlZonas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-location-arrow"></span> Gestión de Zonas</h4>
                </div> 
                <form class="form-horizontal" id="register-zone" action="" method="post">
                    <div class="modal-body"> 

                        <script src="js/map/mapzone.js"></script>
                        <div id="infoPanelZ"> 
                            <div id="markerStatusZone"><i>De clic en el marcador y arrastrelo al lugar que desee.</i></div> 
                            <div id="infoZ"></div> 
                            <div id="addressZone"></div>
                        </div> 
                        <br>
                        <div id="mdlmapZona" style="width: 100%; height: 250px;"></div>
                        <br>
                        <fieldset>  
                            <div class="form-group" align="center"> 

                                <button type="button" id="btnSaveZone" class="btn btn-primary disabled" data-dismiss=""><span class="fa fa-check"></span></button>
                                <button type="button" id="btnUpdateZone" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                                <button type="button" id="btnUpdateTableZone" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                                <button type="button" id="btnRemoveZone" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                                <button type="button" id="btnCancelZone" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                            </div>
                            <div class="form-group">
                                <label for="txtZona" class="col-lg-2 control-label">Zona</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="txtZona" maxlength="50" required="" placeholder="Ej: Noroeste, Norte, Occidente, Centro, Valle de M&eacute;xico, Sureste." onkeyup="onCheckZona(this.value)">
                                </div> 
                                <!--<img src="img/mapa_mexico.png" class="img-responsive" alt="Zonas de M&eacute;xico.">-->
                            </div> 
                            <div class="form-group">
                                <label for="txtZonaLatitud" class="col-lg-2 control-label">Latitud</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="txtZonaLatitud" maxlength="50" required="" readonly="">
                                </div> 
                            </div>
                            <div class="form-group">
                                <label for="txtZonaLongitud" class="col-lg-2 control-label">Longitud</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="txtZonaLongitud" maxlength="50" required="" readonly="">
                                </div> 
                            </div>
                        </fieldset>
                        <div id="messages-zones"></div>
                        <div id="DataZones"></div> 
                    </div> 
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="modal fade" id="mdlMyZones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-thumb-tack"></span> Mis Zonas</h4>
                </div> 
                <form class="form-horizontal" id="DataMyZone">
                    <div class="modal-body">
  
                        <div class="form-group" align="center">
<!--                            <button type="button" id="btnUpdateMyZones" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTableMyZone" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemoveMyZone" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelMyZone" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>-->
                        </div>
                        <div id="messages-of-my-zone"></div>  
                        <div id="DataMyZones"></div>
                    </div>
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div> 
                </form>   
            </div>
        </div>
    </div>
