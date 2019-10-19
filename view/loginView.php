<?php

require_once('libs/Smarty.class.php');

class loginView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }
    
    public function mostrarLogin($message = '') {
        $this->smarty->assign('Titulo', 'Ingresar');
        $this->smarty->assign('Message', $message);

        $this->smarty->display('templates/login.tpl');
    }
}
