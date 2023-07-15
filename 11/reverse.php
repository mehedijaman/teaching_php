<?php 
	$number = 63;

	$result = $number / 10;
	$remainder = $number % 10;

	$revnum = $remainder * 10 + (int)$result;

	echo $revnum;

 ?>