<?php

include_once('./helpers/authHelper.php');

class MensajesController{
    
    private $view;
    private $model;

    function __construct(){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
        $this->model = new ComentarioModel();
    }

    function agregarComentario($id){
        $descripcion = $_POST['text-comentario'];
        $puntaje = $_POST['puntaje-comentario'];
        $this->model->addComentario($id,$descripcion,$puntaje);        
    }

    function getComentarios($id){
    
    }

    function borrarComentario($id){

    }
    
}