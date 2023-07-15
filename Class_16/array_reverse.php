<?php

	echo $name = 'aiM unoM';

	$array = str_split($name);


	$size = sizeof($array);

	$rev_array = [];

	for($i = $size-1; $i >= 0; $i--)
	{
		array_push($rev_array, $array[$i]);
	}

	echo "<br>";
	
	for ($i=0; $i < $size ; $i++) { 
		echo $rev_array[$i];
	}

	// echo $name."<br>";
	// print_r($array);
	// echo "<br>";
	// print_r($rev_array);