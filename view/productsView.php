<?php
    require_once 'libs/Smarty.class.php';

    class ProductsView{
        
        function mostrar($lista){
            $smarty= new Smarty();
            $smarty->assign('Login', isset($_SESSION));
            $smarty->assign('lista', $lista);
            $smarty->display('templates/products.tpl');
        }
    }

?>