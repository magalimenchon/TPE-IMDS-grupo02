<?php

require_once './models/ModelRecoleccionMaterial.php';
require_once './views/ViewRecoleccionMaterial.php';

class ControllerRecoleccionMaterial
{

    private $viewRecoleccion;
    private $modelRecoleccion;
    private $modelMaterial;

    function __construct()
    {
        $this->viewRecoleccion = new ViewRecoleccionMaterial();
        $this->modelRecoleccion = new ModelRecoleccionMaterial();
        $this->modelMaterial = new ModelMaterial();
    }

    function viewRecoleccion()
    {
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewRecoleccion->mostrarFormularioRecoleccion($materiales/*, $cartonero*/);
    }

    //alta
    function recoleccion()
    {
        //$cartonero = $_POST['input_recoleccion_nombre_cartonero_fk'];
        $material = $_POST['input_recoleccion_id_especificacion_material_fk'];
        $peso = $_POST['input_recoleccion_peso'];
        $fecha = $_POST['input_recoleccion_fecha'];

        if (
            isset($cartonero) && !empty($cartonero) &&
            isset($material) && !empty($material) &&
            isset($peso) && !empty($peso) &&
            isset($fecha) && !empty($fecha)
        ) {
            $recoleccion = $this->modelRecoleccion->getRecoleccion($cartonero, $material, $peso, $fecha);
            if($recoleccion){
                $materiales = $this->modelMaterial->getMateriales();
                $this->viewRecoleccion->mostrarMensaje($materiales, "danger","Ya ha registrado este retiro.");
            }
            else{
                $this->modelRecoleccion->insertarRecoleccion($cartonero, $material, $peso, $fecha);
                $materiales = $this->modelMaterial->getMateriales();
                $this->viewRecoleccion->mostrarMensaje($materiales, "success","La solicitud ha sido enviada. Recibirá su confirmación vía mail.");
            }
        }
    }
}
