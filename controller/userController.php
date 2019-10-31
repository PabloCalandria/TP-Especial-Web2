<?php

    require_once "./model/userModel.php";
    require_once "./view/userView.php";
    include_once('./helpers/authHelper.php');

    class UserController{

        private $model;
        private $view;
        private $modelUser;

        function __construct(){
            //$authHelper = new AuthHelper();
            //$authHelper->checkLoggedIn();
            $this->modelUser = new UserModel();
            $this->view = new userView();
            $this->model = new UserModel();
        }
    
        function userView(){
            $user = $this->model->getUsers();
            $this->view->mostrarUser($user);
        }

        function darAdmin($id){
            $this->model->modificarAdmin($id);
            header('Location: ' . USUARIOS);
        }

        /*function deleteUser($id){
            $this->model->borrarUsuario($id);
            header('Location: ' . USUARIOS);
        }*/
}