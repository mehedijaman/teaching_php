<?php 
	$number = 13;

	for($i = $number -1; $i > 1; $i--)
	{
		if($number % $i == 0)
		{
			$prime = 0;
			break;
		}
		else
		{
			$prime = 1;
		}
	}

	if ($prime == 1) {
		echo "This is a prime number";
	}
	else
	{
		echo "Not  Prime";
	}
 ?>