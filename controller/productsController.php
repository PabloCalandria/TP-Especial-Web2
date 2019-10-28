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

        function addProduct(){
            $estilo = $_POST['nombre_cerveza'];
            $cont_alc = $_POST['cont_alc'];
            $ibu = $_POST['ibu'];
            $o_g = $_POST['o_g'];
            //$cerveza_estilo = $_POST['cerveza_estilo'];
            $this->model->addProduct($estilo,$cont_alc,$ibu,$o_g,$cerveza_estilo);
            header('Location: ' . PRODUCTS);
        }

        function deleteProduct($id){
            $this->model->deleteProduct($id);
            header('Location: ' . PRODUCTS);
        }

        function editProduct($id){
            $cont_alc = $_POST['cont_alc'];
            $ibu = $_POST['ibu'];
            $o_g = $_POST['o_g'];
            $this->model->editarProduct($cont_alc,$ibu,$o_g,$id);
            $product = $this->model->getProducto($id);
            $this->view->mostrarProducto($product);
        }
    }
?>