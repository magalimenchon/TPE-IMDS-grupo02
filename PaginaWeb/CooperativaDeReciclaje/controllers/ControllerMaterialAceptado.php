<?php
require_once './models/ModelMaterial.php';
require_once './views/ViewMaterialAceptado.php';

class ControllerMaterialAceptado
{

    private $viewMaterialAceptado;
    private $modelMaterialAceptado;

    function __construct()
    {
        $this->viewMaterialAceptado = new ViewMaterialAceptado();
        $this->modelMaterialAceptado = new modelMaterial();
    }

    function viewMaterialesAceptados()
    {
        $materiales = $this->modelMaterialAceptado->getMateriales();
        $this->viewMaterialAceptado->mostrarMaterialesAceptados($materiales);
    }
    function insertMaterialAceptado()
    {
        $materiales = $this->modelMaterialAceptado->getMateriales();
        $nombre = $_POST['input_material_aceptado_nombre_fk'];
        $detalle = $_POST['input_material_aceptado_detalle_fk'];
        if (
            isset($nombre) && !empty($nombre) &&
            isset($detalle) && !empty($detalle)
        ) {
            $this->modelMaterialAceptado->insertMaterial($nombre, $detalle);
            $this->viewMaterialesAceptados();
        } else  $this->viewMaterialAceptado->mostrarMensaje($materiales,"danger", "Complete todos los campos.");
    }
    function deleteMaterialAceptado($params = null){
        $id_material = $params[":ID"];
        $this->modelMaterialAceptado->deleteMaterial($id_material);
        $this->viewMaterialesAceptados();
    }
    function updateMaterialAceptado(){
        $id = $_POST['material_id'];
        $nombre = $_POST['material_nombre'];
        $detalle = $_POST['material_detalle'];
        $this->modelMaterialAceptado->updateMaterial($id,$nombre, $detalle);
        $this->viewMaterialesAceptados();
    }
}
