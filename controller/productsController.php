<?php 

    require_once "./view/productsView.php";
    include_once('./helpers/authHelper.php');

    class ProductsController{
        
        private $view;

        function __construct(){
            $authHelper = new AuthHelper();
            $authHelper->checkLoggedIn();
            $this->view = new ProductsView();
        }

        function productsView(){
            $this->view->mostrar();
        }
    }
?>