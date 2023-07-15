<?php 
	include('connection.php');

	if (isset($_REQUEST['action'])) {
		if ($_REQUEST['action'] == 'details') {
			$id = $_REQUEST['id'];

			$Query = "SELECT * FROM students WHERE id = $id LIMIT 1";

			$Result = mysqli_query($Connection, $Query);
			$Result = mysqli_fetch_assoc($Result);
		}
	}

	if (isset($Result)) {
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Details</title>
 </head>
 <body>
 	<table>
 		<thead>
 			<tr>
 				<th>Attribute</th>
 				<th>Value</th>
 			</tr>
 		</thead>
 		<tbody>
 			<tr>
 				<td>ID</td>
 				<td><?php echo $Result['id'];  ?></td>
 			</tr>
 			<tr>
 				<td>Name</td>
 				<td><?php echo $Result['name'];  ?></td>
 			</tr>
 			<tr>
 				<td>Roll</td>
 				<td><?php echo $Result['roll'];  ?></td>
 			</tr>
 			<tr>
 				<td>Phone</td>
 				<td><?php echo $Result['phone'];  ?></td>
 			</tr>
 		</tbody>
 	</table>
 </body>
 </html>

<?php } ?>