<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * Data class
 * 
 * 
 * This class, process all functions with the database
 * @author Mario Giovanni Guerrero Flores
 * 
 * @package abd
 */
if (isset($_POST['IdProcess'])) {
    try {
        $data = new Data();
        $data->binds();
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
} else {
    if (isset($_SERVER['HTTP_REFERER'])) {
//        var_dump($_GET);
    } else {
        header("Location: ../404.php");
    }
}

class Data {

    function __construct() {
        
    }

    public function unpackdata() {
        try {
            var_dump($_GET);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function binds() {
        $tf = false;
        if (isset($_POST) && file_exists('../abd/PDODB.php') && file_exists('../abd/Helpers.php')) {
            include '../abd/PDODB.php';
            include '../abd/Helpers.php';
            $tf = true;
        }
        if (isset($_GET) && file_exists('abd/PDODB.php') && file_exists('abd/Helpers.php')) {
            include 'abd/PDODB.php';
            include 'abd/Helpers.php';
            $tf = true;
//            var_dump($_GET);
        } else {
            if ($tf) {
                if ($tf) {
                    $pdo = new PDODB();
                    $helper = new Helpers();
                    if (isset($_POST)) {
                        extract($_POST);
                    } else {
                        extract($_GET);
                    }
                    if (isset($IdProcess) && $helper->is_ajax() && $helper->is_post()) {
                        switch ($IdProcess) {
                            case 0:
                                session_start();
                                session_unset();
                                session_destroy();
                                header("Location: index.php");
                                break;
                            case 1:
                                $pdo->bind("SP_GetDataFromUser", array($txtUsr, $txtPwd));
                                break;
                            case 2:
                                $pdo->fillbyParams("SP_GetHistoryFromPlantaAndUsr", array($txtPlanta), "History");
                                break;
                            case 3:
                                $pdo->save("SP_AddUsers", array($txtUsr, $txtPwd, $txtClave, $txtEstatusUsr, $rTipoUser, $cmbProveedor));
                                break;
                            case 4:
                                $pdo->fillOptions("SP_GetProveedor");
                                break;
                            case 5:
                                $pdo->fillOptionsByParams("SP_GetMicro", array($txtEstatus));
                                break;
                            case 6:
                                $pdo->save("SP_AddPlanta", array($txtNombrePlanta, $txtFirmware, $txtAplication, $txtAppVer, $txtNoSerie, $txtPotencia, $txtImei, $txtEstatus, $txtLatitud, $txtLongitud));
                                break;
                            case 7:
                                $pdo->getDataFromArray("SP_GetPlantaByName", array($txtPlanta));
                                break;
                            case 8:
                                session_start();
                                if (isset($_SESSION["Usuario"])) {
                                    extract($_SESSION);
                                    $datamap = $pdo->getArrayJSONElement("SP_GetPlantasByUsr", array($Usuario));
                                    print $helper->getMap($datamap);
                                } else {
                                    session_unset();
                                    session_destroy();
                                    header("Location: ../../index.php");
                                }
                                break;
                            case 9:
                                $pdo->findData("SP_CheckPlantaByName", array($txtField));
                                break;
                            case 10:
                                $pdo->findData("SP_CheckMicro", array($txtField));
                                break;
                            case 11:
                                break;
                            case 12:
                                $pdo->save("SP_AddMicro", array($txtMicro));
                                break;
                            case 13:
                                $pdo->fillOptions("SP_GetEstatus");
                                break;
                            case 14:
                                $pdo->findData("SP_CheckProveedorByName", array($txtProveedor));
                                break;
                            case 15:
                                $pdo->fillOptions("SP_GetPlanta");
                                break;
                            case 16:
                                $pdo->save("SP_AddProveedor", array($txtProveedor, $txtEstatus));
                                break;
                            case 17:
                                $pdo->fill("SP_GetAllProveedor", "Supplier");
                                break;
                            case 18:
                                $pdo->fill("SP_GetAllUsers", "Users");
                                break;
                            case 19:
                                $pdo->save("SP_UpdateProveedor", array($IdPro, $txtProveedor, $txtEstatus));
                                break;
                            case 20:
                                $pdo->fill("SP_GetZones", "Zones");
                                break;
                            case 21:
                                $pdo->save("SP_AddZona", array($txtZona, $txtLat, $txtLon));
                                break;
                            case 22:
                                $pdo->findData("SP_CheckUser", array($txtUser));
                                break;
                            case 23:
                                $pdo->save("SP_UpdateUsers", array($IdUsr, $txtUsr, $txtClave, $txtEstatusUsr, $rTipoUser, $cmbProveedor));
                                break;
                            case 24:
                                $pdo->getDataFromArray("SP_GetFOBPlant", array($txtPlanta));
                                break;
                            case 25:
                                $pdo->fill("SP_GetAllMicros", "Micros");
                                break;
                            case 26:
                                $pdo->fill("SP_GetAllPlantas", "Plantas");
                                break;
                            case 27:
                                $pdo->save("SP_UpdateMicro", array($IdMicro, $txtMicro, $txtEstatus));
                                break;
                            case 28:
                                $pdo->fill("SP_GetAllSucursales", "Sucursales");
                                break;
                            case 29:
                                $pdo->save("SP_UpdateZona", array($IdZone, $txtZona, $txtLat, $txtLon));
                                break;
                            case 30:
                                $helper->getCharts(array(3, $txtPlanta));
                                break;
                            case 31:
                                $pdo->save("SP_UpdatePlanta", array($IdPlanta, $txtNombrePlanta,
                                    $txtFirmware, $txtAplication,
                                    $txtAppVer, $txtNoSerie,
                                    $txtPotencia, $txtImei,
                                    $txtEstatus, $txtLatitud, $txtLongitud));
                                break;
                            case 32:
                                $pdo->findData("SP_CheckZona", array($txtZona));
                                break;
                            case 33:
                                $pdo->findData("SP_CheckSucursal", array($txtNombreSucursal));
                                break;
                            case 34:
                                $pdo->save("SP_AddSucursal", array($txtNombreSucursal, $txtDireccionAprox, $cmbMunicipio, $txtColonia, $cmbEstado, $cmbPais, $txtCodigoPostal, $txtTelefono, $cmbPlantas, $cmbZonas));
                                break;
                            case 35:
                                $pdo->save("SP_AddUxS", array($cmbUserxSucursal, $cmbSucursalesxUser));
                                break;
                            case 36:
                                $pdo->fill("SP_GetAllUxS", "UxS");
                                break;
                            case 37:
                                $pdo->fillOptions("SP_GetAllUsersByName");
                                break;
                            case 38:
                                $pdo->fillOptions("SP_GetAllSucursalesByName");
                                break;
                            case 39:
                                $pdo->fillOptions("SP_GetAllZones");
                                break;
                            case 40:
                                $pdo->fill("SP_GetAllMicrosAvailables", "MicrosToggle");
                                break;
                            case 41:
                                $pdo->save("SP_UpdateSucursal", array($IdSucursal));
                                break;
                            case 42:
                                session_start();
                                if (isset($_SESSION["Usuario"])) {
                                    extract($_SESSION);
                                }else{
                                    var_dump($_SESSION);
                                }
                                break;
                            case 43: 
                                session_start();
                                if (isset($_SESSION["Usuario"])) {
                                    extract($_SESSION);
                                }else{
                                    var_dump($_SESSION);
                                }
                                break;
                            default:
                                break;
                        }
                    }
                } else {
                    print "NO EXISTEN LOS ARCHIVOS EN LA RUTA ESPECIFICADA.";
                }
            } else {
//            if (file_exists('../abd/PDODB.php')) {
//                include '../abd/PDODB.php';
//                $tf = true;
//            }
//            if (file_exists('abd/PDODB.php')) {
//                print "Aqui: abd/PDODB.php";
//            }
//            if (file_exists('abd/Helpers.php')) {
//                print "Aqui: abd/Helpers.php";
//            }
//            if (file_exists('../abd/Helpers.php')) {
//                include '../abd/Helpers.php';
//                $tf = true;
//            }
            }
        }
    }

    public static function filter($array) {
        array_shift($array);
        return $array;
    }

}
