<?php
$nota = rand(1, 10);
echo "$nota \n";
if ($nota >= 9) {
    echo "Sobresaliente";
} elseif ($nota > 6 ){
    echo "Notable";
} elseif ($nota > 4) {
    echo "Aprobado";
} else {
    echo "Supenso";
}