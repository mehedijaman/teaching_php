<?php

	// $array1 = [3,5,8,9,12,45];
	// $array2 = [100,78,66,34];

	// $new_array = array_merge($array1,$array2);


	$array = [56,78,6,4, 1, 7, 90];

	print_r($array);
	echo "<br>";

	$size = sizeof($array);

	for($counter = 0; $counter < $size; $counter++){
		for($i = 0;  $i < $size-1; $i++)
		{
			if($array[$i] < $array[$i+1])
			{
				$temp = $array[$i];
				$array[$i] = $array[$i+1];
				$array[$i+1] = $temp;
			}
		}
	}

	print_r($array);

