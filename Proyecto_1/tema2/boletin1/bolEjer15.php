<!doctype html>
<html lang="es">
<?php
$numeros = array(3, 2, 8, 123, 5, 1);
sort($numeros);
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
        <td><?php echo $numeros[0] ?></td>
        <td><?php echo $numeros[1] ?></td>
        <td><?php echo $numeros[2] ?></td>>
        <td><?php echo $numeros[3] ?></td>
        <td><?php echo $numeros[4] ?></td>
        <td><?php echo $numeros[5] ?></td>
    </tr>
</table>
</body>
</html>
