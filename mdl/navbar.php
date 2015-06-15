
<?php
if (isset($_SESSION["Sesion"])) {
    ?>
    <div class="container">
        <div class="row"> 
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a href="principal.php" class="navbar-brand fontx">Plantas El&eacute;ctricas</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
                        <ul class="nav navbar-nav navbar-right">
                            <li><a data-toggle="modal" data-target="#mdlUserAccount" ><span class="fa fa-hand-o-right"></span> Bienvenido: <?php echo (isset($_SESSION["Sesion"]) ? $_SESSION["Usuario"] : header("Location: index.php")); ?> </a></li>
                            <li><a data-toggle="modal" data-target="#mdlMyPlants"><span class="fa fa-plug"></span></a></li> 
                            <!--<li><a data-toggle="modal" data-target="#mdlMySuppliers"><span class="fa fa-ship"></span></a></li>-->  
                            <li><a data-toggle="modal" data-target="#mdlMyMicros"><span class="fa fa-gamepad"></span></a></li>  
                            <li><a data-toggle="modal" data-target="#mdlMyZones"><span class="fa fa-thumb-tack"></span></a></li> 
                            <li><a data-toggle="modal" data-target="#mdlMyBranchOffice"><span class="fa fa-bank"></span></a></li>  
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="# " id="themes"><span class="fa fa-gears"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="themes">
                                    <li class=""><a data-toggle="modal" data-target="#mdlProveedores"><span class="fa fa-truck"></span> Proveedores</a></li> 
                                    <li class=""><a data-toggle="modal" data-target="#mdlUsuarios"><span class="fa fa-group"></span> Usuarios</a></li> 
                                    <li class=""><a data-toggle="modal" data-target="#mdlMicros"><span class="fa fa-puzzle-piece"></span> Micros</a></li> 
                                    <li class=""><a data-toggle="modal" data-target="#mdlPlantas"><span class="fa fa-flash"></span> Plantas</a></li> 
                                    <li class=""><a data-toggle="modal" data-target="#mdlZonas"><span class="fa fa-location-arrow"></span> Zonas</a></li> 
                                    <li class=""><a data-toggle="modal" data-target="#mdlSucursales"><span class="fa fa-home"></span> Sucursales</a></li>  
                                    <li class="divider"></li>
                                    <li class=""><a data-toggle="modal" data-target="#mdlUsuariosXSucursal"><span class="fa fa-wrench"></span> Usuarios por Sucursal</a></li>    
                                </ul>
                            </li> 
                            <li onclick="goOut();" ><a href="" onclick="goOut()"><span class="fa fa-arrow-right"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div id="result-modules">

    </div>
    <?php
} 