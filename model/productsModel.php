<?php

    class ProductsModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=linxbeer; charset=utf8' , 'root', '');
        }

        function getLista(){
            $sentencia = $this->db->prepare('SELECT cerveza.id_cerveza, estilo.id_estilo, cerveza.id_estilo, estilo.nombre AS nombreEstilo, cerveza.nombre AS nombreCerveza
                        from estilo inner join cerveza on cerveza.id_estilo = estilo.id_estilo order by estilo.id_estilo');
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function getProducto($id){
            $sentencia = $this->db->prepare('SELECT * FROM cerveza WHERE id_cerveza=?');
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        
    }