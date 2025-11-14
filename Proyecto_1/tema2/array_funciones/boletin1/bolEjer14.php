<!doctype html>
<html lang="en">
<?php
$nArray = [
        "nombre" => "Juan",
        "familia" => "Pérez",
        "raza" => "Ratonero",
        "color" => "Oliva",
        "peso" => 130,
        "altura" => 220,
        "edad" => 27,
]; ?>
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
    <tr>
        <th>Nombre</th>
        <th>Familia</th>
        <th>Raza</th>
        <th>Color</th>
        <th>Peso</th>
        <th>Altura</th>
        <th>Edad</th>
    </tr>
    <tr>
        <td><?php
            echo $nArray["nombre"] ?></td>
        <td><?php
            echo $nArray["familia"] ?></td>
        <td><?php
            echo $nArray["raza"] ?></td>
        <td><?php
            echo $nArray["color"] ?></td>
        <td><?php
            echo $nArray["peso"] ?></td>
        <td><?php
            echo $nArray["altura"] ?></td>
        <td><?php
            echo $nArray["edad"] ?></td>
    </tr>
</table>
</body>
</html>