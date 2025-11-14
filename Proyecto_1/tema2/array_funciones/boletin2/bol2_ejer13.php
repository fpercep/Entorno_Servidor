<?php
$numeros = [rand(-100,100),rand(-100,100), rand(-100,100), rand(-100,100), rand(-100,100)];

$mayor = PHP_INT_MIN;
$menor = PHP_INT_MAX;
for ($i=0; $i < count($numeros) ; $i++) {
    if ($numeros[$i] > $mayor) {
        $mayor = $numeros[$i];
    }
    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    }
}
echo "Mayor: $mayor \n";
echo "Menor: $menor \n";