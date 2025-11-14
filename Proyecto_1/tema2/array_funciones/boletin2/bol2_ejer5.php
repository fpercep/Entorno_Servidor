<!doctype html>
<html lang="en">
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
<table>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            $n = $i * 10 + $j;
            echo "<td>$n</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>

