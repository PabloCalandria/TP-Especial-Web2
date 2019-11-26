<?php

include_once('./model/comentarioModel.php');
require_once("apiController.php");
require_once("jsonView.php");

class MensajesController extends ApiController{
 
    private $model;

    function __construct(){
        parent::__construct();
        $this->model = new ComentarioModel();
    }

    function addComentario($params = null) {
        $body = $this->getData();
        $this->model->addComentario($body->id_cerveza, $body->texto, $body->puntaje);
        $this->view->response("El comentario se agrego con exito", 200);
}

    function getComentarios($params = null){
        $id = $params[':ID'];
        $comentarios = $this->model->getComentario($id);
        if ($comentarios) {
            $this->view->response($comentarios, 200);   
        } else {
            $this->view->response("No existe la tarea con el id={$id}", 404);
        }
    }

    function deleteComentario($params = null){
        $id = $params[':ID'];
        $comentarios = $this->model->getComentario($id);
        if ($comentarios) {
            $this->model->borraComentario($id);
            $this->view->response("comentario id=$id eliminado con éxito", 200);
        }
        else 
            $this->view->response("comentarios id=$id not found", 404);
    }
}