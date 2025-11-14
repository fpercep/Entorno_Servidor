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
$matriz_ventas = [
        "martes" => ["patatas" => ["precio" => 2, "cantidad" => 4], "manteca" => ["precio" => 1, "cantidad" => 18]],
        "miercoles" => [
                "pimientos" => ["precio" => 2, "cantidad" => 4],
                "carcoles" => ["precio" => 1, "cantidad" => 18],
        ],

];
$matriz_alamacen = [
        "lacteos" => [
                "Estanteria1" => ["leche" => ["cantida"=> 12, "info"=> "tex1"], "yogurt" => ["cantida"=> 12, "info"=> "tex1"]],
                "Estanteria2" => ["queso" => ["cantida"=> 12, "info"=> "tex1"], "mayonesa" => ["cantida"=> 12, "info"=> "tex1"]],
                "Estanteria3" => ["manteca" => ["cantida"=> 12, "info"=> "tex1"], "pLeche6" => ["cantida"=> 12, "info"=> "tex1"]],
        ],
        "verdura" => [
                "Estanteria1" => ["v1" => ["cantida"=> 12, "info"=> "tex1"], "v2" => ["cantida"=> 12, "info"=> "tex1"]],
                "Estanteria2" => ["v3" => ["cantida"=> 12, "info"=> "tex1"], "v4" => ["cantida"=> 12, "info"=> "tex1"]],
                "Estanteria3" => ["v5" => ["cantida"=> 12, "info"=> "tex1"], "v6" => ["cantida"=> 12, "info"=> "tex1"]],
        ],

]

?>
<table>
    <?php
    $totalesXdia = [];
    foreach ($matriz_ventas as $dia => $ventas) {
        $totalDia = 0;
        echo "<tr>";
        echo "<th rowspan='3'>$dia</th>";
        echo "<th>Producto</th>";
        echo "<th>Precio</th>";
        echo "<th>Cantidad</th>";
        echo "<th>Total</th>";
        echo "<th></th>";
        echo "</tr>";
        foreach ($ventas as $producto => $datos) {
            echo "<tr>";
            echo "<td>$producto</td>";
            $totalProducto = 1;
            foreach ($datos as $elemento => $valor) {
                echo "<td>$valor</td>";
                $totalProducto = $totalProducto * $valor;
            }
            echo "<td>$totalProducto</td>";
            $totalDia += $totalProducto;
            echo "</tr>";
        }
        $totalesXdia [] = ["$dia", "$totalDia "];
    }
    ?>
</table>
<br/>
<table>
    <tr>
        <td colspan="2">Mejor/es Día/s
        </td>
    </tr>
    <tr>
        <td>Día</td>
        <td>Total</td>
    </tr>
    <?php
    $mayorVentaXdia = [];
    $mayor = PHP_INT_MIN;
    for ($i = 0; $i < count($totalesXdia); $i++) {
        if ($totalesXdia[$i][1] > $mayor) {
            $mayorVentaXdia = [];
            $mayorVentaXdia [] = [$totalesXdia[$i][0], $totalesXdia[$i][1]];
            $mayor = $totalesXdia[$i][1];
        } elseif ($totalesXdia[$i][1] == $mayor) {
            $mayorVentaXdia [] = [$totalesXdia[$i][0], $totalesXdia[$i][1]];
        }
    }
    for ($i = 0; $i < count($mayorVentaXdia); $i++) {
        echo "<tr>";
        echo "<tr/>";
        echo "<td>" . $mayorVentaXdia[$i][0] . "</td>";
        echo "<td>" . $mayorVentaXdia[$i][1] . "</td>";
    }
    ?>
</table>

<br/>
<table>
    <tr>
        <th>Almacen</th>
    </tr>
    <?php
    //Me puse nervioso al pricipio y eso hizo que patinar más.
    //He parado a mitad del ejercicios porque si no incrusto la pantalla en la pared o me dejaba el nudillo en la pared
    ?>

</table>
</body>
</html>