<?php
    require_once 'libs/Smarty.class.php';

    class ProductsView{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }
        
        function mostrar($lista, $style, $admin){
            $this->smarty->assign('Context', explode("/", $_GET["action"]));
            $this->smarty->assign('Login', isset($_SESSION));
            $this->smarty->assign('Admin', $_SESSION['ADMIN']);
            $this->smarty->assign('User', $_SESSION['ID_USER']);
            $this->smarty->assign('admin', $admin);
            $this->smarty->assign('BASE_URL', BASE_URL);
            $this->smarty->assign('Lista', $lista);
            $this->smarty->assign('Estilos', $style);
            $this->smarty->display('templates/products.tpl');
        }

        function mostrarProducto($product, $imagenes, $admin){
            $url = explode("/", $_GET["action"]);
            $this->smarty->assign('Context2', $url[1]);
            $this->smarty->assign('Context', explode("/", $_GET["action"]));
            $this->smarty->assign('Login', isset($_SESSION));
            $this->smarty->assign('Admin', $_SESSION['ADMIN']);
            $this->smarty->assign('User', $_SESSION['ID_USER']);
            $this->smarty->assign('admin', $admin);
            $this->smarty->assign('BASE_URL', BASE_URL);
            $this->smarty->assign('Producto', $product);
            $this->smarty->assign('Imagenes', $imagenes);
            $this->smarty->display('templates/infoProduct.tpl');
        }
    }

?>