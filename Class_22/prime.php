<?php
	$number = 16;

	if($number <= 1)
	{
		$prime = 0;
	}
	else
	{
		$prime = 0;

		for($i = 2; $i < $number; $i++)
		{
			if($number % $i  == 0){
				$prime = 0;
				break;
			}
			else
				$prime = 1;
		}
	}


	if($prime)
		echo "This is a prime number";
	else
		echo "This is not a prime number";