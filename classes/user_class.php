<?php

class user_class {
    
    public function getUsers($db) {
        
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $getUser = $db->prepare($query);
        
        $getUser->execute(
                array(
                    'username' => $_POST["username"],
                    'password' => $_POST["password"],
                    )
                );
        $getUser = $getUser->fetch();
        return $getUser;
    }
    
}
