<?php
    require_once "controller/homeController.php";
    
    $partesURL = explode("/", $_GET["action"]);
    $controller = new homeController();


    if ($partesURL[0] == ""){
        $controller->HomeView();   //sino viene ninguna accion, inicia la funcion del archivo about.php
    }
    /*
    else{
        if ($partesURL[0] == "agregar"){
            insertDatos();   //sino viene ninguna accion, inicia la funcion del archivo about.php
        }elseif($partesURL[0] == "borrar"){
            borrarTarea($partesURL[1]);
        }elseif($partesURL[0] == "actualiza"){
            actualizaFecha($partesURL[1]);
        }
    }*/
?>