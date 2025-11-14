<?php

$fecha = date("w");
$fin_semana = false;
echo "Hoy es ";
switch ($fecha) {
    case 0:
        echo "Domingo";
        $fin_semana = true;
        break;
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        $fin_semana = true;
        break;
}

echo "\n";
if ($fin_semana) {
    echo "Es fin de semana";
} else {
    echo "No es fin de semana";
}