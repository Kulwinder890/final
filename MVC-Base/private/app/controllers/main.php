<?php
class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    /*
     * http://localhost/
     */
    function Index () {

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