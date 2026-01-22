<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="trimestre">Introduce un Trimestre:</label>
    <select name="trimestre">
        <option value="1">Primero</option>
        <option value="2">Segundo</option>
    </select>
    <br/><br/>
    <input name="enviar" type="submit">
</form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["trimestre"])) {
        $conexion = new mysqli("localhost", "root", "", "centro");
        $conexion->set_charset('utf8');
        $trimestre = $_POST["trimestre"];


        $sentencia = "SELECT 
            alu.nombre, 
            COUNT(m.codigo) AS num_asignaturas, 
            AVG(m.nota) AS nota_media
        FROM alumnos alu
        INNER JOIN matriculas m ON alu.dni = m.dni
        INNER JOIN asignaturas asi ON m.codigo = asi.codigo
        WHERE asi.trimestre = ? 
        GROUP BY alu.dni, alu.nombre
        HAVING COUNT(m.codigo) > 1";

        $consulta = $conexion->prepare($sentencia);
        $consulta->bind_param("i", $trimestre);
        $consulta->bind_result($alumno, $numAsignaturas, $media);
        $consulta->execute();
        $consulta->store_result();
        if ($consulta->num_rows > 0) {
            while($consulta->fetch()){
                echo " $alumno - $numAsignaturas - $media<br>";
            }
        }else{
            echo "No hay alumnos asignados";
        }
        $conexion->close();
    }
}

?>
</html>