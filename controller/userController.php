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

        function restorePassword(){
            $usuario = $_POST['NewUsuario'];
            $contraseña = $_POST['NewContraseña'];
            $pregunta = $_POST['preguntaSecreta'];
            if($usuario != null && $contraseña != null && $pregunta != null){
                $user = $this->model->getUser($usuario);
                if (password_verify($pregunta, $user->respuesta)){
                    $hashPass = password_hash($contraseña, PASSWORD_DEFAULT);    
                    $this->model->updateUser($contraseña,$user->id_usuario);
                    header('Location: ' . BASE_URL);    
                }
            }else{
                header('Location: ' . UPDATE_PASS);    
            }
        }
}