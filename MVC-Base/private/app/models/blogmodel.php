<?php

class BlogModel extends model {

    function __construct() {
        parent::__construct();
    }

    function getAllPosts(){
        $sql = "SELECT `slug`, `title`, `blogger`, `post_date`  FROM posts";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getPostById($postId){

    $sql = "SELECT `title`, `content`, `blogger`, `post_date` FROM posts WHERE slug = ?";
    $stmt = $this->db->prepare($sql);
    $stmt->execute(Array($postId));
    return $stmt->fetch();
}

function createPost($title,$blogger,$content){
    $slug = (str_replace(" ","-", strtolower($title)).random_int(1000, 999999));
    $sql = "INSERT INTO posts(slug, title, content, blogger) values (?,?,?,?)";
    $stmt = $this->db->prepare($sql);
    $stmt->execute(Array($slug, $title, $content, $blogger));
    return $slug;

}


}
?>