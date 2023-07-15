<?php 
	$number = 8789789;
	$last_digit = $number % 10;
	while($number >= 10)
		$number = (int)($number / 10);

	echo $number + $last_digit;