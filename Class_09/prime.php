<?php

	$Number = 13;

	$Start = 2;
	$Limit = $Number - 1;
	$Step = 1;

	$Status = 1;

	for($Counter = $Start; $Counter <= $Limit; $Counter += $Step)
	{
		if($Number % $Counter == 0)
		{			
			$Status = 0;
			break;
		}
	}


	if($Status == 1)
		echo "This is a prime number";
	else
		echo "This is not a prime number";
