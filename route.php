<?php
    require_once ('controller/homeController.php');
    require_once ('controller/loginController.php');
    require_once ('controller/productsController.php');
    require_once ('controller/contactUsController.php');
    require_once ('controller/styleController.php');
    require_once ('controller/userController.php');

    define('BASE_URL' , "http://".$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"]). "/");
    define('LOGIN' , BASE_URL . "login");
    define('LOGOUT' , BASE_URL . "logout");
    define('PRODUCTS' , BASE_URL . "products");
    define('REGISTRARSE' , BASE_URL . "registrarse");
    define('USUARIOS' , BASE_URL . "usuarios");

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
        case 'editarProduct':
            $controller = new ProductsController();
            $controller->editProduct($partesURL[1]);
            break;
        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }

?>