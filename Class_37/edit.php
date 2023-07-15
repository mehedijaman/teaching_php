<?php 
	session_start();

	if ($_SESSION['LoggedIn'] == TRUE) {
		echo "You are logged In";
	}
	else
	{
		header('Location:login.php');
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<form action="logout.php">
 		<input type="submit" name="submit" value="Logout">
 	</form>
 </body>
 </html>