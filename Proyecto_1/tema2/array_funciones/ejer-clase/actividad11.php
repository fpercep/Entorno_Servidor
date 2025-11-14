<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid #000;
        }

        table td,
        table th,
        table tr {
            border: 1px solid #f1f1f1;
            padding: 8px;
        }

        table td {
            background-color: #e39863;
            color: #000000;
        }

        table th {
            background-color: #97643f;
            color: white;
        }
    </style>
</head>
<body>
<table>
    <?php
    $nombres = ["cLAVE1" =>"pie", "cLAVE2" => "moto", "cLAVE3" => "coche"];
    echo "<tr>";
    foreach (array_keys($nombres) as $clave) {
            echo "<td>" . $clave . "</td>";
        }
    echo "</tr>";
    echo "<tr>";
    foreach (array_values($nombres) as $valor) {
            echo "<td>" . $valor . "</td>";
        }
    echo "</tr>";


    ?>
</table>
</body>
