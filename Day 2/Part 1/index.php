<?php

$input = file_get_contents('input.txt');
$values = explode(',', $input);

for($idx = 0; $idx < count($values) - 1; $idx += 4) {
	$opcode = $values[$idx];

	if($opcode == 99) {
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

echo $values[0];