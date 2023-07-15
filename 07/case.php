<?php 
	$char = 'MASUM BILLAH';

	if ($char >= 'A' && $char <= 'Z') {
		echo "Uppercase";
	}
	elseif($char >= 'a' && $char <= 'z')
	{
		echo "Lowercase";
	}
	else
	{
		echo "Invalid character";
	}

 ?>