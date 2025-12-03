<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<br>
<form method="GET" action="">
    <label for="dia1">Día Fecha 1:</label>
    <input id="dia1" name="dia1" type="number" required>
    <label for="mes1">Mes Fecha 1:</label>
    <input id="mes1" name="me1s" type="number" required>
    <label for="anio1">Anio Fecha 1:</label>
    <input id="anio1" name="anio1" type="number" required>
    <br><br>
    <label for="dia2">Día Fecha 2:</label>
    <input id="dia2" name="dia1" type="number" required>
    <label for="mes2">Mes Fecha 2:</label>
    <input id="mes2" name="me1s" type="number" required>
    <label for="anio2">Anio Fecha 2:</label>
    <input id="anio2" name="anio2" type="number" required>
    <br><br>
    <input name="enviar" type="submit">
</form>

<?php
    if (isset($_GET['dia1'], $_GET['mes1'], $_GET['anio1'], $_GET['dia2'], $_GET['mes2'], $_GET['anio2'])) {
        $fecha1 = mktime(0, 0, 0, $_GET['mes1'], $_GET['dia1'], $_GET['anio1']);
        $fecha2 = mktime(0, 0, 0, $_GET['mes2'], $_GET['dia2'], $_GET['anio2']);
        if ($fecha1 !== false && $fecha2 !== false) {
            echo "Todo bien";
        }else{
            echo "Una de la fechas es incorrecta";
        }
    }

?>
</body>
</html>