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
            border: 1px solid #000000;
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
<?php
$usuario = ["Nombre1", "Nom&bre2", "Nom*bre3", "Nomb?re4", "Nombre5!",];
?>

<table>
    <tr class="">
        <th colspan="2">
            USUARIOS
        </th>
    </tr>
    <?php
    foreach ($usuario as $key => $value) {
        $correcto = "correcto";
        if (preg_match('/[&!?*]/', $value)) {
            $correcto = "incorrecto";
        }
        echo "<tr>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "<td class=\" $correcto  \">";
        echo $correcto;
        echo "</td>";
        echo "</tr>";

    }
    ?>
</table>
</body>
</html>
