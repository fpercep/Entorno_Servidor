<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

</head>
<body>
<?php
$n1 = 25;
$n2 = 13;

$coc = $n1 / $n2;
$rest = $n1 % $n2;

echo "
    <table>
    <tr>
        <td>Dividendo</td>
        <td>Divisor</td>
        <td>Cociente</td>
        <td>Resto</td>
    </tr>
    <tr>
        <td>$n1</td>
        <td>$n2</td>
        <td>$coc</td>
        <td>$rest</td>
    </tr>
    </table>
    ";
?>
</body>
</html>

