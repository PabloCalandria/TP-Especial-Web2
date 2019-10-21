<?php
    
    define('HOME' , "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/");
    define('LOGIN' , "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/login");
    define('LOGOUT' , "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/logout");

    require_once "controller/homeController.php";
    require_once "controller/productsController.php";
    require_once "controller/contactUsController.php";
    require_once "controller/loginController.php";

    $partesURL = explode("/", $_GET["action"]);
    $controllerHome = new homeController();
    $controllerProducts = new productsController();
    $controllerContactUs = new contactUsController();
    $controllerLogin = new loginController();

    if ($partesURL[0] == "index"){
        $controllerHome->HomeView();   //sino viene ninguna accion, inicia la funcion del archivo about.php
    }
    else{
        if ($partesURL[0] == "products"){
            $controllerProducts->ProductsView(); 
        }elseif($partesURL[0] == "contactUs"){
            $controllerContactUs->ContactUsView();
        }elseif($partesURL[0] == "login"){
            $controllerLogin->login();
        }elseif($partesURL[0] == "verificarLogin"){
            $controllerLogin->verificarLogin();
        }elseif($partesURL[0] == "logout"){
            $controllerLogin->logout();
        } 
}