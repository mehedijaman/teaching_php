<?php 

	$first_name  = '';
	$last_name   = 'Jaman';


	// if (!is_null($name)) {
	// 	echo "This is not a  null value";
	// }
	// else
	// 	echo "This is null value";

	if (!is_null($first_name) xor !is_null($last_name)){
		echo $first_name.' '. $last_name;
	}
	else{
		echo "Null value";
	}

	// =
	// ===

	// AND 
	// 0 0 -> 0
	// 0 1 -> 0
	// 1 0 -> 0
	// 1 1 -> 1

	// OR
	// 0 0 -> 0
	// 0 1 -> 1
	// 1 0 -> 1
	// 1 1 -> 1

	// NOT
	// 0 -> 1
	// 1 -> 0

	// XOR
	// 0 0 -> 1
	// 0 1 -> 0
	// 1 0 -> 0
	// 1 1 -> 1

	// XNOR
	// 0 0 -> 0
	// 0 1 -> 1
	// 1 0 -> 1
	// 1 1 -> 0