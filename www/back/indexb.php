<?php
require '../config.php';
require '../funciones.php';

$conexion = conexion($bd_config);
$resultados = $conexion->query ("SELECT * FROM restaurantes LIMIT 5");


?>