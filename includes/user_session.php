<?php

//ambiente de sesiones

class UserSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser( $user   ){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset(); //destruir valores de sesion
        session_destroy(); //destruir sesion
    }


}


?>