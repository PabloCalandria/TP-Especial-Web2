<?php
require_once("route.php");
require_once("controller/homeController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("index", "GET", "homeController", "homeView");

// rutea
$router->route($resource, $method);

