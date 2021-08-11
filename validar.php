<?php

require_once('usuarios.php');
    $usuarios1 = new usuarios();
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $usuarios1 -> validar($email, $pass);
    if ($_REQUEST['cerrar']) {
        $usuarios1 ->cerrarsesion();
    }
?>