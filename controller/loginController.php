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

    function viewVerifyQuest(){
        $this->view->formularioVerifica();
    }

    function restorePassword(){
        $usuario = $_POST['NewUsuario'];
        $contraseña = $_POST['NewContraseña'];
        $pregunta = $_POST['preguntaSecreta'];
        if($usuario != null && $contraseña != null && $pregunta != null){
            $user = $this->model->getUser($usuario);
            if ($user && password_verify($pregunta, $user->respuesta)){
                $hashPass = password_hash($contraseña, PASSWORD_DEFAULT);    
                $this->model->updateUser($hashPass,$user->id_usuario);
                header('Location: ' . BASE_URL);    
            }else{
                header('Location: ' . UPDATE_PASS);    
            }
        }else{
            header('Location: ' . UPDATE_PASS);    
        }
    }

    function registrarUser(){
        $pregunta = $_POST['newPregunta'];
        $user = $_POST['newUser'];
        $password = $_POST['newPass'];
        if($user != null && $password != null && $pregunta != null){
            $hashPass = password_hash($password, PASSWORD_DEFAULT);
            $hashQuest = password_hash($pregunta, PASSWORD_DEFAULT);
            $this->model->registrar($user,$hashPass,$hashQuest);
            $this->inicio($user,$password);
        }else {
            header('Location: ' . REGISTRARSE);
        }
    }

    private function inicio($user,$password){
        $username = $this->model->getUser($user);
        if (isset($username) && $username && password_verify($password, $username->contraseña)){
            $this->authHelper->login($username);
            header('Location: '. BASE_URL);
        }
        else{
            $this->view->mostrarLogin("Login incorrecto");
        }
    }
}