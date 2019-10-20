<?php 

    require_once "./view/productsView.php";
    require_once "securedController.php";

    class productsController extends securedController{
        
        private $view;

        function __construct(){
            parent::__construct();
            $this->view = new ProductsView();
        }

        function ProductsView(){
            $this->view->Mostrar();
        }
    }
?>