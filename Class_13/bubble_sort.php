<?php

	$array = [56,120,89,96,76,102,105,45,89,54,2,6];

	print_r($array);

	$size = sizeof($array);

	for($i = 0; $i < $size-1; $i++)
	{
		if($array[$i] > $array[$i+1]){
			$temp = $array[$i+1];
			$array[$i+1] = $array[$i];
			$array[$i] = $temp;
		}
	}

	// echo $array[$size-1];
	echo "<br>";
	print_r($array);

