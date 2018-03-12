<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class publicacionController extends Controller {

    private $template = "login";
    private $_sql;

    public function __construct() {
        parent::__construct();
        $this->_view->setTemplate($this->template);

        $this->_sql = $this->loadModel("publicaciones");
    }

    public function index() {
        $this->_view->assign("comentarios", $this->_sql->getComment());

        if ($this->getInt("guardar") == 1) {
            if (!$this->getPostParam("comentario")) {
                $this->_view->assign("error", "La caja esta vacia");
                $this->_view->renderizar("index", "publicacion");
                exit;
            }

            $this->_sql->addComment($this->getPostParam("comentario"), Session::get("id"));
            $this->_view->assign("comentarios", $this->_sql->getComment());
            $this->_view->renderizar("index", "publicacion");
            exit;
        }
        $this->_view->renderizar("index", "publicacion");
    }

    public function comentario() {


        $this->_view->assign("titulo", "comentarios");
        $this->_view->assign("comentarios", $this->_sql->getComment());
        $this->_view->assign("respuesta", $this->_sql->getCommentReply());
        if ($this->getInt("guardar") == 1) {
            if (!$this->getAlphaNum("comentario")) {
                $this->_view->assign("error", "La caja esta vacia");
                $this->_view->renderizar("index", "publicacion");
                exit;
            }

            $this->_sql->addComment($this->getAlphaNum("comentario"), Session::get("id"));
            $this->_view->assign("mensaje", "Comentario agregado");
            $this->_view->renderizar("index", "publicacion");
            exit;
        }
        $this->_view->renderizar("index", "publicacion");
    }

    public function respuesta() {
        $this->_view->assign("titulo", "comentarios");
        $this->_view->assign("reply", "respuesta");
        if ($this->getInt("guardar") == 1) {
            
        }
    }

}
