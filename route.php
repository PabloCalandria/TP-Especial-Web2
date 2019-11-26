<?php
    require_once ('controller/homeController.php');
    require_once ('controller/loginController.php');
    require_once ('controller/productsController.php');
    require_once ('controller/contactUsController.php');
    require_once ('controller/styleController.php');
    require_once ('controller/userController.php');
    require_once ('controller/imagenController.php');

    define('BASE_URL' , "http://".$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"]). "/");
    define('LOGIN' , BASE_URL . "login");
    define('LOGOUT' , BASE_URL . "logout");
    define('PRODUCTS' , BASE_URL . "products");
    define('REGISTRARSE' , BASE_URL . "registrarse");
    define('USUARIOS' , BASE_URL . "usuarios");
    define('INFO_PRODUCTS' , BASE_URL . "infoProduct");
    define('SIN_PERMISOS' , BASE_URL . "permisoDenegado");
    define('UPDATE_PASS' , BASE_URL . "formPregunta");

    $partesURL = explode("/", $_GET["action"]);
    
    switch ($partesURL[0]) {
        case '':
            $controller = new homeController();
            $controller->homeView();
            break;
        case 'usuarios':
            $controller = new UserController();
            $controller->userView();
            break;
        case 'darAdmin':
            $controller = new UserController();
            $controller->darAdmin($partesURL[1]);
            break;
        case 'agregarProduct':
            $controller = new ProductsController();
            $controller->addProduct(); 
            break;
        case 'agregarStyle':
            $controller = new StyleController();
            $controller->addStyle(); 
            break;
        case 'login':
            $controller = new LoginController();
            $controller->showLogin();
            break;
        case 'verificarLogin':
            $controller = new LoginController();
            $controller->verifyLogin();
            break;
        case 'logout':
            $controller = new LoginController();
            $controller->logout();
            break;
        case 'home':
            $controller = new HomeController();
            $controller->homeView();
            break;    
        case 'products':
            $controllerP = new ProductsController();
            $controllerP->productsView();
            break;
        case 'contactUs':
            $controller = new ContactUsController();
            $controller->contactUsView();
            break;
        case 'infoProduct':
            $controller = new ProductsController();
            $controller->infoProduct($partesURL[1]); 
            break;
        case 'deleteProduct':
            $controller = new ProductsController();
            $controller->deleteProduct($partesURL[1]); 
            break;
        case 'deleteStyle':
            $controllerS = new StyleController();
            $controllerS->deleteStyle($partesURL[1]);
            break;
        case 'registrarse':
            $controller = new LoginController();
            $controller->viewRegistro();
            break;
        case 'deleteUser':
            $controller = new UserController();
            $controller->deleteUser($partesURL[1]);
            break;
        case 'agregarUser':
            $controller = new LoginController();
            $controller->registrarUser();
            break;
        case 'formPregunta':
            $controller = new LoginController();
            $controller->viewVerifyQuest();
            break;
        case 'verificarPregunta':
            $controller = new LoginController();
            $controller->restorePassword();
            break;
        case 'editarProduct':
            $controller = new ProductsController();
            $controller->editProduct($partesURL[1]);
            break;
        case 'agregarImagen':
            $controller = new ImagenController();
            $controller->addImagen($partesURL[1]);
            break;
        case 'deleteImagen':
            $controller = new ImagenController();
            $controller->deleteImg($partesURL[1],$partesURL[2]);
            break;
        case 'quitarAdmin':
            $controller = new UserController();
            $controller->quitarAdmin($partesURL[1]);
            break;
        case 'permisoDenegado':
            echo "<h1>No posee permisos para realizar esta operación, comuniquese con el aministrador</h1>";
            break;
        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }

?>