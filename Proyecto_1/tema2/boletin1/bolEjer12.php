<!doctype html>
<html lang="en">
<?php
$nArray = array("nombre" => "Nombre","apellido" => "Apellidos","edad" => "Edad","salario" => "Salario","fecha" => "Fecha Nacimiento");
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
        <th>0</th>
        <td>
            <?php
            echo $nArray["nombre"] ?>
        </td>
    </tr>
    <tr>
        <th>1</th>
        <td>
            <?php
            echo $nArray["apellido"] ?>
        </td>
    </tr>
    <tr>
        <th>2</th>
        <td>
            <?php
            echo $nArray["edad"] ?>
        </td>
    </tr>
    <tr>
        <th>3</th>
        <td>
            <?php
            echo $nArray["salario"] ?>
        </td>
    </tr>
    <tr>
        <th>4</th>
        <td>
            <?php
            echo $nArray["fecha"]
            ?>
        </td>
    </tr>

</table>
</body>
</html>