<?php

class registroController extends Controller{
    
    private $_sqlUser;
    public function __construct() {
        parent::__construct();
        $this->_sqlUser = $this->loadModel("registro");
        
    }
    public function index() {
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_view->assign("titulo","Registro");
        if($this->getInt("enviar") == 1){
            $this->_view->assign("datos",$_POST);
            if(!$this->getSql("txt_nombre")){
                $this->_view->assign("_error","Debe introducir  su nombre");
                $this->_view->renderizar("index","registro");
                exit;
            }
            if(!$this->getPostParam("txt_usuario")){
                $this->_view->assign("_error","Debe introducir  el usuario");
                $this->_view->renderizar("index","registro");
                exit;
            }
            if($this->_sqlUser->checkUser($this->getPostParam("txt_usuario"))){
                $this->_view->assign("_error","El usuario ". $this->getPostParam("txt_usuario") ." ya exite.");
                $this->_view->renderizar("index","registro");
                exit;
            }
            
            if(!$this->checkEmail($this->getPostParam("txt_correo"))){
                $this->_view->assign("_error","El correo es invalido");
                $this->_view->renderizar("index","registro");
                exit;
            }
            
            if($this->_sqlUser->checkEmail($this->getPostParam("txt_correo"))){
                $this->_view->assign("_error","El correo ". $this->getPostParam("txt_correo") . " ya exite");
                $this->_view->renderizar("index","registro");
                exit;
            }
            if(!$this->getSql("txt_pass")){
                $this->_view->assign("_error","Debe introducir  una contraseña");
                $this->_view->renderizar("index","registro");
                exit;
            }
            if($this->getPostParam("txt_pass") != $this->getPostParam("txt_passConfirmar")){
                $this->_view->assign("_error","Las contraseñas no coinciden");
                $this->_view->renderizar("index","registro");
                exit;
            }
            $imagen = '';
            
            if ($_FILES['imagen']['name']) {
                $ruta = $this->getRutaCarpetaImagen("user");
                $upload = new upload($_FILES['imagen'], 'es_Es');
                $upload->allowed = array('image/*');
                $upload->file_new_name_body = 'upl_' . uniqid();
                $upload->process($ruta);

                if ($upload->processed) {
                    $imagen = $upload->file_dst_name;
                    $thumb = new upload($upload->file_dst_pathname);
                    $thumb->image_resize = true;
                    $thumb->image_x = 800;
                    $thumb->image_y = 600;
                    $thumb->file_name_body_pre = 'thumb_';
                    $thumb->process($ruta . 'thumb' . DS);
                } else {
                    $this->_view->assign('_error', $upload->error);
                    $this->_view->renderizar('index', 'blog');
                    exit;
                }
            }
            
            $this->_sqlUser->addUser(
                    $this->getSql("txt_nombre"),
                    $this->getAlphaNum("txt_usuario"),
                    $this->getPostParam("txt_pass"),
                    $this->getPostParam("txt_correo"),
                    $imagen
                    );
                    
            if(!$this->_sqlUser->checkUser($this->getPostParam("txt_usuario"))){
                $this->_view->assign("_error","Error al registrar el usuario.");
                $this->_view->renderizar("index","registro");
                exit;
            }
            $this->_view->assign("datos",array());
            $this->_view->assign("mensaje","El usuario se registro con exito.");
            $this->redireccionar("usuarios/registro");
            exit;
        }
        
        $this->_view->renderizar('index','registro');
    }
    
    public function perfil(){
        if(!Session::get("autenticado")){
            $this->redireccionar();
        }
        $this->_view->assign("titulo","Perfil");
        $this->_view->assign("usuario", $this->_sqlUser->getUserById(Session::get("id")));
        if($this->getInt("guardar") == 1){
            
        }
        $this->_view->renderizar("perfil","registro");
    }
    
    
}