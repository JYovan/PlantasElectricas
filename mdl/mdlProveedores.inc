<div class="modal fade" id="mdlProveedores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" ><span class="fa fa-gears"></span> Gestión de Proveedores</h4>
                </div> 
                <div class="modal-body"> 
                    <form class="form-horizontal" id="DataProveedor" action="" method="post">
                        <fieldset>
                            <div class="form-group" align="center">
                                <button type="button" id="btnSaveProveedor" class="btn btn-primary disabled" data-dismiss=""><span class="fa fa-check"></span></button>
                                <button type="button" id="btnUpdateProveedor" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                                <button type="button" id="btnRemoveProveedor" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                                <button type="button" id="btnUpdateProveedorTable" class="btn btn-info " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                                <button type="button" id="btnCancelProveedor" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                                <div id="onprocess"></div>
                            </div>
                            <div class="form-group">
                                <label for="txtProveedor" class="col-lg-2 control-label">Proveedor</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="txtProveedor" required="" 
                                           placeholder="Proveedor S.A de C.V" onkeyup="onCheckSupplier(this.value)">
                                </div> 
                            </div> 
                            <div class="form-group">
                                <label for="txtProveedor" class="col-lg-2 control-label">Estatus</label>
                                <div class="col-lg-10">
                                    <select id="cmbEstatusPro" class="form-control" name="cmbEstatusPro"> 
                                    </select>
                                </div> 
                            </div>  

                        </fieldset>    
                    </form>  
                    <div id="messages-supplier"></div>
                    <div id="DataSupplier"></div> 
                </div> 
                <div class="modal-footer">
                    <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                </div> 
            </div>
        </div>
    </div>


<div class="modal fade" id="mdlMySuppliers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-ship"></span> Mis Proveedores</h4>
                </div> 
                <form class="form-horizontal" id="DataMySupplier">
                    <div class="modal-body">
  
                        <div class="form-group" align="center">
                            <button type="button" id="btnUpdateMySupplier" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTableMySupplier" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemoveMySupplier" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelMySupplier" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                        </div>
                        <div id="messages-of-my-supplier"></div>  
                        <div id="DataMySuppliers"></div>
                    </div>
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div> 
                </form>   
            </div>
        </div>
    </div>