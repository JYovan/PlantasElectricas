<?php

if (file_exists("abd/cnx/Conexion.php")) {
    include 'abd/cnx/Conexion.php';
}
if (file_exists("../abd/cnx/Conexion.php")) {
    include '../abd/cnx/Conexion.php';
}

class PDODB {

    public $cnx;

    function __construct() {
        $this->cnx = new Conexion();
    }

    function bind($stored, $array) {
        try {
            $procedure = $stored . " ";
            for ($i = 1; $i <= count($array); $i++) {
                if ($i == count($array)) {
                    $procedure .="?";
                } else {
                    $procedure .="?,";
                }
            }
            $procedure .=";";
            $stmt = $this->cnx->getConexion()->prepare($procedure);
            $stmt->execute($array);
            $rs = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt) {
                if (count($rs) > 0) {
                    session_start();
                    foreach ($rs as $key => $v) {
                        $_SESSION[$key] = $v;
                    }
                    print "1";
                } else {
                    print "0";
                }
            } else {
                print "<div>Ha ocurrido un problema</div>";
            }
            die();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function save($stored, $array) {
        try {
            $procedure = $stored . " ";
            for ($i = 1; $i <= count($array); $i++) {
                if ($i == count($array)) {
                    $procedure .="?";
                } else {
                    $procedure .="?,";
                }
            }
            $procedure .=";";
            $stmt = $this->cnx->getConexion()->prepare($procedure);
            $stmt->execute($array);
            if ($stmt) { 
                print '1';
            } else {
                print "0";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function update($stored, $array) {
        
    }

    function delete($stored, $array) {
        
    }

//SELECT * FROM TABLE WHERE TABLE.FIELD = SOMETHING
    function find($stored, $array) {
        
    }

    function findbyparams($stored, $array) {
        
    }

//SELECT * FROM
    function fill($stored, $prefix) {
        try {
            $columns =[];
            $procedure = $stored;
            $stmt = $this->cnx->getConexion()->prepare($procedure);
            $rs = $stmt->execute();
            if ($stmt) {
                if (count($rs)) {
                    $tbl = "<div class=\"table-responsive\">";
                    $tbl .= '<table id="tblData' . $prefix . '" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%" >';
                    for ($index = 0; $index < $stmt->columnCount(); $index++) {
                        $col = $stmt->getColumnMeta($index);
                        $columns[] = $col['name'];
                    }
                    $tbl .="<thead><tr class=\"info\">";
                    foreach ($columns as $value) {
                        $tbl .= "<th>$value</th>";
                    }
                    $tbl .= "</tr></thead>";
                    $tbl .="<tbody>";
                    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                        $tbl .= "<tr>";
                        foreach ($row as $value) {
                            $tbl .= "<td>$value</td>";
                        }
                        $tbl .= "</tr>";
                    }
                    $tbl .="</tbody></table>";
                    $tbl .="</div>";
                    print $tbl;
                } else {
                    print "No existen registros." . $stmt->rowCount();
                }
            } else {
                
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

//SELECT * FROM tbl WHERE tbl.field = something
    function fillbyParams($stored, $array, $prefix) {
        try {
            $procedure = $stored . " ";
            for ($i = 1; $i <= count($array); $i++) {
                if ($i == count($array)) {
                    $procedure .="?";
                } else {
                    $procedure .="?,";
                }
            }
            $procedure .=";";
            $stmt = $this->cnx->getConexion()->prepare($procedure);
            $rs = $stmt->execute($array);
            if ($stmt) {
                if (count($rs) > 0) {
                    $tbl = "<div class=\"table-responsive\">";
                    $tbl .= '<table id="tblData' . $prefix . '" class="table table-bordered table-striped table-hover display" cellspacing="0" width="100%" >';
                    for ($index = 0; $index < $stmt->columnCount(); $index++) {
                        $col = $stmt->getColumnMeta($index);
                        $columns[] = $col['name'];
                    }
                    $tbl .="<thead><tr class=\"info\">";
                    foreach ($columns as $value) {
                        $tbl .= "<th>$value</th>";
                    }
                    $tbl .= "</tr></thead>";
                    $tbl .="<tbody>";
                    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                        $tbl .= "<tr>";
                        foreach ($row as $value) {
                            $tbl .= "<td>$value</td>";
                        }
                        $tbl .= "</tr>";
                    }
                    $tbl .="</tbody></table>";
                    $tbl .="</div>";
                    print $tbl;
                } else {
                    print "No existen registros." . $stmt->rowCount();
                }
            } else {
                
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function fillOptions($stored) {
        try {
            $stmt = $this->cnx->getConexion()->prepare($stored);
            $stmt->execute();
            if ($stmt) {
                while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                    foreach ($row as $value) {
                    print '<option value="' . $value . '" >' . $value . '</option>';
                    } 
                } 
            } else {
                echo "Ha ocurrido un error inesperado";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function fillOptionsByParams($stored,$array) {
        try {
            $procedure = $stored . " ";
            for ($i = 1; $i <= count($array); $i++) {
                if ($i == count($array)) {
                    $procedure .="?";
                } else {
                    $procedure .="?,";
                }
            }
            $procedure .=";";
            $stmt = $this->cnx->getConexion()->prepare($procedure);
            $stmt->execute($array);
            if ($stmt) {
                while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                    print '<option value="' . $row->IdName . '" >' . $row->IdName . '</option>';
                } 
            } else {
                echo "Ha ocurrido un error inesperado";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
 

    function getDataFromArray($stored, $array) {
        try {
            $json = array();
            $procedure = $stored . " ";
            for ($i = 1; $i <= count($array); $i++) {
                if ($i == count($array)) {
                    $procedure .="?";
                } else {
                    $procedure .="?,";
                }
            }
            $procedure .=";";
            $stmt = $this->cnx->getConexion()->prepare($procedure);
            $stmt->execute($array);
            if ($stmt) {
                while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                    foreach ($row as $value) {
                        array_push($json, $value);
                    }
                }
                header('Content-Type: application/json');
                print json_encode($json);
            } else {
                echo "<div>Ha ocurrido un error inesperado</div>";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function getArrayJSONElement($stored, $array) {
        try {
            $json = array();
            $procedure = $stored . " ";
            for ($i = 1; $i <= count($array); $i++) {
                if ($i == count($array)) {
                    $procedure .="?";
                } else {
                    $procedure .="?,";
                }
            }
            $procedure .=";";
            $stmt = $this->cnx->getConexion()->prepare($procedure);
            $stmt->execute($array);
            if ($stmt) {
                $model = $stmt->fetchAll(PDO::FETCH_OBJ);
                if (count($model) > 0) {
                    foreach ($model as $row) {
                        $data = array();
                        foreach ($row as $values) {
                            array_push($data, $values);
                        }
                        array_push($json, $data);
                    }
                    return $json;
                } else {
                    echo '<div><div class="alert alert-dismissable alert-success">No se encuentra ninguna planta asignada.</div></div>';
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function findData($stored, $array) {
        try {
            $procedure = $stored . " ";
            for ($i = 1; $i <= count($array); $i++) {
                if ($i == count($array)) {
                    $procedure .="?";
                } else {
                    $procedure .="?,";
                }
            }
            $procedure .=";";
            $stmt = $this->cnx->getConexion()->prepare($procedure);
            $stmt->execute($array);
            $rs = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt) {
                if ($rs) {
                    print "1";
                } else {
                    print "0";
                }
            } else {
                print "<div>Ha ocurrido un problema</div>";
            }
            die();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function test() {
        try {
            $stmt = $this->cnx->getConexion()->prepare("SP_GetDataFromUser ?, ?;");
            $stmt->execute(array("Giovanni", "12345678"));
            $result = $stmt->fetchall(PDO::FETCH_OBJ);
            if ($stmt) {
                var_dump($result);
            } else {
//                print "no";
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
