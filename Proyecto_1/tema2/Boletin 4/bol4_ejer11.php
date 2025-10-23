<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        .suspenso {
            background-color: red;
            color: white;
        }

        table {
            border-collapse: collapse;
            border: 1px solid #803f97;
        }

        table td,
        table th {
            padding: 8px;
            text-align: center;
            border: 1px solid #803f97;

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
<?php
$alumnos = [
        "Lucía" => [
                "DWES" => [6, 7, 8],
                "DWEC" => [7, 5, 6],
                "DIW" => [8, 9, 9],
                "IngPro" => [7, 6, 8],
                "OpDAW" => [8, 7, 9],
                "Inglés" => [6, 8, 7],
                "PIDAW" => [10, 9, 10]
        ],
        "Carlos" => [
                "DWES" => [4, 3, 5],
                "DWEC" => [3, 4, 2],
                "DIW" => [5, 4, 3],
                "IngPro" => [4, 3, 4],
                "OpDAW" => [3, 4, 3],
                "Inglés" => [5, 4, 3],
                "PIDAW" => [4, 3, 4]
        ],
        "Elena" => [
                "DWES" => [9, 10, 9],
                "DWEC" => [10, 9, 10],
                "DIW" => [9, 10, 9],
                "IngPro" => [10, 9, 10],
                "OpDAW" => [9, 10, 9],
                "Inglés" => [10, 9, 10],
                "PIDAW" => [9, 10, 10]
        ],
        "Mondongo" => [
                "DWES" => [9, 10, 9],
                "DWEC" => [10, 9, 10],
                "DIW" => [9, 10, 9],
                "IngPro" => [10, 9, 10],
                "OpDAW" => [9, 10, 9],
                "Inglés" => [10, 9, 10],
                "PIDAW" => [9, 10, 10]
        ],
        "David" => [
                "DWES" => [7, 6, 8],
                "DWEC" => [6, 7, 5],
                "DIW" => [8, 7, 6],
                "IngPro" => [7, 6, 7],
                "OpDAW" => [6, 7, 6],
                "Inglés" => [7, 6, 7],
                "PIDAW" => [8, 7, 6]
        ],
        "Ana" => [
                "DWES" => [5, 6, 4],
                "DWEC" => [6, 5, 7],
                "DIW" => [4, 5, 6],
                "IngPro" => [5, 6, 5],
                "OpDAW" => [6, 5, 4],
                "Inglés" => [5, 6, 5],
                "PIDAW" => [4, 5, 6]
        ],
        "Pablo" => [
                "DWES" => [2, 3, 4],
                "DWEC" => [3, 2, 3],
                "DIW" => [4, 3, 2],
                "IngPro" => [3, 4, 2],
                "OpDAW" => [2, 3, 4],
                "Inglés" => [3, 2, 3],
                "PIDAW" => [4, 3, 2]
        ],
        "Marta" => [
                "DWES" => [8, 9, 7],
                "DWEC" => [9, 8, 9],
                "DIW" => [7, 8, 9],
                "IngPro" => [8, 9, 7],
                "OpDAW" => [9, 8, 9],
                "Inglés" => [7, 8, 9],
                "PIDAW" => [8, 9, 7]
        ],
        "Sergio" => [
                "DWES" => [5, 4, 6],
                "DWEC" => [4, 5, 3],
                "DIW" => [6, 5, 4],
                "IngPro" => [5, 4, 5],
                "OpDAW" => [4, 5, 6],
                "Inglés" => [5, 4, 5],
                "PIDAW" => [6, 5, 4]
        ],
        "Laura" => [
                "DWES" => [9, 8, 10],
                "DWEC" => [8, 9, 7],
                "DIW" => [10, 9, 8],
                "IngPro" => [9, 8, 10],
                "OpDAW" => [8, 9, 7],
                "Inglés" => [10, 9, 8],
                "PIDAW" => [9, 10, 8]
        ]
];
?>
<table>
    <tr>
        <th>
        </th>
        <th>
        </th>
        <th>
            Primer Trimestre
        </th>
        <th>
            Segundo Trimestre
        </th>
        <th>
            Tercero Trimestre
        </th>
        <th>
            Media
        </th>
    </tr>
    <?php
    $mediasXAlumnos = [];
    foreach ($alumnos as $alumno => $asignaturas) {
        echo "<tr>";
        $media_total = 0;
        echo "<td rowspan='8'>$alumno</td>";
        foreach ($asignaturas as $asignatura => $notas) {
            echo "<tr>";
            echo "<td>$asignatura</td>";
            $media = 0;
            $contador_media = 0;
            foreach ($notas as $nota) {
                echo "<td>$nota</td>";
                $media += $nota;
                $contador_media++;
            }
            $media = $media / $contador_media;
            $media_total += $media;
            $media = number_format($media, 2);
            if ($media < 5) {
                echo "<td class='suspenso'>$media</td>";
            } else {
                echo "<td>$media</td>";
            }
            echo "</tr>";
        }
        $media_total = $media_total / 7;
        $mediasXAlumnos[] = [$alumno, $media_total];
        echo "</tr>";
    }
    ?>
</table>
<?php
$mediaMayor = [""];
$maxMedia = PHP_INT_MIN;

foreach ($mediasXAlumnos as $alumnoData) {
    if ($alumnoData[1] > $maxMedia) {
        unset($mediaMayor);
        $mediaMayor [] = [$alumnoData[0], $alumnoData[1]];
        $maxMedia = $alumnoData[1];
    } elseif ($alumnoData[1] == $maxMedia) {
        $mediaMayor [] = [$alumnoData[0], $alumnoData[1]];
    }
}
?>
<br/>
<table>
    <tr>
        <th colspan="2">Mejor/es Alumno/s</th>
    </tr>
    <?php
        foreach ($mediaMayor as $alumnoMedia) {
            echo "<tr>";
            echo "<td>$alumnoMedia[0]</td>";
            echo "<td>$alumnoMedia[1]</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
