<!doctype html>
<html lang="es">
<?php
$menuVegetariano_platos = ["plato1", "plato2", "plato3", "plato4"];
$menuCarnivoro_platos = ["plato1", "plato2", "plato3", "plato4"];
$menuInternacional_platos = ["plato1", "plato2", "plato3", "plato4"];

$menuVegetariano_precios = [1, 2, 3, 4];
$menuCarnivoro_precios = [1, 2, 3, 4];
$menuInternacional_precios = [1, 2, 3, 4];
?>
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
            border: 1px solid #f1f1f1;
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
    <div>
        <h2>Menú Vegetariano</h2>
        <div id="plato1">
            <h3><?php echo $menuVegetariano_platos[0]?></h3>
            Precio: <?php echo $menuVegetariano_precios[0]; ?>
            <br/>
            Foto:
            <br/>
            <img alt="" src="img/F0000002736_pino_planta_soria_natural.jpg.jpg" width="225" height="225">
        </div>
    </div>
</body>
</html>

