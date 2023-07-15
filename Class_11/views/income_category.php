	<?php 
		include('Model/Db.php');
		include('Model/IncomeCategory.php');

		$IncomeCategory = new IncomeCategory();

		$Categories = $IncomeCategory->getAll();

	 ?>

	<form action="controller/IncomeCategory.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="Income Category" required>
		<input type="submit" name="submit" value="Add Income Category">
	</form>

	<hr>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php if (is_null($Categories)) {
				echo "<tr><td colspan='3'>No data in table</td></tr>";
			}			

			foreach($Categories as $Category){ ?>
				<tr>
					<td> <?php echo $Category['id']; ?> </td>
					<td> <?php echo $Category['name']; ?> </td>
					<td>
						<a href="controller/IncomeCategory.php?action=edit&id=<?php echo $Category['id']; ?>">Edit</a>
						<a href="controller/IncomeCategory.php?action=delete&id=<?php echo $Category['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>