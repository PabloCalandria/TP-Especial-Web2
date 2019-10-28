<?php

class userModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost; dbname=linxbeer; charset=utf8', 'root', '');
    }

    public function getUser($username) {
        $query = $this->db->prepare('SELECT * FROM user WHERE usuario = ?');
        $query->execute(array($username));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    function registrar($user,$hash){
        $sentencia = $this->db->prepare('INSERT INTO user(usuario,contraseña) VALUES (?,?)');
        $sentencia->execute(array($user,$hash));
    }
}
