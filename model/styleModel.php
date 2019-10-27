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
        
        function getLista(){
            $sentencia = $this->db->prepare('SELECT cerveza.id_cerveza, estilo.id_estilo, cerveza.id_estilo, estilo.nombre AS nombreEstilo, cerveza.nombre AS nombreCerveza
                        from estilo inner join cerveza on cerveza.id_estilo = estilo.id_estilo order by estilo.id_estilo');
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
    }