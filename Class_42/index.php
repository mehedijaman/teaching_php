<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mt-4 mb-4">Data Collection Form</h2>
        <form method="POST" action="controller/StudentController.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="roll">Roll:</label>
            <input type="text" class="form-control" id="roll" name="roll" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
          </div>
          <button type="submit" name="submit" value="InsertStudent" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
