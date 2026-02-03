<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <button type="submit">Enviar</button>
    <button name="elminar">Elminar Cookie</button>
</form>
<?php
if (isset($_POST['nombre'])) {
    setcookie("nombre", $_POST["nombre"], time() + (7 * 24 * 60 * 60));
    $nombre = $_COOKIE["nombre"];
}
if (isset($_COOKIE["nombre"])) {
    echo $_COOKIE["nombre"];
}
if (isset($_POST['eliminar'])) {
    setcookie("nombre", "", time() - 3600);
    unset($_COOKIE['nombre']);
}
?>
</body>
</html>
