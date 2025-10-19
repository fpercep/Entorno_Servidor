<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        .suspenso{
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
        foreach ($alumnos as $alumno => $asignaturas) {
            echo "<tr>";
            echo "<td rowspan='8'>$alumno</td>";
                    foreach ($asignaturas as $asignatura => $notas) {
                        echo "<tr>";
                        echo "<td>$asignatura</td>";
                        $media = 0;
                        $contador = 0;
                        foreach ($notas as $nota) {
                            echo "<td>$nota</td>";
                            $media += $nota;
                            $contador ++;
                        }
                        $media = number_format($media / $contador, 2);
                        if ($media < 5) {
                            echo "<td class='suspenso'>$media</td>";
                        } else {
                            echo "<td>$media</td>";
                        }
                        echo "</tr>";
                    }
            echo "</tr>";
        }
    ?>
</table>
</body>
