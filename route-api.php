<?php
    require_once('Router.php');
    require_once("api/mensajesController.php");

    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


    $router = new Router();

    // rutas
    $router->addRoute("comentarios/:ID", "GET", "MensajesController", "getComentario");
    $router->addRoute("comentarios", "GET", "MensajesController", "getComentarios");
    $router->addRoute("comentarios", "POST", "MensajesController", "addComentario");
    $router->addRoute("comentarios/:ID", "DELETE", "MensajesController", "deleteComentario");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
