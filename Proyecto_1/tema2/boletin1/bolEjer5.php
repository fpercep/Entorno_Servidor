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
    $num = 0;
    $vacio = null;
    ?>
    <tr>
        <td><?php echo $num ?></td>
        <td><?php echo empty($num) ?></td>
        <td> <?php
            if (empty($num)) {
                echo "Vacio";
            } else {
                echo "No vacio";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo $vacio ?></td>
        <td><?php echo empty($vacio) ?></td>
        <td> <?php
            if (empty($vacio)) {
                echo "Vacio";
            } else {
                echo "No vacio";
            }
            ?>
        </td>
    </tr>
</table>

<?php
unset($num)
?>
</body>
</html>
