<?php

if (isset($_SERVER['HTTP_REFERER'])) {
    if (strpos($_SERVER['HTTP_REFERER'], "http://project.ibuho.mx/Default.aspx")) {
        include 'abd/Data.php';
        $rdata = new Data();
        $rdata->binds();
    } else {
        print '<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>NO SE PERMITEN PETICIONES NO AUTORIZADAS.</div>';
    }
} else {
    print '<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>NO SE PERMITEN PETICIONES NO AUTORIZADAS.</div>';
} 