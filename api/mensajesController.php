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
        $this->model->addComentario($body->id_cerveza, $body->texto, $body->puntaje);
        $this->view->response("El comentario se agrego con exito", 200);
}

    function getComentarios($params = null){
        $id = $params[':ID'];
        var_dump($id);
        $tarea = $this->model->getComentario($id);
        var_dump($tareas);
        if ($tarea) {
            $this->view->response($tarea, 200);   
        } else {
            $this->view->response("No existe la tarea con el id={$id}", 404);
        }
    }

    function borrarComentario($params = null){
        $task_id = $params[':ID'];
        $task = $this->model->GetTarea($task_id);
        if ($task) {
            $this->model->BorrarTarea($task_id);
            $this->view->response("Tarea id=$task_id eliminada con éxito", 200);
        }
        else 
            $this->view->response("Task id=$task_id not found", 404);
    }
}