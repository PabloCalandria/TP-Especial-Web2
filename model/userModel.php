<?php

class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost; dbname=linxbeer; charset=utf8', 'root', '');
    }

    public function getUser($username) {
        $query = $this->db->prepare('SELECT * FROM user WHERE usuario = ?');
        $query->execute(array($username));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function adminUser($username) {
        $query = $this->db->prepare('SELECT * FROM user WHERE usuario = ? AND admin = ?');
        $query->execute(array($username, 1));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    function registrar($user,$hashPass,$hashQuest){
        $sentencia = $this->db->prepare('INSERT INTO user(usuario,contraseña,respuesta) VALUES (?,?,?)');
        $sentencia->execute(array($user,$hashPass,$hashQuest));
    }

    function getUsers(){
        $query = $this->db->prepare('SELECT * FROM user');
        $query->execute(array());
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function darAdmin($id){
        $sentencia = $this->db->prepare('UPDATE user SET admin=? WHERE id_usuario=? ');
        $sentencia->execute(array(1,$id));
    }

    function quitarAdmin($id){
        $sentencia = $this->db->prepare('UPDATE user SET admin=? WHERE id_usuario=? ');
        $sentencia->execute(array(0,$id));
    }

    function borrarUsuario($id){
        $sentencia = $this->db->prepare('DELETE FROM user WHERE id_usuario=? ');
        $sentencia->execute(array($id));
    }

    function updateUser($pass,$id){
        $sentencia = $this->db->prepare('UPDATE user SET contraseña=? WHERE id_usuario=? ');
        $sentencia->execute(array($pass,$id));
    }
    
}
