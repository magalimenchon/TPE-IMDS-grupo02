<?php
require_once './smarty/libs/Smarty.class.php';

class ViewCartonero {
    private $smarty;

    function __construct(){
        $this-> smarty= new Smarty();
    }

    function showFormulario($check){
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->assign('logged', $check);

        $this-> smarty->display('templates/formularioCartoneros.tpl');
    }

    //listado cartoneros
    function showCartoneros($check, $cartoneros){
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->assign('logged', $check);
        $this->smarty->assign('cartoneros', $cartoneros);

        $this-> smarty->display('templates/listadoCartoneros.tpl');
    }

    function mostrarEdicionCartonero($cartonero, $logged) {
        $this->smarty->assign('base_url', BASE_URL);

        $this->smarty->assign('cartonero', $cartonero);
        $this->smarty->assign('logged', $logged);

        $this->smarty->display('templates/editarCartonero.tpl');
    }

    function mostrarMensajeEdicion($cartonero, $tipoAlerta, $mensaje, $logged){
        
        $this->smarty->assign('base_url', BASE_URL);

        $this->smarty->assign('cartonero', $cartonero);
        $this->smarty->assign('tipoAlerta', $tipoAlerta);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('logged', $logged);
       
        $this->smarty->display('templates/editarCartonero.tpl');
    }

    function showLocationCartoneros(){
        header("Location: ".BASE_URL."cartoneros");
    }
    function homeLocation(){
        header("Location: ".BASE_URL."home");
    }
}


