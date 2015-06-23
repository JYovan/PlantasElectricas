<div class="modal fade" id="mdlMicros" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-puzzle-piece"></span> Gesti&oacute;n de Micros</h4>
                </div> 
                <form class="form-horizontal" id="DatosMicro" action="" method="post">
                    <div class="modal-body">
                        <fieldset>
                            <div class="form-group" align="center">
                                <button type="button" id="btnSaveMicro" class="btn btn-primary disabled" data-dismiss=""><span class="fa fa-check"></span></button>
                                <button type="button" id="btnUpdateMicro" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                                <button type="button" id="btnUpdateTableMicro" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                                <button type="button" id="btnRemoveMicro" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                                <button type="button" id="btnCancelMicro" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                            </div>
                            <div class="form-group">
                                <label for="txtMicro" class="col-lg-2 control-label">Micro</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="txtMicro" required="" onkeyup="checkMicro(this.value)"
                                           placeholder="Nombre del micro">
                                </div> 
                            </div>
                            <div class="form-group">
                                <label for="cmbEstatusMicro" class="col-lg-2 control-label">Estatus</label>
                                <div class="col-lg-10">
                                    <select id="cmbEstatusMicro" class="form-control">
                                        <option>Disponible</option>
                                        <option>En uso</option>
                                    </select>
                                </div> 
                            </div>
                            <div id="messages-micro"></div>  
                        </fieldset>
                        <div id="DataMicro"></div>
                    </div> 
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="modal fade" id="mdlMyMicros" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-gamepad"></span> Mis Micros</h4>
                </div> 
                <form class="form-horizontal" id="DataMyMicro">
                    <div class="modal-body">
  
                        <div class="form-group" align="center">
<!--                            <button type="button" id="btnUpdateMyMicro" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTableMyMicro" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemoveMyMicro" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelMyMicro" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>-->
                        </div>
                        <div id="messages-of-my-micro"></div>  
                        <div id="DataMyMicros"></div>
                    </div>
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div> 
                </form>   
            </div>
        </div>
    </div>