<?php

$conexion = new mysqli("localhost", "root", "", "centro");
$conexion->set_charset('utf8');

$setencia = "select * from alumnos where nombre like ?";
$consulta = $conexion->prepare($setencia);

$letra = '%a%';


$consulta->bind_param("s", $letra);
$consulta->bind_result($dni, $nombre, $edad);
$consulta->execute();

while($consulta->fetch()){
    echo " $dni , $nombre , $edad <br>";
}

$conexion->close();
