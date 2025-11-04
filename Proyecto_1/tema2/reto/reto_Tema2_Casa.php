<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table, tr, td, th {
            border-collapse: collapse;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
<?php
$ventas = [
        "Lunes" => [
                ["nombre" => "p1", "precio" => 10, "unidades" => 12],
                ["nombre" => "p2", "precio" => 10 , "unidades" => 12],
        ],
        "Martes" => [
                ["nombre" => "p3", "precio" => 10, "unidades" => 12],
        ],
];

$alamcen = [
        "Frescos" => [
                "est1" => [
                        ["nombre" => "p1", "cantidad" => 10],
                        ["nombre" => "p2", "cantidad" => 10],
                ],
                "est2" => [
                        ["nombre" => "p1", "cantidad" => 10],
                ],
        ],
        "Panaderia" => [
                "est1" => [
                        ["nombre" => "p1", "cantidad" => 10],
                        ["nombre" => "p2", "cantidad" => 10],
                ],
        ],
];

function mostrarTablaVentas ($matriz_ventas)
{
    foreach ($matriz_ventas as $dia => $productos) {
        echo "<table>";
        echo "<tr>";
        echo "<th colspan='4'> Ventas ". $dia . "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> Nombre</th>";
        echo "<th> Precio</th>";
        echo "<th> Unidades</th>";
        echo "<th> Total Por Producto</th>";
        echo "</tr>";
        $totalDia = 0;
        foreach ($productos as $producto) {
            echo "<tr>";
            echo "<td>" . $producto["nombre"]. "</td>";
            echo "<td>" . $producto["precio"]. "</td>";
            echo "<td>" . $producto["unidades"]. "</td>";
            echo "<td>" . ($producto["unidades"] * $producto["precio"]). "</td>";
            $totalDia += ($producto["unidades"] * $producto["precio"]);
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td colspan='3'>Total</td>";
        echo "<td>" . $totalDia. "</td>";
        echo "</tr>";
        echo "</table>";
        echo "<br>";
    }
}


function mostrarMejorDia ($matriz_ventas){
    $mayor = PHP_INT_MIN;
    $mejoresDias = [];
    foreach ($matriz_ventas as $dia => $productos) {
        $totalDia = 0;
        foreach ($productos as $producto) {
            $totalDia += ($producto["unidades"] * $producto["precio"]);
        }
        if ($mayor < $dia) {
            $mejoresDias = [];
            $mejoresDias = [$dia, $totalDia];
            $mayor = $totalDia;
        } elseif ($mayor == $dia) {
            $mejoresDias [] = [$dia, $totalDia];
        }
    }
}

mostrarTablaVentas($ventas);

?>

</body>
</html>