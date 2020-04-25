<?php


class account extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index () {
        $this->view("template/header");
        $is_auth = isset($_SESSION["username"]);
        if($is_auth)
        {
            $this->view("account/user");
        }
        else{
            $this->view("account/nouser");
        }
        
        $this->view("template/footer");
    } 

    
    function signin()
    {
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_POST_csrf = htmlentities($_POST["csrf"]);
            $_cook_csrf = htmlentities($_COOKIE["csrf"]);
            $csrf = $_SESSION["csrf"];

            if($csrf == $_POST_csrf && $csrf == $_cook_csrf)
            {
            $this ->model("userModel");
            $u_name = $_POST["username"];
            $u_pass = $_POST["password"];
        $auth = $this->userModel->authorised($u_name,$u_pass);
        if($auth){
            header("location: /account/");        
        }
    else{
             echo("not authenticated");
         }
        }
    }
    else if($_SERVER["REQUEST_METHOD"] == "GET"){
        $csrf = htmlentities(random_int(10000, 10000000));
        $_SESSION['csrf'] = $csrf;
        setcookie("csrf", $csrf);
        $_COOKIE['csrf'] = $csrf;
        $this-> view("account/signin", array("csrf" =>$csrf));
    }
    else{
http_response_code(405);
    }
}

    function signout(){
        session_unset();
        $_SESSION["username"] = "";
         session_destroy();
         $_SESSION= ARRAY();
         header("location: /account/");
    }
}
?>