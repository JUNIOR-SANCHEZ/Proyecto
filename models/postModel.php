<?php

class postModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function getPosts(){
       $post = $this->_db->query("SELECT * FROM posts;");
       return $post->fetchAll();
    }
    public function addPost($titulo,$cuerpo){
        $this->_db->prepare("INSERT INTO posts VALUES (NULL,:titulo,:cuerpo;")->
                execute(
                        array(
                            ':titulo'=>$titulo,
                            ':cuerpo'=>$cuerpo
                        )
                        );
        
    }
}