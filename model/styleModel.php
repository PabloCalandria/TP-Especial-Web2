<?php

    class StyleModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=linxbeer; charset=utf8' , 'root', '');
        }

        function addStyle($estilo){
            $sentencia = $this->db->prepare('INSERT INTO estilo(nombre) VALUES(?)');
            $sentencia->execute(array($estilo));
        }
        
        function deleteStyle($id){
            $sentencia = $this->db->prepare('DELETE FROM estilo WHERE id_estilo=?');
            $sentencia->execute(array($id));
        }
    }