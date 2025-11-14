<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000;
        }

        table td,
        table th,
        table tr {
            border: 1px solid #000;
            padding: 8px;
        }

        table th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
<?php
$edad = 20;
$es_estudiante = true;
$tiene_dni = false;
$mensaje = "";

if ($edad > 18 && $tiene_dni == true && $edad < 25) {
    $mensaje = "Tiene más de 18, DNI y es menor de 25";
} else if ($edad > 18 && $tiene_dni == true) {
    $mensaje = "Tiene más de 18 y DNI";
} else {
    $mensaje = "No tiene 18 o no tiene DNI";
}
?>

<p><?php echo  $mensaje?></p>
</body>
</html>

