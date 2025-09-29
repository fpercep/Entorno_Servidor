<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table {
            border: 1px brown;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>Operación</td>
        <td>Valor</td>
        <td>Tipo</td>
    </tr>
    <?php
    $var1 = 12;
    $var2 = 3;
    $suma = $var1 + $var2;
    $resta = $var1 - $var2;
    $multi = $var1 * $var2;
    $division = $var1 / $var2;
    $resto = $var1 % $var2;
    ?>
    <tr>
        <td>Suma</td>
        <td><?php echo $suma ?></td>
        <td><?php echo gettype($suma) ?></td>
    </tr>
    <tr>
        <td>Resta</td>
        <td><?php echo $resta ?></td>
        <td><?php echo gettype($resta) ?></td>
    </tr>
    <tr>
        <td>Multiplicación</td>
        <td><?php echo $multi ?></td>
        <td><?php echo gettype($multi) ?></td>
    </tr>
    <tr>
        <td>División</td>
        <td><?php echo $division ?></td>
        <td><?php echo gettype($division) ?></td>
    </tr>
    <tr>
        <td>Resto</td>
        <td><?php echo $resto ?></td>
        <td><?php echo gettype($resto) ?></td>
    </tr>
</table>
</body>
</html>
