<?php 
	$number = "555";

	$array = str_split($number);
	$array_rev = [];

	$size = sizeof($array);

	for($i = $size - 1; $i >= 0; $i--){
		array_push($array_rev,$array[$i]);
	}

	if($array == $array_rev)
		echo 'Palindrome';

 ?>