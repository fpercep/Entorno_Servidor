<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <br/>
        <label for="archivo">Introduce un pdf:</label>
        <input name="archivo" type="file" accept=".application/pdf, .pdf">
        <br/><br/>
        <label for="nombre">Introduce un nuevo nombre:</label>
        <input name="nombre" type="text">
        <input name="enviar" type="submit">
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_FILES['archivo'], $_FILES['nambre'])) {
     $archivo = $_FILES['archivo']["name"];
}}
?>
</html>
