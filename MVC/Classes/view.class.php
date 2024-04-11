<?php

class View extends Model{
    public function login($user,$pass){
        $data = $this->getUser($user);
        while($row = $data->fetch_assoc()){
            if($user === $row['username'] && $pass === $row['password']){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$user;
                header('location:index.php');
                exit;
            }
            else{
                return "Invalid username or password";
            }
        }

    }
    
}

?>