<?php 	
	$limit = 25;

	$f0 = 0;
	$f1 = 1;

	echo $f0."<br>";
	echo $f1."<br>";

	$fibo = 0;

	for($i = 2; $i < $limit; $i++)
	{
		echo $fibo = $f0 + $f1."<br>";
		$f0 = $f1;
		$f1 = $fibo;
	}
 ?>