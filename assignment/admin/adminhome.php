<?php 
    include "../conn.php";
    session_start();

    $email = $_SESSION['email'];

    $getadminname = mysqli_query($conn, "SELECT * FROM admins WHERE email='$email'");

    while($row = mysqli_fetch_object($getadminname)){
        $admin_name = $row->admin_name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $admin_name; ?></title>
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

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color:white;
            font-size: 28px;
        }

        hr {
            width: 80%;
            margin: 20px auto;
            border: none;
            border-top: 1px solid #ccc;
        }

        a {
            text-decoration: none;
            color: #000;
            margin-top:50px;
            padding: 10px;
            margin: 0 5px;
            font-size: 18px;
            border: 2px solid #000;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: #000;
            color: #fff;
            border-color: #fff;
        }

        .container {
            background-color: transparent;
            border-radius: 5px;
            box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.5); 
            padding:10px;
            width: 600px;
            height:200px;
        }

        .links {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome Admin <?php echo $admin_name; ?></h1>
        <hr>
        <div class="links">
            <a href="adminhome.php">HOME</a>
            <a href="user_post.php">USER'S POST</a>
            <a href="index.php">LOGOUT</a>
        </div>
    </div>
</body>
</html>