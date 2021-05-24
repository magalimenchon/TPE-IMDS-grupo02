<?php
require_once './models/ModelRetiroMaterial.php';

require_once './views/view.php';

class ControllerRetiroMaterial
{

    private $view;
    private $modelRetiroMaterial;

    function __construct()
    {
        $this->view = new View();
        $this->modelRetiroMaterial = new ModelRetiroMaterial();
    }

}