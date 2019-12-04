<?php

$input = file_get_contents('input.txt');
$input = explode(',', $input);

while($values[0] != 19690720) {
	$values = $input;
	for($idx = 0; $idx < count($values) - 1; $idx += 4) {
		$opcode = $values[$idx];

		if($opcode == 99) {
			if($input[2] < 99) {
				$input[2]++;
			} else {
				$input[1]++;
				$input[2] = 0;
			}
			break;
		}

		$value_1 = $values[$values[$idx + 1]];
		$value_2 = $values[$values[$idx + 2]];

		if($opcode == 1) {
			$values[$values[$idx + 3]] = $value_1 + $value_2;
		}

		if($opcode == 2) {
			$values[$values[$idx + 3]] = $value_1 * $value_2;
		}
	}
}


echo 100 * $values[1] + $values[2];