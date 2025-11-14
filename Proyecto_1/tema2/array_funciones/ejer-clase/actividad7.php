<!doctype html>
<html lang="es">
<?php
$palabras = ["palabra1" => "valor1", "palabra2" => "valor2", "palabra3" => "valor3", "palabra4" => "valor4"];
?>
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
        <th>Posición</th>
        <th>Valor</th>
    </tr>
    <?php
        foreach ($palabras as $palabra => $valor) {
            echo "<tr>";
            echo "<td>$palabra</td>";
            echo "<td>$valor</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>