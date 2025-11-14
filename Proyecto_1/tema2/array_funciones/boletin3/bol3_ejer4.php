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
<?php
$animales = [
    ["Nombre" => "Pepe", "Peso" => 4, "Color" => "Marrón", "Edad" => 12],
    ["Nombre" => "Sparky", "Peso" => 3, "Color" => "Blanco", "Edad" => 2],
    ["Nombre" => "Tobby", "Peso" => 7.2, "Color" => "Beige", "Edad" => 8],
    ["Nombre" => "Bigotes", "Peso" => 4, "Color" => "Negro", "Edad" => 9],
    ["Nombre" => "Ricky", "Peso" => 0.1, "Color" => "Verde", "Edad" => 2],
];
?>
<table>
    <tr>
        <th> Fila</th>
        <th> Nombre</th>
        <th> Peso</th>
        <th> Color</th>
        <th> Edad</th>
    </tr>
    <?php
    foreach ($animales as $animal => $valores) {
        echo "<tr>";
        echo "<td>";
        echo "$animal";
        echo "</td>";
        foreach ($valores as $valor) {
            echo "<td>";
            echo $valor;
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<br/>
<table>
    <tr>
        <th> Peso</th>
    </tr>
    <?php
    foreach ($animales as $animal => $valores) {
        if ($animal == 3) {
            echo "<tr>";
            echo "<td>";
            foreach ($valores as $clave => $valor) {
                if ($clave == "Peso") {
                    echo $valor;
                }
            }
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>

<br/>
<table>
    <tr>
        <th>Color</th>
    </tr>
    <?php
    foreach ($animales as $animal => $valores) {
        if ($valores["Nombre"] == "Sparky") {
            echo "<tr>";
            echo "<td>";
            foreach ($valores as $clave => $valor) {
                if ($clave == "Color") {
                    echo $valor;
                }
            }
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
</body>
