<?php
    define('BASE_PATH', true);

    require_once('system/config.php');
    require_once('system/core/autoload.php');
    
    $router = new Router();

    $controller = $router->getController();
    $method = $router->getMethod();
    $param = $router->getParam();


    if(!CoreHelper::validateController($controller))
    $controller = 'ErrorPage';

    require PATH_CONTROLLERS . "{$controller}Controller.php";

    $controller .= 'Controller';

    if(!CoreHelper::validateMethodController($controller, $method))
    $method = 'exec';

    $controller = new $controller;

    $controller->$method($param);
?>