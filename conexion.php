<?php
$serv="localhost";
$usuBD="root";
$contraBD="";
$bd="cele_gluten_free";

//funcion para conectarme a la base de datos, devuelve la conexion
function conectar(){

    try{
        global $serv,$usuBD,$contraBD,$bd;
        $conn=mysqli_connect($serv, $usuBD, $contraBD, $bd);
        return $conn;
    }
    catch(Throwable $e){
        echo "Hay un problema<br>";

        echo $e->getMessage();
        $conn = false;

        exit();
    }
    finally{
        return $conn;
    }
    
}