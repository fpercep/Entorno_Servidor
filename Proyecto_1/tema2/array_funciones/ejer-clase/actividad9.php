<?php
$lista = [2, 3, 4, 5 ,1, 7, 3 ,6];
$menor = PHP_INT_MAX;
for ($i = 0; $i < count($lista); $i++) {
    if ($lista[$i] < $menor) {
        $menor = $lista[$i];
    }
}
echo "$menor\n";