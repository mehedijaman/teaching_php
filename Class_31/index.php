<?php 
	$Host = 'localhost';
	$User = 'phpmyadmin';
	$Pass = 'Q1w2e3r4t5!';
	$DB   = 'wdb2';


	$Connection = mysqli_connect($Host,$User,$Pass,$DB);

	if (!$Connection) {
		return "Something Wrong";
	}


	if (isset($_GET)) {
		$Name = $_GET['name'];
		$Email = $_GET['email'];
		$Password = sha1($_GET['password']);

		$Query = "INSERT INTO users (name, email, password, status) VALUES('$Name', '$Email','$Password',1)";

		$Result = mysqli_query($Connection,$Query);

		if (!$Result) {
			echo "SOmething went wrong on storing data";
		}
		else
		{
			echo "Data Insertion Successfull";
		}
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Register</title>
 </head>
 <body>
 	<form action="index.php" enctype="multipart/form-data" method="GET">
 		<label for="Name">Name</label>
 		<input type="text" name="name">

 		<label for="Email">Email</label>
 		<input type="email" name="email">

 		<label for="Password">Password</label>
 		<input type="password" name="password">

 		<input type="submit" name="submit" value="Register">
 	</form>
 </body>
 </html>