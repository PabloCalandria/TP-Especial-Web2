<?php

require_once "./view/homeView.php";
include_once('./helpers/authHelper.php');

class HomeController{
    private $view;

	function __construct(){
        //$authHelper = new AuthHelper();
        //$authHelper->checkLoggedIn();
        $this->view = new HomeView();
    }
    
    function homeView(){
        $this->view->mostrar();
    }
}

?>