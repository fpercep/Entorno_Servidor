<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="cadena">Introduce un DNI:</label>
    <input type="text" name="dni">
    <br/><br/>
    <input name="enviar" type="submit">
</form>
</body>
<?php
$conexion = new mysqli("localhost", "root", "", "centro");
$conexion->set_charset('utf8');

$sentencia = "SELECT alu.nombre, asi.nombre, m.nota
              FROM alumnos alu
              INNER JOIN matriculas m ON alu.dni = m.dni
              INNER JOIN asignaturas asi ON m.codigo = asi.codigo
              WHERE alu.dni = ?";

$stmt = $conexion->prepare($sentencia);
$stmt->bind_result($alumno, $asignatura, $nota);

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["dni"])) {
        $dni = $_POST["dni"];
        $stmt->bind_param("s", $dni);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows >= 1) {
            while ($stmt->fetch()) {
                echo $alumno . " " . $asignatura . " " . $nota . "<br>";
            }
        } else {
            echo "El DNI " . $dni  . " no existe";
        }
}

$conexion->close();
?>
</html>