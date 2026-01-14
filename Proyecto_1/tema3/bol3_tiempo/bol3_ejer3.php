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
    <label for="dia1">Dia:</label>
    <input id="dia1" name="dia1" type="number" required>
    <label for="mes1">Mes:</label>
    <input id="mes1" name="mes1" type="number" required>
    <label for="anio1">Año:</label>
    <input id="anio1" name="anio1" type="number" required>

    <input name="enviar" type="submit">
</form>

<?php
if (isset($_GET['dia1'], $_GET['mes1'], $_GET['anio1'])) {
    $fecha = mktime(0, 0, 0, $_GET['mes1'], $_GET['dia1'], $_GET['anio1']);
    echo mayorEdad($fecha) ? "Mayor" : "Menor";
    cumpleanio($fecha);
}

function mayorEdad($fecha) : bool
{
    //Mi solución:
    //$hoy = time();
    //$diferencia = abs($fecha - $hoy) / (60*60*24*365.25);

    //Mejor solución (con metodo antiguo):
    $fNac = (int)date('Ymd', $fecha);
    $fHoy = (int)date('Ymd');
    // $20251229 - 19900515 = 350714
    // 350714/10.000 = 35.0714 (La edad exacta teniendo en cuenta los años bisiestos, sin margen de error)
    $diferencia = ($fHoy - $fNac) / 10000;
    return ($diferencia >= 18);
}
function cumpleanio($fecha): void
{
    $hoyDiaMes = date("d-m");
    $fechaDiaMes = date("d-m", $fecha);

    if ($hoyDiaMes == $fechaDiaMes) {
        echo "¡Felicidades, hoy es su cumpleaños!";
    }
}
?>
</body>
</html>