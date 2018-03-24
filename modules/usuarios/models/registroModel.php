<?php

class registroModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function checkEmail($email) {
        $result = $this->_db->prepare("SELECT * FROM usuarios WHERE email = :email;");
        $result->bindParam(":email", $email, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetch()) {
            return true;
        }

        return false;
    }

    public function checkUser($user) {
        $result = $this->_db->prepare("SELECT * FROM usuarios WHERE usuario = :user;");
        $result->bindParam(":user", $user, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetch()) {
            return true;
        }

        return false;
    }

    public function addUser($name, $user, $pass, $email,$imagen) {
        $statement = $this->_db->prepare("INSERT INTO usuarios (nombre,usuario,imagen,pass,email,role,estado,fecha,codigo) VALUES (:name,:user,:imagen,:pass,:email,4,1,NOW(),1963007335);");
        $clave = Cifrado::getHash("sha1", $pass, HASH_KEY);
        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":user", $user, PDO::PARAM_STR);
        $statement->bindParam(":pass", $clave, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":imagen", $imagen, PDO::PARAM_STR);
       

        $statement->execute();
    }

    public function editUser($name, $user,$email, $phone, $sexo, $estado, $id) {
        $statement = $this->_db->prepare("UPDATE usuarios SET nombre=:name,usuario=:user,email=:email,phone=:phone,sexo=:sexo,estadoCivil=:estadoCivil WHERE id = :id");
        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":user", $user, PDO::PARAM_STR);
//        $statement->bindParam(":pass", $pass, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":phone", $phone, PDO::PARAM_STR);
        $statement->bindParam(":sexo", $sexo, PDO::PARAM_STR);
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->bindParam(":estadoCivil", $estado, PDO::PARAM_STR);
        
        $statement->execute();
    }

    public function getUserById($id) {

        $strt = $this->_db->prepare("SELECT * FROM usuarios WHERE id = :id");
        $strt->bindParam(":id", $id, PDO::PARAM_STR);
        $strt->execute();
        $result = $strt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}
