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
        $password = $_POST['password'];

        $user = $this->model->getUser($_POST['username']);
        
        echo $user->usuario;
        echo $password;
        echo $user->contraseña;
        echo '/';
        echo password_verify($password, $user->contraseña);

        if (isset($user) && $user != null && password_verify($password, $user->contraseña)){
            session_start();
            $_SESSION['ID_USER'] = $user->id_usuario;
            $_SESSION['USERNAME'] = $user->usuario;
            header('Location: ' . HOME);
        }
        else{
            $this->view->mostrarLogin("Login incorrecto");
        }
    }
}
