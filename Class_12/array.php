<?php
	$array = [47,50,49,58,51.52,56];

	// var_dump($array);
	// echo $array[1];
	// echo sizeof($array);
	// print_r($array);
	// print("Hello World");

	$size = sizeof($array);

	for($counter = 0; $counter < $size; $counter++)
	{
		echo "index:".$counter." = ".$array[$counter]."<br>";
	}