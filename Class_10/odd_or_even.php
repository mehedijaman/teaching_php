<?php
	$Start = 101;
	$Limit = 1000;
	$Step = 1;

	for($Counter = $Start; $Counter <= $Limit; $Counter += $Step)
	{
		if($Counter % 5 == 0)
			echo $Counter."<br>";
	}