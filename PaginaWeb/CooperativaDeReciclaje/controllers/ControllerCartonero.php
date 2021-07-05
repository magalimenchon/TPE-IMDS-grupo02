<?php

require_once './models/ModelCartonero.php';
require_once './views/ViewCartonero.php';
require_once 'helper.php';

class ControllerCartonero
{

    private $viewCartonero;
    private $modelCartonero;
    private $helper;

    function __construct()
    {
        $this->viewCartonero = new ViewCartonero();
        $this->modelCartonero = new ModelCartonero();
        $this->helper = new Helper();
    }

    function viewFormulario()
    {
        $check = $this->helper->checkLoggedIn();

        if ($check == true) {
            $this->viewCartonero->showFormulario($check);
        } else {
            $this->helper->showLoggin($check);
        }
    }

    function viewCartoneros()
    {
        $logged = $this->helper->checkLoggedIn();
        if ($logged) {
            $cartoneros = $this->modelCartonero->getCartoneros();
            $this->viewCartonero->showCartoneros($logged, $cartoneros);
        } else {
            $this->viewCartonero->homeLocation();
        }
    }
    function editarCartonero($params = null)
    {
        $logged = $this->helper->checkLoggedIn();
        if ($logged) {
            $id = $params[':ID'];
            $cartonero = $this->modelCartonero->getCartonero($id);
            $this->viewCartonero->mostrarEdicionCartonero($cartonero, $logged);
        } else {
            $this->view->homeLocation();
        }
    }
    function updateCartonero()
    {
        $logged = $this->helper->checkLoggedIn();
        if ($logged) {
            $DNI = $_POST['cartonero_DNI'];
            $cartonero = $this->modelCartonero->getCartonero($DNI);
            $nombre = $_POST['cartonero_nombre'];
            $apellido = $_POST['cartonero_apellido'];
            $direccion = $_POST['cartonero_direccion'];
            $fecha_nacimiento = $_POST['cartonero_fecha_nac'];
            $categoria = $_POST['cartonero_categoria'];
            if (
                isset($nombre) && !empty($nombre) &&
                isset($apellido) && !empty($apellido) &&
                isset($direccion) && !empty($direccion) &&
                isset($fecha_nacimiento) && !empty($fecha_nacimiento) &&
                isset($categoria) && !empty($categoria)
            ) {
                $this->modelCartonero->updateCartonero($DNI,$nombre, $apellido, $direccion, $fecha_nacimiento, $categoria);
                $this->viewCartoneros();
            } else {
                $this->viewCartonero->mostrarMensajeEdicion($cartonero, "danger", "Complete todos los campos.", $logged);
            }
        } else {
            $this->view->homeLocation();
        }
    }
}
