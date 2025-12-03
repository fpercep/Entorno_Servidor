<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form method="GET" action="">
    <label for="dia">Día:</label>
    <input id="dia" name="dia" type="number" required>
    <label for="mes">Mes:</label>
    <input id="mes" name="mes" type="number" required>
    <label for="anio">Anio:</label>
    <input id="anio" name="anio" type="number" required>
    <input name="enviar" type="submit">
</form>

<?php
//¿Por qué no usamos DateTime?
if (isset($_GET['dia'], $_GET['mes'], $_GET['anio'])) {
    $dia = $_GET['dia'];
    $mes = $_GET['mes'];
    $anio = $_GET['anio'];
    $fecha = mktime(0, 0, 0, $mes, $dia, $anio);
    if ($fecha !== false) {
        $dia_txt= "";
        switch(date('N', $fecha)) {
            case 1:
                $dia_txt = "Lunes";
                break;
            case 2:
                $dia_txt = "Martes";
                break;
            case 3:
                $dia_txt = "Miercoles";
                break;
            case 4:
                $dia_txt = "Jueves";
                break;
            case 5:
                $dia_txt = "Viernes";
                break;
            case 6:
                $dia_txt = "Sabado";
                break;
            case 7:
                $dia_txt = "Domingo";
                break;
        }
        echo $dia_txt;
    } else {
        echo "La fecha no es correcta o esta fuera de rango (1970-2038)";
    }
}
?>
</body>
</html>