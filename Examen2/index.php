<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<!--Mi problema fue con las clase, no el resto del tema-->
<?php
include "Analizable.php";
include "Vehiculo.php";
include "Ruta.php";
include "RutaUrbana.php";
$veh1 = new Vehiculo ("Orbea", "Urban 100", "1234 ABC");
$veh2 =  new Vehiculo ("Toyota", "Proace", "5678 DEF");
$veh3 =  new Vehiculo ("Renault", "Kangoo E-Tech", "9012 GHI");
$veh4 =  new Vehiculo ("Mercedes", "eSprinter", "3456 JKL");
$veh5 =  new Vehiculo ("Seat", "Mii Electric", "7890 MNO");
$rutas = [];

$informe []= new RutaUrbana("Ana López", $veh1, "2025-01-20", "09:15", 45, 12, 40, ["Centro", "Norte"]);
$informe []= new RutaUrbana ("Carlos Ruiz", $veh2, "2025-01-20", "11:30", 60, 18, 70, ["Centro", "Polígono"], false);
$informe []= new RutaUrbana ("Ana López", $veh2, "2025-01-21", "16:30", 80, 48, 60, ["Ciudad A"], false);
$informe []= new RutaUrbana ("Luis Gómez", $veh1, "2025-01-22", "10:10", 50, 14, 65, ["Puerto"], true);
$informe []= new RutaUrbana ("María Torres", $veh3, "2025-01-22", "08:00", 30, 10, 55, ["Centro"], true);
$informe []= new RutaUrbana  ("Pedro Sánchez", $veh4, "2025-01-23", "12:45", 95, 52, 80, ["Polígono", "Sur"], false);
$informe []= new RutaUrbana  ("Lucía Martín", $veh5, "2025-01-23", "17:20", 40, 9, 30, ["Norte"], false);
$informe []= new RutaUrbana  ("María Torres", $veh3, "2025-01-24", "09:10", 70, 33, 72, ["Centro", "Este"], true) ;
$informe []= new RutaUrbana  ("Pedro Sánchez", $veh4, "2025-01-24", "14:00", 120, 60, 90, ["Ciudad A", "Sur"], false);
$informe []= new RutaUrbana  ("Lucía Martín", $veh5, "2025-01-25", "07:50", 55, 22, 65, ["Puerto", "Norte"], false);
?>

<table>
    <tr>
        <th>Conductor</th>
        <th>Vehículo</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Duración</th>
        <th>Distancia</th>
        <th>Carga</th>
        <th>Eficiencia</th>
        <th>Impacto</th>
    </tr>
    <?php
            foreach ($informe as $ruta) {
                echo "<tr>";
                echo "<td>" . $ruta->conductor . "</td>";
                    echo "<td>" . $ruta->vehiculo . "</td>";
                    echo "<td>" . $ruta->hora . "</td>";
                    echo "<td>" . $ruta->distancia . "</td>";
                    echo "<td>" . $ruta->cargas . "</td>";
                    echo "<td>" . $ruta->calcularEficiencia() . "</td>";
                    echo "<td>" . $ruta->nivelImpacto() . "</td>";
                echo "</tr>";
            }
    ?>
</table>
</body>
</html>
