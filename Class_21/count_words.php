<?php
	$delimeters = [',','.','-','/'];

	$str = "I live.in,Khulna City,Khulna-is a/neat and clean city-as per my observation";
	$str = trim($str);

	$str = str_replace($delimeters, ' ', $str);
	// echo $str;

	$str = explode(' ', $str);

	echo sizeof($str);