<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background: linear-gradient(to bottom, #87CEEB, #000080);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: transparent;
            border-radius: 5px;
            box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.5); 
            padding: 20px;
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #fff;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #03C988;
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #029d70;
        }

        p {
            text-align: center;
            margin-top: 10px;
            color: #fff;
        }

        a {
            color: #03C988;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Login Page!</h1>
 
        <form action="process.php" method="POST">
            <label>Email</label><br>
            <input type="email" name="login_email" required placeholder="Enter Email Here!.."><br><br>

            <label>Password</label><br>
            <input type="password" name="login_password" required placeholder="Enter Password Here!.."><br><br>

            <input type="submit" name="login" value="LOGIN">
        </form>

        <p><a href="reg.php"> Register!</a>
        <p><a href="admin/index.php">Login as Admin</a></p>

    </div>
</body>
</html>