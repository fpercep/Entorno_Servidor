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
        <td>Valor</td>
        <td>Tipo</td>
    </tr>
    <?php
    $var1 = "123.45";
    ?>
    <tr>
        <td><?php  echo $var1 ?></td>
        <td><?php  echo gettype($var1) ?></td>
    </tr>
    <?php
    settype($var1, "float");
    ?>
    <tr>
        <td><?php  echo $var1 ?></td>
        <td><?php  echo gettype($var1) ?></td>
    </tr>
    <?php
    $var1 = "123.45";
    settype($var1, "integer");
    ?>
    <tr>
        <td><?php  echo $var1 ?></td>
        <td><?php  echo gettype($var1) ?></td>
    </tr>
    <?php
    $var1 = "123.45";
    settype($var1, "boolean");
    ?>
    <tr>
        <td><?php  echo $var1 ?></td>
        <td><?php  echo gettype($var1) ?></td>
    </tr>


</table>
</body>
</html>