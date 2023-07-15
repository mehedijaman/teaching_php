<?php

	function calculate($n1 = 2, $n2 = 4)
	{

		// $sum = sum($n1, $n2);
		// $sub = sub($n1, $n2);
		// $mul = mul($n1, $n2);
		// $div = div($n1, $n2);


		echo sum($n1, $n2) + sub($n1, $n2) + mul($n1, $n2) + div($n1, $n2);

		// echo "Summation = ". $sum. "<br>";
		// echo "Subtraction = ". $sub. "<br>";
		// echo "Multiplication = ". $sub. "<br>";
		// echo "Division = ". $div. "<br>"; 
	}


	function sum($n1 = 2, $n2 = 0)
	{
		return $n1 + $n2;		
	}

	function sub($n1 = 0, $n2 = 0)
	{
		return $n1 + $n2;
	}

	function mul($n1 = 0, $n2 = 0)
	{
		return $n1 * $n2;
	}

	function div($n1 = 0, $n2 = 0)
	{
		if($n2 != 0)
			return $n1 / $n2;
		else
			return false;
	}


	calculate(2,4);