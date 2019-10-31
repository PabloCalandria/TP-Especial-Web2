<?php

    class ProductsModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=linxbeer; charset=utf8' , 'root', '');
        }

        function getLista(){
            $sentencia = $this->db->prepare('SELECT cerveza.id_cerveza, estilo.id_estilo, 
                        cerveza.id_estilo, estilo.nombre AS nombreEstilo, cerveza.nombre 
                        AS nombreCerveza from estilo inner join cerveza 
                        on cerveza.id_estilo = estilo.id_estilo order by estilo.id_estilo');
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function getStyles(){
            $sentencia = $this->db->prepare('SELECT * FROM estilo');
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function getProducto($id){
            $sentencia = $this->db->prepare('SELECT cont_alc, id_cerveza, ibu, o_g, estilo.nombre 
                    AS nombreEstilo from estilo inner join cerveza 
                    on cerveza.id_estilo = estilo.id_estilo WHERE id_cerveza = ?');
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ); 
        }

        function addProduct($estilo,$cont_alc,$ibu,$o_g,$cerveza_estilo){
            $sentencia = $this->db->prepare('INSERT INTO cerveza(nombre,cont_alc,ibu,o_g,id_estilo) VALUES(?,?,?,?,?)');
            $sentencia->execute(array($estilo,$cont_alc,$ibu,$o_g,$cerveza_estilo));
        }

        function deleteProduct($id){
            $sentencia = $this->db->prepare('DELETE FROM cerveza WHERE id_cerveza=?');
            $sentencia->execute(array($id));
        }

        function editarProduct($cont_alc,$ibu,$o_g,$id){
            $sentencia = $this->db->prepare('UPDATE cerveza SET cont_alc=?, ibu=?, o_g=? WHERE id_cerveza=?');
            $sentencia->execute(array($cont_alc,$ibu,$o_g,$id));
        }
    }

