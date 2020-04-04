<?php

require(ROOT . "/private/core/classes/model.php");

class usermodel extends model {

    function __construct() {
        parent::__construct();
    }

    function authorised ($usermame , $password) {
        $u_name = htmlentities($usermame);
        $u_pass = htmlentities($password);
        $sql = "SELECT 'name' , 'last_name, 'email' 'password_hash' FROM 'bloggers' WHERE email =?";
        $stmt = $this-> db->prepare($sql);
        $count -> execute(ARRAY($u_name));
        $row = $stmt -> fetch();
        $password_hash = $row[2];
        $is_auth = false;
        if(isset($password_hash)){
            $is_auth = password_verify($u_pass, $password_hash);
        if($is_auth){
            $_SESSION['name'] = $row[0];
            $_SESSION['last_name'] = $row[1];
            $_SESSION['username'] = $u_name;

            $update_sql = "update 'bloggers' set 'online_date' = CURRENT_TIMESTAMP() WHERE 'email' =?";
            $update_stmt = $this-> db-> prepare($update_sql);
            $update_stmt -> execute(Array($u_name));
        }
    }
    return $is_auth;
    } 

}

