<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000;
        }

        table td,
        table th,
        table tr {
            border: 1px solid #000;
            padding: 8px;
        }

        table th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
<table>
    <?php
        $nArray = array("León", "Seat", null, 2500, "V6");
        $nMap = array("nombre" => "Léon", "marca" => "Seat", "fecha" => null, "cc" => 2600, "motor" => "V6")
    ?>
    <tr>
        <td>  </td>
        <td>Nombre</td>
        <td>Léon</td>
        <td>Marca</td>
        <td>Fecha</td>
        <td>Motor</td>
    </tr>
    <tr>
        <td>Posicional</td>
        <td><?php echo $nArray[0]?></td>
        <td><?php echo $nArray[1]?></td>
        <td><?php echo $nArray[2]?></td>
        <td><?php echo $nArray[3]?></td>
        <td><?php echo $nArray[4]?></td>
    </tr>
    <tr>
        <td>Asociativos</td>
        <td><?php echo $nMap['nombre']?></td>
        <td><?php echo $nMap['marca']?></td>
        <td><?php echo $nMap['fecha']?></td>
        <td><?php echo $nMap['cc']?></td>
        <td><?php echo $nMap['motor']?></td>

    </tr>
</table>
</body>
</html>

