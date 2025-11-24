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
            background-color: #ffeee0;
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
    <input name="enviar" type="submit">
</form>
<br>
<table>
    <?php
    if (isset($_GET["numero1"], $_GET["numero2"])) {
        if ($_GET["numero1"] > $_GET["numero2"]) {
            $menor = $_GET["numero2"];
            $mayor = $_GET["numero1"];
        }else {
            $menor = $_GET["numero1"];
            $mayor = $_GET["numero2"];
        }
        for ($i = $menor; $i <= $mayor; $i++) {
            echo "<tr> <td>$i</td><tr>";
        }
    }
    ?>
</table>
</body>
</html>
