<?php
    require_once "controller/homeController.php";
    require_once "controller/loginController.php";
    require_once "controller/productsController.php";
    require_once "controller/contactUsController.php";

    define('BASE_URL' , "http://".$_SERVER["SERVER_NAME"] .':'.$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"]). "/");
    define('LOGIN' , BASE_URL . "login");
    define('LOGOUT' , BASE_URL . "logout");

    $controllerHome = new HomeController();
    $controllerLogin = new LoginController();
    $controllerProducts = new ProductsController();
    $controllerContactUs = new ContactUsController();
    
    $partesURL = explode("/", $_GET["action"]);
    switch ($partesURL[0]) {
        case 'login':
            $controllerLogin->showLogin();
            break;
        case 'verificarLogin':
            $controllerLogin->verifyLogin();
            break;
        case 'logout':
            $controllerLogin->logout();
            break;
        case '':
            $controllerHome->homeView();
            break;    
        case 'products':
            $controllerProducts->productsView(); 
            break;
        case 'contactUs':
            $controllerContactUs->contactUsView();
            break;
        default:
            echo "<h1>Error 404 - Page not found </h1>";
            break;
    }
?>