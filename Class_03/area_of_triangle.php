<?php 
	$a = 12;
	$b = 20;
	$c = 30;

	$s = ($a + $b + $c) / 2;

	if( ($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a )
	{
		$area = sqrt($s*($s-$a)*($s-$b)*($s-$c));
		echo 'The area of this triangle is: '.round($area);
	}
	else
	{
		echo "This Triangle is imaginary";
	}