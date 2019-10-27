<?php

    require_once "./model/styleModel.php";
    require_once "./view/styleView.php";
    include_once('./helpers/authHelper.php');


    class StyleController{

        private $model;
        private $view;

        function __construct(){
            $authHelper = new AuthHelper();
            $authHelper->checkLoggedIn();
            $this->model = new StyleModel();
            $this->view = new StyleView();
        }

        function addStyle(){
            $estilo = $_POST['nombre_estilo'];
            $this->model->addStyle($estilo);
            header('Location: ' . PRODUCTS);    
        }

        function styleView(){
            $lista = $this->model->getLista();
            $this->view->mostrar($lista);
        }

        function deleteStyle($id){
            $this->model->deleteStyle($id);
            header('Location: ' . PRODUCTS);
        }
    }