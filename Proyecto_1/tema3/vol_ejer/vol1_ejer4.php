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
    </style>
</head>
<body>
<form action="" method="get">
    <input name="numero1" type="number">
    <input name="numero2" type="number">
    <input name="numero3" type="number">
    <input name="enviar" type="submit">
</form>
<br>
<table>
    <?php
    if (isset($_GET["numero1"], $_GET["numero2"], $_GET["numero3"])) {
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $numero3 = $_GET["numero3"];
        $suma = $numero1 + $numero2;
        $multi = $numero2 * $numero3;
        $div = $numero1 / $numero3;
        $sumaAll = $numero1 + $numero2 + $numero3;
        $ope = ($numero2 + $numero3) / $numero1;
        echo "<tr><th>Valor1 </th><td>$numero1</td></tr>";
        echo "<tr><th>Valor2 </th><td>$numero2</td></tr>";
        echo "<tr><th>Valor3 </th><td>$numero3</td></tr>";
        echo "<tr><th>Valor1 + Valor2 </th><td>$suma</td></tr>";
        echo "<tr><th>Valor3 * Valor2 </th><td>$multi</td></tr>";
        echo "<tr><th>Valor1 / Valor3 </th><td>$div</td></tr>";
        echo "<tr><th>valor1 + valor2 + valor3</th><td>$sumaAll</td></tr>";
        echo "<tr><th>(valor2 + valor3) / valor1</th><td>$ope</td></tr>";
    }
    ?>
</table>
</body>
</html>
