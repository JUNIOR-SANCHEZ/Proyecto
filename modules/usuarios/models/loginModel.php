<?php

class loginModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function getUser($user,$pass){
        $rows = $this->_db->prepare("SELECT * FROM usuarios WHERE nick_usu=:user and password_usu=:pass;");
        $pass = Cifrado::getHash("sha1", $pass, HASH_KEY);
        $rows->bindParam(':user',$user, PDO::PARAM_STR);
        $rows->bindParam(':pass',$pass , PDO::PARAM_STR);
        $rows->execute();
        return $rows->fetch();
    }
}