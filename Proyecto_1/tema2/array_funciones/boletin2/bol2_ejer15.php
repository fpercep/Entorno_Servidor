<?php
$matriz = [1, 2, 3, "perro", "gato", 12, 67];
$suma = 0;
$nNumero = 0;
foreach ($matriz as $valor) {
    echo "$valor \n";
    if (is_numeric($valor)) {
        $suma += $valor;
        $nNumero ++;
    }
}
$media = $suma / $nNumero;
echo "Suma: $suma \n";
echo "Media: $media \n";