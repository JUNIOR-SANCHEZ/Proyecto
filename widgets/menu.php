<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class menuWidget extends Widget{
    
    private $modelo;
    public function __construct() {
        $this->modelo= $this->loadModel("menu");
    }

    public function getMenu($menu,$view,$invers = null){
        $data["menu"]= $this->modelo->getMenu($menu);
        $data["invers"]=$invers;
        return $this->render($view,$data);
    }
    
    public function getConfigs($menu){
        $menus["sidebar"] = array(
            "position"=>"sidebar",
            "show"=>array("acl","pruebas","tarjetas","usuarios")
//            "hide"=>array("inicio","login","tarjetas"),
        );
        
        $menus["top"] = array(
            "position"=>"top",
            "show"=>"all"
//            "hide"=>array("inicio","login","tarjetas"),
        );
        $menus["top_default"] = array(
            "position"=>"top_default",
            "show"=>"all"
//            "hide"=>array("inicio","login","tarjetas"),
        );
        return $menus[$menu];
    }
}