<?php

	// $number = 40;
	$data = 40;

	// var_dump($number);

	$type =  gettype($data);

	// if ($type == 'integer') {
	// 	echo "This is integer value";
	// }
	// else
	// 	echo "This is not integer value";

	$type == 'integer' ? $value='Integer Value' : $value = "Not Integer";


	// (int)$a = 10;
	// (string)$b = 10;

	// if ($a === $b) {
	// 	echo "Equal";
	// }
	// else
	// 	echo "Not equal";

	$x = array(
		"a" => "red", 
		"b" => "green"
	);

	$y = array(
		"a" => "red", 
		"b" => "green"
	);


	$names = array('Mehedi','Enamul','Ferdows','Zahid');
	// print_r($names);
	echo $names[3];

	echo "<br>";

	$names1 = array(
		'person1' => [
			'first_name' => 'Mehedi',
			'last_name'  => 'Jaman',
			'phone' 	 => '019',
			'address'    => [
				'thana' => 'Shyamnagar',
				'zilla' => 'Satkhira',
			],
		],
		'person2' =>  [
			'first_name' => 'Enamul',
			'last_name'  => 'Sheikh',
			'phone' 	 => '019',
			'address'    => [
				'thana'  => 'Shyamnagar',
				'zilla'  => 'Satkhira',
			],
		],
		'person3' =>  [
			'first_name' => 'Ferdaws',
			'last_name'  => 'Sheikh',
			'phone' 	 => '019',
			'address'    => [
				'thana'  => 'Shyamnagar',
				'zilla'  => 'Satkhira',
			],
		],
		'person4' =>  [
			'first_name' => 'Zahid',
			'last_name'  => 'Dhali',
			'phone' 	 => '019',
			'address'    => [
				'thana'  => 'Shyamnagar',
				'zilla'  => 'Satkhira',
			],
		],
	);

	// var_dump($names1);

	echo $names1['person1']['address']['zilla'];

	// var_dump($x === $y);