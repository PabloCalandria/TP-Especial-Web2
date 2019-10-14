<?php

require_once "./view/homeView.php";

class homeController {

    //private $model;
    private $view;

	function __construct(){
        
        //$this->model = new TareasModel();
        $this->view = new homeView();
    }
    
    function homeView(){
        $this->view->Mostrar();
    }
}


?>
