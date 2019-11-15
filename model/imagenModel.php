<?php

    class ImagenModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=linxbeer; charset=utf8' , 'root', '');
        }

        function addImg($id,$imagen = null){
            $filepath = null;
            if ($imagen)
                $filepath = $this->moveFile($imagen);
            $sentencia = $this->db->prepare('INSERT INTO imagenes(id_cerveza,url) VALUES(?,?)');
            $sentencia->execute(array($id,$filepath));
        }

        private function moveFile($imagen){
            $filepath = "images/cervezas/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));
            move_uploaded_file($imagen['tmp_name'], $filepath);
            return $filepath;
        }

        function getImagenes($id){
            $sentencia = $this->db->prepare('SELECT * FROM imagenes WHERE id_cerveza = ?');
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function eliminaImg($id){
            $sentencia = $this->db->prepare('DELETE FROM imagenes WHERE id_imagenes=?');
            $sentencia->execute(array($id));
        }
    }