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
    Nombre <input name="nombre" type="text">
    Nota Lengua <input name="leng" type="number">
    Nota Matemáticas <input name="mat" type="number">
    Nota Historia <input name="his" type="number">
    Nota Dibujo <input name="dibujo" type="number">


    <input name="enviar" type="submit">
</form>
<br>
<table>
    <?php
    if (isset($_GET["nombre"], $_GET["leng"], $_GET["mat"], $_GET["his"], $_GET["dibujo"])) {
        $notas = [
                "Alumno" => $_GET["nombre"],
                "Matemáticas" => $_GET["mat"],
                "Lengua" => $_GET["leng"],
                "Historia" => $_GET["his"],
                "Dibujo" => $_GET["dibujo"],
        ];

        foreach ($notas as $key => $value) {
            if($value < 0 || $value > 10){
                $notaTXT = "ERROR";
            }
            else if ($value < 5) {
                $notaTXT = "Suspenso";
            } elseif ($value < 7) {
                $notaTXT = "Bien";
            } elseif ($value < 9) {
                $notaTXT = "Notable";
            }else{
                $notaTXT = "Sobresaliente";
            }

            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $notaTXT . "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>

</body>
</html>
