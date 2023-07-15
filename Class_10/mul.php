<?php 
	$Start = 1;
	$Limit = 100;
	$Step = 1;

	$Sum = 1;

	for($Counter = $Start; $Counter <= $Limit; $Counter += $Step)
	{
		$Sum *= $Counter;
	}

	echo $Sum;