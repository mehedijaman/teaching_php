<?php 
	include('libs/class.db.inc');
	include('libs/class.income_category.inc');

	$IncomeCategory = new income_category();


	if (isset($_POST['submit']) && $_POST['submit'] == 'Add Income Category') {
		$data = [
			'name' => $_POST['name']
		];	

		try {
			$IncomeCategory->create($data);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}


	$IncomeCategories = $IncomeCategory->get_all();


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Income Category</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="Income Category Name" required>

		<input type="submit" name="submit" value="Add Income Category">
	</form>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($IncomeCategories as $Category) {?>
			<tr>
				<td><?php echo $Category['id']; ?></td>
				<td><?php echo $Category['name']; ?></td>
				<td>
					<a href="<?php echo $_SERVER['PHP_SELF'].'?id='.$Category['id']; ?>">Edit</a>
					<a href="">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>