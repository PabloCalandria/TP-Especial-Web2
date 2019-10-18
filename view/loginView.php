<?php

require_once('libs/Smarty.class.php');

class LoginView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }
    
    public function showLogin($error = null) {
        $this->smarty->assign('titulo', 'Iniciar Sesión');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }
}
