<?php
if (isset($_GET['nombre'], $_GET['edad'])) {
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    echo "Hola $nombre , tienes $edad años";
}
