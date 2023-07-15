<?php 
	include('Model/Db.php');
	include('Model/IncomeCategory.php');

	$IncomeCategory = new IncomeCategory();

	$Categories = $IncomeCategory->getAll();

 ?>

<form action="controller/Income.php" method="POST" enctype="multipart/form-data">
	<select name="category_id" id="category_id" required>
		<option value="">Select Category</option>
		<?php foreach($Categories as $Category){ ?>
			<option value="<?php echo $Category['id']; ?>" <?php if ($_REQUEST['CategoryID'] == $Category['id']) { ?>
				selected
			<?php } ?>><?php echo $Category['name']; ?></option>
		<?php } ?>
	</select> <br>

	<input type="number" name="amount" placeholder="amount" required value="<?php echo $_REQUEST['Amount']; ?>"> <br>

	<textarea name="description" id="description" cols="30" rows="10" placeholder="Description">
		<?php echo $_REQUEST['Description']; ?>
	</textarea> <br>

	<input type="date" name="income_date" required value="<?php echo $_REQUEST['IncomeDate']; ?>"> <br>

	<input type="submit" name="submit" value="Update Income">

</form>