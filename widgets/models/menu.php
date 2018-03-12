<?php

class menuModelWidget extends Model{
    public function __construct() {
        parent::__construct();
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
                "id"=>"pruebas",
                "titulo"=>"Pruebas",
                "enlace"=>BASE_URL."pruebas"
            ),
           array(
            'id' => 'tarjetas',
            'titulo' => 'crear tarjetas',
            'enlace' => BASE_URL . 'tarjetas'
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
                'id' => 'ver',
                'titulo' => 'Ver',
                'class'=>'icon-target',
                'enlace' => BASE_URL
            )
        );
        if (Session::get('autenticado')) {
            $menus["top"][] = array(
                'id' => 'login',
                'titulo' => 'Cerrar Session',
                'class'=>'icon-addres',
                'enlace' => BASE_URL . 'usuarios/login/cerrar'
            );
        } else {
            $menus["top"][] = array(
                'id' => 'login',
                'titulo' => 'Iniciar Session',
                'class'=>'icon-addres',
                'enlace' => BASE_URL . 'usuarios/login'
            );
        }
        
        return $menus[$menu];
    }
}
