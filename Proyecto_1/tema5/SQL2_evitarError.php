<?php
$conexion = new mysqli("localhost", "root", "", "centro");
$conexion->set_charset('utf8');

$consulta8 = "
SELECT alu.nombre as alumno_nombre , asi.nombre as asignatura_nombre, m.nota
FROM matriculas as m
INNER JOIN alumnos as alu on m.dni = alu.dni
INNER JOIN asignaturas as asi on m.codigo = asi.codigo
WHERE m.nota >= 6;
";
$resultado8 = $conexion->query($consulta8);

if ($resultado8) {
    echo "8. Muestra el nombre del alumno, nombre de la asignatura y nota de los alumnos que hayan obtenido una nota mayor o igual a 6 <br>";
    while ($fila = $resultado8->fetch_array(MYSQLI_ASSOC)){
        echo " - ";
        foreach ($fila as $valor){
            echo $valor . " - ";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
}

$consulta9 = "SELECT asi.nombre as asignatura_nombre, m.nota
FROM matriculas as m
INNER JOIN alumnos as alu on m.dni = alu.dni
INNER JOIN asignaturas as asi on m.codigo = asi.codigo
WHERE alu.nombre = 'Ramón Torres'";
$resultado9 = $conexion->query($consulta9);

if ($resultado9) {
    echo "9. Muestra el nombre de la asignatura y nota de todas las asignaturas cursadas por el alumno Ramón Torres <br>";
    while ($fila = $resultado9->fetch_array(MYSQLI_ASSOC)){
        echo " - ";
        foreach ($fila as $valor){
            echo $valor . " - ";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
}

$consulta10 = "
SELECT nombre, edad
FROM alumnos
ORDER BY edad DESC;";
$resultado10 = $conexion->query($consulta10);
if ($resultado10) {
    echo "10. Muestra el nombre y edad de todos los alumnos, ordenados de mayor a menor edad <br>";
    while ($fila = $resultado10->fetch_array(MYSQLI_ASSOC)){
        echo " - ";
        foreach ($fila as $valor){
            echo $valor . " - ";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
}

$consulta11 = "
SELECT nombre, COUNT(m.dni) as total_alumnos
FROM asignaturas as a
LEFT JOIN matriculas as m ON a.codigo = m.codigo
GROUP BY a.nombre";
$resultado11 = $conexion->query($consulta11);
if ($resultado11) {
    echo "11. Muestra el nombre de la asignatura y el número de alumnos matriculados en cada una de ellas. <br>";
    while ($fila = $resultado11->fetch_array(MYSQLI_ASSOC)){
        echo " - ";
        foreach ($fila as $valor){
            echo $valor . " - ";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
}


$consulta12 = "
 SELECT a.nombre, AVG(m.nota) as media
FROM alumnos as a
LEFT JOIN matriculas as m on a.dni = m.dni
GROUP BY a.nombre, a.dni;
";
$resultado12  = $conexion->query($consulta12);
if ($resultado12) {
    echo "12. Muestra el nombre del alumno y la nota media obtenida en todas las asignaturas en las que esté matriculado. <br>";
    while ($fila = $resultado12->fetch_array(MYSQLI_ASSOC)){
        echo " - ";
        foreach ($fila as $valor){
            echo $valor . " - ";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
}
$conexion->close();
