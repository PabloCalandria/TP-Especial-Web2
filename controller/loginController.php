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
        $this->authHelper= new AuthHelper();
    }

    public function showLogin() {
        $this->view->mostrarLogin();
    }

    public function verifyLogin() {
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
        $this->authHelper->logout();
        header('Location: ' . LOGIN);
    }

    function viewRegistro(){
        $this->view->formularioIngresar();
    }

    function registrarUser(){
<<<<<<< HEAD
        $user = $_POST['newUser'];
        $password = $_POST['newPass'];
        if(($user != null) && ($password != null)){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $this->model->registrar($user,$hash);
                header('Location: ' . LOGIN);
            }else {
                header('Location: ' . REGISTRARSE);
            }
=======
        if((isset($user)) && (isset($password))){
            $user = $_POST['newUser'];
            $password = $_POST['newPass'];
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->model->registrar($user,$hash);
            header('Location: ' . LOGIN);
        }else {
            header('Location: ' . REGISTRARSE);
        }
>>>>>>> fe965b586f211b5eb3a6232297cc4fb295305f06
    }
}