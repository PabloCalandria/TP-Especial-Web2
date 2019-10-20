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

    public function logout() {
        session_start();
        session_destroy();
        header(LOGIN);
    }
    
    public function verificarLogin() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->getUser($username);

        if(isset($user)){
            if (password_verify($password,$user[0]["contraseña"])){
                session_start();
                $_SESSION["User"] = $username;
                header(HOME);
            }else{
                $this->view->mostrarLogin("Contraseña incorrecta");
            }
        }else{
            $this->view->mostrarLogin("Login incorrecto");
        }
    }
}
