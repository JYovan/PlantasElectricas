<div class="modal fade" id="mdlUsuariosXSucursal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="fa fa-wrench"></span> Gesti&oacute;n de Usuarios por Sucursal</h4>

                </div> 
                <form class="form-horizontal" id="register-uxs">
                    <div class="modal-body">
                        <fieldset>
                            <div class="form-group" align="center"> 
                                <button type="button" id="btnSaveUxS" class="btn btn-primary disabled" data-dismiss=""><span class="fa fa-check"></span></button>
                                <button type="button" id="btnUpdateUxS" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                                <button type="button" id="btnUpdateTableUxS" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                                <button type="button" id="btnRemoveUxS" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                                <button type="button" id="btnCancelUxS" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                            </div>
                            <div class="form-group">
                                <label for="cmbUserxSucursal" class="col-lg-2 control-label">Usuario</label>
                                <div class="col-lg-10">
                                    <select id="cmbUserxSucursal" class="form-control" onchange="onCheckUxS()"  name="cmbUserxSucursal">
                                    </select>
                                </div> 
                            </div>
                            <div id="txtCurrentUserUXS" class="form-group hide">
                                <label for="txtUsuarioxS" class="col-lg-2 control-label">Usuario Actual</label>
                                <div class="col-lg-10">
                                    <input type="text" id="txtUsuarioxS" class="form-control" disabled="" />
                                </div> 
                            </div>

                            <div class="form-group">
                                <label for="cmbSucursalesxUser" class="col-lg-2 control-label">Sucursal</label>
                                <div class="col-lg-10">
                                    <select id="cmbSucursalesxUser" class="form-control" onchange="onCheckUxS()"  name="cmbSucursalesxUser">
                                    </select>
                                </div> 
                            </div>
                            <div id="txtCurrentSucursalUXS" class="form-group hide">
                                <label for="txtUxSucursal" class="col-lg-2 control-label">Sucursal Actual</label>
                                <div class="col-lg-10">
                                    <input type="text" id="txtUxSucursal" class="form-control" disabled="" />
                                </div> 
                            </div>
                            <div id="messages-uxs"></div>
                        </fieldset>
                        <div id="DataUxS"></div> 
                    </div> 
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>