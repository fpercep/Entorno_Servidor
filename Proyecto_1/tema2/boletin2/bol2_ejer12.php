<?php
$juan = [ "M1" => rand(1,10), "M2"=> rand(1,10), "M3"=> rand(1,10), "M4"=> rand(1,10), "M5"=> rand(1,10) ];
$media = 0;
foreach ($juan as $modulo => $nota) {
    $media +=  $nota;
    echo "$modulo: $nota \n";
}
$media = $media /count($juan);
echo "Media: $media";