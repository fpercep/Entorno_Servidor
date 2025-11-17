<?php
$matriz = ["Perro", "Gato123", "gallina123"];
foreach ($matriz as $key => $value) {
    echo "$value \n";
    if (preg_match("'^[A-Z][a-z]{2,}[1-9]{3}'", $value)) {
        echo "Cumple";
    }
}