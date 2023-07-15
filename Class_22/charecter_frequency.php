<?php
	$string = "He didn't understand.";
	$charater = 'd';

	$string = str_split($string);
	$size = sizeof($string);

	$counter = 0;

	for($i = 0; $i < $size; $i++)
	{
		if($string[$i] == $charater)
			$counter++;
	}

	echo $counter;