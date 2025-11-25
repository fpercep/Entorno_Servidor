<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input name="num1" type="number">
    <input name="num2" type="number">
    <input name="enviar" type="submit">
</form>

<?php
if (isset($_GET["num1"]) && isset($_GET["num2"]) && $_GET["num2"] != 0 && $_GET["num1"] != "" && $_GET["num2"] != "") {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $divi = $num1 / $num2;
    $multi= $num1 * $num2;
    echo "$num1 + $num2 = " . $suma . "<br/>";
    echo "$num1 - $num2 = " . $resta. "<br/>";

    echo "$num1 * $num2 = " . $multi. "<br/>";
    echo "$num1 / $num2 = " . $divi. "<br/>";
}
?>
</body>
</html>
