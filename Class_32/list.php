<?php 
	include('connection.php');

	$Query = "SELECT * FROM students";
	$Result = mysqli_query($Connection,$Query);
	// $Result = mysqli_fetch_assoc($Result);	

	echo mysqli_num_rows($Result);
 ?>