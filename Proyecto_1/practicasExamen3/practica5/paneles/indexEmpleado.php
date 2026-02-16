<?php
include '../sesiones.php';
session_start();
if (sesionIniciada()) {
    if ($_SESSION["rol"] !== "empleado") {
        $panelCorrecto = "index" . ucfirst($_SESSION["rol"]) . ".php";
        header('Location:' . $panelCorrecto);
        exit();
    }
} else {
    header('Location: ../login.php');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>

<body>

</body>

</html>