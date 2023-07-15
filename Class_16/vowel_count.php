<?php 

	$name = 'City Polytechnic Institute Khulna';
	$array = str_split($name);
	$arr_size = sizeof($array);

	$vowel_count = 0;
	$vowels = ['a','e','i','o','u','A','E','I','O','U'];
	$vowel_size = sizeof($vowels);

	for($i = 0; $i < $arr_size; $i++)
	{
		for($j = 0; $j < $vowel_size; $j++)
		{
			if($vowels[$j] == $name[$i])
				$vowel_count++;
		}
	}


	echo $vowel_count;