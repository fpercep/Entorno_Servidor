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
    <div>
        <h2>Par:</h2>
        <?php
        for ($i = 1; $i <= 50; $i++) {
            if($i % 2 == 0){
                echo " $i";
            }
        }
        ?>
    </div>
    <div>
        <h2>Impar</h2>
        <?php
        for ($i = 1; $i <= 50; $i++) {
            if($i % 2 != 0){
                echo " $i";
            }
        }
        ?>
    </div>

</body>
</html>