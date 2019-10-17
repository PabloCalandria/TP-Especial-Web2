<?php
    require_once "controller/homeController.php";
    require_once "controller/productsController.php";

    
    $partesURL = explode("/", $_GET["action"]);
    $controllerHome = new homeController();
    $controllerProducts= new productsController();


    if ($partesURL[0] == ""){
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