<?php

require_once "./model/imagenModel.php";
include_once('./helpers/authHelper.php');

class ImagenController{
    private $view;
    private $model;

	function __construct(){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
        $this->model = new ImagenModel();
    }
    
    function addImagen($id){
        if ($_FILES['img']['name']) {
            if ($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/png") {
                $this->model->addImg($id,$_FILES['img']);                }
            else {
                $this->view->showError("Formato no aceptado");
                die();
            }
        }
        else {
            $this->model->addImg($id,$_FILES['img']);  
        }
        header('Location: ' . INFO_PRODUCTS . "/" . $id);
    }

    function deleteImg($idB,$idC){
        $this->model->eliminaImg($idB);
        header('Location: ' . INFO_PRODUCTS . "/" . $idC);
    }
}

?>