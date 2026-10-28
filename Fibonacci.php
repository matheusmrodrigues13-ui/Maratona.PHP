<?php 
$a = 0;
$b = 1;
$temp = 0;

echo "Sequência:" . "<br>";

for ($a = 1; $a <= 10; $a++) {
    echo "$a" . "<br>";
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}