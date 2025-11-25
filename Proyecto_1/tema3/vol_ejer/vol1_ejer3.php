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
        $numeros = [$_GET["numero1"], $_GET["numero2"], $_GET["numero3"]];
        sort($numeros);
        echo "$numeros[0] - $numeros[1] - $numeros[2]";
    }
    ?>
</table>
</body>
</html>
