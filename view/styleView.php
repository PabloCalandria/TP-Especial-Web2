<?php
    require_once 'libs/Smarty.class.php';

    class StyleView{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }
        
        function mostrar($lista){
            $this->smarty->assign('Context', explode("/", $_GET["action"]));
            $this->smarty->assign('Login', isset($_SESSION));
            $this->smarty->assign('Admin', $_SESSION['ADMIN']);
            $this->smarty->assign('Lista', $lista);
            $this->smarty->display('templates/products.tpl');
        }

        function mostrarStyle($style){
            $this->smarty->assign('Context', explode("/", $_GET["action"]));
            $this->smarty->assign('Login', isset($_SESSION));
            $this->smarty->assign('Admin', $_SESSION['ADMIN']);
            $this->smarty->assign('Estilos', $style);
            $this->smarty->display('templates/products.tpl');
        }
    }

?>