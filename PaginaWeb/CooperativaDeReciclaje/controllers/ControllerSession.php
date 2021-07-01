<?php
require_once './models/ModelUsuario.php';

require_once './views/ViewSession.php';

class ControllerSession
{

    private $viewSession;
    private $modelSession;

    function __construct()
    {
        $this->viewSession = new ViewSession();
        $this->modelSession = new ModelUsuario();
    }

    function viewLogin()
    {
        $this->viewSession->mostrarFormularioLogin();
    }

    function verificarUsuario()
    {
        $email=$_POST['inputEmail'];
        $password=$_POST['inputPassword'];
        if (empty($email) || !isset($email) || empty($password) || !isset($password))
        {
            $this->viewSession->mostrarMensaje("danger", "No se pudo iniciar sesion. Por favor complete todos los campos.");
        }
        else
        {
            $usuarioDB=$this->modelSession->getUsuario($email);
            if(isset($usuarioDB) && $usuarioDB)
            {
                if(password_verify($password, $usuarioDB->password))
                {
                    session_start();
                    $_SESSION["email"] = $usuarioDB->mail_usuario;
                    $_SESSION["password"] = $usuarioDB->password;
                    $this->viewSession->homeLocation();
                }
                else
                {
                    $this->viewSession->mostrarMensaje("danger", "La password ingresada es incorrecta. Por favor intente nuevamente");
                }
            }
            else
            {
                $this->viewSession->mostrarMensaje("danger", "El email ingresado no esta registrado. Por favor intente nuevamente");
            }
        }
    }
}