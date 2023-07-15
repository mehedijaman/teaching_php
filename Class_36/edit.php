<?php 
	include('connection.php');

	if (isset($_POST['submit'])) {
		if ($_POST['submit'] == 'Update') {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$roll = $_POST['roll'];
			$phone = $_POST['phone'];

			$Query = "UPDATE students SET name = '$name', roll = '$roll', phone = '$phone' WHERE id = $id";
			$Result = mysqli_query($Connection, $Query);

			if ($Result) {
				echo "Updated";
			}
			else
			{
				echo "Error in updating";
			}
		}
	}

	if (isset($_REQUEST['action'])) {
		if ($_REQUEST['action'] == 'edit') {
			$id = $_REQUEST['id'];

			$Query =  "SELECT * FROM students WHERE id = $id LIMIT 1";

			$Result = mysqli_query($Connection, $Query);
			$Result = mysqli_fetch_assoc($Result);
		}
	}	

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="edit.php?action=edit&id=<?php echo $Result['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" id="id" name="id" placeholder="Enter ID" required value="<?php echo $Result['id']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter Name" required value="<?php echo $Result['name']; ?>">
            </div>
            <div class="form-group">
                <label for="roll">Roll:</label>
                <input type="text" id="roll" name="roll" placeholder="Enter Roll" required value="<?php echo $Result['roll']; ?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter Phone" required value="<?php echo $Result['phone']; ?>">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>
