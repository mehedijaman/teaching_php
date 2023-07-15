<?php 
    include('connection.php');

    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == 'Register') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = md5($_POST['password']);
            $confirm_password = md5($_POST['confirm_password']);

            if ($password == $confirm_password) {
                $Query = "INSERT INTO users (name, email, phone, password) VALUES('$name', '$email','$phone','$password')";

                $Result = mysqli_query($Connection, $Query);

                if ($Result) {
                    echo "New user created successfully !";
                }
                else
                {
                    echo "Error while creating new user !";
                }
            }
            else
            {
                echo "Password doesn't match";
            }
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            display: inline;
            margin-right: 10px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
        }

        .navbar a:hover {
            background-color: #555;
        }

        .content {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li style="float: right;"><a href="login.php" class="button">Login</a></li>
        </ul>
    </div>

    <div class="content">
        <h1>Registration</h1>
        <form action="registration.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <input type="submit" name="submit" value="Register" class="button">
        </form>
    </div>
</body>
</html>
