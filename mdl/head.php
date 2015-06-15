<!DOCTYPE html>
<html> 
    <meta charset="utf-8">
    <title>Plantas El&eacute;ctricas</title>
    <link rel="shortcut icon" href="img/cargo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen"> 
    <link rel="stylesheet" href="css/cosmo/bootstrap.min.css">

    <script src="js/jquery-1.11.1.min.js"></script>   
    <script src="js/bootstrap.min.js"></script>     
    <script src="js/pace.js"></script> 
    <link href="css/pace/pace-theme-corner-indicator.css" rel="stylesheet" /> 
    <link href="js/select2/select2.css" rel="stylesheet"/>
    <script src="js/select2/select2.min.js"></script>

    <?php
    if (isset($_SESSION["Sesion"])) {
        ?> 
        <!--<link href="js/tabletools/jquery.dataTables.css" rel="stylesheet"/>--> 
        <script src="js/tabletools/jquery.dataTables.js"></script>  
        <script src="js/tabletools/dataTables.tableTools.js"></script>  
        <script src="js/tabletools/dataTables.bootstrap.js"></script>  
        <link href="js/tabletools/dataTables.bootstrap.css" rel="stylesheet"/> 
        <link href="js/tabletools/dataTables.responsive.css" rel="stylesheet"/>
        <script src="js/tabletools/dataTables.responsive.js"></script>
        
        <script src="https://maps.google.com/maps/api/js?v=3&sensor=false"></script>    
        <script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
        <script type="text/javascript" src="js/map/map.js"></script> 
        <script src="ctrl/controllers.js"></script>  
        <link href="js/datepicker/datepicker3.css" rel="stylesheet"/>
        <script src="js/datepicker/bootstrap-datepicker.js"></script>

    <?php } else{?> 
    <script src="ctrl/controller.js"></script>
    <?php }?>
    <script src="js/scripts.js"></script> 
    <link rel="stylesheet" href="css/styler.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script> 
    <script src="js/plugins/flot/flot-data.js"></script>   
  