<?php

    include_once '../Conecta/conexion.php';

    $conexion = Conexion::obtenerConexion();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $usuario = $_POST["usuario"];
        $pwd = $_POST["pwd"];

        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $sentencia = $conexion-> prepare($sql);
        $sentencia->execute([$usuario]);
        //esta linea seria igual que las anteriores
        //$sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
        //$sentencia = $conexion-> prepare($sql);
        //$sentencia->execute(["usuario"=>$usuario]);

        $usuarioBD = $sentencia->fetch(); //Fila de la base de datos leida.

        if($usuarioBD && password_verify($pwd,$usuarioBD['pwd'])){
            echo "Sesion iniciada correctamente";
        }else{
            echo "Fallo al iniciar sesion";
        }


    }


?>