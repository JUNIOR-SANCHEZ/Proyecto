<?php

class menuModelWidget extends Model{
   
    private $_registry;
    private $_acl;
    
    public function __construct() {
        parent::__construct();
        $this->_registry = Registry::getInstancia();
        $this->_acl = $this->_registry->_acl;
    }
    
    public function getmenu($menu){
       $menus["sidebar"]= array(
            array(
                "id"=>"usuarios",
                "titulo"=>"Usuarios",
                "enlace"=>BASE_URL."Usuarios"
            ),
            array(
                "id"=>"acl",
                "titulo"=>"Lista de control de acceso",
                "enlace"=>BASE_URL."acl"
            ),
            array(
                "id"=>"test",
                "titulo"=>"test",
                "enlace"=>BASE_URL."test"
            )
                      
        );
       
       
       $menus["top"]= array(
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'class'=>'icon-home',
                'enlace' => BASE_URL
            ),
            array(
                'id' => 'fundacion',
                'titulo' => 'Nuestra Fundacion',
                'class'=>'icon-book-open',
                'enlace' => BASE_URL.'fundacion'
            ),
            array(
                'id' => 'grupo',
                'titulo' => 'Nuestro Grupo',
                'class'=>'icon-book-open',
                'enlace' => BASE_URL.'grupo'
            ),
            array(
                'id' => 'contactos',
                'titulo' => 'Contactenos',
                'class'=>'icon-target',
                'enlace' => BASE_URL."contactos"
            ),
           array(
                'id' => 'noticias',
                'titulo' => 'Noticias',
                'class'=>'icon-target',
                'enlace' => BASE_URL.'blog'
            )
           
        );
       
       if($this->_acl->permiso("admin_access")){
          $menus["top"][] = array(
                "id"=>"usuarios",
                "titulo"=>"Usuarios",
                "enlace"=>BASE_URL."Usuarios"
            );
       }
       
        if (Session::get('autenticado')) {
            $menus["top"][] = array(
                'id' => 'login',
                'titulo' => 'Cerrar Session',
                'class'=>'icon-addres',
                'enlace' => BASE_URL . 'usuarios/login/cerrar'
            );
            $menus["top"][] = array(
                'id' => 'perfil',
                'titulo' => 'Perfil',
                'class'=>'icon-target',
                'enlace' => BASE_URL.'usuarios/registro/perfil'
            );
        } else {
            $menus["top"][] = array(
                'id' => 'login',
                'titulo' => 'Iniciar Session',
                'class'=>'icon-addres',
                'enlace' => BASE_URL . 'usuarios/login'
            );
            $menus["top"][] = array(
                'id' => 'registro',
                'titulo' => 'Registrarse',
                'class'=>'icon-addres',
                'enlace' => BASE_URL . 'usuarios/registro'
            );
        }
        
        return $menus[$menu];
    }
}
