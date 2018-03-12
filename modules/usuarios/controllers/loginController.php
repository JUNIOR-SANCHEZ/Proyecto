<?php

class loginController extends Controller {
    private $_login;
    public function __construct() {
        parent::__construct();
        $this->_login = $this->loadModel('login');
    }

    public function index() {
        
        if (Session::get("autenticado")) $this->redireccionar();
        $this->_view->assign("titulo","Login");
        if ($this->getInt('enviar') == 1) {
            $this->_view->assign("datos",$_POST);
            if(!$this->getAlphaNum('txt_usuario')){
                 $this->_view->assign("error","Escriba el nombre de usuario");
                $this->_view->renderizar('index', 'login');
                exit;
            }
            if(!$this->getSql('txt_pass')){
                 $this->_view->assign("error","Escriba una contraseña");
                 $this->_view->renderizar('index', 'login');
                exit;
            }
            $row = $this->_login->getUser(
                    $this->getAlphaNum('txt_usuario'),
                    $this->getSql('txt_pass')
                    );
            
            if(!$row){
                $this->_view->assign("error","Usuario y/o contraseña incorrecta");
                 $this->_view->renderizar('index', 'login');
                exit;
            }
            $this->_view->datos="Session";
            Session::set('autenticado', true);
            Session::set('level', $row['role']);
            Session::set("id", $row["id_usu"]);
            Session::set('usuario', $row['nombre_usu']);
            Session::set('tiempo', time());
            
            $this->redireccionar();
        }
        $this->_view->renderizar('index', 'login');
    }


    public function cerrar() {
        Session::destroy();
        $this->redireccionar();
    }

}
