<?php

if (isset($_REQUEST)) {
    try {
        include 'abd/PDODB.php';
        extract($_REQUEST);
        $array = array();
        $ar = array($reason,$datee,$timee,$modee,$RPM,$Pwr,$PF,$LChr,$Gfrq,$Vg1,$Vg2,$Vg3,$IL1,$IL2,$IL3,$Vm1,$Vm2,$Vm3,$Mfrq,$UBat,$OilP,$EngT,$FLvl,$BIN,$BOUT,$iPlanta);
        foreach ($_REQUEST as $value) {
            array_push($array, $value); 
        } 
        var_dump($_REQUEST);
        if (count($array) > 0) {
            $pdo = new PDODB();
//            $pdo->save("SP_AddHistory", $ar);
        } else {
//            header("Location:index.php");
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}