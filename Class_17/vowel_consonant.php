<?php

	$name = "City Polytechnic Institute";
	$array = str_split($name);
	$array_size = sizeof($array);

	$vowels = [];
	$consonants = [];

	$vw = ['a','e','i','o','u','A','E','I','O','U'];
	$vw_size = sizeof($vw);

	for($i = 0; $i < $array_size; $i++)
	{
		for($j = 0; $j < $vw_size; $j++)
		{
			if($array[$i] == $vw[$j]){				
				$vowel_status = 1;
				break;
			}
			else{
				$vowel_status = 0;
			}
		}


		if($vowel_status)
			array_push($vowels, $array[$i]);
		else
			array_push($consonants, $array[$i]);
	}

	for($i = 0; $i < sizeof($vowels); $i++)
	{
		echo $vowels[$i];
	}

	
	echo "<br>";
	for($i = 0; $i < sizeof($consonants); $i++)
	{
		echo $consonants[$i];
	}
	// echo "<br>";
	// print_r($consonants);
