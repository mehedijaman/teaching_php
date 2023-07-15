<?php
	// $odd_numbers = [];
	// $even_numbers = [];

	// for ($i=0; $i <= 100; $i++) { 
	// 	if ($i%2 == 0) {
	// 		array_push($even_numbers,$i);
	// 	}
	// 	else{
	// 		array_push($odd_numbers,$i);
	// 	}
	// }

	// echo "Odd Numbers are <br>------------<br>";
	// foreach($odd_numbers as $number)
	// 	echo $number.'<br>';

	// echo "Even Numbers are <br>------------<br>";
	// foreach($even_numbers as $number)
	// 	echo $number.'<br>';

	$numbers = [];

	for($i = 0; $i <= 100; $i++){
		if ($i%5 == 0) {
			array_push($numbers,$i);
		}
	}

	foreach($numbers as $number)
		echo $number."<br>";


	1. Input your name. Reverse the letters.
		Input - Mehedi 
		Output - ideheM
	2. Input a number. Identify if is a palindrome or not.
		Input - 666  - 666  - Palindrome
		Input - 341  - 143  - Not Palindrome