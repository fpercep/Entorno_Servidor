<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style></style>
</head>
<body>
<?php
function contar_letra($palabra, $letra, $casesensitive)
{
    $output = null;
    if (is_string($palabra)) {
        if ($casesensitive) {
            $output = substr_count($palabra, $letra);
        } else {
            $output = substr_count(strtolower($palabra), strtolower($letra));
        }
    }
    return $output;
}

$cadena = "PaPA Va pA la cASA";
$resulado = contar_letra($cadena, "A", true);
echo $resulado;
?>
</body>

