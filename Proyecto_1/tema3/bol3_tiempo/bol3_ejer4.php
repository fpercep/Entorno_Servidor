<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
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
        if (!empty($_GET['dia1']) &&!empty($_GET['mes1']) &&!empty($_GET['anio1'])) {
            if (checkdate($_GET['mes1'], $_GET['dia1'], $_GET['anio1'])){
                $fecha = mktime(0, 0, 0, $_GET['mes1'], $_GET['dia1'], $_GET['anio1']);
                echo pagoRetraso($fecha);
            }
        }

        function pagoRetraso($fecha) : float {
            $output = 0;
            if ($fecha < time()) {
                $output = (($fecha - time()) / (60*60*24)) * 3;
            }
            return $output;
        }
    ?>
</body>
</html>