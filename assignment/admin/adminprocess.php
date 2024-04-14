<?php   
    include "../conn.php";
    session_start();

//this code is for admin login
if(isset($_POST['admin_login'])){

    $email = $_POST['email'];

    $pass = $_POST['pass'];

        
    $checkadmin=mysqli_query($conn, "SELECT * FROM admins WHERE email='$email' AND password='$pass' ");

    $num = mysqli_num_rows($checkadmin);

        if($num >=1){
            $_SESSION['email']=$email;
            ?>
            <script> 
                alert("Welcome Admin!");
                window.location.href="adminhome.php";
            </script>
            <?php
        }else{

            ?>
            <script> 
                alert("Error in Email or Password!");
                window.location.href="index.php";
            </script>
            <?php

        }




}






?>
