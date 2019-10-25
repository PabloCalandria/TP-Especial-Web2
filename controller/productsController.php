<?php 

    require_once "./view/productsView.php";
    require_once "./model/productsModel.php";
    include_once('./helpers/authHelper.php');

    class ProductsController{
        
        private $view;
        private $model;

        function __construct(){
            $authHelper = new AuthHelper();
            $authHelper->checkLoggedIn();
            $this->model = new ProductsModel();
            $this->view = new ProductsView();
        }

        function productsView(){
            $lista = $this->model->getLista();
            $this->view->mostrar($lista);
        }

        function infoProduct($id){
            $product = $this->model->getProducto($id);
            $this->view->mostrarProducto($product);
        }
    }
?>