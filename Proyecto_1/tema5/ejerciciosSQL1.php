<?php
$conexion = new mysqli("localhost", "root", "", "centro");
$conexion->set_charset('utf8');

$consulta1 = "select * from alumnos";
$resultado1 = $conexion->query($consulta1);

echo "1. Muestra el DNI, nombre y edad de todos los alumnos que existen en la base de datos.<br>";
while ($fila = $resultado1->fetch_array(MYSQLI_ASSOC))
{
    echo "<br> $fila[nombre] con el $fila[dni] tiene $fila[edad] años";
}
echo "<br><br>";


$consulta2 = "select * from asignaturas";
$resultado2 = $conexion->query($consulta2);

echo "2. Muestra el código, nombre, créditos y trimestre de todas las asignaturas disponibles en la base de datos.<br>";
while ($fila = $resultado2->fetch_array(MYSQLI_ASSOC))
{
    echo "<br> $fila[nombre] con el codigo $fila[codigo] del $fila[trimestre] trimestre da $fila[creditos] creditos";
}
echo "<br><br>";

$conexion->close();

