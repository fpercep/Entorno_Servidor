<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input name="nombre" type="text">
    <input name="enviar" type="submit">
</form>

<?php
if(isset($_GET["nombre"])){
    $nombre = $_GET["nombre"];
    echo "Hola, $nombre";
}

?>
</body>
</html>
