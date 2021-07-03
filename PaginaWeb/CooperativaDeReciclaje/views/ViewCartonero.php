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
}


