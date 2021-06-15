<?php
    require_once 'controllers/ControllerCartonero.php';
    require_once 'controllers/ControllerMaterial.php';
    require_once 'controllers/ControllerMaterialAceptado.php';
    require_once 'controllers/ControllerOfertaTransporte.php';
    require_once 'controllers/ControllerRetiroMaterial.php';
    require_once 'controllers/ControllerRecoleccionMaterial.php';
    require_once 'controllers/ControllerSession.php';
    require_once 'routerclass.php';
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    $router = new Router();

    $router->addRoute("home", "GET", "ControllerCartonero", "viewHome");
    $router->addRoute("materiales", "GET", "ControllerMaterial", "viewMateriales");


    $router->addRoute("retiro", "GET", "ControllerRetiroMaterial", "viewRetiro");
    $router->addRoute("retiro", "POST", "ControllerRetiroMaterial", "retiro");
    $router->addRoute("material_aceptado", "POST", "ControllerMaterialAceptado", "insertMaterialAceptado");
    

    //---- SPRINT 2 ----
    
    $router->addRoute("recoleccion", "GET", "ControllerRecoleccionMaterial", "viewRecoleccion");
    $router->addRoute("recoleccion", "POST", "ControllerRecoleccionMaterial", "recoleccion");

    $router->addRoute("listadoPedidoRetiro", "GET", "ControllerRetiroMaterial", "viewListaRetiros");

    $router->addRoute("materialesAceptados", "GET", "ControllerMaterialAceptado", "viewMaterialesAceptados");
    $router->addRoute("borrar_material/:ID", "GET", "ControllerMaterialAceptado", "deleteMaterialAceptado");
    $router->addRoute("modificar_material", "POST", "ControllerMaterialAceptado", "updateMaterialAceptado");
    //--------

    $router->setDefaultRoute("ControllerCartonero", "viewHome");

    $router->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
