<?php

class Model extends Db{
    protected function getUser($user){
        $stmt = "SELECT * from user where username = '$user'";
        $result = $this-> conn()->query($stmt);
        
        return $result;
    }
}

?>