<?php
    require_once ('controller/homeController.php');
    require_once ('controller/loginController.php');
    require_once ('controller/productsController.php');
    require_once ('controller/contactUsController.php');

    define('BASE_URL' , "http://".$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"]). "/");
    define('LOGIN' , BASE_URL . "login");
    define('LOGOUT' , BASE_URL . "logout");

    
    if ($_GET['action'] == '')
        $_GET['action'] = 'home';

    $partesURL = explode("/", $_GET["action"]);
    switch ($partesURL[0]) {
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
        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }

?>