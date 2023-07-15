<?php 
	$number = 12;

	$result = $number / 10;
	$remainder = $number % 10;

	$revnum = $remainder * 10 + (int)$result;

	if($number == $revnum)
	{
		echo " Palindrome";
	}
	else
	{
		echo "Not Palindrome";
	}

 ?>