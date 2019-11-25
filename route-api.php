<?php
    require_once('Router.php');
    require_once("./api/mensajesController.php");

    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


    $router = new Router();

    // rutas
    /*$router->addRoute("/tareas", "GET", "TaskApiController", "getTasks");
    $router->addRoute("/tareas/:ID", "GET", "TaskApiController", "getTask");
    $router->addRoute("/tareas/:ID", "DELETE", "TaskApiController", "deleteTask");
    $router->addRoute("/tareas", "POST", "TaskApiController", "addTask");
    $router->addRoute("/tareas/:ID", "PUT", "TaskApiController", "updateTask");*/
    $router->addRoute("comentarios/:ID", "GET", "MensajesController", "getComentarios");
    $router->addRoute("comentarios", "POST", "MensajesController", "addComentario");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
