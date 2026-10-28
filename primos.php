<?php

$num = 3;
if ($num/$num = 0) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $primo = false;
            break;
        }
    }
}
echo "$num é primo.\n";
?>