<?php

require_once('libs/Smarty.class.php');

class LoginView {
    
    public function mostrarLogin($message = '') {
        $smarty = new Smarty();
        $smarty->assign('Context', explode("/", $_GET["action"]));
        $smarty->assign('Message', $message);
        $smarty->assign('Login', isset($_SESSION));
        $smarty->display('templates/login.tpl');
    }

    function formularioIngresar(){
        $smarty = new Smarty();
        $smarty->assign('Context', explode("/", $_GET["action"]));
        $smarty->assign('Login', isset($_SESSION));
        $smarty->display('templates/formRegistrarse.tpl');
    }

    
}
