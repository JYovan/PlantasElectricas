<?php
session_start();
if (isset($_SESSION["Sesion"])) {
    include 'mdl/head.inc.php';
    include 'mdl/navbar.inc.php';
    ?>  
    <!--Contenedor-->
    <section>
        <article>
            <div id="section" class="container">
                <div class="row">
                    <div class="col-md-12">  
                        <div class="panel panel-info">
                            <div class="panel-heading"><span class="fa fa-info"></span> Panel de control</div>
                            <div class="panel-body">  
                                <div id="test-data"></div>
                                <div id="map-result"></div> 
                                <div id="top-plant" class="list-group">
                                    <a href="#" class="list-group-item">
                                        <h4 class="list-group-item-heading">Novedades</h4>
                                        <p class="list-group-item-text">-Sin Ningún tipo de novedad.</p>
                                    </a> 
                                </div>
                                <div id="data-from-plant" class="hide">
                                    <br>
                                    <ul class="nav nav-tabs nav-primary">
                                        <li class="active"><a href="#data" data-toggle="tab"><span class="fa fa-hdd-o"></span> Info</a></li>
                                        <li><a href="#history" data-toggle="tab"><span class="fa fa-file-text-o"></span> Historial</a></li>
                                        <li><a href="#graphs" data-toggle="tab"><span class="fa fa-area-chart"></span> Graficas</a></li> 
                                    </ul> 
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade active in" id="data">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><span class="fa fa-list"></span> Detalles</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="DataContainer" align="center">
                                                        <div id="plant-name"></div> 
                                                        <div id="data-gauge" align="center" style="width: 100%; height: 120px;">
                                                        </div> 
                                                        <div class="list-group" id="list-data"  align="center">    
                                                        </div>
                                                        <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['gauge']}]}"></script>
                                                        <div id="result-map" class="media-body"> 
                                                        </div>  
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in" id="history">
                                            <!--Inicio Tabla-->
                                            <div class="panel panel-primary">
                                                <div class="panel-heading"><span class="fa fa-exclamation"></span> Comportamiento</div>
                                                <div class="panel-body">
                                                    <div id="history-data">  
                                                        <div align="center">
                                                            <h4>Seleccione una planta del mapa.</h4>
                                                        </div>
                                                    </div>
                                                    <div id="selectedRow"></div>
                                                </div>
                                            </div>
                                            <!--Fin de la tabla-->
                                        </div>
                                        <div class="tab-pane fade" id="graphs"> 
                                            <div class="panel panel-success">
                                                <div class="panel-heading"><span class="fa fa-area-chart"></span> Gr&aacute;fica en tiempo real</div>
                                                 <button type="button" id="btnCharts"  name="btnChart"  class="btn btn-warning btn-sm"><span class="fa fa-history"></span> Actualizar grafica</button> 
                                                <div class="panel-body" id="result-graph"> 
                                                   
                                                    <hr class="">  
                                                    <div id="chart-container" align="center">    
                                                        <h4>Seleccione una planta del mapa.</h4>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>  
            <!--Fin Contenedor-->
        </article>
    </section>
    <?php
    include 'mdl/modals.inc.php';
    include 'mdl/footer.inc.php';
} else {
    header("Location: index.php");
}