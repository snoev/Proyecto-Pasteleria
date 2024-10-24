<?php
$usuario=$_POST['usuario'];
$contra=$_POST['pass'];

//echo "Usuario: $usuario, contra= $contra";

require "conexion.php";
$con=conectar();
$sql="select * from usuarios where email='$usuario';";
$res=mysqli_query($con, $sql);//ejecuto la consulta y guardo el resultado en $res
if(mysqli_affected_rows($con)>0){ //me fijo si hubo filas afectadas
    $registro=mysqli_fetch_assoc($res);//genero un array asociativo donde los indices son los nombres de los campos
    //var_dump($registro);
    if($contra== $registro['contra']){
        //echo "Iniciar sesion";
        session_start();//inicia o continua una sesión
        $_SESSION['nombre']=$registro['nombre']." ".$registro['apellido'];
        $_SESSION['id']=$registro['idUsuario'];
        $_SESSION['rol']=$registro['rol'];
        switch($registro['rol']){
            case 1:
                //echo "es un admin";
                header("location: administradores/control_panel.php");
                break;
            case 2:
                //echo "es un miembro";
                header("location: usuarios/index_usuario.php");
                break;
            case 3:
                //echo "es un cliente";
                header("location: usuarios/index_usuario.php");
                break;
            default:
                echo "ROL NO DEFINIDO";
                break;
        }

    }else{
        //echo "La contraseña es incorrecta";
        header("location: index.php?badPass");
    }
}else{
    //echo "No se encontro el usuario $usuario";
    header("location: index.php?noUsu=$usuario");
}

?>