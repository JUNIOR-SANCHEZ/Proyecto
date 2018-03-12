<?php

class registroModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function checkEmail($email){
        $result = $this->_db->prepare("SELECT * FROM usuarios WHERE correo_usu = :email;");
        $result->bindParam(":email",$email, PDO::PARAM_STR);
        $result->execute();
        if($result->fetch()){
            return true;
        }
        
        return false;
    }
    
    public function checkUser($user){
        $result = $this->_db->prepare("SELECT * FROM usuarios WHERE nick_usu = :user;");
        $result->bindParam(":user",$user, PDO::PARAM_STR);
        $result->execute();
        if($result->fetch()){
            return true;
        }
        
        return false;
    }
    
    public function addUser($name,$user,$pass,$email,$imagen){
        $statement=$this->_db->prepare("INSERT INTO usuarios VALUES (null,:imagen,:name,:user,:pass,:email,'usuario',1,now());");
        $pass = Cifrado::getHash("sha1", $pass, HASH_KEY);
        $statement->bindParam(":imagen",$imagen, PDO::PARAM_STR);
        $statement->bindParam(":name",$name, PDO::PARAM_STR);
        $statement->bindParam(":user",$user, PDO::PARAM_STR);
        $statement->bindParam(":pass",$pass , PDO::PARAM_STR);
        $statement->bindParam(":email",$email, PDO::PARAM_STR);
        
        $statement->execute();
        
    }
}