<?php
    require_once 'libs/Smarty.class.php';

    class ProductsView{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }
        
        function mostrar($lista){
            $this->smarty->assign('Login', isset($_SESSION));
            $this->smarty->assign('Lista', $lista);
            $this->smarty->display('templates/products.tpl');
        }

        function mostrarProducto($product){
            $this->smarty->assign('Login', isset($_SESSION));
            $this->smarty->assign('Producto', $product);
            $this->smarty->display('templates/infoProduct.tpl');
        }
    }

?>