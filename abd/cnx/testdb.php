<?php

include 'Conexion.php';
$c = new Conexion();
if ($c->getConexion()) {
 echo('Conectado');
} else {
 echo('No se pudo conectar<br/>');
}
?>