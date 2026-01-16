<?php

$conexion = new mysqli("localhost", "root", "", "centro");
$conexion->set_charset('utf8');

$setencia = "select * from alumnos where edad <= ?";
$consulta = $conexion->prepare($setencia);

$ed = '';

$consulta->bind_param("i", $ed);
$consulta->bind_result($dni, $nombre, $edad);
$consulta->execute();

while($consulta->fetch()){
    echo " $dni , $nombre , $edad <br>";
}

$conexion->close();
