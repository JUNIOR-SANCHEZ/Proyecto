<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class postController extends Controller {

    private $_post;
    public function __construct() {
        parent::__construct();
        $this->_post = $this->loadModel("post");
    }

    public function index() {
        $this->_view->posts = $this->_post->getPosts();
        $this->_view->titulo = "Portada";
        $this->_view->renderizar('index');
    }
    public function nuevo() {
//        $this->_view->setJs(array('nuevo'));
       $this->_view->titulo = "Portada";
       $this->_view->renderizar('nuevo'); 
    }

}
