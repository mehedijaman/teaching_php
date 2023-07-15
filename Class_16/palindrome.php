<?php
	$str = 'wow';
	$array = str_split($str);

	$rev_array = [];

	$status = 0;


	for($i = sizeof($array)-1; $i >= 0; $i--)
	{
		array_push($rev_array, $array[$i]);
	}

	for($i = 0; $i < sizeof($rev_array); $i++)
	{
		if($array[$i] != $rev_array[$i])
		{
			$status = 0;
			break;
		}
		else
			$status = 1;			
	}

	if ($status) {
		echo "Palindrome";
	}
	else
		echo " Not Palindrome";