<?php

    class ComentarioModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=linxbeer; charset=utf8' , 'root', '');
        }

        function addComentario($id,$texto,$puntaje,$id_usuario,$fecha){
            $sentencia = $this->db->prepare('INSERT INTO comentarios(id_cerveza,texto,puntaje,id_usuario,fecha) VALUES (?,?,?,?,?)');
            $sentencia->execute(array($id,$texto,$puntaje,$id_usuario,$fecha));
        }

        /*function getComentarios(){
            $sentencia = $this->db->prepare('SELECT * FROM comentarios');
            $sentencia->execute(array());
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }*/ //para traer todos los comentarios, si fuera necesario

        function getComentario($id){
            $sentencia = $this->db->prepare('SELECT id_comentario, texto, puntaje, fecha,
                    usuario AS nombreUsuario from user inner join comentarios 
                    on user.id_usuario = comentarios.id_usuario  WHERE id_cerveza = ? order by fecha desc');
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