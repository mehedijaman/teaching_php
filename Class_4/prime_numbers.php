<?php

	$prime_numbers = [];

	for ($i = 1; $i < 100; $i++) {
		for ($j = 2; $j < $i ; $j++) { 
			if ($i % $j == 0) {
				$status = FALSE;
				break;
			}else{
				$status = TRUE;
			}
		}

		if($status == TRUE)
			array_push($prime_numbers,$i);
	}


	$size = sizeof($prime_numbers);

	for($i = 0; $i < $size; $i++){
		echo $prime_numbers[$i].'<br>';
	}