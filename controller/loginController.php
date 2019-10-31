<?php
include_once('./view/loginView.php');
include_once('./model/userModel.php');
include_once('./helpers/authHelper.php');

class LoginController {

    private $view;
    private $model;
    private $authHelper;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
    }

    public function showLogin() {
        $this->authHelper= new AuthHelper();
        $this->view->mostrarLogin();
    }

    public function verifyLogin() {
        $this->authHelper= new AuthHelper();
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $user = $this->model->getUser($username);
        if (isset($user) && $user && password_verify($password, $user->contraseña)){
            $this->authHelper->login($user);
            header('Location: '. BASE_URL);
        }
        else{
            $this->view->mostrarLogin("Login incorrecto");
        }
    }

    public function logout() {
        $this->authHelper= new AuthHelper();
        $this->authHelper->logout();
        header('Location: ' . LOGIN);
    }
}