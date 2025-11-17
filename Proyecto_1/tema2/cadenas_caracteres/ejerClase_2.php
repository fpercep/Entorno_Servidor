<?php
$matriz = ["Perro", "Gato123@", "gallina123"];
foreach ($matriz as $key => $value) {
    echo "$value \n";
    if (preg_match("'[A-Z]+[0-9]+[a-z]+'", $value)) {
        echo "Cumple";
    }
}