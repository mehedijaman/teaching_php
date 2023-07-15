	<?php 
		include('../Model/Db.php');
		include('../Model/IncomeCategory.php');	

		$IncomeCat =  new IncomeCategory();

		// $Categories = $IncomeCat->getAll();

		// var_dump($Categories);
		
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
			</tr>
		</thead>

		<tbody>
			
		</tbody>
	</table>