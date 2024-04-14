<?php
    include "conn.php";
    session_start();

    $e = $_SESSION['email'];

    $getname = mysqli_query($conn, "SELECT * FROM userss WHERE email='$e'");
    while($row = mysqli_fetch_object($getname)){
        $name = $row->name;
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
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
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

        .container1 {
            background-color: transparent;
            border-radius: 5px;
            box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.5); 
            padding: 20px;
            width: 750px;
            margin: 0 auto; /* Center the container horizontally */
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
            margin-bottom: 5px;
            color: #fff;
        }

        input[type="text"],
        textarea,
        input[type="date"] {
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
        <h1>Create Post</h1>
        <form action="process.php" method="POST">
            <label>Title of your Post</label><br>
            <input type="text" name="title" required placeholder="Add Title here.."><br><br>

            <label>Select Date</label><br>
            <input type="date" name="mydate" required><br><br>

            <label>Add Description</label><br>
            <textarea cols="50" rows="10" name="desc"></textarea><br><br>

            <input type="hidden" name="posted_by" value="<?php echo $name; ?>"> 

            <input type="submit" name="create_post" value="POST">
        </form>
    </div>
</body>
</html>