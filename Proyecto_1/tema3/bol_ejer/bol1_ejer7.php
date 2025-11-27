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
    <input name="numero" type="number">
    <input name="enviar" type="submit">
</form>
<br>
    <?php
    if (isset($_GET["numero"])) {
        $numero = $_GET["numero"];
        $divisores = [];
        $primo  = false;
        for ($i = 1; $i <= $_GET["numero"]; $i++) {
            if ($numero % $i == 0) {
                $divisores[] = $i;
            }
        }
        if (count($divisores) > 2) {
            foreach ($divisores as $divisor) {
                echo $divisor . "<br>";
            };
        } else {
            echo "Es primo";
        }
    }
    ?>
</body>
</html>
