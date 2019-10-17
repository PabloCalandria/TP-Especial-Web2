<?php
    require_once "controller/homeController.php";
    require_once "controller/productsController.php";
    require_once "controller/contactUsController.php";


    
    $partesURL = explode("/", $_GET["action"]);
    $controllerHome = new homeController();
    $controllerProducts= new productsController();
    $controllerContactUs= new contactUsController();


    if ($partesURL[0] == "index"){
        $controllerHome->HomeView();   //sino viene ninguna accion, inicia la funcion del archivo about.php
    }
    else{
        if ($partesURL[0] == "products"){
            $controllerProducts->ProductsView(); 
        }elseif($partesURL[0] == "contactUs"){
            $controllerContactUs->ContactUsView();
            }
        }    /*
        }elseif($partesURL[0] == "actualiza"){
            actualizaFecha($partesURL[1]);
        }
    }*/
?>