<?php

	$number = 100;

	// Number system
	// =================
	// 1. Binary 2 (0,1)
	// 2. Octal 8 (0-7)
	// 3. Decimal 10 (0-9)
	// 4. Hexa Decimal 16 (0-9 A-F)

	$last_digit = $number % 10;

	while($number >= 10)
	{
		$number = (int)($number / 10);
	}

	echo $last_digit + $number;