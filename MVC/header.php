<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header>
        <h1>My Website</h1>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact Us</li>
            <li>
                <?php
                    if(isset($_SESSION['loggedin'])){
                        echo $_SESSION['username'];
                    }
                    else{
                        echo "<a href='login.php'>Login</a>";

                    }
                ?>

            </li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
    </header>

