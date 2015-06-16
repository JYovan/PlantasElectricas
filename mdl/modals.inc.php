<?php if (isset($_SESSION["Sesion"])) { ?>
    <!--Start Modal Usuarios-->
    <?php include 'mdlUsuarios.inc.php'; ?>
    <!-- Fin Modal Usuarios  --> 
    <!--Start Modal Plantas-->
    <?php include 'mdlPlantas.inc'; ?>
    <!-- Fin Modal Plants-->
    <!--Start Modal Sucursal-->
    <?php include 'mdlSucursales.inc'; ?>
    <!-- Fin Modal Sucursal--> 
    <!--Start Modal Micros-->
    <?php include 'mdlMicros.inc'; ?>
    <!--End Modal Micros--> 
    <!--Start Modal Supplier-->
    <?php include 'mdlProveedores.inc'; ?>
    <!--End Modal Supplier-->
    <!--Start Modal Zone-->
    <?php include 'mdlZonas.inc'; ?>
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
    <?php include 'mdlUxS.inc'; ?>
    <!--End Modal Users By Sucursal-->
 
    <!--Start Modal Micros-->
     
    <?php
}