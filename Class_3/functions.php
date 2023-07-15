<?php

	// function enamul($name,$name2,$name3="Friend"){
	// 	echo "Hello {$name} {$name2} {$name3}";
	// 	// echo "Hello ".$name;

	// 	return null;
	// }


	// $name  = "Darkness";
	// $name2 = "My Old";
	// $name3 = "Enemy";

	// enamul($name,$name2,$name3);


	function sum($number1,$number2)
	{
		return $number1 + $number2;		
	}

	function oddoreven($number)
	{
		if($number%2 == 0)
			return "Even";
		else
			return "Odd";
	}

	// $summary = sum(12,14);
	// $result = oddoreven($summary);

	// echo $result;

	// echo oddoreven(sum(12,45));

	// $server = 'localhost';
	// $user   = 'root';
	// $pass   = '';
	// $db     = 'demo';

	// // $connection = mysqli_connect($server,$user,$pass,$db);

	// // $query = "select * from students";

	// mysqli_query(mysqli_connect($server,$user,$pass,$db),"select * from students");

	// $sub = function($number1,$number2){
	// 	return $number1 - $number2;
	// };

	// echo $sub(43,3);