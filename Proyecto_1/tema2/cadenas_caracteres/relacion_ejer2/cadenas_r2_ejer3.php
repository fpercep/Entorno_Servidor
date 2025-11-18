<!doctype html>
<html lang="en">
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
            padding: 8px;
        }

        table tr {
            border: 1px solid black;
        }

        table td {
            background-color: #e39863;
            color: #000000;
        }

        table th {
            background-color: #97643f;
            color: white;
        }

        .incorrecto {
            color: red;
        }

        .correcto {
            color: green;
        }
    </style>
</head>
<body>
<?php
$usuario = [
        ["usuario" => "Nombre1", "contraseña" => "Nombre1"],
        ["usuario" => "Nombre2", "contraseña" => "Nombre1"],
        ["usuario" => "Nombre3", "contraseña" => "Nombre1"],
        ["usuario" => "Nombre4", "contraseña" => "Nombre1"],
        ["usuario" => "Nombre5", "contraseña" => "Nombre1"],
        ["usuario" => "Nombre6", "contraseña" => "Nombre1"],
];
?>
<table>
    <tr class="">
        <th>
            USUARIOS
        </th>
        <th>
            Contraseña
        </th>
        <th>
            Estado
        </th>
    </tr>
    <?php
    foreach ($usuario as $key => $value) {
        $correcto = "correcto";
        if (!strcasecmp($value["usuario"], $value["contraseña"])) {
            $correcto = "incorrecto";
        }
        $passwordCesurada = str_pad("", strlen($value["contraseña"]), '*');
        echo "<tr>";
        echo "<td>";
        echo $value["usuario"];
        echo "</td>";
        echo "<td>";
        echo $passwordCesurada;
        echo "</td>";
        echo "<td class=\"$correcto\">";
        echo strtoupper($correcto);
        echo "</td>";
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>
