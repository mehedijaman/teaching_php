<?php 
    session_start();
    include('connection.php');

    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == 'Login') {
            $email = $_POST['email'];
            $pass  = md5($_POST['password']);

            $Query = "SELECT * from users WHERE email = '$email' AND password = '$pass'";

            $Result = mysqli_query($Connection, $Query);
            $Rows = mysqli_num_rows($Result);

            if ($Rows == 0) {
                echo "Username/Password doesn't match our record";
            }
            else
            {
                $_SESSION['LoggedIn'] = TRUE;
                header('Location:edit.php');
            }
        }
    }

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
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
            <li style="float: right;"><a href="registration.php" class="button">Registration</a></li>
        </ul>
    </div>

    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
