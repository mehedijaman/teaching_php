<?php

	// $n1 = 10;
	// $n2 = 15;
	// $n3 = 2;
	// $n4 = 2;

	// // if($n1 > $n2 && $n1 > $n3)
	// // 	echo $n1."is the biggest number";
	// // elseif($n2 > $n1 && $n2 > $n3)
	// // 	echo $n2."is the biggest number";
	// // else
	// // 	echo $n3." is the biggest number ";

	// if($n1 < $n2 && $n1 < $n3 && $n1 < $n4)
	// 	echo $n1."is the lowest number";
	// elseif($n2 < $n1 && $n2 < $n3 && $n2 < $n4)
	// 	echo $n2."is the lowest number";
	// elseif($n3 < $n1 && $n3 < $n2 && $n3 < $n4)
	// 	echo $n3."is the lowest number";
	// else
	// 	echo $n4." is the lowest number ";


	// $Name = "Mehedi Jaman";

	// $Count = strlen($Name);
	// echo $Count;

	// function sum($n1, $n2) //Parameter
	// {
	// 	$sum = $n1 + $n2;
	// 	echo "The result is :".$sum ;
	// }

	// function div($n1, $n2)
	// {
	// 	$result = $n1/$n2;

	// 	echo "The result of division is: ". $result;
	// }

	// sum(11,55);  //Argument
	// div(44,11);


	// function sum($n1 = 0, $n2 = 0, $n3 = 0, $n4 = 0, $n5 = 0)
	// {
	// 	$sum = $n1 + $n2 + $n3 + $n4 + $n5;
	// 	echo "The summation is : ".$sum;
	// }

	// sum(11,45);


	$age = 200;

	// using If-Else ladder
	// 0-11 child
	// 12 - 16 Teenager
	// 17 - 25 Young
	// 26 - 40 Adult
	// 41 - Old

	if($age >= 0 && $age <= 11)
		echo " Child";
	elseif($age >= 12 && $age <= 16)
		echo "Teenager";
	elseif($age >= 17 && $age <= 25)
		echo "Young";
	elseif($age >= 26 && $age <= 40)
		echo "Adult";
	elseif($age >= 41)
		echo "Old";
	else
		echo "The age is not valid";


	switch ($age) {
		case ($age >= 0 && $age <= 11):
			echo "Child";
			break;
		case ($age >= 12 && $age <= 16):
			echo "Teenager";
			break;
		case ($age >= 17 && $age <= 25):
			echo "Young";
			break;
		case ($age >= 26 && $age <= 40):
			echo "Adult";
			break;
		case ($age >= 41):
			echo "Old";
			break;
		default:
			echo "Invalid Age";
			break;
	}


