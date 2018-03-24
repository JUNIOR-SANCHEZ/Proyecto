<?php

class contactosController extends Controller{
    public function index() {
        $this->_view->setJs(array("localizacion"));
        $this->_view->assign("titulo","Contactos");
        $this->_view->renderizar("index","contactos");
    }
}

