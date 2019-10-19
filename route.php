<?php
    
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
        $controllerHome->HomeView();
    }
    else{
        if ($partesURL[0] == "products"){
            $controllerProducts->ProductsView(); 
        }elseif($partesURL[0] == "contactUs"){
            $controllerContactUs->ContactUsView();
        }elseif($partesURL[0] == "login"){
            $controllerLogin->showLogin();
        }
        }    /*
        }elseif($partesURL[0] == "actualiza"){
            actualizaFecha($partesURL[1]);
        }
    }*/
?>