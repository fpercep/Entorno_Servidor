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
$suma = $n1 + $n2;
$resta = $n1 - $n2;
$multi = $n1 * $n2;
$divi = $n1 /$n2;

echo "
    <table border='1'>
    <tr>
        <td>Opereación</td>
        <td>Restulado</td>
        <td>Operación</td>
        <td>Resultado</td>
    </tr>
    <tr>
        <td>$n1+$n2</td>
        <td>$suma</td>
        <td>$n1*$n2 </td>
        <td> $multi</td>
    </tr>
    <tr>
        <td>$n1-$n2 </td>
        <td>$resta</td>
        <td> $n1/$n2</td>
        <td>$divi</td>
    </tr>
</table>
    ";
?>


</body>
</html>


