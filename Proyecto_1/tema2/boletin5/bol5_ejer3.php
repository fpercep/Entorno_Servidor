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
            border: 1px solid #803f97;

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
function contar_letra($palabra, $letra)
{
    $output = null;
    if (is_string($palabra)) {
        $output = substr_count($palabra, $letra);
    }
    return $output;
}

    $cadena = "Papa va pa la casa";
    $resulado = contar_letra($cadena, "a");
    echo $resulado;
?>
</body>
