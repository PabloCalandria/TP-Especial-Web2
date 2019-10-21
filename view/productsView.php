<?php
    require_once 'libs/Smarty.class.php';

    class ProductsView{
        
        function Mostrar(){
            $smarty= new Smarty();
            $smarty->display('templates/products.tpl');
        }
    }

?>