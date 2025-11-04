<?php

$biblioteca = [
    "Finción" => [
        "libro1" => ["autor" => "A1", "año publicación" => "Añ1", "número ejemplares" => 1],
        "libro2" => ["autor" => "A1", "año publicación" => "Añ1", "número ejemplares" => 1],
    ],
    "No Finción" => [
        "libro1" => ["autor" => "A1", "año publicación" => "Añ1", "número ejemplares" => 1],
        "libro2" => ["autor" => "A1", "año publicación" => "Añ1", "número ejemplares" => 1],
    ],
];

foreach ($biblioteca as $categoria => $libros) {
    echo "$categoria \n";
    foreach ($libros as $libro => $datos) {
        echo "$libro -";
        foreach ($datos as $dato => $elemento) {
            echo " $dato: $elemento |";
        }
        echo "\n";
    }
    echo "\n";
}