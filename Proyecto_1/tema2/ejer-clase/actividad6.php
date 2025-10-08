<?php
$n1 = 150;
$n2 = 20;
$n3 = 1;
$mayor = 0;

if ($n1 > $n2 && $n1 > $n3) {
    $mayor = $n1;
} else if ($n2>$n3){
    $mayor = $n2;
} else{
    $mayor = $n3;
}
echo $mayor;