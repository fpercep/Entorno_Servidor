<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        .frio {
            background: blue;
        }
        .bien {
            background: green;
        }
        .calor {
            background: red;
        }
    </style>
</head>
<body>

<?php
 $color = "x";
    $temp = rand(0, 30);
    if ($temp < 10) {
        $color = "frio";
    } else if ( $temp <= 25) {
        $color = "bien";
    } else{
        $color = "calor";
    }
 ?>

<div class="<?php echo $color?>">
    <?php echo $temp?>
</div>
</body