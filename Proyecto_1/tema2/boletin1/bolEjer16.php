<?php
$nArray = [
  5 => 1, 12 => 2, 13 => 56, "x" => 42
];

print_r($nArray);
echo count($nArray);
unset($nArray[5]);
print_r($nArray);
unset($nArray);