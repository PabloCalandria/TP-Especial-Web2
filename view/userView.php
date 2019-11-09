<?php
    require_once 'libs/Smarty.class.php';

    class userView{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }
        
        function mostrarUser($users){
            $this->smarty->assign('Context', explode("/", $_GET["action"]));
            $this->smarty->assign('Login', isset($_SESSION));
            $this->smarty->assign('Usuario', $_SESSION['USERNAME']);
            $this->smarty->assign('Admin', $_SESSION['ADMIN']);
            $this->smarty->assign('Users', $users);
            $this->smarty->display('templates/users.tpl');
        }
        
    }

?>