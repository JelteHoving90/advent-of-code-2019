<?php

$fuel_sum = 0;
$handle = fopen("input.txt", "r");

if ($handle) {
    while (($line = fgets($handle)) !== false) {
    	$fuel_sub = intval($line); 
    	while(true) {
    		$fuel_sub = intval($fuel_sub / 3) - 2;
    		if($fuel_sub <= 0){
    			break;
    		}
    		$fuel_sum += $fuel_sub;
    	}
    }

    fclose($handle);
}

echo $fuel_sum;