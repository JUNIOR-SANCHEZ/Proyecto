<?php
class grupoController extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->_view->assign("titulo","Nuestro Grupo");
        $this->_view->renderizar("index","grupo");
    }
}

