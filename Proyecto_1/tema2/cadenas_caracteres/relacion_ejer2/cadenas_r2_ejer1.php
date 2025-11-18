<?php
function contarLetrasPalabra($cadena)
{
    /*$letras = [
        'a' => 0,
        'b' => 0,
        'c' => 0,
        'd' => 0,
        'e' => 0,
        'f' => 0,
        'g' => 0,
        'h' => 0,
        'i' => 0,
        'j' => 0,
        'k' => 0,
        'l' => 0,
        'm' => 0,
        'n' => 0,
        'o' => 0,
        'p' => 0,
        'q' => 0,
        'r' => 0,
        's' => 0,
        't' => 0,
        'u' => 0,
        'v' => 0,
        'w' => 0,
        'x' => 0,
        'y' => 0,
        'z' => 0,
    ];*/
    $letras = array_fill_keys(range('a', 'z'), 0);
    for ($i=0; $i < strlen($cadena) ; $i++) {
        $letras[$cadena[$i]]++;
    }
    return $letras;
}

$cadena1 = "Mi mamá me mima";

$cadena2 = "Quiero mucho a mi mamá";

$arrayCadenas = [$cadena1, $cadena2];
$unionCadenas = implode(". ", $arrayCadenas);
