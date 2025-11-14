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
function contar_mayusculas($palabra)
{
    $output = null;
    if (is_string($palabra)) {
        for ($i = 0; $i < strlen($palabra); $i++) {
            if ($palabra[$i] >= 'A' && $palabra[$i] <= 'Z') {
                $output ++;
            }
        }
    }
    return $output;
}

function contar_mayusculas_op2($palabra)
{
    $output = null;
    $cadena_array = str_split($palabra);
    if (is_string($palabra)) {
        foreach ($cadena_array as $letra) {
            if ($letra >= 'A' && $letra <= 'Z') {
                $output ++;
            }
        }
    }
    return $output;
}

$cadena = "PaPA Va pA la cASA";
$resulado = contar_mayusculas_op2($cadena);
echo $resulado;
?>
</body>
