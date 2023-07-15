<?php 
	$Start = 1;
	$Limit = 100;
	$Step = 1;

	$Sum = 0;

	for($Counter = $Start; $Counter <= $Limit; $Counter += $Step)
	{
		$Sum += $Counter;
	}

	echo $Sum;