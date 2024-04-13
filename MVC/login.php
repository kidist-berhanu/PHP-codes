<?php

include 'includes/include.inc.php';

    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $view = new View();
        $view->login($user,$pass);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" id="">
        <input type="text" name="password" id="">
        <input type="submit" value="login">
    </form>
</body>
</html>
