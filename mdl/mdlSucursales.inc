<div class="modal fade" id="mdlSucursales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-cube"></span> Gesti&oacute;n de Sucursales</h4>
                </div>

                <form class="form-horizontal" id="DatosSucursal" action="" method="post">
                    <div class="modal-body">
                        <!--<div id="mdlmapSuc" style="width: 100%; height: 250px;"></div>--> 
                        <div class="form-group" align="center">
                            <button type="button" id="btnSaveSucursal" class="btn btn-primary disabled" data-dismiss=""><span class="fa fa-check"></span></button>
                            <button type="button" id="btnUpdateSucursal" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTableSucursal" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemoveSucursal" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelSucursal" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                        </div>
                        <div id="messages-sucursal"></div>
                        <div class="panel-group" id="accorSucursal" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="hearderSucursal">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accorSucursal" href="#pnlSucursal" aria-expanded="true" aria-controls="pnlSucursal">
                                            Datos de la sucursal
                                        </a>
                                    </h4>
                                </div>
                                <div id="pnlSucursal" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="hearderSucursal">
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="txtNombreSucursal" class="col-lg-2 control-label">Nombre Sucursal</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtNombreSucursal" value="Sucursal" required="" onkeyup="onCheckSucursal(this.value)"
                                                           placeholder="Nombre de la sucursal">
                                                </div> 
                                            </div>
                                            <div class="form-group">
                                                <label for="txtTelefono" class="col-lg-2 control-label">Teléfono</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtTelefono" value="4773951415"  name="txtTelefono" required="" placeholder="[0-9]"> 
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label for="cmbPlantas" class="col-lg-2 control-label">Planta</label>
                                                <div class="col-lg-10"> 
                                                    <select class="form-control" id="cmbPlantas"  name="cmbPlantas" required=""> 
                                                    </select>  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cmbEstatusSucursal" class="col-lg-2 control-label">Estatus</label>
                                                <div class="col-lg-10"> 
                                                    <select class="form-control" id="cmbEstatusSucursal"  name="cmbEstatusSucursal" required=""> 
                                                        <option></option>
                                                        <option value="Activa">Activa</option>
                                                        <option value="InActiva">InActiva</option>
                                                    </select>  
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="hearderSucursalZero">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accorSucursal" href="#pnlSucursalDireccion" aria-expanded="false" aria-controls="pnlSucursalDireccion">
                                            Ubicación de la Sucursal
                                        </a>
                                    </h4>
                                </div>
                                <div id="pnlSucursalDireccion" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hearderSucursalZero">
                                    <div class="panel-body">
                                        <fieldset>   
                                            <div class="form-group">
                                                <label for="txtPais" class="col-lg-2 control-label">País</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control" id="cmbPais"  name="cmbPais" required="">
                                                        <option>M&eacute;xico</option>
                                                    </select>  
                                                </div> 
                                            </div>
                                            <div class="form-group">
                                                <label for="cmbZonas" class="col-lg-2 control-label">Zona</label>
                                                <div class="col-lg-10"> 
                                                    <select class="form-control" id="cmbZonas"  name="cmbZonas" required=""> 
                                                    </select>  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="cmbEstado" class="col-lg-2 control-label">Estado</label>
                                                <div class="col-lg-10"> 
                                                    <select class="form-control" id="cmbEstado"  name="cmbEstado" required="">
                                                        <option></option>
                                                        <option selected="selected" value="Aguascalientes">Aguascalientes</option>
                                                        <option value="Baja California">Baja California</option>
                                                        <option value="Baja California Sur">Baja California Sur</option>
                                                        <option value="Campeche">Campeche</option>
                                                        <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                                        <option value="Colima">Colima</option>
                                                        <option value="Chiapas">Chiapas</option>
                                                        <option value="Chihuahua">Chihuahua</option>
                                                        <option value="Distrito Federal">Distrito Federal</option>
                                                        <option value="Durango">Durango</option>
                                                        <option value="Guanajuato">Guanajuato</option>
                                                        <option value="Guerrero">Guerrero</option>
                                                        <option value="Hidalgo">Hidalgo</option>
                                                        <option value="Jalisco">Jalisco</option>
                                                        <option value="M&#233;xico">M&#233;xico</option>
                                                        <option value="Michoac&#225;n de Ocampo">Michoac&#225;n de Ocampo</option>
                                                        <option value="Morelos">Morelos</option>
                                                        <option value="Nayarit">Nayarit</option>
                                                        <option value="Nuevo Le&#243;n">Nuevo Le&#243;n</option>
                                                        <option value="Oaxaca">Oaxaca</option>
                                                        <option value="Puebla">Puebla</option>
                                                        <option value="Quer&#233;taro">Quer&#233;taro</option>
                                                        <option value="Quintana Roo">Quintana Roo</option>
                                                        <option value="San Luis Potos&#237;">San Luis Potos&#237;</option>
                                                        <option value="Sinaloa">Sinaloa</option>
                                                        <option value="Sonora">Sonora</option>
                                                        <option value="Tabasco">Tabasco</option>
                                                        <option value="Tamaulipas">Tamaulipas</option>
                                                        <option value="Tlaxcala">Tlaxcala</option>
                                                        <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                                                        <option value="Yucat&#225;n">Yucat&#225;n</option>
                                                        <option value="Zacatecas">Zacatecas</option> 
                                                    </select>  
                                                </div>
                                            </div>   
                                            <div class="form-group">
                                                <label for="cmbMunicipioSuc" class="col-lg-2 control-label">Municipio</label>
                                                <div class="col-lg-10">  
                                                    <input type="text" class="form-control" id="cmbMunicipioSuc" value="Leon" name="cmbMunicipioSuc" placeholder="Escriba el municipio"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="txtDireccionAprox" class="col-lg-2 control-label">Direccion</label>
                                                <div class="col-lg-10">
                                                    <textarea id="txtDireccionAprox" name="txtDireccionAprox" rows="3" cols="20" class="form-control" required="" placeholder="Calle, Numero, Colonia "></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="txtColonia" class="col-lg-2 control-label">Colonia</label>
                                                <div class="col-lg-10">  
                                                    <input type="text" class="form-control" id="txtColonia" name="txtColonia" value="La Esperanza de Jerez" placeholder="Escriba su colonia"/>
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label for="txtCodigoPostal" class="col-lg-2 control-label">Código Postal</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtCodigoPostal"  name="txtCodigoPostal" required="" value="37538" placeholder="Ej: 37500">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <div id="DataSucursal"></div>
                    </div>
                    <div class="modal-footer">
                        <button  type="button" id="btnCerrarMdlSuc" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div> 
                </form>     
            </div>
        </div>
    </div>

<div class="modal fade" id="mdlMyBranchOffice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-bank"></span> Mis Sucursales</h4>
                </div> 
                <form class="form-horizontal" id="DataMyBranchOffice">
                    <div class="modal-body">
  
                        <div class="form-group" align="center">
                            <button type="button" id="btnUpdateMyBranchOffice" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTableMyBranchOffice" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemoveMyBranchOffice" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelMyBranchOffice" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                        </div>
                        <div id="messages-of-my-branchoffice"></div>  
                        <div id="DataMyBranchOffices"></div>
                    </div>
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div> 
                </form>   
            </div>
        </div>
    </div>