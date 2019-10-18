<?php

include_once('./view/loginView.php');
include_once('./model/userModel.php');

class loginController {

    private $view;
    private $model;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function verifyUser() {
        $username = $_POST['usuario'];
        $password = $_POST['contraseña'];

        $user = $this->model->getByUsername($username);

        if (!empty($user) && password_verify($password, $user->password)) {
            header('Location: ver');
        } else {
            $this->view->showLogin("Login incorrecto");
        }
       
    }
}
