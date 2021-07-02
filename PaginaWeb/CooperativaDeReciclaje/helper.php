<?php

class Helper{
    //VEO SI ESTA LOGGEADO Y ES ADMINISTRADOR
    public function checkLoggedIn(){
        session_start();
        if(isset($_SESSION['email'])){
            return true;
        }else{
            return false;
        }
    }
}