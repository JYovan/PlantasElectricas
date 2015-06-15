<?php if (isset($_SESSION["Sesion"])) { ?>
    <!-- Modal Usuarios-->
    <div class="modal fade" id="mdlUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-group"></span> Gesti&oacute;n de usuarios</h4>
                </div>
                <form class="form-horizontal" id="DatosUsuario" action="" method="post">
                    <div class="modal-body">
                        <div class="form-group" align="center">
                            <button type="button" id="btnSaveUsr" class="btn btn-primary disabled" data-dismiss=""><span class="fa fa-check"></span></button>
                            <button type="button" id="btnUpdateUsr" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTableUsr" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemoveUsr" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelUsr" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                        </div>
                        <div class="panel-group" id="pnlCollapseUser" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="pnlHeadOneUser">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#pnlCollapseUser" href="#pnlCollapseUserOne" aria-expanded="true" aria-controls="pnlCollapseUserOne">
                                            Datos
                                        </a>
                                    </h4>
                                </div>
                                <div id="pnlCollapseUserOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pnlHeadOneUser">
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-group ">
                                                <label for="txtIentificacion" class="col-lg-2 control-label">Clave</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtClave" required="" placeholder="Intruduce tu número de identificaci&oacute;n">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="txtUser" class="col-lg-2 control-label">Usuario</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="txtUser"  required="" placeholder="Introduce tu usuario (5 caracteres min)" onkeyup="onCheckUser(this.value)">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label for="txtContrasenia" class="col-lg-2 control-label">Contraseña</label>
                                                <div class="col-lg-10">
                                                    <input type="password" class="form-control" id="txtContrasenia"  required="" placeholder="Introduce tu contraseña (6 caracteres min)" onkeyup="setPwd(this.value)">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label for="txtContraseniaCon" class="col-lg-2 control-label">Confirme Contraseña</label>
                                                <div class="col-lg-10">
                                                    <input type="password" class="form-control disabled" id="txtContraseniaCon" required="" placeholder="Confirma tu contraseña (6 caracteres min)" onkeyup="CheckPass(this.value)">
                                                </div>
                                            </div> 
                                            <div class="form-group "> 
                                                <div id="result-pwd"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="pnlHeadTwoUser">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#pnlCollapseUser" href="#pnlCollapseUserTwo" aria-expanded="false" aria-controls="pnlCollapseUserTwo">
                                            Perfil
                                        </a>
                                    </h4>
                                </div>
                                <div id="pnlCollapseUserTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="pnlHeadTwoUser">
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-group ">
                                                <label for="cmbProveedor"  class="col-lg-2 control-label">Proveedor: </label><div class="col-lg-10">
                                                    <select id="cmbProveedor" class="form-control" > 
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="form-group"> 
                                                <label for="cmbTipoUsuario"  class="col-lg-2 control-label">Tipo </label>
                                                <div class="col-lg-10">
                                                    <select id="cmbTipoUsuario" class="form-control" >
                                                        <option>Usuario</option>
                                                        <option>Supervisor</option>
                                                        <option>Administrador</option>
                                                    </select> 
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label for="cmbEstatusUsr"  class="col-lg-2 control-label">Estatus: </label><div class="col-lg-10">
                                                    <select id="cmbEstatusUsr" class="form-control" >
                                                        <option>Activo</option>
                                                        <option>Inactivo</option>
                                                    </select> 
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <fieldset> 
                            <div id="messages-usr"></div>
                            <div id="DataUser"></div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button  type="button" id="btnInserta" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div> 
                </form>   
            </div>
        </div>
    </div>
    <!-- Fin Modal Usuarios  -->

    <!-- Modal Plantas-->
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
    <!-- Fin Modal Plants-->



    <!-- Modal Sucursal-->
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
    <!-- Fin Modal Sucursal--> 
    <!--Start Modal Micros-->
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
    <!--End Modal Micros-->

    <!--Start Modal Supplier-->
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
    <!--End Modal Supplier-->

    <!--Start Modal Zone-->
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
    <!--End Modal Zone-->


    <!--Start Modal SetPoints-->
    <div class="modal fade" id="mdlSetPoints" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" >Gestión de Zonas</h4>
                </div> 
                <form class="form-horizontal" id="register-setpoint" action="" method="post">
                    <div class="modal-body">   
                        <br>
                        <fieldset>  
                            <div class="form-group" align="center"> 

                                <button type="button" id="btnSaveSetPoint" class="btn btn-primary disabled" data-dismiss=""><span class="fa fa-check"></span></button>
                                <button type="button" id="btnUpdateSetPoint" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                                <button type="button" id="btnUpdateTableSetPoint" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                                <button type="button" id="btnRemoveSetPoint" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                                <button type="button" id="btnCancelSetPoint" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="movie">Min:</label>
                                <div class="col-lg-10">
                                    <input id="txtMin" type="number" value="0" min="0" class="form-control"/>
                                </div> 
                            </div> 
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="movie">Max:</label>
                                <div class="col-lg-10">
                                    <input id="txtMax" type="number" value="0" min="0" class="form-control"/>
                                </div> 
                            </div> 
                        </fieldset>
                        <div id="messages-setpoint"></div>
                        <div id="DataSetPoint"></div> 
                    </div> 
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Modal Zone-->

    <!--Start Modal Users By Sucursal-->
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
    <!--End Modal Users By Sucursal-->

    <!--Start Modal Users Account-->
    <div class="modal fade" id="mdlUserAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="fa fa-male"></span> Mi cuenta</h4>

                </div>  
                <div class="modal-body">
                    <form class="form-horizontal" id="DataProveedor" action="" method="post">
                        <fieldset>  
                            <div id="messages-user-account"></div>  
                            <div class="col-xs-12 col-sm-4 text-center">
                                <img src="img/usr.png" alt="" class="center-block img-circle img-thumbnail img-responsive"> 
                            </div>
                            <!--/col--> 
                            <div class="col-xs-12 col-sm-8">
                                <h2><?php echo (isset($_SESSION["Sesion"]) ? $_SESSION["Usuario"] : header("Location: index.php")); ?></h2>
                                <p>
                                    <strong>Tipo de usuario: </strong>  
                                    <select class="form-control" id="cmbTipo" 
                                            onchange="$('#cmbTipo').val().trim() ==='' ? $('#cmbTipo').select2('val',  '<?php print $_SESSION["Tipo"]; ?>'):$('#cmbTipo').val();" name="cmbTipo" required="">
                                        <option></option>
                                        <option>Administrador</option>
                                        <option>Usuario</option>
                                    </select> 
                                     </p> 
                                <p>
                                    <strong>Plantas asignadas: </strong>
                                    <span class="label label-info tags"><?php print $_SESSION["PAsignadas"]; ?></span> 
                                </p>
                                <p>
                                    <strong>Proveedor:</strong> 
                                    <span class="label label-info tags"><?php print $_SESSION["Proveedor"]; ?></span>
                                </p>
                            </div>
                            <!--/col-->          
                            <div class="clearfix"></div> 
                            <!--/col-->
                            <br>
                            <div class="form-group">
                                <label for="txtContraseniaActive" class="col-lg-2 control-label">Contraseña Actual:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="txtContraseniaActive" required="" 
                                           placeholder="Contraseña Actual...">
                                </div> 
                            </div>
                            <div class="form-group">
                                <label for="txtContraseniaNueva" class="col-lg-2 control-label">Nueva Contraseña:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="txtContraseniaNueva" required="" 
                                           placeholder="Nueva Contraseña...">
                                </div> 
                            </div>
                            <div class="form-group">
                                <label for="txtContraseniaNuevaConfirm" class="col-lg-2 control-label">Nueva Contraseña:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="txtContraseniaNuevaConfirm" required="" 
                                           placeholder="Confirme su contraseña...">
                                </div> 
                            </div> 
                            <div id="result-pwd-change"></div>
                            <div align="center">
                                <button id="btnChangePassword" type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> Cambiar contraseña </button>  
                            </div> 

                            <!--/col-->   
                        </fieldset>  
                    </form>
                </div> 
                <div class="modal-footer">
                    <button  type="button" class="btn btn-default"   data-dismiss="modal">Cerrar</button>
                </div> 
            </div>
        </div>
    </div>
    <!--End Modal Users By Sucursal-->

    <!--Start Modal Toggles-->

    <!--Start Modal Micros-->
    <div class="modal fade" id="mdlMicrosToggle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title"><span class="fa fa-puzzle-piece"></span> Micros Disponibles</h4>
                </div>  
                <div class="modal-body">
                    <div class="alert alert-dismissable alert-success">
                        <strong>Seleccione un micro!</strong>
                    </div>
                    <div id="DataMicroToggle"></div>
                </div> 
                <div class="modal-footer">
                    <button  type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                </div> 
            </div>
        </div>
    </div>
    <!--End Modal Micros-->


    <!--End Modal Toggles-->
    
<!---Start of my modals--->
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
                            <button type="button" id="btnUpdateMyMicro" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTableMyMicro" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemoveMyMicro" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelMyMicro" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
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
                            <button type="button" id="btnUpdateMyZones" class="btn btn-warning disabled " data-dismiss=""><span class="fa fa-pencil"></span></button>   
                            <button type="button" id="btnUpdateTableMyZone" class="btn btn-default " data-dismiss=""> <span class="fa fa-refresh"></span> </button> 
                            <button type="button" id="btnRemoveMyZone" class="btn btn-default disabled " data-dismiss=""> <span class="fa fa-minus-circle"></span> </button>   
                            <button type="button" id="btnCancelMyZone" class="btn btn-danger " data-dismiss=""><span class="fa fa-remove"></span></button>
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
    <!--- End of my modals ---->
    <?php
}