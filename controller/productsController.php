<?php 
    require_once "./view/productsView.php";

    class productsController{
        private $view;

        function __construct(){
            $this->view = new ProductsView();
        }
        function ProductsView(){
            $this->view->Mostrar();
        }
    }
?>