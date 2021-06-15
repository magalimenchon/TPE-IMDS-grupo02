<?php

require_once './models/ModelRetiroMaterial.php';
require_once './views/ViewRetiroMaterial.php';

require_once './models/ModelSession.php';

class ControllerRetiroMaterial
{

    private $viewRetiro;
    private $modelRetiro;
    private $modelUser;

    function __construct()
    {
        $this->viewRetiro = new ViewRetiroMaterial();
        $this->modelRetiro = new ModelRetiroMaterial();
        $this->modelUser = new ModelSession();
    }

    function viewRetiro()
    {
        $this->viewRetiro->mostrarFormularioRetiro();
    }

    function viewListaRetiros()
    {
        $pedidos=$this->modelRetiro->getPedidosRetiro();
        $this->viewRetiro->mostrarListadoPedidosRetiro($pedidos);
    }

    //alta
    function retiro()
    {
        $nombre = $_POST['input_retiro_nombre_fk'];
        $apellido = $_POST['input_retiro_apellido_fk'];
        $direccion = $_POST['input_retiro_direccion_fk'];
        $telefono = $_POST['input_retiro_telefono_fk'];
        $categoria = $_POST['input_retiro_categoria'];
        $franja_horaria = $_POST['input_franja_horaria'];
        $tmp_imagen = $_FILES['imageToUpload']['tmp_name'];
     
        if (
            isset($nombre) && !empty($nombre) &&
            isset($apellido) && !empty($apellido) &&
            isset($direccion) && !empty($direccion) &&
            isset($telefono) && !empty($telefono) &&
            isset($categoria) && !empty($categoria) &&
            isset($franja_horaria) && !empty($franja_horaria)
        ) {
            //separo la franja horaria
            $horario = explode("-", $franja_horaria);
            $inicioHorario = $horario[0];
            $finHorario = $horario[1];
           
            //obtengo usuario
            $usuario = $this->modelUser->getIdUser($nombre, $apellido, $direccion);
            if ($usuario) { //si existe el user
                //traer solicitud
                $solicitud = $this->modelRetiro->getIdSolicitud($categoria, $inicioHorario, $finHorario, $usuario->id_usuario);
                if ($solicitud) { //si existe solicitud
                    $this->viewRetiro->mostrarMensaje("danger","Ya ha solicitado el retiro.");
                } else {   //si no existe solicitud en la base de datos
                    $this->insertarRetiro($categoria, $inicioHorario, $finHorario, $usuario->id_usuario, $tmp_imagen);
                    $this->viewRetiro->mostrarMensaje("success","La solicitud ha sido enviada. Recibirá su confirmación vía mail.");
                }
            } else {
                $usuario = $this->modelUser->insertUsuario($nombre, $apellido, $telefono, $direccion);
                $this->insertarRetiro($categoria, $inicioHorario, $finHorario, $usuario, $tmp_imagen);
                $this->viewRetiro->mostrarMensaje("success","La solicitud ha sido enviada. Recibirá su confirmación vía mail.");
            }
        } else  $this->viewRetiro->mostrarMensaje("danger","Complete todos los campos.");
    }

    //Insertar retiro con/sin imagen
    private function insertarRetiro($categoria, $inicioHorario, $finHorario, $usuario, $tmp_imagen)
    {

        if (empty($tmp_imagen)) { //si no hay imagen
            $this->modelRetiro->insertRetiro($categoria, $inicioHorario, $finHorario, $usuario);
        } else {   //si hay imagen
            
            if ($this->formatoImagenValido($_FILES['imageToUpload']['type'])) { //checkeo que el formato sea válido
                $this->modelRetiro->insertRetiro($categoria, $inicioHorario, $finHorario, $usuario, $tmp_imagen);
            }
            else{
                $this->viewRetiro->mostrarMensaje("danger","Ingrese una imágen con formato jpg o jpeg o png.");
            }
        }
    }

    //Alta -> Checkea si la imagen es del tipo correspondiente
    private function formatoImagenValido($tipoImagen)
    {
        if($tipoImagen == "image/jpg" || $tipoImagen == "image/jpeg" || $tipoImagen == "image/png" ) {
            return true;
        }
        else return false;
    }

    
}
