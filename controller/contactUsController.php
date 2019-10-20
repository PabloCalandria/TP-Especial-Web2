<?php

require_once "./view/contactUsView.php";
require_once "securedController.php";

class contactUsController extends securedController{
    
    private $view;

    function __construct(){
        parent::__construct();
        $this->view = new ContactUsView();
    }
    
    function ContactUsView(){
        $this->view->Mostrar();
    }
}
?>