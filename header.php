<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="styling.css"/>
    <title>Login System</title>
</head>
<body>
    <nav>
     <div class="wrapper">
        <ul>
            <li><a href="index1.php">Home</a></li>
            <li><a href="discover.php">About Us</a></li>
            <li><a href="blog.php">Find blogs</a></li>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<li><a href='profile.php'>Profile page</a></li>";
                echo  "<li><a href='includes/logout.inc.php'> Log out</a></li>";
            }
            else {
                echo "<li><a href='signup.php'>Sign up</a></li>";
                echo  "<li><a href='login.php'> Log in</a></li>";
            }
            ?>
        </ul>

     </div>   
    </nav>
    <div class="wrapper">