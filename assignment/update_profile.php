<?php
    include "conn.php";
    session_start();

    $e=$_SESSION['email'];

    $getname=mysqli_query($conn, "SELECT * FROM userss WHERE email='$e'");
    while($row=mysqli_fetch_object($getname)){
        
        $id = $row -> id;
        $name= $row -> name;
        $email = $row -> email;
        $pass = $row -> password;
        $pn = $row -> phone_number;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
    <style>
        body {
            background: linear-gradient(to bottom, #87CEEB, #000080);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container1 {
            background-color: transparent;
            border-radius: 5px;
            box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.5); 
            padding: 20px;
            width: 400px;
            margin: 0 auto; /* Center the container horizontally */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            margin-right: 10px;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #555;
            color: #fff;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom:2px;
            color: #fff;
            float:right;
        }

        input[type="text"],
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
        <div class="navbar">
            <a href="userhome.php">HOME</a>
            <a href="#">GALLERY</a>
            <a href="#">GROUP PROJECT</a>
            <a href="createpost.php">CREATE POST</a>
            <a href="update_profile.php">UPDATE PROFILE</a>
            <a href="index.php">LOGOUT</a>
        </div>
    </div>

    <div class="container1">

    <center>
        <h1>UPDATE PROFILE</h1>

        <form action="process.php?id=<?php echo $id;?>" method="POST">
            <label>Name</label><br>
            <input type="text" name="up_name" value="<?php echo $name;?>" required><br>

            <label>Email</label><br>
            <input type="email" name="up_email" value="<?php echo $email;?>" required><br>

            <label>Password</label><br>
            <input type="password" name="up_pass" value="<?php echo $pass;?>" required><br>

            <label>Phone Number</label><br>
            <input type="text" name="up_pn" value="<?php echo $pn;?>" required><br>

            <input type="submit" value="UPDATE" name="update_account">
        </form>
    </center>
    </div>
</body>
</html>