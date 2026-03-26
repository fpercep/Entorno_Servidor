<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
include("Electrico.php");
include("Hidrogeno.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $coches = ["Electrico" => [], "Hidrogeno" => []];
    $campos = ["datos_raw", "min-valor", "max_valor"];
    $extras = $_POST["extras"];
    $error = false;
    foreach ($campos as $campo) {
        if (isset($_POST[$campo]) && !empty(trim($_POST[$campo]))) {
            $error = true;
        }
    }

    if (!$error) {
        $registros = explode("#", $extras);
        foreach ($registros as $registro) {
            $datos = explode("|", $registro);
            $tipo = $datos[0];

            $id = $datos[1];
            $nom = $datos[2];
            $marca = $datos[3];
            $fecha = $datos[4];
            $kilometraje = $datos[5];

            if ($tipo == "HI") {
                $coches["Hidrogeno"][] = new Hidrogeno($id, $nom, $marca, $fecha, $kilometraje, $extras);
            } elseif ($tipo == "EL") {
                $coches["Hidrogeno"][] = new Hidrogeno($id, $nom, $marca, $fecha, $kilometraje, $extras);
            }
        }

    }
}
?>

</body>
</html>