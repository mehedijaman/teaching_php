<?php 
	$number = 61;
	$revnumber = 0;


	while( $number > 0)
	{
		$r = $number % 10;
		$revnumber = ($revnumber * 10) + $r;

		$number = (int)$number/10;
	}
	echo $revnumber;

	if ($number == $revnumber) {
		echo "This is a palindrome number";
	}

	
	// $number = 11.5;
	// echo $number;
	// echo (int)$number;