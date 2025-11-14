<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid #803f97;
        }

        table td,
        table th {
            padding: 8px;
            text-align: center;
        }

        table tr {
            border: 1px solid #803f97;
            padding: 8px;
        }

        table td {
            color: #000000;
        }

        table th {
            background-color: #803f97;
            color: white;
        }
    </style>
</head>
<body>
<?php
$alumnos = [
        "Antonio" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],
        "Ana" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],
        "Benito" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],
        "Joaquin" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],
        "Pepe" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],
        "Paco" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],
        "Manuel" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],
        "Adri" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],
        "Ale" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],
        "Sancho" => [
                "Matemáticas" => rand(0, 10),
                "Lengua" => rand(0, 10),
                "Ciencias Naturales" => rand(0, 10),
                "Geografía" => rand(0, 10),
        ],

];
?>
<table>
    <tr>
        <th> Alumno</th>
        <th> Matemáticas</th>
        <th> Lengua</th>
        <th> Ciencias Naturales</th>
        <th> Geografía</th>
        <th> Media</th>
    </tr>
    <?php
    foreach ($alumnos as $alumno => $asignaturas) {
        $media = 0;
        $contador = 0;
        echo "<tr>";
        echo "<td>";
        echo "$alumno";
        echo "</td>";
        foreach ($asignaturas as $asignatura => $valor) {
            echo "<td>";
            echo $valor;
            echo "</td>";
            $media += $valor;
            $contador ++;
        }
        $media = $media / $contador;
        echo "<td>";
        echo $media;
        echo "</tr>";
    }
    ?>
</table>

</body>
