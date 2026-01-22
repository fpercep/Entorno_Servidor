<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="datos_raw">Introduce los datos de la flota:</label><br>
    <textarea name="datos_raw" rows="10" cols="50" placeholder="TIPO|ID|NOMBRE|FECHA|KM#..."></textarea>
    <br><br>

    <fieldset>
        <legend>Filtros de KM</legend>
        Mínimo: <input type="number" name="km_min" value="0">
        Máximo: <input type="number" name="km_max" value="100000">
    </fieldset>
    <br>

    <fieldset>
        <legend>Equipamiento Extra</legend>
        <input type="checkbox" name="extras[]" value="GPS"> GPS
        <input type="checkbox" name="extras[]" value="Sensor de carril"> Sensor de carril
        <input type="checkbox" name="extras[]" value="Cámara 360"> Cámara 360
        <input type="checkbox" name="extras[]" value="ABS"> ABS
    </fieldset>
    <br>

    <input type="submit" name="enviar" value="Generar Informe">
</form>
</body>
<?php
require_once('Certificable.php');
require_once('Vehiculo.php');
require_once('Electrico.php');
require_once('Hidrogeno.php');

if (!empty($_POST['datos_raw'])) {
    // 1. Capturamos los extras seleccionados en el formulario [cite: 1613]
    $extrasFormulario = isset($_POST['extras']) ? $_POST['extras'] : [];

    $informe = [
            "ELECTRICO" => ["OPTIMO"=> [], "REVISION" => []],
            "HIDROGENO"=> ["OPTIMO" => [], "REVISION" => []]
    ];

    $vehiculos = explode("#", $_POST['datos_raw']);
    foreach ($vehiculos as $vehiculo) {
        $parametros = explode("|", $vehiculo);

        // Verificación básica para evitar errores de índice si la línea está mal formada
        if (count($parametros) < 5) continue;

        if ($parametros[4] >= $_POST['km_min'] && $parametros[4] <= $_POST['km_max']) {
            $tipo = Vehiculo::formatearCodigo($parametros[0]);

            // 2. Determinamos la clase a instanciar [cite: 1624]
            if ($tipo == 'EL') {
                $objeto = new Electrico($parametros[1], $parametros[2], $parametros[3], $parametros[4], $extrasFormulario);
                // 3. Umbral de salud >= 75
                $estado = ($objeto->calcularSalud() >= 75) ? "OPTIMO" : "REVISION";
                // 4. Añadimos al array con [] para no sobrescribir [cite: 1622]
                $informe["ELECTRICO"][$estado][] = $objeto;
            } elseif ($tipo == 'HI') {
                $objeto = new Hidrogeno($parametros[1], $parametros[2], $parametros[3], $parametros[4], $extrasFormulario);
                $estado = ($objeto->calcularSalud() >= 75) ? "OPTIMO" : "REVISION";
                $informe["HIDROGENO"][$estado][] = $objeto;
            }
        }
    }

    // --- BLOQUE DE IMPRESIÓN ---
    foreach ($informe as $categoria => $estados) {
        echo "<h1>Categoría: $categoria</h1>";
        foreach ($estados as $estadoSalud => $listaVehiculos) {
            echo "<h2>Estado: $estadoSalud</h2>";
            foreach ($listaVehiculos as $v) {
                echo "<p>" . $v . "</p>";
                echo "<ul>";
                echo "<li>Salud: " . $v->calcularSalud() . "%</li>";
                echo "<li>Autonomía: " . $v->calcularAutonomia() . " km</li>";
                echo "<li>Certificación: " . $v->obtenerEtiqueta() . "</li>";
                echo "</ul><hr>";
            }
        }
    }
    echo "<h3>Total de vehículos válidos: " . Vehiculo::$contador . "</h3>";
}
?>
</html>