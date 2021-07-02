<?php
require_once 'views/ViewSession.php';

class Helper{
    //VEO SI ESTA LOGGEADO Y ES ADMINISTRADOR
    private $viewSession;

    function __construct(){
        $this->viewSession = new ViewSession();
    }

    public function checkLoggedIn(){
        session_start();
        if(isset($_SESSION['email'])){
            return true;
        }else{
            return false;
        }
    }

    function showLoggin($logged){
        $this->viewSession->mostrarFormularioLogin($logged);
    }
}