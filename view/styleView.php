<?php
    require_once 'libs/Smarty.class.php';

    class StyleView{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }
        
        function mostrar($lista){
            $this->smarty->assign('Login', isset($_SESSION));
            $this->smarty->assign('Lista', $lista);
            $this->smarty->display('templates/products.tpl');
        }
    }

?>