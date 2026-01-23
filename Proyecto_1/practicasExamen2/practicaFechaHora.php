<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="dia"></label>
    <input type="number" name="dia">
    <label for="mes"></label>
    <input type="number" name="mes">
    <label for="anio"></label>
    <input type="number" name="anio">
    <input type="submit" value="">
</form>

<?php

    if (!empty($_POST['dia']) && !empty($_POST['mes']) && !empty($_POST['anio'])) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];

        $fecha= new DateTime("$dia/$mes/$anio");
        echo mayorEdad($fecha) ? "Si" : "NO";
    }

    function mayorEdad($fecha) : bool
    {
        $ahora= new DateTime();
        $anios = date_diff($fecha, $ahora)->y;
        return $anios >= 18;
    }

    function esCumpleanios($fecha)
    {
        $ahora= new DateTime();
        return $ahora->format('m-d') == $fecha->format('m-d');
    }
?>
</body>
</html>
