<?php
<<<<<<< HEAD
=======
    require_once "controller/homeController.php";
    require_once "controller/productsController.php";
    require_once "controller/contactUsController.php";


>>>>>>> d296844b46de7863f0c076684527a797f744888d
    
    require_once "controller/homeController.php";
    require_once "controller/productsController.php";
    require_once "controller/contactUsController.php";
    require_once "controller/loginController.php";

    $partesURL = explode("/", $_GET["action"]);
    $controllerHome = new homeController();
<<<<<<< HEAD
    $controllerProducts = new productsController();
    $controllerContactUs = new contactUsController();
    $controllerLogin = new loginController();


    if ($partesURL[0] == "index"){
        $controllerHome->HomeView();
=======
    $controllerProducts= new productsController();
    $controllerContactUs= new contactUsController();


    if ($partesURL[0] == "index"){
        $controllerHome->HomeView();   //sino viene ninguna accion, inicia la funcion del archivo about.php
>>>>>>> d296844b46de7863f0c076684527a797f744888d
    }
    else{
        if ($partesURL[0] == "products"){
            $controllerProducts->ProductsView(); 
        }elseif($partesURL[0] == "contactUs"){
            $controllerContactUs->ContactUsView();
<<<<<<< HEAD
        }elseif($partesURL[0] == "login"){
            $controllerLogin->showLogin();
        }
=======
            }
>>>>>>> d296844b46de7863f0c076684527a797f744888d
        }    /*
        }elseif($partesURL[0] == "actualiza"){
            actualizaFecha($partesURL[1]);
        }
    }*/
?>