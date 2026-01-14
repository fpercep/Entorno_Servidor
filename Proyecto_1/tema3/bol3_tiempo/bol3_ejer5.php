<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <style>
        fieldset {
            width: 200px;
        }
    </style>
</head>
<body>
<form method="GET" action="">
    <label for="dia1">Dia:</label>
    <input id="dia1" name="dia1" type="number" required>
    <label for="mes1">Mes:</label>
    <input id="mes1" name="mes1" type="number" required>
    <label for="anio1">Año:</label>
    <input id="anio1" name="anio1" type="number" required>
    <br>
    <br>
    <fieldset>
        <legend>Elige mes a mostar:</legend>
        <input type="checkbox" name="mesMostar" id="anterior">
        <label for="anterior">Anterior</label><br>
        <input type="checkbox" name="mesMostar" id="actual">
        <label for="actual">Actual</label><br>
        <input type="checkbox" name="mesMostar" id="siguente">
        <label for="actual">Siguiente</label><br>
    </fieldset>
    <br>
    <input name="enviar" type="submit">
</form>


<?php
if (!empty($_GET['dia1']) && !empty($_GET['mes1']) && !empty($_GET['anio1'])) {
    if (checkdate($_GET['mes1'], $_GET['dia1'], $_GET['anio1'])) {
        mostrarCalendario($_GET['mes1'], $_GET['dia1'], $_GET['anio1']);
    }
}

function mostrarCalendario($m, $d, $y): void
{
    $fecha = mktime(0, 0, 0, $m, $d, $y);
    $primeroMes = mktime(0, 0, 0, $m, 1, $y);
    $numeroDiasMes = date('t', $primeroMes);
    $primerDiaMes = date('N', $primeroMes);


    echo "<br><table border='1' style='border-collapse: collapse; text-align: center; width: 200px;'>";
    echo " <tr>
                <th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th>
            </tr>";
    echo "<tr>";
    for ($i = 1; $i < $primerDiaMes; $i++) {
        echo "<td></td>";
    }
    for ($i = 1; $i <= $numeroDiasMes; $i++) {
        $diaActual = mktime(0, 0, 0, $m, $i, $y);
        if ($diaActual == $fecha) {
            echo "<td><b>$i</b></td>";
        } else {
            echo "<td>$i</td>";
        }

        if (date('N', $diaActual) == 7) {
            echo "</tr><tr>";
        }
    }
    echo "</tr></table>";
}

?>
</body>
</html>

