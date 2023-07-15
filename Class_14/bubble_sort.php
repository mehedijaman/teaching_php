<?php

	$array = [560,120,89,96,76,102,105,45,89,54,6,1];

	// print_r($array);

	$size = sizeof($array);

	for($i = 0; $i < $size; $i++)
	{
		for($j = $i+1; $j < $size; $j++)
		{
			if($array[$i] > $array[$j])
			{
				$temp = $array[$j];
				$array[$j] = $array[$i];
				$array[$i] = $temp;
			}
		}
	}

	print_r($array);
