<?php
<<<<<<< HEAD
    // define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    // define("LOGIN", BASE_URL . '/login');
    // define("LOGOUT", BASE_URL . '/logout');
    define('HOME' , "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    define('LOGIN' , "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/login");
    define('LOGOUT' , "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/logout");

=======
    
    define('HOME' , "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/");
    define('LOGIN' , "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/login");
    define('LOGOUT' , "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/logout");
>>>>>>> 698435a68d4e993659adf4c91770db5320b9a94d

    require_once "controller/homeController.php";
    require_once "controller/productsController.php";
    require_once "controller/contactUsController.php";
    require_once "controller/loginController.php";

    $partesURL = explode("/", $_GET["action"]);
    $controllerHome = new homeController();
    $controllerProducts = new productsController();
    $controllerContactUs = new contactUsController();
    $controllerLogin = new loginController();
    if ($_GET['action'] == '')
        $_GET['action'] = 'index';

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