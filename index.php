<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if ( isset($_SESSION['user']) ) {
    // echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';
}elseif ( isset($_POST['username']) && isset($_POST['password']) ) {
    // echo "validacon de login";

    $userForm = $_POST['username'];
    $passwordForm = $_POST['password'];

    if ( $user->userExists($userForm, $passwordForm) ) {
        // echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'vistas/home.php';
    }else {
        // echo "Nombre de usuario y/o contraseña incorrectos";
        $errorLogin = "Nombre de usuario y/o contraseña incorrecto";
        include_once 'vistas/login.php';
    }
}else {
    // echo "login";
    include_once 'vistas/login.php';
}

?>