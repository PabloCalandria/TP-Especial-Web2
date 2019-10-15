<?php

require_once "./view/homeView.php";

class homeController {

    //private $model;
    private $view;

	function __construct(){
        
        //$this->model = new TareasModel();
        $this->view = new homeView();
    }
    public function homeView($params = null) {
        $this->view->response($tareas, 200);
    }

   // function (){
   //     $this->view->Mostrar();
   //}
}


?>