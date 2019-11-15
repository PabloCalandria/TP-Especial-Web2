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
        
    }

    function borrarComentario($id){

    }
    
}