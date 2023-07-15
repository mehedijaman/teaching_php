	<form action="controller/IncomeCategory.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
		<input type="text" name="name" placeholder="Income Category" required value="<?php echo $_REQUEST['name']; ?>">
		<input type="submit" name="submit" value="Update Income Category">
	</form>