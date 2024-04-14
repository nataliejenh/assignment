<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Page for Admin</h1>

        <form action="adminprocess.php" method="POST">
            <label>Email</label>
            <input type="email" name="email" required placeholder="Email here...">

            <label>Password</label>
            <input type="password" name="pass" required placeholder="Password here...">

            <input type="submit" name="admin_login" value="LOGIN">
        </form>
    </div>
</body>
</html>