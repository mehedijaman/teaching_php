<?php 
	include('connection.php');

	if (isset($_REQUEST['a'])) {
		$id = $_REQUEST['id'];

		$Query = "DELETE FROM students where id = $id";

		$Result = mysqli_query($Connection, $Query);

		if ($Result) {
			echo "Data Deleted Successfully !";
		}
		else
		{
			echo "Something went wrong !";
		}
	}

	$Query = "SELECT * FROM students";
	$Result = mysqli_query($Connection,$Query);
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Student List</title>
 </head>
 <body>
 	<a href="index.php">Home</a>
 	<table>
 		<thead>
 			<tr>
 				<th>ID</th>
 				<th>Name</th>
 				<th>Roll</th>
 				<th>Phone</th>
 				<th>Action</th>
 			</tr>
 		</thead>

 		<tbody>
			<?php while($Row = mysqli_fetch_assoc($Result)) { ?>
				<tr>
					<td><?php echo $Row['id']; ?></td>
					<td><?php echo $Row['name']; ?></td>
					<td><?php echo $Row['roll']; ?></td>
					<td><?php echo $Row['phone']; ?></td>
					<td>
						<a href="details.php?action=details&id=<?php echo $Row['id']; ?>">View Details</a>
						<a href="edit.php?action=edit&id=<?php echo $Row['id']; ?>">Edit</a>
						<a href="list.php?a=d&id=<?php echo $Row['id']; ?>">Delete</a>
					</td>
				</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
 </html>