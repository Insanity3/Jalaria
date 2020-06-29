<?php
require '/var/www/html/conexion.php';

$conexion = conexion($bd_config);
$resultados = $conexion->query ("SELECT * FROM restaurantes LIMIT 5");


?>