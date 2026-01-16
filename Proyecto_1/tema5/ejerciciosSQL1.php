<?php

$conexion = new mysqli("localhost", "root", "", "centro");
$conexion->set_charset('utf8');

$consulta1 = "select dni, nombre, edad from alumnos";
$resultado1 = $conexion->query($consulta1);
echo "1. Muestra el DNI, nombre y edad de todos los alumnos que existen en la base de datos.<br>";
if ($resultado1) {
    while ($fila = $resultado1->fetch_array(MYSQLI_ASSOC)) {
        echo "<br> $fila[nombre] con el $fila[dni] tiene $fila[edad] años";
    }
    echo "<br><br><br>";
}

$consulta2 = "select * from asignaturas";
$resultado2 = $conexion->query($consulta2);

echo "2. Muestra el código, nombre, créditos y trimestre de todas las asignaturas disponibles en la base de datos.<br>";
if ($resultado2) {
    while ($fila = $resultado2->fetch_array(MYSQLI_ASSOC)) {
        echo "<br> $fila[nombre] con el codigo $fila[codigo] del $fila[trimestre] trimestre da $fila[creditos] creditos";
    }
    echo "<br><br><br>";
}

$consulta3 = "select * from matriculas";
$resultado3 = $conexion->query($consulta3);
echo "3. Muestra el DNI del alumno, código de asignatura, año y nota de todas las matrículas registradas. <br>";
if ($resultado3) {
    while ($fila = $resultado3->fetch_array(MYSQLI_ASSOC)) {
        echo "<br> El alumno con el DNI $fila[dni], esta matriculada en la asignatura con el codigo $fila[codigo] en el año $fila[año] con una nota de $fila[nota]";
    }
    echo "<br><br><br>";
}

$consulta4 = "select nombre, edad from alumnos where edad > 22";
$resultado4 = $conexion->query($consulta4);

echo "4. Muestra el nombre y la edad de los alumnos cuya edad sea superior a 22 años. <br>";
if ($resultado4) {
    while ($fila = $resultado4->fetch_array(MYSQLI_ASSOC)) {
        echo "<br> $fila[nombre] tiene una edad de $fila[edad]";
    }
    echo "<br><br><br>";
}


$consulta5 = "select nombre, creditos from asignaturas where trimestre = '1'";
$resultado5 = $conexion->query($consulta5);
echo "5. Muestra el nombre y los créditos de las asignaturas que se imparten en el primer strimestre. <br>";
if ($resultado5) {
    while ($fila = $resultado5->fetch_array(MYSQLI_ASSOC)) {
        echo "<br>La asignatura $fila[nombre] del primer trimestre tiene $fila[creditos] creditos";
    }
    echo "<br><br><br>";
}

$consulta7 = "
    SELECT m.dni, al.nombre AS alumno, asi.nombre AS asignatura, m.año, m.nota   
    FROM matriculas m
    LEFT JOIN alumnos al ON m.dni = al.dni
    LEFT JOIN asignaturas asi ON m.codigo = asi.codigo
";
$resultado7 = $conexion->query($consulta7);
echo "7. Muestra el DNI del alumno, nombre del alumno, nombre de la asignatura, año y nota de todas las matrículas.<br>";
if ($resultado7) {
    while ($fila = $resultado7->fetch_array(MYSQLI_ASSOC)) {
        echo "<br> El alumno $fila[alumno] con el dni $fila[dni] fues matriculado en $fila[asignatura] en el año $fila[año] con una nota de $fila[nota]";
    }
    echo "<br><br><br>";
}

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

$consulta13_InEficiente = "
    SELECT a.nombre
FROM alumnos as a
LEFT JOIN matriculas as m on a.dni = m.dni
WHERE m.año != '2020'
GROUP by a.nombre;
";

$consulta13 = "
   SELECT a.nombre
   FROM alumnos AS a
   WHERE a.dni NOT IN (
       SELECT m.dni
       FROM matriculas AS m
       WHERE m.año = '2020'
   )";

$resultado13 = $conexion->query($consulta13);
if ($resultado13) {
    echo "13. Muestra el nombre de los alumnos que no han cursado ninguna asignatura en el año 2020. <br>";
    while ($fila = $resultado13->fetch_array(MYSQLI_ASSOC)){
        echo " - ";
        foreach ($fila as $valor){
            echo $valor . " - ";
        }
        echo "<br>";
    }
    echo "<br><br><br>";
}

$consulta14 = "
 ";
$conexion->close();