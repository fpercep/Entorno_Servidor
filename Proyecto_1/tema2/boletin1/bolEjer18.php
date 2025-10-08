<!doctype html>
<html lang="en">
<?php
    $insti = ["Titular" => "Titular1", "Autor" => "Autor1", "Genero" => "Genero1", "Anio" => "Anio1", "Imagen" => "bolEjer17/img/F0000002736_pino_planta_soria_natural.jpg.jpg"];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div>

        <?php
            echo "<h2>$insti[Titular]</h2>";
            echo "<img src='$insti[Imagen]' alt='$insti[Autor]' width='225' height='225'>";
            echo "<br/> <p> <b>Genero:</b> $insti[Genero]</p>";

        ?>
    </div>


</body>
</html>