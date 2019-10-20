<?php

require_once "./view/homeView.php";
require_once "securedController.php";

class homeController extends securedController{

    //private $model;
    private $view;

	function __construct(){
        
        parent::__construct();
        //$this->model = new TareasModel();
        $this->view = new homeView();
    }
    
    function HomeView(){
        $this->view->Mostrar();
    }
}

?>