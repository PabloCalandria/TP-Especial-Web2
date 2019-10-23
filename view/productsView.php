<?php
    require_once 'libs/Smarty.class.php';

    class ProductsView{
        
        function mostrar(){
            $smarty= new Smarty();
            $smarty->display('templates/products.tpl');
        }
    }

?>