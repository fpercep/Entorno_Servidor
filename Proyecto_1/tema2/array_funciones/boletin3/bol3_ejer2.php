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
        }

        table tr {
            border: 1px solid #6a973f;
            padding: 8px;
        }

        table td {
            color: #000000;
        }

        table th {
            background-color: #6a973f;
            color: white;
        }
    </style>
</head>
<body>
<?php
$ciudades = [
        'Granada' => 150000,
        'Madrid' => 3000000,
        'Barcelona' => 2879200,
        'Málaga' => 240000,
        'Sevilla' => 500000,
        'Valencia' => 1584600,
        'Tarragona' => 485210,
];
?>
<table>

    <tr>
        <th> Ciudad(nombre_posición)</th>
        <th> Población (contenido)</th>
    </tr>
    <?php
    ksort($ciudades);
    foreach ($ciudades as $nombre => $valor) {
        echo "<tr>";
        echo "<td> $nombre </td>";
        echo "<td> $valor </td>";
        echo "</tr>";
    }
    ?>
</table>
<br/>
<table>
    <tr>
        <th> Ciudad(nombre_posición)</th>
        <th> Población (contenido)</th>
    </tr>
    <?php
    arsort($ciudades);
    foreach ($ciudades as $nombre => $valor) {
        echo "<tr>";
        echo "<td> $nombre </td>";
        echo "<td> $valor </td>";
        echo "</tr>";
    }
    ?>
</table>
</body>

