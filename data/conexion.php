<?php
    // Conexión a la base de datos
    $host = 'localhost';
    $dbname = 'tienda';
    $user = 'root';
    $password = '';

    $conexion = new mysqli($host, $user, $password, $dbname);
    $conexion->set_charset("utf8");
?>