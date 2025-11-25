<?php

if (isset($_GET['cantidad'], $_GET['moneda'])) {
    $cantidad = $_GET['cantidad'];
    $moneda = $_GET['moneda'];
    switch ($moneda) {
        case 'not':
            $moneda = "?";
            break;
        case 'dol':
            $moneda = "$";
            break;
        case 'lib':
        case 'est':
            $moneda = "£";
            break;
        case 'yen':
            $moneda = "¥";
            break;
    }
    echo "Cantidad: $cantidad $moneda";
}
