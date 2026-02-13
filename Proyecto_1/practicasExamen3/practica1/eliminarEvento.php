<?php
require_once "funciones.php";
require_once "Evento.php";
session_start();
if (isset($_SESSION["id"], $_SESSION["usuario"])) {
    $conexion = mysqli_connect("localhost", "root", "", "practica1-agenda");
    if (comprobarSesion($_SESSION["id"], $_SESSION["usuario"], $conexion)) {
        if (!empty($_GET["id"])) {
            eliminarEvento($_GET["id"], $_SESSION["id"], $conexion);
            header("location: index.php");
        }
    } else {
        header("location: login.php");
    }
    $conexion->close();
} else {
    header("location: login.php");
}