<?php
require_once './models/ModelCartonero.php';
require_once './views/view.php';

class ControllerCartonero{

    private $view;
    private $modelCartonero;

    function __construct(){
        $this->view = new View();
        $this->modelCartonero = new ModelCartonero();
    }

    function viewHome(){
        $this->view->mostrarHome();
    }

}
