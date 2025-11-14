<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        tr, table, th, td {
        }
    </style>
</head>
<body>
<?php

$sonidoSur = [
        "Viernes" => [
                "escenario1" => [
                        ["cantante" => "P1", "hora" => "09:00", "publico" => 1200, "genero" => "G1"],
                        ["cantante" => "P2", "hora" => "09:00", "publico" => 1200, "genero" => "G2"],
                ],
                "escenario2" => [
                        ["cantante" => "P3", "hora" => "09:00", "publico" => 130, "genero" => "G3"],
                ],
        ],
        "Sabado" => [
                "escenario1" => [
                        ["cantante" => "P1", "hora" => "09:00", "publico" => 110, "genero" => "G1"],
                        ["cantante" => "P2", "hora" => "09:00", "publico" => 100, "genero" => "G2"],
                        ["cantante" => "P4", "hora" => "09:00", "publico" => 90, "genero" => "G4"],
                ],
        ],
        "Domingo" => [
                "escenario1" => [
                        ["cantante" => "P3", "hora" => "09:00", "publico" => 110, "genero" => "G3"],
                        ["cantante" => "P5", "hora" => "09:00", "publico" => 100, "genero" => "G5"],
                ],
        ],
];

function mostrarTabla($concierto)
{
    $mejoresDias = mejorDia($concierto);
    foreach ($concierto as $dia => $escenarios) {
        $total_asistencia = 0;
        $mejores = false;
        echo "<table>";
        echo "<tr>";
        //Final 1
        foreach ($mejoresDias as $mDia) {
            if ($mDia == $dia) {
                $mejores = true;
            }
        }
        if ($mejores) {
            echo "<th colspan='4'>$dia (Mejor)</th>";
        } else {
            echo "<th colspan='4'>$dia</th>";
        }
        echo "</tr>";
        echo "<tr>";
        echo "<th>escenario</th>";
        echo "<th>cantante</th>";
        echo "<th>hora</th>";
        echo "<th>genero</th>";
        echo "<th>asistencia</th>";
        echo "</tr>";
        foreach ($escenarios as $escenario => $actuaciones) {
            foreach ($actuaciones as $actuacion) {
                echo "<tr>";
                echo "<td>" . $escenario . "</td>";
                echo "<td>" . $actuacion["cantante"] . "</td>";
                echo "<td>" . $actuacion["hora"] . "</td>";
                echo "<td>" . $actuacion["genero"] . "</td>";
                echo "<td>" . $actuacion["publico"] . "</td>";
                $total_asistencia += $actuacion["publico"];
                echo "</tr>";
            }
        }
        echo "<tr>";
        echo "<td colspan='4'> Total asistencias</td>";
        echo "<td> $total_asistencia</td>";
        echo "</tr>";
        echo "</table>";
    }
}
function mejorDia($concierto)
{
    $mayor = PHP_INT_MIN;
    $mejoresDias = [];
    foreach ($concierto as $dia => $escenarios) {
        $publicoDia = 0;
        foreach ($escenarios as $escenario => $actuaciones) {
            foreach ($actuaciones as $actuacion) {
                $publicoDia += $actuacion["publico"];
            }
        }
        if ($publicoDia > $mayor) {
            $mayor = $publicoDia;
            $mejoresDias = [$dia];
        } else {
            if ($publicoDia == $mayor) {
                $mejoresDias [] = [$dia];
            }
        }
    }
    return $mejoresDias;
}
function mejorArtista($concierto)
{
    $mejoresActuaion = [];
    $mayor = PHP_INT_MIN;
    foreach ($concierto as $dia => $escenarios) {
        foreach ($escenarios as $escenario => $actuaciones) {
            foreach ($actuaciones as $actuacion) {
                if ($mayor < $actuacion["publico"]) {
                    $mayor = $actuacion["publico"];
                    $mejoresActuaion = [
                            [
                                    "nombre" => $actuacion["cantante"],
                                    "dia" => $dia,
                                    "escenario" => $escenario,
                                    "genero" => $actuacion["genero"],
                            ],
                    ];
                } elseif ($mayor == $actuacion["publico"]) {
                    $mejoresActuaion [] = [
                            "nombre" => $actuacion["cantante"],
                            "dia" => $dia,
                            "escenario" => $escenario,
                            "genero" => $actuacion["genero"],
                    ];
                }
            }
        }
    }
    return $mejoresActuaion;
}
function numeroArtistasYactuaciones($concierto)
{
    $nActuaciones = 0;
    foreach ($concierto as $dia => $escenarios) {
        foreach ($escenarios as $escenario => $actuaciones) {
            $nActuaciones += count($actuaciones);
        }
    }
    echo "Numero de actuciones: " . $nActuaciones;
    return $nActuaciones;
}
function infoArtista($concierto, $artista)
{
    $encontrado = false;
    foreach ($concierto as $dia => $escenarios) {
        foreach ($escenarios as $escenario => $actuaciones) {
            foreach ($actuaciones as $actuacion) {
                if ($actuacion["cantante"] == $artista) {
                    $encontrado = true;
                    echo $actuacion["cantante"] . "- Dia " . $dia . "- Escenario " . $escenario . "- Hora" . $actuacion["hora"] . " - Genero" . $actuacion["genero"] . " -Asistencias " .  $actuacion["publico"];
                    echo "<br>";
                }
            }
        }
    }
    if (!$encontrado) {
        echo "Artista no encontrado";
    }
}
function estadisticasConcierto($concierto)
{
    $totalAsistencia = 0;
    $numeroConciertos = 0;
    foreach ($concierto as $dia => $escenarios) {
        foreach ($escenarios as $escenario => $actuaciones) {
            $numeroConciertos += count($actuaciones);
            foreach ($actuaciones as $actuacion) {
                $totalAsistencia += $actuacion["publico"];
            }
        }
    }
    return ($totalAsistencia/$numeroConciertos);
}
function artistasSuperan1000($concierto){
    $conciertosM1000 = 0;
    foreach ($concierto as $dia => $escenarios) {
        foreach ($escenarios as $escenario => $actuaciones) {
            foreach ($actuaciones as $actuacion) {
                if($actuacion["publico"] > 1000){
                    $conciertosM1000 ++;
                }
            }
        }
    }
    echo $conciertosM1000 . " tubieron más de 1000 asistencias";
}

mostrarTabla($sonidoSur);
$mejores = mejorArtista($sonidoSur);
echo "<br/>";
echo "<table>";
echo "<tr>";
echo "<th colspan='4'>Mejor/es Cantante/s</th>";
echo "</tr>";
echo "<tr>";
echo "<th>nombre</th>";
echo "<th>dia</th>";
echo "<th>escenario</th>";
echo "<th>genero</th>";
echo "</tr>";
foreach ($mejores as $mejor) {
    echo "<tr>";
    echo "<td>" . $mejor["nombre"] . "</td>";
    echo "<td>" . $mejor["dia"] . "</td>";
    echo "<td>" . $mejor["escenario"] . "</td>";
    echo "<td>" . $mejor["genero"] . "</td>";
    echo "</tr>";
}
echo "<table>";
echo "<br>";
artistasSuperan1000($sonidoSur);

?>
</body>
</html>