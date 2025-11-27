<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input name="numero" type="number">
    <input name="enviar" type="submit">
</form>
<?php
if(isset($_GET["numero"])){
    $numero = $_GET["numero"];
    for ($i=1; $i <= 10; $i++) {
        echo "$numero elevado a $i = " .$numero ** $i . "<br>";
    }
}
?>
</body>
</html>
