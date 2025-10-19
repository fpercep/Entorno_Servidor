<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid #803f97;
        }

        table td,
        table th {
            padding: 8px;
            text-align: center;
        }

        table tr {
            border: 1px solid #803f97;
            padding: 8px;
        }

        table td {
            color: #000000;
        }

        table th {
            background-color: #803f97;
            color: white;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>Nombre</td>
        <td>Total</td>
    </tr>
    <?php
    $jugadores = [
            [
                    'nombre' => 'Ana',
                    'partida1' => 10,
                    'partida2' => 15,
                    'partida3' => 20
            ],
            [
                    'nombre' => 'Luis',
                    'partida1' => 20,
                    'partida2' => 25,
                    'partida3' => 30
            ],
            [
                    'nombre' => 'Marta',
                    'partida1' => 15,
                    'partida2' => 10,
                    'partida3' => 5
            ],
    ];

    //Calcular Promedio
    $total_jugadores = [];
    foreach ($jugadores as $jugador) {
        $total = 0;
        foreach ($jugador as $partido => $valor) {
            if (is_numeric($valor)) {
                $total += $valor;
            }
        }
        $total_jugadores [] = ["nombre" => $jugador["nombre"], "total" => $total];
    }
    asort($total_jugadores);
    foreach ($total_jugadores as $jugador ) {
        echo "<tr>";
        echo "<td>" . $jugador["nombre"] . "</td>";
        echo "<td>" . $jugador["total"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>