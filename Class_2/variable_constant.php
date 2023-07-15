<?php 

	define("VALUE",40);

	$value = 40;

	// echo $value;

	$value = 50;

	// echo $value;

	// echo VALUE;

	$a  = 20;

	$a = $a ** 2;
	// Operator Precedency

	// settype($a,'float');

	// // var_dump($a);


	$number = 89.63;

	// $numberchar = settype($number,'string');
	// var_dump($numberchar);
	$numberchar = explode('.',$number);

	// var_dump($numberchar);

	$numberchar =  $numberchar[1];

	// echo $numberchar;

	if ($numberchar >= 50) {
		$number = ceil($number);
	}
	else
		$number = floor($number);


	echo $number;

	// echo floor($number);

	// $name = "Mehedi-Jaman";
	// // var_dump($name);
	// $name = explode("-", $name);

	// echo $name[1];

	







