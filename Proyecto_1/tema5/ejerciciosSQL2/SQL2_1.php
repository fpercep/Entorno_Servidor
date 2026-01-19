<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="dni">Introduce un DNI:</label>
    <input type="text" name="dni">
    <br/><br/>
    <input name="enviar" type="submit">
</form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["dni"])) {
        $conexion = new mysqli("localhost", "root", "", "centro");
        $conexion->set_charset('utf8');

        $dniAlumno = $_POST["dni"];

        $sentencia = "SELECT count(dni) FROM alumnos WHERE dni=?";
        $consulta = $conexion->prepare($sentencia);
        $consulta->bind_param("s", $dniAlumno);
        $consulta->bind_result($num);

        $consulta->execute();
        $consulta->fetch();
        $consulta->close();

        if ($num !== 0) {
            $sentencia = "
                SELECT alu.nombre, alu.edad, asi.nombre, m.nota
                FROM matriculas m
                INNER JOIN alumnos alu ON alu.dni = m.dni
                INNER JOIN asignaturas asi On asi.codigo = m.codigo
                WHERE m.dni = ? AND m.nota >= 6
                ORDER BY m.nota DESC";

            $consulta = $conexion->prepare($sentencia);
            $consulta->bind_param("s", $dniAlumno);
            $consulta->bind_result($alumno, $edad, $asignatura, $nota);
            $consulta->execute();

            while($consulta->fetch()){
                echo " $alumno - $edad - $asignatura - $nota<br>";
            }

        } else {
            echo "<h2>DNI no encontrado </h2>";
        }
        $conexion->close();
    }
}

?>
</html>