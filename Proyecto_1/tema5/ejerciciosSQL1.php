<?php
$conexion = new mysqli("localhost", "root", "", "centro");
$conexion->set_charset('utf8');

$consulta1 = "select dni, nombre, edad from alumnos";
$resultado1 = $conexion->query($consulta1);
echo "1. Muestra el DNI, nombre y edad de todos los alumnos que existen en la base de datos.<br>";
if ($resultado1) {
    while ($fila = $resultado1->fetch_array(MYSQLI_ASSOC))
    {
        echo "<br> $fila[nombre] con el $fila[dni] tiene $fila[edad] años";
    }
    echo "<br><br><br>";
}

$consulta2 = "select * from asignaturas";
$resultado2 = $conexion->query($consulta2);
echo "2. Muestra el código, nombre, créditos y trimestre de todas las asignaturas disponibles en la base de datos.<br>";
if ($resultado2) {
    while ($fila = $resultado2->fetch_array(MYSQLI_ASSOC))
    {
        echo "<br> $fila[nombre] con el codigo $fila[codigo] del $fila[trimestre] trimestre da $fila[creditos] creditos";
    }
    echo "<br><br><br>";
}

$consulta3 = "select * from matriculas";
$resultado3 = $conexion->query($consulta3);
echo "3. Muestra el DNI del alumno, código de asignatura, año y nota de todas las matrículas registradas. <br>";
if ($resultado3) {
    while ($fila = $resultado3->fetch_array(MYSQLI_ASSOC)){
        echo "<br> El alumno con el DNI $fila[dni], esta matriculada en la asignatura con el codigo $fila[codigo] en el año $fila[año] con una nota de $fila[nota]";
    }
    echo "<br><br><br>";
}

$consulta4 = "select nombre, edad from alumnos where edad > 22";
$resultado4 = $conexion->query($consulta4);

echo "4. Muestra el nombre y la edad de los alumnos cuya edad sea superior a 22 años. <br>";
if ($resultado4) {
    while ($fila = $resultado4->fetch_array(MYSQLI_ASSOC)){
        echo "<br> $fila[nombre] tiene una edad de $fila[edad]";
    }
    echo "<br><br><br>";
}


$consulta5 = "select nombre, creditos from asignaturas where trimestre = '1'";
$resultado5 = $conexion->query($consulta5);
echo "5. Muestra el nombre y los créditos de las asignaturas que se imparten en el primer strimestre. <br>";
if ($resultado5) {
    while ($fila = $resultado5->fetch_array(MYSQLI_ASSOC)){
        echo "<br>La asignatura $fila[nombre] del primer trimestre tiene $fila[creditos] creditos";
    }
    echo "<br><br><br>";
}

$consulta7 = "
    select
        alumnos.dni,
        alumnos.nombre as nombre_alumno,
        asignaturas.nombre as nombre_asignatura,
        matriculas.año,
        matriculas.nota,
    from matriculas
    inner join alumnos on alumnos.dni = alumnos.dni
    inner join asignaturas on asignaturas.codigo = asignaturas.codigo
";
$resultado7 = $conexion->query($consulta7);
$conexion->close();
if ($resultado7) {
    while ($fila = $resultado7->fetch_array(MYSQLI_ASSOC)){
    }
}

