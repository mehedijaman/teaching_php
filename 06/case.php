<?php 
	$char = (int)'p';

	if ($char >= 65 && $char <= 90) {
		echo "Uppercase";
	}
	elseif($char >= 97 && $char <= 122)
	{
		echo "Lowercase";
	}
	else
	{
		echo "Invalid";
	}

 ?>