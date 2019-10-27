<?php
    require_once ('controller/homeController.php');
    require_once ('controller/loginController.php');
    require_once ('controller/productsController.php');
    require_once ('controller/contactUsController.php');
    require_once ('controller/styleController.php');

    define('BASE_URL' , "http://".$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"]). "/");
    define('LOGIN' , BASE_URL . "login");
    define('LOGOUT' , BASE_URL . "logout");
    define('PRODUCTS' , BASE_URL , "products");
    
    if ($_GET['action'] == '')
        $_GET['action'] = 'home';

    $partesURL = explode("/", $_GET["action"]);
    switch ($partesURL[0]) {
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
            $controller = new ProductsController();
            $controller->productsView(); 
            break;
        case 'contactUs':
            $controller = new ContactUsController();
            $controller->contactUsView();
            break;
        case 'infoProduct':
            $controller = new ProductsController();
            $controller->infoProduct($partesURL[1]); 
            break;
        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }

?>