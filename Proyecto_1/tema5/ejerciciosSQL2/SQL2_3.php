<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="cadena">Cadena</label>
    <input type="text" name="cadena">
    <br/><br/>
    <input name="enviar" type="submit">
</form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["cadena"])) {

        $conexion = new mysqli("localhost", "root", "", "centro");
        $conexion->set_charset('utf8');

        $cadena = "%" . $_POST["cadena"] . "%";
        $sentencia = "
        SELECT alum.nombre, asig.nombre, m.nota
        FROM matriculas m
        INNER JOIN alumnos alum on alum.dni = m.dni
        INNER JOIN asignaturas asig on asig.codigo = m.codigo
        WHERE alum.nombre LIKE ? AND m.nota > 5 ORDER BY alum.nombre ASC, m.nota DESC;
        ";

        $consulta = $conexion->prepare($sentencia);
        $consulta->bind_param("s",  $cadena);
        $consulta->bind_result($alumno, $asignatura, $nota);
        $consulta->execute();

        while($consulta->fetch()){
            echo " $alumno - $asignatura - $nota<br>";
        }

        $conexion->close();
    }
}
?>
</html>