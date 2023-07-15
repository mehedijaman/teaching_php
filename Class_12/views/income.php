<?php 
	include('Model/Db.php');
	include('Model/IncomeCategory.php');
	include('Model/Income.php');

	$IncomeCategory = new IncomeCategory();
	$Income = new Income();

	$Categories = $IncomeCategory->getAll();
	$Incomes = $Income->getAll();

 ?>

<form action="controller/Income.php" method="POST" enctype="multipart/form-data">
	<select name="category_id" id="category_id" required>
		<option value="">Select Category</option>
		<?php foreach($Categories as $Category){ ?>
			<option value="<?php echo $Category['id']; ?>"><?php echo $Category['name']; ?></option>
		<?php } ?>
	</select> <br>

	<input type="number" name="amount" placeholder="amount" required> <br>

	<textarea name="description" id="description" cols="30" rows="10" placeholder="Description">
		
	</textarea> <br>

	<input type="date" name="income_date" required> <br>

	<input type="submit" name="submit" value="Add Income">

</form>

<hr>
<table>
	<thead>
		<tr>
			<th>Category</th>
			<th>Amount</th>
			<th>Description</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($Incomes as $Income) {?>
		<tr>
			<td><?php echo $Income['category_name']; ?></td>
			<td><?php echo $Income['amount']; ?></td>
			<td><?php echo $Income['description']; ?></td>
			<td><?php echo $Income['income_date']; ?></td>
			<td>
				<a href="controller/Income.php?action=edit&id=<?php echo $Income['id']; ?>">Edit</a>
				<a href="contoller/Income.php?action=delete&id=<?php echo $Income['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>