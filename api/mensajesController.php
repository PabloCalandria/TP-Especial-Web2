<?php

include_once('./helpers/authHelper.php');

class MensajesController{
    
    private $view;
    private $model;

    function __construct(){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
    }
    
}