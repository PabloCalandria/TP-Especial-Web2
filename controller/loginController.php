<?php

include_once('./view/loginView.php');
include_once('./model/userModel.php');

class loginController {

    private $view;
    private $model;

    public function __construct() {
        $this->view = new loginView();
        $this->model = new userModel();
    }

    public function login() {
        $this->view->mostrarLogin();
    }
    
    public function verificarLogin() {
        var_dump("Asd");
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->getUser($username);

        if(isset($user)){
            if (password_verify($password,$user[0]["contraseña"])){
                header('Location: homeView.php');
            }else{
                $this->view->mostrarLogin("Contraseña incorrecta");
            }
        }else{
            $this->view->mostrarLogin("Login incorrecto");
        }
    }
}
