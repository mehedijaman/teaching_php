<?php
	$a = 23;
	$b = 12;
	$c = 43;

	$d = ($b*$b) - (4*$a*$c);

	//$s = -12;
	//$s = 0;
	//$s = 767;

	if($s < 0)
	{
		echo "Roots are imaginary";
	}
	elseif($d == 0)
	{
		$x1 = (-$b+sqrt($d))/(2*$b);
	}
	else
	{
		$x1 = (-$b+sqrt($d))/(2*$b);
		$x2 = (-$b-sqrt($d))/(2*$b);
	}