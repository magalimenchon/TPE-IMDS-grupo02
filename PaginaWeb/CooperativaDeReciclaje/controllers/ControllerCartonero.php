<?php

require_once './models/ModelCartonero.php';
require_once './views/ViewCartonero.php';
require_once 'helper.php';

class ControllerCartonero {

    private $viewCartonero;
    private $modelCartonero;
    private $helper;

    function __construct(){
        $this-> viewCartonero = new ViewCartonero();
        $this-> modelCartonero = new ModelCartonero();
        $this->helper = new Helper();
    }

    function viewFormulario(){
        $check=$this->helper-> checkLoggedIn();
        
        if($check == true){
            $this-> viewCartonero-> showFormulario($check);

        }
        else{
            $this-> helper->showLoggin($check);
        }
    }
    
    function viewCartoneros(){
        $check=$this->helper-> checkLoggedIn();
        
        if($check == true){
            $cartonteros = $this-> modelCartonero-> getCartoneros();
            $this-> viewCartonero-> showCartoneros($check, $cartonteros);
        }
        else{
            $this-> helper->showLoggin($check);
        }
    }
}