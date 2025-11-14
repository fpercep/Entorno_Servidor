<!doctype html>
<html lang="en">
<?php
$x = 2;
$y = 4;
$z = 65;
$nArray = array($x, $y, $z, $x + $y, $y * $z, $x / $y, $x + $y + $z, ($y + $z) / $x);
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
        <th>Posición 0:</th>
        <td>
            <?php
            echo $nArray[0] ?>
        </td>
    </tr>
    <tr>
        <th>Posición 1:</th>
        <td>
            <?php
            echo $nArray[1] ?>
        </td>
    </tr>
    <tr>
        <th>Posición 2:</th>
        <td>
            <?php
            echo $nArray[2] ?>
        </td>
    </tr>
    <tr>
        <th>Posición 3:</th>
        <td>
            <?php
            echo $nArray[3] ?>
        </td>
    </tr>
    <tr>
        <th>Posición 4:</th>
        <td>
            <?php
            echo $nArray[4] ?>
        </td>
    </tr>    <tr>
        <th>Posición 5:</th>
        <td>
            <?php
            echo $nArray[5] ?>
        </td>
    </tr>
    <tr>
        <th>Posición 6:</th>
        <td>
            <?php
            echo $nArray[6] ?>
        </td>
    </tr>
    <tr>
        <th>Posición 7:</th>
        <td>
            <?php
            echo $nArray[7] ?>
        </td>
    </tr>
</table>
</body>
</html>