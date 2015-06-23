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
                                    <span class="label label-info tags"> <?php  print $_SESSION["Tipo"]; ?></span> 
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
    <!-- Fin Modal Usuarios  -->