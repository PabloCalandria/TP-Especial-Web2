<?php 

    require_once "./view/productsView.php";
    require_once "./model/productsModel.php";
    require_once "./model/userModel.php";
    require_once "./model/imagenModel.php";
    include_once('./helpers/authHelper.php');

    class ProductsController{
        
        private $view;
        private $model;
        private $modelImg;
        private $modelUser;

        function __construct(){
            $authHelper = new AuthHelper();
            $authHelper->checkLoggedIn();
            $this->model = new ProductsModel();
            $this->view = new ProductsView();
            $this->modelImg = new ImagenModel();
            $this->modelUser = new UserModel();
        }
        
        function productsView(){
            $lista = $this->model->getLista();
            $admin = $this->modelUser->adminUser($_SESSION['USERNAME']);
            $styles = $this->model->getStyles();
            $this->view->mostrar($lista, $styles, $admin);
        }

        function infoProduct($id){
            $admin = $this->modelUser->adminUser($_SESSION['USERNAME']);
            $product = $this->model->getProducto($id);
            $imagenes = $this->modelImg->getImagenes($id);
            $this->view->mostrarProducto($product, $imagenes, $admin);
        }

        function addProduct(){
            if ($_SESSION['ADMIN'] == '1'){
                $estilo = $_POST['nombre_cerveza'];
                $cont_alc = $_POST['cont_alc'];
                $ibu = $_POST['ibu'];
                $o_g = $_POST['o_g'];
                $cerveza_estilo = $_POST['cerveza_estilo'];
                $this->model->addProduct($estilo,$cont_alc,$ibu,$o_g,$cerveza_estilo);  
                header('Location: ' . PRODUCTS);
            }
            else{
                header('Location: ' . SIN_PERMISOS); 
            }  
        }

        function deleteProduct($id){
            if ($_SESSION['ADMIN'] == '1'){
            $this->model->deleteProduct($id);
            header('Location: ' . PRODUCTS);
            }
            else{
                header('Location: ' . SIN_PERMISOS); 
            }  
        }

        function editProduct($id){
            if ($_SESSION['ADMIN'] == '1'){
                $cont_alc = $_POST['cont_alc'];
                $ibu = $_POST['ibu'];
                $o_g = $_POST['o_g'];
                $admin = $_SESSION['ADMIN'];
                $this->model->editarProduct($cont_alc,$ibu,$o_g,$id);
                $product = $this->model->getProducto($id);
                $imagenes = $this->modelImg->getImagenes($id);
                $this->view->mostrarProducto($product, $imagenes, $admin);
            }
            else{
                header('Location: ' . SIN_PERMISOS); 
            }
        }
    }
?>