<?php
require_once "funciones.php";
require_once "Evento.php";
session_start();
$eventos = [];
if (isset($_SESSION["id"], $_SESSION["usuario"])) {
    $conexion = mysqli_connect("localhost", "root", "", "practica1-agenda");
    if (comprobarSesion($_SESSION["id"], $_SESSION["usuario"], $conexion)) {

    } else {
        header("location: login.php");
    }
    $conexion->close();
} else {
    header("location: login.php");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <button type="submit"></button>
    </form>
</body>
</html>