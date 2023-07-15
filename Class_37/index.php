<!DOCTYPE html>
<html>
<head>
    <title>Web Application</title>
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
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li style="float: right;"><a href="#" class="button">Login</a></li>
            <li style="float: right;"><a href="registration.php" class="button">Registration</a></li>
        </ul>
    </div>

    <div class="content">
        <h1>Welcome to the Web Application</h1>
        <p>This is the home page of our web application.</p>
    </div>
</body>
</html>
