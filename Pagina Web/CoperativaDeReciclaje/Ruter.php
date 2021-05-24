<?php
    require_once 'controllers/ControllerCartonero.php';
    require_once 'controllers/ControllerMaterial.php';
    require_once 'controllers/ControllerOfertaTransporte.php';
    require_once 'controllers/ControllerRetiroMaterial.php';
    require_once 'controllers/ControllerSession.php';
    require_once 'ruterclass.php';
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    $ruter = new Router();

    $ruter->addRoute("home", "GET", "ControllerCartonero", "viewHome");
    $ruter->addRoute("materiales", "GET", "ControllerMaterial", "viewMateriales");

    $ruter->setDefaultRoute("ControllerCartonero", "viewHome");

    $ruter->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
