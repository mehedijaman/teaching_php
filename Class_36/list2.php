<?php 
	include('connection.php');

	if (isset($_POST['submit'])) {
		if ($_POST['submit'] == 'Delete') {
			$id = $_POST['id'];

			$Query = "DELETE FROM students where id = $id";

			$Result = mysqli_query($Connection,$Query);

			if ($Result) {
				echo "Data Deleted Successfully !";
			}
			else
			{
				echo "Something went wrong";
			}
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
						<a href="">Edit</a>
						<form action="list2.php" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $Row['id'] ?>">
							<input type="submit" name="submit" value="Delete">
						</form>
					</td>
				</tr>
 			<?php } ?>
 		</tbody>
 	</table>
 </body>
 </html>	