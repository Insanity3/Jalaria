<?php
require 'config.php';

function conexion($bd_config){
    try {
        $conexion = new PDO('mysql:host=localhost:8081;dbname='.$bd_config['basedatos'],$bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOExeption $e) {
        return false;
    }
}

?>