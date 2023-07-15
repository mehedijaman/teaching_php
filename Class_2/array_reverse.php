<?php 

	$main_array = ['Mehedi','Ferdaws','Zahid','Enamul'];

	$size = sizeof($main_array);

	$sub_array1 = [];
	$sub_array2 = [];

	$new_array = [];

	for($i = $size/2-1; $i >= 0; $i--){
		array_push($sub_array1, $main_array[$i]);
	}

	for($i = $size-1; $i >= $size/2; $i--){
		array_push($sub_array2, $main_array[$i]);
	}

	// array_push($new_array,$sub_array1);
	// array_push($new_array,$sub_array2);

	// print_r($main_array); 
	// echo '<br>';
	// print_r($new_array);

	$new_array = array_merge($sub_array1,$sub_array2);

	// print_r($new_array);

	print_r(array_chunk($new_array, 3));