<?php
	/* Decimal to Binary */
	// $number = 89;
	// $remainder_array = [];


	// while($number > 0){
	// 	$remainder = $number % 2;
	// 	array_push($remainder_array, $remainder);
	// 	$number = intval($number/2);
	// }

	// $remainder_array = array_reverse($remainder_array);


	// $size = sizeof($remainder_array);
	// $binary = '';

	// for ($i=0; $i < $size; $i++) { 
	// 	$binary = $binary.$remainder_array[$i];
	// }

	// echo $binary;


	/* Printing Array Elements using Loop */
	// $names = ['Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron','Mehedi','Jaman','Enamul','Ferdaws','Zahid','Somiron'];

	// $size = sizeof($names);

	// for ($i=0; $i < $size; $i++) { 
	// 	echo $names[$i].'<br>';
	// }


	$number = 101;
	$is_prime = TRUE;


	for ($i=2; $i < $number ; $i++) { 
		if($number%$i == 0){
			$is_prime = FALSE;
			break;
		}
	}

	if ($is_prime == TRUE)
		echo $number." is a prime number";
	else
		echo $number." is not a prime number";


	// print all prime numbers between 1 to 100.