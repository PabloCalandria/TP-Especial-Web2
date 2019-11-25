<?php

    require_once "./model/userModel.php";
    require_once "./view/userView.php";
    include_once('./helpers/authHelper.php');

    class UserController{

        private $model;
        private $view;
        private $modelUser;

        function __construct(){
            $authHelper = new AuthHelper();
            $authHelper->checkLoggedIn();
            $this->modelUser = new UserModel();
            $this->view = new userView();
            $this->model = new UserModel();
        }
    
        function userView(){
            $user = $this->model->getUsers();
            $this->view->mostrarUser($user);
        }

        function darAdmin($id){
            if ($_SESSION['ADMIN'] == '1'){
                $this->model->darAdmin($id);
                header('Location: ' . USUARIOS);
            }
            else{
                header('Location: ' . SIN_PERMISOS); 
            }
        }

        function quitarAdmin($id){
            if ($_SESSION['ADMIN'] == '1'){
                $this->model->quitarAdmin($id);
                header('Location: ' . USUARIOS);
            }
            else{
                header('Location: ' . SIN_PERMISOS); 
            }            
        }

        function deleteUser($id){
            if ($_SESSION['ADMIN'] == '1'){
                $this->model->borrarUsuario($id);
                header('Location: ' . USUARIOS);
            }
            else{
                header('Location: ' . SIN_PERMISOS); 
            } 
        }
}