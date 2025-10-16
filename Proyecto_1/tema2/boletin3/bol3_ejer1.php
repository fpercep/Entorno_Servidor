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
        table th{
            padding: 8px;
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
    // Generar números aleatorios
    $numeros = [];
    for ($i = 0; $i <= 12 ; $i++) {
         $numeros[] = mt_rand(0, 100);
        }
    // Designar Mayor/Menor
    $mayor = PHP_INT_MIN;
    $menor = PHP_INT_MAX;
    foreach ($numeros as $numero) {
        if ($numero > $mayor) {
            $mayor = $numero;
        }
        if ($numero < $menor) {
            $menor = $numero;
        }
    }
    ?>
    <tr>
        <th> Vector original </th>
        <th> <?php
            foreach ($numeros as $numero) {
                    echo $numero . "-";
            }
            ?></th>
    </tr>
    <tr>
        <td>
            Mayor
        </td>
        <td>
            <?php echo $mayor; ?>
        </td>
    </tr>
    <tr>
        <td>
            Menor
        </td>
        <td>
            <?php echo $menor; ?>
        </td>
    </tr>
    <tr>
        <td>
            Vector Inverso
        </td>
        <td>
            <?php
            $numeros_Reversed = array_reverse($numeros);
            foreach ($numeros_Reversed as $numero) {
                echo $numero . "-";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Vector Inverso
        </td>
        <td>
            <?php
            foreach ($numeros_Reversed as $numero) {
                echo $numero . "-";
            }
            ?>
        </td>
    </tr>
</table>
</body>
