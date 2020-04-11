<?php
class main extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    /*
     * http://localhost/
     */
    function Index () {
        $pass= password_hash("98765", PASSWORD_DEFAULT);
        echo($pass);
       $this->view("template/header");
        $this->view("main/index");
       $this->view("template/footer");
        
    }

    function Other () {

        $this->view("template/header");
        $this->view("main/other");
        $this->view("template/footer");
        
    }
      function signup () {

       $this->view("template/header");
          $this->view("main/signup");
          $this->view("template/footer");
        
      }
     function register() {

          $this->view("template/header");
         $this->view("main/register");
           $this->view("template/footer");
        
     }

}

?>