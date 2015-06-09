<?php

class Conexion {

    private $usr = "";
    private $pass = "";
    private $host = "";
    private $database = "";

    public function __construct() {
        try {
            if (file_exists("abd/conexion.xml")) {
                $xml = simplexml_load_file("abd/conexion.xml");
            } elseif (file_exists("../../abd/conexion.xml")) {
                $xml = simplexml_load_file("../../abd/conexion.xml");
            }elseif (file_exists("../abd/conexion.xml")) {
                $xml = simplexml_load_file("../abd/conexion.xml");
            }
        } catch (Exception $exc) {
            echo "No existe el archivo de conexion.xml";
        }
        $this->host = $xml->host;
        $this->usr = $xml->user;
        $this->pass = $xml->password;
        $this->database = $xml->database;
    }

    public function getUsr() {
        return $this->usr;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getHost() {
        return $this->host;
    }

    public function getDatabase() {
        return $this->database;
    }

    public function setUsr($usr) {
        $this->usr = $usr;
        return $this;
    }

    public function setPass($pass) {
        $this->pass = $pass;
        return $this;
    }

    public function setHost($host) {
        $this->host = $host;
        return $this;
    }

    public function setDatabase($database) {
        $this->database = $database;
        return $this;
    }

    public function getConexion() {
        return $con = new PDO("sqlsrv:server=".$this->host.";Database=".$this->database."",  $this->usr, $this->pass);
    }

}
