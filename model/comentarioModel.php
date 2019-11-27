<?php

    class ComentarioModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=linxbeer; charset=utf8' , 'root', '');
        }

        function addComentario($id,$texto,$puntaje){
            $sentencia = $this->db->prepare('INSERT INTO comentarios(id_cerveza,texto,puntaje) VALUES (?,?,?)');
            $sentencia->execute(array($id,$texto,$puntaje));
        }

        function getComentarios(){
            $sentencia = $this->db->prepare('SELECT * FROM comentarios');
            $sentencia->execute(array());
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function getComentario($id){
            $sentencia = $this->db->prepare('SELECT * FROM comentarios WHERE id_cerveza = ?');
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function getIdComentario($id){
            $sentencia = $this->db->prepare('SELECT * FROM comentarios WHERE id_comentario = ?');
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function borraComentario($id){
            $sentencia = $this->db->prepare('DELETE FROM comentarios WHERE id_comentario=?');
            $sentencia->execute(array($id));
        }
    }