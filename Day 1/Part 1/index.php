<?php

$fuel_sum = 0;
$handle = fopen("input.txt", "r");

if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $fuel_sum += intval(intval($line) / 3) - 2;
    }

    fclose($handle);
}

echo $fuel_sum;