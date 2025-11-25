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
    <input name="nombre" type="text">
    <input name="edad" type="number">
    <input name="enviar" type="submit">
</form>
<br>
    <?php
    if (isset($_GET["nombre"], $_GET["edad"])) {
        $nombre = $_GET["nombre"];
        if ($_GET["edad"] < 18) {
            echo "$nombre es mejor de edad";
        }else {
            echo "$nombre es mayor de edad";
        }
    }
    ?>
</body>
</html>
