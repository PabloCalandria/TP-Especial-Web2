<?php

include_once('./model/comentarioModel.php');
require_once("./api/apiController.php");
require_once("./api/jsonView.php");

class MensajesController extends ApiController{
 
    private $model;

    function __construct(){
        parent::__construct();
        $this->model = new ComentarioModel();
    }

    function addComentario($params = null) {

        $body = $this->getData();

        var_dump($body);
        
        $this->model->addComentario($body->id_cerveza, $body->texto, $body->puntaje);

        $this->view->response("El comentario se agrego con exito", 200);
}

    function getComentarios($params = null){
    
    }

    function borrarComentario($params = null){

    }
    
}