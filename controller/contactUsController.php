<?php

require_once "./view/contactUsView.php";

class ContactUsController{
    
    private $view;

    function __construct(){
        //$authHelper = new AuthHelper();
        //$authHelper->checkLoggedIn();
        $this->view = new ContactUsView();
    }
    
    function contactUsView(){
        $this->view->mostrar();
    }
}
?>