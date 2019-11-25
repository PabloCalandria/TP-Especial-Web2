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
        if ($_SESSION['ADMIN'] == '1'){
            if ($_FILES['img']['name'] == null){
                header('Location: ' . INFO_PRODUCTS . "/" . $id);
            }else{
                if ($_FILES['img']['name']) {
                    if ($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/png") {
                        $this->model->addImg($id,$_FILES['img']);                
                    }
                    else {
                        $this->view->showError("Formato no aceptado");
                        die();
                    }
                }
                else {
                    $this->model->addImg($id,$_FILES['img']);  
                }
            }
            header('Location: ' . INFO_PRODUCTS . "/" . $id);
        }
        else{
            header('Location: ' . SIN_PERMISOS); 
        }  
    }

    function deleteImg($idB,$idC){
        if ($_SESSION['ADMIN'] == '1'){
            $this->model->eliminaImg($idB);
            header('Location: ' . INFO_PRODUCTS . "/" . $idC);
        }
        else{
            header('Location: ' . SIN_PERMISOS); 
        }  
    }
}

?>