<?php

include 'includes/include.inc.php';

    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $view = new View();
        $view->login($user,$pass);
    }

?>
