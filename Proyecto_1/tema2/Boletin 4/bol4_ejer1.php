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
    <?php
    $numeros = [];
    $frecuencia = array_fill(1, 15, 0);
    for ($i = 0; $i < 30; $i++) {
        $numeros[] = rand(1, 15);
    }
    foreach ($numeros as $numero) {
        $frecuencia[$numero] += 1;
    }
    asort($frecuencia);
    $contador = 1;
    foreach ($frecuencia as $numero => $veces) {
        echo "<tr>";
        if ($contador == 1) {
            echo "<td>$numero (Menor): $veces </td>";
        } elseif ($contador == count($frecuencia)) {
            echo "<td>$numero (Mayor): $veces </td>";
        } else {
            echo "<td>$numero: $veces </td>";
        }
        $contador ++;
        echo "</tr>";
    } ?>
</table>
</body>



