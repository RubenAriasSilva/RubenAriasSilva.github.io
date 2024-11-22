<?php
    $conexion = mysqli_connect("localhost","root","","basedatos");

if(!$conexion) {
    echo 'No se pudo conectar a la base de datos';
} else {
    echo 'Conexión exitosa';
} 

    