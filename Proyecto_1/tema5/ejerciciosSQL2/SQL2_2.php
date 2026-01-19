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
        $trimestre = $_POST["trimestre"];


        $sentencia = "
        SELECT alu.nombre, alu.edad, AVG(m.nota)
        FROM matriculas m
        INNER JOIN alumnos alu ON alu.dni = m.dni
        INNER JOIN asignaturas asi On asi.codigo = m.codigo
        GROUP BY m.dni;
        ";
    }
}

?>
</html>