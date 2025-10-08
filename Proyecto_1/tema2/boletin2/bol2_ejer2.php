<?php
$edad = rand(0, 100);
echo "$edad \n";
if ($edad >= 65){
    echo "Jubilado";
} elseif ($edad >= 18) {
    echo "Adulto";
} elseif ($edad >= 13 && $edad <= 17) {
    echo "Adolescente";
} elseif ($edad >= 0 && $edad <= 12){
    echo "Niño";
} else {
    echo "Entrada erronea";
}
