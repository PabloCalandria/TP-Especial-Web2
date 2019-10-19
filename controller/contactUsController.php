<?php

require_once "./view/contactUsView.php";

class contactUsController{
    private $view;
    function __construct(){
        $this->view = new ContactUsView();
    }
    function ContactUsView(){
        $this->view->Mostrar();
    }
}
?>