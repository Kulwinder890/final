<?php
class blog extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    /*
     * http://localhost/
     */
    function Index () {

        $this->model("BlogModel");
        $posts = $this->BlogModel->getAllPosts();
        $input = Array("posts" =>$posts);
        
       $this->view("template/header");
        $this->view("blog/index", $input);
       $this->view("template/footer");
        
    }
    function Read($postId){
        $this->model("BlogModel");
        $post = $this->BlogModel->getPostById($postId);
       $this->view("blog/header", $post);
        $this->view("blog/post", $post);
       $this->view("template/footer");
    }

    function Create(){
        $is_auth = isset($_SESSION["username"]);
         if(!$is_auth){
             
                header("location: /blog");
                return;
         }


        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $title = $_POST["title"];
            $content = $_POST["content"];
            $blogger = $_SESSION["username"];
            $this->model("BlogModel");
            $slug=$this->BlogModel->createPost($title,$blogger,$content);

             header("location: /blog/read" .$slug);


        }

            else{
        $this->view("template/header");
        $this->view("blog/create");
       $this->view("template/footer");
      }

    }

    function Update($postId){
        $is_auth = isset($_SESSION["username"]);
         if(!$is_auth){
             
                header("location: /blog");
                return;
         }


        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $slug = $_POST["slug"];
            $title = $_POST["title"];
            $content = $_POST["content"];
            $blogger = $_POST["blogger"];
            $this->model("BlogModel");
            $slug=$this->BlogModel->UpdatePost($slug,$title,$blogger,$content);

             header("location: /blog/read" .$slug);


        }

            else{
        
                $this->model("BlogModel");
        $post = $this->BlogModel->getPostById($postId);
        //print_r($post);
        $this->view("template/header");
        $this->view("blog/update",$post);
       $this->view("template/footer");
      }

    }


    

    }
?>