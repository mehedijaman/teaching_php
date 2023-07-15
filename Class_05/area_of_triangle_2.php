<?php

	$a = 23;
	$b = 25;
	$c = 42;

	if($a+$b > $c && $b+$c > $a && $c+$a > $b )
	{
		$s = ($a+$b+$c)/2;
		$area = sqrt($s*($s-$a)*($s-$b)*($s-$c));
		echo $area;
	}
	else
	{
		echo 'Triangle is imaginary';
	}