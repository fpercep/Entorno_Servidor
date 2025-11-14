<?php

$academia = [
    "Curs1" => [
        "Alum1" => [
            ["nombre" => "leng", "nota" => "2", "numFaltas" => "19"],
            ["nombre" => "mat", "nota" => "2", "numFaltas" => "19"],
        ],
    ]
];

foreach ($academia as $curso => $alumnos) {
    echo "$curso \n";
    foreach ($alumnos as $alumno => $asignaturas) {
        echo "$alumno";
    }
}