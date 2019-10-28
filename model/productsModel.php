<?php
    class ProductsModel{
        private $db;
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost; dbname=linxbeer; charset=utf8', 'root', '');
        }   
        public function getListaCervezas(){
            $query = $this->db->prepare('SELECT estilo.id_estilo, cerveza.id_estilo, cerveza.nombre AS nombreCerveza, estilo.nombre AS nombreEstilo 
                                         FROM cerveza INNER JOIN estilo 
                                         WHERE cerveza.id_estilo = estilo.id_estilo');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    }