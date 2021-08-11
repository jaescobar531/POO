<?php

require_once('Connect.php');
session_start();
class usuarios{
    public $connect;
    public $email;
    public $password;
    

    public function validar($email, $password){
        $conexion = new Connect();
        $connect = $conexion->init();

        $query = $connect->prepare("SELECT * FROM user
        WHERE email = :email AND password = :password");
        $query->bindParam(":email",$email);
        $query->bindParam(":password",$password);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);//devuelve en array lo que tenemos en la bd
        print_r($usuario);

        if ($usuario) {
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['nombre'] = $usuario['nombre'];
            header("location: pagina.php");
        }else {
            $error = "usuario o contraseña incorrectos";
            header("location: login.php?error=$error");
        }


    }

    public function cerrarsesion(){
        session_unset();
        session_destroy();
        header("location: login.php");
    }
}

?>