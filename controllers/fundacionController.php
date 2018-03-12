<?php

class fundacionController extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->_view->assign("titulo","Nuestra fundaci&ocuote;n");
        $this->_view->renderizar("index","fundacion");
    }
}
